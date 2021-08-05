<?php

use Stonks\Router\Router;

require "vendor/autoload.php";

$router = new Router(BASE_PATH);

/**
 *  Goat 
 */

$router->namespace("Source\Controllers\Goat");
$router->group(null);

/* ---------- VIEW ------------*/ 

$router->get("/", "Web:home",  "goat.web.home");
$router->get("/informations", "Web:informations", "goat.web.informations");
$router->get("/downloads", "Web:downloads", "goat.web.downloads");
$router->get("/register", "Web:register", "goat.web.register");
$router->get("/statistics", "Web:statistics", "goat.web.statistics");
$router->get("/donate", "Web:donate", "goat.web.donate");
$router->get("/debug", "Web:debug", "goat.web.debug");

$router->get("/exit", "Web:exit", "goat.web.exit");
$router->get("/recoverPassword", "Web:recoverPassword", "goat.web.recoverPassword");

/* ----------REQUESTS ------------*/                        

$router->post("/login", "Request:login", "goat.request.login");
$router->post("/register", "Request:register", "goat.request.register");
$router->post("/trocarSenha", "Request:trocarSenha", "goat.request.trocarSenha");
$router->post("/salvar", "Web:salvar", "web.salvar");
$router->post("/recoverPassword", "Request:recoverPassword", "goat.request.recoverPassword");

/*------ Statistics ----- */

$router->post("/bigBossStatus", "Request:bigBossStatus", "goat.request.bigBossStatus");
$router->post("/raidBossStatus", "Request:raidBossStatus", "goat.request.raidBossStatus");
$router->post("/topPvp", "Request:topPvp", "goat.request.topPvp");
$router->post("/topPk", "Request:topPk", "goat.request.topPk");
$router->post("/topClan", "Request:topClan", "goat.request.topClan");
$router->post("/heroes", "Request:heroes", "goat.request.heroes");
$router->post("/buscarNomePorId", "Request:buscarNomePorId", "goat.request.buscarNomePorId");

/**
 *   Admin 
 */

$router->namespace("Source\Controllers\Admin");
$router->group('admin');

/* ----------VIEWS ADMIN------------*/ 

$router->get("/", "Web:userPanel", "admin.web.userPanel");
$router->get("/exit", "Web:exit", "admin.web.exit");

/* ----------REQUESTS ADMIN------------*/    

$router->post("/infoChar", "Request:infoChar", "admin.request.infoChar");
$router->post("/infoConta", "Request:infoConta", "admin.request.infoConta");
$router->post("/buscarNomeSubclasse", "Request:buscarNomeSubclasse", "admin.request.buscarNomeSubclasse");
$router->post("/buscarNomeClasse", "Request:buscarNomeClasse", "admin.request.buscarNomeClasse");
$router->post("/buscarNomeChar", "Request:buscarNomeChar", "admin.request.buscarNomeChar");
$router->post("/trocarSenha", "Request:trocarSenha", "admin.request.trocarSenha");

$router->dispatch();

if ($router->error()) {
    echo $router->error();
}
