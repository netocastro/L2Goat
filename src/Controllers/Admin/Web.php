<?php

namespace Source\Controllers\Admin;

use League\Plates\Engine;
use Source\Models\L2jgs\Characters;
use Source\Models\L2jgs\ClassList;
use Source\Models\L2jgs\Itens;
use Source\Models\L2jls\Accounts;
use Source\Models\L2jls\ContasSite;

//use Source\Models\L2jls\ContasSite;

class Web
{
    public $router;
    public $view;

    public function __construct($router)
    {
        $this->view = Engine::create(dirname(__DIR__, 3) . "/themes/theme1/userPanel", "php");
        $this->router = $router;
        $this->view->addData(["router" => $router]);
    }

    public function userPanel()
    {
        $chars = (new Characters())->find("account_name = :account_name", "account_name=" . $_SESSION['login'])->fetch(true);
        $accountInfo = (new ContasSite())->find('login_site = :login_site', 'login_site=' . $_SESSION['login'])->fetch();

        echo $this->view->render('userPanel', [
            "title" => "User Panel | L2 GOAT ",
            "chars" => $chars,
            "accountInfo" => $accountInfo
        ]);
    }

    public function exit()
    {
        unset($_SESSION['login']);
        $this->router->redirect('goat.web.home');
    }
}
