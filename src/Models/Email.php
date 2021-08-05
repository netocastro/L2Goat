<?php


namespace Source\Models;

use Exception;
use stdClass;
use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    /** @var $var PHPMailer */
    private $mail;

    /** @var stdClass */
    private $data;

    /** @var Exception */
    private $error;

    /**
     * 
        $mail = new PHPMailer\PHPMailer\PHPMailer()-;
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "servidor.hostgator.com.br";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "origem@dominio.com.br";
        $mail->Password = "insira a senha aqui";
        $mail->SetFrom("origem@dominio.com.br");
        $mail->Subject = "Assunto da mensagem";
        $mail->Body = "Escreva o texto do email aqui";
        $mail->AddAddress("destino@dominio.com.br");
            if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
            echo "Mensagem enviada com sucesso";
            }
     */

    public function __construct()
    {

        $this->mail = new PHPMailer(true);
        $this->data = new stdClass();

        //$this->mail->isSMTP();
        $this->mail->isHTML();
        $this->mail->setLanguage('br');

        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = "tls";
        $this->mail->CharSet = "utf-8";

        $this->mail->Host = MAIL['host'];
        $this->mail->Port = MAIL['port'];
        $this->mail->Username = MAIL['user'];
        $this->mail->Password = MAIL['passwd'];
    }

    public function add(string $subject, string $body, string $recipient_name, string $recipient_email): Email
    {
        $this->data->subject = $subject;
        $this->data->body = $body;
        $this->data->recipient_name = $recipient_name;
        $this->data->recipient_email = $recipient_email;
        return $this;
    }

    public function attach(string $filePath, string $fileName): Email
    {
        $this->data->attach[$filePath] = $fileName;
    }

    public function send(string $from_name = MAIL['from_name'], string $from_email = MAIL['from_email']): bool
    {
        try {
            $this->mail->Subject = $this->data->subject;
            $this->mail->msgHTML($this->data->body);
            $this->mail->addAddress($this->data->recipient_email, $this->data->recipient_name);
            $this->mail->setFrom($from_email, $from_name);

            if (!empty($this->data->attach)) {
                foreach ($this->data->attach as $path => $name) {
                    $this->mail->addAttachment($path, $name);
                }
            }
            $this->mail->send();

            return true;
        } catch (Exception $exception) {
            $this->error = $exception;
            return false;
        }
    }

    public function error(): ?Exception
    {
        return $this->error;
    }
}
