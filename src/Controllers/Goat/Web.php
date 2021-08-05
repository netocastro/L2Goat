<?php

namespace Source\Controllers\Goat;

use League\Plates\Engine;
use Source\Models\L2jgs\Characters;
use Source\Models\L2jgs\Itens;
use Source\Models\L2jgs\ClanData;
use Source\Models\L2jgs\GrandBossData;
use Source\Models\L2jgs\Heroes;
use Source\Models\L2jgs\Npc;
use Source\Models\L2jgs\RaidBossSpawList;

class Web
{
    public $router;
    public $view;

    public function __construct($router)
    {
        $this->view = Engine::create(dirname(__DIR__, 3) . "/themes/theme1/goat", "php");
        $this->view->addData(["router" => $router]);
        $this->view->addData(["loginServer" =>  @fsockopen('127.0.0.1', 2106, $errno, $errstr, 2)]);
        $this->view->addData(["gameServer" =>  @fsockopen('127.0.0.1', 7777, $errno, $errstr, 2)]);
        $this->view->addData(["online" => (new Characters())->find("online = :online", "online=1")->count()]);
    }

    public function home()
    {
        echo $this->view->render('home', [
            "title" => "Home | L2 GOAT"
        ]);
    }

    public function informations()
    {
        echo $this->view->render('informations', [
            "title" => "Informations | L2 GOAT "
        ]);
    }

    public function downloads()
    {
        echo $this->view->render('downloads', [
            "title" => "Downloads | L2 GOAT "
        ]);
    }

    public function register()
    {
        echo $this->view->render('register', [
            "title" => " Register | L2 GOAT"
        ]);
    }

    public function statistics()
    {
        $bigBoss = (new GrandBossData())->find()->fetch(true);
        $raidBoss = (new RaidBossSpawList())->find()->fetch(true);
        $topPvp = (new Characters())->find()->order('pvpkills DESC')->limit(50)->fetch(true);
        $topPk = (new Characters())->find()->order('pkkills DESC')->limit(50)->fetch(true);
        $topClan = (new ClanData())->find()->order('clan_level DESC')->limit(10)->fetch(true);
        $heroes = (new Heroes())->find()->fetch(true);
        $npc = (new Npc())->find()->fetch(true);

        echo $this->view->render('statistics', [
            "title" => "Statistics | L2 GOAT",
            "bigBoss" => $bigBoss,
            "raidBoss" => $raidBoss,
            "topPvp" => $topPvp,
            "topPk" => $topPk,
            "topClan" => $topClan,
            "heroes" => $heroes,
            "npc" => $npc
        ]);
    }

    public function donate()
    {
        echo $this->view->render('donate', [
            "title" => "Donate | L2 GOAT"
        ]);
    }

    public function debug()
    {
        $itemsChar = (new Itens())->find('owner_id = :charId', 'charId=268484128')->fetch(true);
        echo $this->view->render('debug', [
            "title" => "Debug | L2 GOAT",
            "router" => $this->router,
            "itemsChar" => $itemsChar
        ]);
        echo json_encode('oi');
    }

    public function recoverPassword($data)
    {
        echo $this->view->render('recoverPassword', [
            "title" => "Recover Password | L2 GOAT"
        ]);
    }
}
