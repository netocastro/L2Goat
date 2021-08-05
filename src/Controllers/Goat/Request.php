<?php

namespace Source\Controllers\Goat;

use Source\Models\L2jgs\Characters;
use Source\Models\L2jgs\IdNomeItensCustom;
use Source\Models\L2jgs\ItemIcons;
use Source\Models\L2jgs\Itens;
use Source\Models\L2jls\Accounts;
use Source\Models\L2jls\ContasSite;
use Source\Models\Email;

class Request
{
    public $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function login($data)
    {
        $findEmptyFields =  array_keys($data, '');

        if ($findEmptyFields) {
            echo json_encode(['emptyFields' => $findEmptyFields]);
            return;
        }

        $data = filter_var_array($data, [
            "login" => FILTER_SANITIZE_STRIPPED,
            "password" => FILTER_SANITIZE_STRIPPED
        ]);

        $validateFields = [];

        $password = base64_encode(pack('H*', sha1(utf8_encode(trim($data['password'])))));
        $account = (new Accounts())->find('login = :login', "login=" . $data['login'])->fetch();

        /** verificando se informações estão corretas */
        if (!$account || $account->password != $password) {
            $validateFields['password'] = 'invalid informations';
        }

        if ($validateFields) {
            echo json_encode(['validateFields' => $validateFields]);
            return;
        }

        $_SESSION['login'] = $data['login'];
        echo json_encode('success');
    }

    public function register($data)
    {
         //$loginserver = @fsockopen('127.0.0.1', 2106, $errno, $errstr, 2);
        //$gameserver = @fsockopen('localhost', 7777, $errno2, $errstr2, 2);

        /** verificando campos vazios */
        $findEmptyFields =  array_keys($data, '');

        if ($findEmptyFields) {
            echo json_encode(['emptyFields' => $findEmptyFields]);
            return;
        }

        $data = filter_var_array($data, [
            "login-register" => FILTER_SANITIZE_STRIPPED,
            "password-register" => FILTER_SANITIZE_STRIPPED,
            "repeat_password" => FILTER_SANITIZE_STRIPPED,
            "email" => FILTER_SANITIZE_EMAIL
        ]);

        $password = base64_encode(pack('H*', sha1(utf8_encode(trim($data['password-register'])))));

        $validateFields = [];

        /** verificando se o email é válido */
        if (!validateEmail($data['email'])) {
            $validateFields['email'] = 'Formato de email inválido';
        }

        /** verificando se há espaços em branco */
        if (strstr($data['login-register'], ' ')) {
            $validateFields['login-register'] = 'Sem espaços em branco';
        }

        /** verificando se senhas Coincidem */
        if ($data['password-register'] != $data['repeat_password']) {
            $validateFields['repeat_password'] = "Senhas não conferem";
        }

        /** verificando se Email existe */
        if ((new ContasSite())->find('email = :e', "e={$data['email']}")->fetch()) {
            $validateFields['email'] = 'Email ja cadastrado';
        }

        /** verificando se Login existe */
        if ((new Accounts())->find('login = :login', "login={$data['login-register']}")->fetch()) {
            $validateFields['login-register'] = 'Login já registrado';
        }

        if ($validateFields) {
            echo json_encode(['validateFields' => $validateFields]);
            return;
        }

        $salvarContaSite = new ContasSite();
        $salvarAccount = new Accounts();

        $salvarAccount->password =  $password;
        $salvarAccount->login = strtolower($data['login-register']);

        $salvarAccount->save();

        if ($salvarAccount->fail()) {
            echo json_encode("Accounts: " . $salvarAccount->fail()->getMessage());
            return;
        }

        $salvarContaSite->email = $data['email'];
        $salvarContaSite->senha = $password;
        $salvarContaSite->login_site = strtolower($data['login-register']);

        $salvarContaSite->save();

        if ($salvarContaSite->fail()) {
            echo json_encode("ContasSite: " . $salvarContaSite->fail()->getMessage());
            return;
        }
        echo json_encode(['success' => 'Registrado com sucesso']);
    }

    public function buscarNomeChar($data)
    {
        $nomeChar = (new Characters)->find("account_name = :account_name", "account_name=" . $_SESSION['login'])->fetch(true);
        $nomeChar2 = objectToArray($nomeChar);
        echo json_encode($nomeChar2);
    }

