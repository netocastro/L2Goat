<?php

namespace Source\Controllers\Admin;

use CoffeeCode\Router\Router;
use Source\Models\L2jgs\Characters;
use Source\Models\L2jgs\IdNomeItensCustom;
use Source\Models\L2jgs\ItemIcons;
use Source\Models\L2jgs\Itens;
use Source\Models\L2jls\Accounts;
use Source\Models\L2jls\ContasSite;
use Source\Controllers\Email;
use Source\Models\L2jgs\CharacterSubclasses;
use Source\Models\L2jgs\ClassList;

class Request
{
    public $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function infoChar($data)
    {
        $charInfo = (new Characters())->find('charId = :charId', 'charId=' . $data['charId'])->fetch();
        $charInfo = objectToArray($charInfo);

        $itemsChar = (new Itens())->find('owner_id = :charId', 'charId=' . $data['charId'])->fetch(true);

        $final_array = array();
        $characterItems = [];

        foreach ($itemsChar as $key => $itemChar) {
            $characterItems[$key]['icon'] = ($itemChar->itemIcon() ? str_replace('icon.', '', $itemChar->itemIcon()->icon) : '-');
            $characterItems[$key]['item_name'] = ($itemChar->itemName() ? $itemChar->itemName()->item_name : '-');
            $characterItems[$key]['loc'] = $itemChar->loc;
            $characterItems[$key]['object_id'] = $itemChar->object_id;
            $characterItems[$key]['enchant_level'] = $itemChar->enchant_level;
            $characterItems[$key]['count'] = $itemChar->data()->count;
        }

        array_push($final_array, $characterItems, $charInfo);
        echo json_encode($final_array);
    }

    public function trocarSenha($data)
    {
        //echo json_encode($data); exit;

        $findEmptyFields =  array_keys($data, '');

        if ($findEmptyFields) {
            echo json_encode(['emptyFields' => $findEmptyFields]);
            return;
        }

        $data = filter_var_array($data, [
            "senhaAntiga" => FILTER_SANITIZE_STRING,
            "novaSenha" => FILTER_SANITIZE_STRING,
            "repitaNovaSenha" => FILTER_SANITIZE_STRING,
            "login" => FILTER_SANITIZE_STRING
        ]);

        $validateFields = [];

        $account  = (new Accounts())->find('login = :login', "login=" . $data['login'])->fetch();
        $password = md5(trim($data['senhaAntiga']));

        if ($account->password != $password) {
            $validateFields['senhaAntiga'] = 'senha antiga invalida';
        }

        if ($data['novaSenha'] != $data['repitaNovaSenha']) {
            $validateFields['repitaNovaSenha'] = 'senhas não conferem';
        }

        if ($password == md5(trim($data['novaSenha']))) {
            $validateFields['repitaNovaSenha'] = 'Nova senha não pode ser igual a senha antiga';
        }

        if ($validateFields) {
            echo json_encode(['validateFields' => $validateFields]);
            return;
        }

        $account->password = md5(trim($data['novaSenha']));
        $account->change()->save();

        if ($account->fail()) {
            echo json_encode("Accounts: " . $account->fail()->getMessage());
            return;
        }

        echo json_encode(['success' => 'Senha alterada com sucesso!']);

    }

    public function buscarNomeClasse($data)
    {
        $classList = (new ClassList())->find()->fetch(true);
        $classList = objectToArray($classList);

        foreach ($classList as $key) {

            if ($data['id_base_class'] == $key['id']) {
                $nome = explode('_', $key['class_name']);
                echo json_encode($nome[1]);
                return;
            }
        }
    }

    public function buscarNomeSubclasse($data)
    {
        $characterSubclasse = (new CharacterSubclasses())->find()->fetch(true);
        $characterSubclasse = objectToArray($characterSubclasse);
        $subs = array();

        foreach ($characterSubclasse as $key) {

            if ($data['charId'] == $key['charId']) {
                array_push($subs, $key['class_id']);
            }
        }

        echo json_encode($subs);
    }
}
