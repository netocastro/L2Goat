<?php

function debug($variable)
{
    echo "<pre>";
    print_r($variable);
    echo "</pre>";
}

/**
 * função que gera uma url absoluta apartir de uma uri
 */

function url($uri = null)
{

    if ($uri) {
        return BASE_PATH . "/{$uri}";
    }
    return BASE_PATH;
}

/**
 * função de validação de nomes com expressões regulares
 */

function validateName($name): bool
{

    if (preg_match('/^[a-zA-Z ]+$/', $name)) {
        return true;
    } else {
        return false;
    }
}

/**
 * função de validação de dinheiro com expressões regulares
 */

function validateMoney($money): bool
{

    if (preg_match('/^[0-9]+\,[0-9]{2}$/', $money)) {
        return true;
    } else {
        return false;
    }
}

/**
 * função de validação de cpf com expressões regulares
 */

function validateCpf($cpf): bool
{

    if (preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/', $cpf)) {
        return true;
    } else {
        return false;
    }
}

/**
 * função de validação de email
 */

function validateEmail($email): bool
{

    if (preg_match('/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/', $email)) {
        return true;
    } else {
        return false;
    }
}

/**
 * função de validação de  Phone com expressões regulares
 */

function validatePhone($phone): bool
{

    if (preg_match('/^\([0-9]{2}\)[0-9]{4}\-[0-9]{4}$/', $phone)) {
        return true;
    } else {
        return false;
    }
}

/**
 * função de validação de  Cell Phone com expressões regulares
 */

function validateCellPhone($cellPhone): bool
{

    if (preg_match('/^\([0-9]{2}\)[9][0-9]{4}\-[0-9]{4}$/', $cellPhone)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Transforma objetos do tipo DataLayer em arrays
 */

function objectToArray($object): array
{

    $teste = [];
    if ($object == null) {
        return (array)$teste;
    }

    if (is_array($object)) {

        foreach ($object as $item => $value) {
            $teste[] = (array)$value->data();
        }
        return  (array) $teste;
    } else {
        $teste = [];
        $teste[] = (array)$object->data();
        return (array)$teste;
    }
}

/**
 * função que verifica se valores existem dentro de um objeto DataLayer
 */

function objectsExist($model, array $data, array $filter): array
{

    $arrayFilter = [];
    $error = [];
    $response = [];

    /**
     * condição para verificar se o array $filter foi passado vazio
     */

    if (empty($filter)) {
        $error['filter'] = 'filter empty';
        return $error;
    }

    /**
     * verificar se o valores do array $filter existem no array data
     */

    foreach ($filter as $key1) {
        $cont = 0;
        foreach ($data as $key2 => $value) {
            if ($key1 == $key2) {
                $arrayFilter[$key1] = $value;
                $cont = 1;
            }
        }

        /**
         * retornando valores do array $filter que não existem no array $data
         */

        if ($cont == 0) {
            $error[] = $key1;
        }
    }

    /**
     * retornando o erro com os nomes dos indices do array filter
     * que não estãono array data
     */

    if (!empty($error)) {
        return ["indiceNaoExiste" => $error];
    }

    /**
     * Consultando o banco de dados com os names filtrados e retornando o resultado caso
     * exista registro
     */

    foreach ($arrayFilter as $key => $value) {

        if ($model->find("{$key} = :{$key}", "{$key}=" . $data[$key])->fetch()) {
            $response[] = $key;
        }
    }

    if ($response) {
        return $response;
    } else {
        return [];
    }
}

/**
 * função que verifica se valores existem dentro de um objeto DataLayer DEBUG
 */

function objectsExistEcho($model, array $data, array $filter)
{
    $arrayFilter = [];
    $error = [];

    if (empty($filter)) {
        $error['filter'] = 'filter empty';
        print_r($error);
        return;
    }
    foreach ($filter as $key1) {
        $cont = 0;
        foreach ($data as $key2 => $value) {
            if ($key1 == $key2) {
                $arrayFilter[$key1] = $value;
                $cont = 1;
            }
        }
        if ($cont == 0) {
            $error[] = $key1;
        }
    }
    if (!empty($error)) {
        print_r(["indiceNaoExiste" => $error]);
        return;
    }
    //print_r(['arrayFilter' =>$arrayFilter]);
    print_r($arrayFilter);

    $response = [];

    foreach ($arrayFilter as $key => $value) {
        echo "<h1>$key</h1>";
        echo "<pre>";
        //print_r($model->find("$key = :$key", "$key=" . $data[$key])->fetch()->data());
        ($model->find("$key = :$key", "$key=" . $data[$key])->fetch()) ? $response[] = $key : '';


        echo "</pre>";
    }
    print_r($response);
}

function valueReceiveAccountToday($model, $contaAtual, $id_app, $date_register)
{

    $appsAccounts = $model->find("id_app = :id_app", "id_app={$id_app}")->limit(6)->fetch(true);
    $week = new DateTime($date_register);

    if ($week->format('w') == 1) {
        return $contaAtual;
    }

    if ($appsAccounts) {
        foreach ($appsAccounts as $appAccount) {
            if ((new DateTime($appAccount->date()))->format('W') == $week->format('W')) {
                $contaAtual -= $appAccount->money;
            }
        }
    }
    return $contaAtual;
}

function email($newPassword)
{
    return "<!DOCTYPE html>
    <html>
    <head>
    
        <style type='text/css'>
            .fundo{
                background-color: black;
            }
            .center{
                display: flex;
                justify-content: center;
                font-size: 30px;
                color: white;
    
            }
            .password{
                color: blue;
            }
        </style>
    </head>
    <body>
    
        <div class='fundo'>
            <div>
                <center><img src='http://l2goat.baudafulo.com/cdn/assets/media/images/logos/logo-freya1.png'></center>
                
            </div>
            <div class='center'>
                <h5>Your new password is : <span class='password'>{$newPassword}</span></h5>
            </div>
        </div>
    
    
    </body>
    </html>";
}

function statusBoss($respawnTime)
{
    if ($respawnTime == 0) {
        return '<h6 class="badge badge-success">Alive</h6>';
    }

    return '<h6 class="badge badge-danger">Dead</h6>';
}

/**
 * 1000 milissgundos = 1 segundo
 * 60000 milisegundos = 1 minuto
 * 1800000 milisegundos = 30 minutos
 * 3600000 milisegundos = 1 hora
 * 86400000 milisegundos = 1 dia
 * 10800000 milisegundos = 3 horas
 * 21600000 milisegundos = 6 horas
 * 32400000 milisegundos = 9 horas
 * 1628147842034 respaw do boss de ketra( em milisegundos )
 * 86400000
 */

//  

function respawnTime($respawnTime)
{
    if ($respawnTime == 0) {
        return '-';
    }
 
    return date("d-m-Y H:i:s", floor($respawnTime / 1000) );
}