    public function buscarBag($data)
    {
        $charInfo = (new Characters())->find('charId = :charId', 'charId=' . $data['charId'])->fetch();
        $charInfo = objectToArray($charInfo);

        $itensChar = (new Itens())->find('owner_id = :charId', 'charId=' . $data['charId'])->fetch(true);
        $itensChar = objectToArray($itensChar);

        $itensIcons = (new ItemIcons())->find()->fetch(true);
        $itensIcons = objectToArray($itensIcons);

        $nomeItens = (new IdNomeItensCustom())->find()->fetch(true);
        $nomeItens = objectToArray($nomeItens);

        $img_itens = array();
        $array_completo = array();

        foreach ($itensChar as $key1 => $value1) {
            foreach ($nomeItens as $key2 => $value2) {
                if ($value1['item_id'] == $value2['item_id']) {
                    foreach ($itensIcons as $key3 => $value3) {
                        if ($value2['item_id'] == $value3['item_id']) {
                            array_push($array_completo, array('icon' => $value3['icon'], 'item_name' => $value2['item_name'], 'loc' => $value1['loc'], 'object_id' => $value1['object_id'], 'item_id' => $value2['item_id'], 'enchant_level' => $value1['enchant_level'], 'quantidade' => $value1['count']));
                        }
                    }
                    break;
                }
            }
        }

        $array_total = array();
        array_push($array_total, $array_completo, $charInfo);
        print_r(json_encode($array_total));
    }

    public function infoConta($data)
    {
        $infoConta = (new ContasSite())->find('login_site = :login', 'login=' . $data['login'])->fetch();
        $infoConta = objectToArray($infoConta);
        echo json_encode($infoConta);
    }

    public function trocarSenha($data)
    {

        $error = [];

        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

        $password = base64_encode(pack('H*', sha1(utf8_encode(trim($data['senhaAntiga'])))));

        $findEmptyFields =  array_keys($data, '');

        if ($findEmptyFields) {
            echo json_encode(['emptyFields' => $findEmptyFields]);
            return;
        }

        if ($data['novaSenha'] != $data['repitaNovaSenha']){
            $error['senhasNaoConferem'] = true;
            echo json_encode($error);
            return;
        }

        $contas = (new Accounts())->find('login = :login', "login=" . $data['login'])->fetch();
        $teste = $data['senhaAntiga'];

        if ($contas && $password == $contas->password) {
            $contas->password = base64_encode(pack('H*', sha1(utf8_encode(trim($data['novaSenha'])))));
            $contas->change()->save();
            echo json_encode([]);
        } else {
            $error['senhaAntigaErrada'] = true;
            echo json_encode($error);
        }
    }

    public function recoverPassword($data)
    {

        $findEmptyFields =  array_keys($data, '');

        if ($findEmptyFields) {
            echo json_encode(['emptyFields' => $findEmptyFields]);
            return;
        }

        $emailExist = (new ContasSite())->find('email = :email', 'email=' . $data['email'])->fetch();

        $validateFields = [];

        if (!validateEmail($data['email'])) {
            $validateFields['email'] = 'Formato de email inválido';
        }

        if (!$emailExist) {
            $validateFields['email'] = 'Email não cadastrado';
        }

        if ($validateFields) {
            echo json_encode(['validateFields' => $validateFields]);
            return;
        }

        $newPassword = substr(md5(md5(rand(100, 100000))), 0, 6);

        $emailExist->senha = base64_encode(pack('H*', sha1(utf8_encode($newPassword))));
        $emailExist->change()->save();

        if ($emailExist->fail()) {
            echo json_encode("ContasSite: " . $emailExist->fail()->getMessage());
            return;
        }

        $account = (new Accounts())->find('login = :login', 'login=' . $emailExist->login_site)->fetch();
        $account->password = base64_encode(pack('H*', sha1(utf8_encode($newPassword))));

        $account->change()->save();

        if ($account->fail()) {
            echo json_encode("Accounts: " . $account->fail()->getMessage());
            return;
        }

        $email = new Email();

        $email->add(
            "Recovering l2 goat password",
            email($newPassword),
            "",
            trim($data['email'])
        )->send();

        if (!$email->error()) {
            print_r(json_encode('success'));
            return;
        } else {
            echo json_encode(["email" => $email->error()->getMessage()]);
            return;
        }
    }
}
