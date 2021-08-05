<?php $v->layout('_templatePainel'); ?>

<?php

$login = ($_SESSION['login']) ? $_SESSION['login'] : '';

if (!empty($login)) {

?>
    <!-- menu -->
    <div class="nav-side-menu">
        <div class="brand">L2 GOAT</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">

                <li data-toggle="collapse" data-target="#perfil" class="collapsed">
                    <a href="#"><i class="fa fa-user sidebar-icon"></i> Perfil <span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                </li>
                <ul class="sub-menu collapse" id="perfil">
                    <li>
                        <a href="#" id="link-information"><i class="fa fa-angle-right"> </i> Information</a>
                    </li>
                    <li>
                        <a href="#" id="link-password"><i class="fa fa-angle-right"> </i> Change password</a>
                    </li>
                </ul>
                <li data-toggle="collapse" data-target="#characters" class="collapsed">
                    <a href="#" id="link-characters"><i class="fa fa-users sidebar-icon"></i> Characters</a>
                </li>
                <li>
                    <a href="#" id="link-donation"><i class="fas fa-donate sidebar-icon"></i> Donation</a>
                </li>
                <li data-toggle="collapse" data-target="#sair" class="collapsed">
                    <a href="<?= $router->route("admin.web.exit"); ?>"><i class="fa fa-sign-out-alt sidebar-icon"></i> Sair</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- paginas -->
    <div class="main mt-5" id="pagina">
        <div class="container">
            <div id="character">
                <div class="row">
                    <div class="col">
                        <form id="form-change" action="<?= $router->route('admin.request.infoChar'); ?>">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label ">Character:<span id="loadChar"></span></label>
                                <div class="col-sm-4 "></div>
                                <div class="col-sm-4">
                                    <select class="form-control-plaintext" id="changeChars">
                                        <option value="0">-- Selecione </option>
                                        <?php foreach ($chars as $key => $char) : ?>
                                            <option value="<?= $char->charId; ?>"><?= $char->char_name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <hr />
                    </div>
                </div>
                
                <!-- --------------------Todas as informações do Char------------------- -->
                <ul class="nav nav-pills nav-fill rounded border justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active " id="itens-tab" data-toggle="tab" href="#itens" role="tab" aria-controls="itens" aria-selected="true">Itens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="info-char-tab" data-toggle="tab" href="#info-char" role="tab" aria-controls="info-char" aria-selected="false">Info Char</a> <!-- clocar condicao, pra que se caso cadastro nao seja realizado ele venha altomatimante pra essa aba-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="servicos-tab" data-toggle="tab" href="#servicos" role="tab" aria-controls="servicos" aria-selected="false">Serviços</a> <!-- clocar condicao, pra que se caso cadastro nao seja realizado ele venha altomatimante pra essa aba-->
                    </li>
                </ul>

                <div class="tab-content mt-5 bg-transparent text-dark" id="myTabContent">

                    <!-- --------------------char itens------------------- -->

                    <div class="tab-pane fade show  active " id="itens" role="tabpanel" aria-labelledby="itens-tab">
                        <!-- Lista de itens do char -->
                        <div class="row mb-3 p-0">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h5>Character Itens</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-1 col-md-3 "></div>
                                            <div class="col-8 col-md-6 ">
                                            </div>
                                            <div class="col-3 col-md-3"></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-0 col-md-0 col-lg-0"></div>
                                            <div class="col-12 col-md-12 col-lg-12 ">
                                                <table class="table mb-5 table-striped table-sm bg-transparent text-center text-dark">
                                                    <thead>
                                                        <tr id="thead-itens-bag">
                                                        </tr>
                                                        <tr>
                                                            <th>item_icon</th>
                                                            <th>Nome_item</th>
                                                            <th>Status</th>
                                                            <th>object_id</th>
                                                            <th>Enchant</th>
                                                            <th>Quant</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbody-itens-bag">
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-0 col-md-0 col-lg-0"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- --------------------info char------------------- -->

                    <div class="tab-pane fade" id="info-char" role="tabpanel" aria-labelledby="info-char-tab">
                        <!-- Informações char -->
                        <div class="row mb-3">
                            <div class="col-12 ">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h5>Dados do personagem</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 ">
                                                <table class="table mb-5 table-striped text-center " id="charInfo1">

                                                </table>
                                            </div>

                                            <div class="col-6 ">
                                                <table class="table mb-5 table-striped text-center " id="charInfo2">

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- --------------------Serviços------------------- -->

                    <div class="tab-pane fade" id="servicos" role="tabpanel" aria-labelledby="servicos">
                        <div class="row" hidden="">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <center>
                                    <h4>Serviços</h4>
                                </center>
                                <hr>

                                <!-- Mudar cor do nome -->
                                <div class="border border-dark rounded my-3">
                                    <center>
                                        <h6 class="my-2">Mudar a cor do nome do Personagem</h6>
                                    </center>
                                    <hr>
                                    <div class="row px-4 py-2">
                                        <div class="col-4 text-light">
                                            <div class="bg-info rounded p-2"> Mudar cor do titulo</div>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-control">
                                                <option>preto</option>
                                                <option>Azul</option>
                                                <option>Amarelo</option>
                                                <option>Verde</option>
                                                <option>Vermelho</option>
                                            </select>
                                            <button class="btn btn-success btn-block my-2">Aplicar</button>
                                        </div>
                                        <div class="col-4">
                                            <div class="bg-warning rounded p-2"> 20 Donate coin</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Remover Karma -->
                                <div class="border border-dark rounded my-3">
                                    <center>
                                        <h6 class="my-2">iguala quantidade de karma a 0</h6>
                                    </center>
                                    <hr>
                                    <div class="row px-4 pb-4 pt-2">
                                        <div class="col-4 text-light">
                                            <div class="bg-info rounded p-2">Remover Karma</div>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-success btn-block ">Aplicar</button>

                                        </div>
                                        <div class="col-4">
                                            <div class="bg-warning rounded p-2"> 15 Donate coin</div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Remover PKs -->
                                <div class="border border-dark rounded my-3">
                                    <center>
                                        <h6 class="my-2">iguala quantidade de pks a 0</h6>
                                    </center>
                                    <hr>
                                    <div class="row px-4 pb-4 pt-2">
                                        <div class="col-4 text-light">
                                            <div class="bg-info rounded p-2">Remover Pks</div>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-success btn-block ">Aplicar</button>
                                        </div>
                                        <div class="col-4">
                                            <div class="bg-warning rounded p-2"> 20 Donate coin</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mudar sexo -->
                                <div class="border border-dark rounded my-3">
                                    <center>
                                        <h6 class="my-2">Troca sexo do personagem</h6>
                                    </center>
                                    <hr>
                                    <div class="row px-4 pb-4 pt-2">
                                        <div class="col-4 text-light">
                                            <div class="bg-info rounded p-2">Troca sexo</div>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-control">
                                                <option>Masculino</option>
                                                <option>Feminino</option>
                                            </select>
                                            <button class="btn btn-success btn-block mt-2">Aplicar</button>
                                        </div>
                                        <div class="col-4">
                                            <div class="bg-warning rounded p-2"> 10 Donate coin</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-3">

                            </div>
                            <div class="col-6">
                                <div class="jumbotron bg-light text-center">
                                    <h4>Área em manutenção</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Troca de senha -->
            <div class="row mb-3" id="mudar-senha">
                <div class="col-2 col-md-2 col-lg-3"></div>
                <div class="col-8 col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>Change Password</h5>
                        </div>
                        <div class="card-body">
                            <form id="trocando-senha" action="<?= $router->route('admin.request.trocarSenha'); ?>" method="POST" data-type="JSON">
                                <input type="password" name="senhaAntiga" class="form-control mb-1" placeholder="Senha atual">

                                <input type="password" name="novaSenha" class="form-control mb-1" placeholder="Nova senha">

                                <input type="password" name="repitaNovaSenha" class="form-control mb-1" placeholder="Repita nova senha">
                                <input type="hidden" name="login" value="<?= $login ?>">

                                <button type="submit" class="btn btn-info mb-2" id="change-senha">change</button>
                                <div class="load text-center"></div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-md-2 col-lg-3"></div>
            </div>

            <!-- Informações da conta -->
            <div class="row mb-3" id="info-conta">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>Account Informations</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 ">
                                    <table class="table table-striped text-center " id="table-info-conta">
                                        <tbody>
                                            <tr>
                                                <td>Login: </td>
                                                <td><strong><?= $accountInfo->login_site ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Email: </td>
                                                <td><strong><?= $accountInfo->email ?></td>
                                            </tr>
                                            <tr>
                                                <td>Last login </td>
                                                <td><strong> - </strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Donations -->
            <div class="row mb-3" id="donation">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="row border">
                        <div class="col-md-5 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Seu carrinho</span>
                                <span class="badge badge-secondary badge-pill">3</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Price</h6>
                                        <small class="text-muted">Coin</small>
                                    </div>
                                    <span class="text-muted">R$ 20,00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-light">
                                    <div class="text-success">
                                        <h6 class="my-0">Código de promoção</h6>
                                        <small>CODIGOEXEMEPLO</small>
                                    </div>
                                    <span class="text-success">-R$ 5,00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (BRL)</span>
                                    <strong>R$ 15,00</strong>
                                </li>
                            </ul>

                            <form class="card p-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Código promocional">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Resgatar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-7 order-md-1">
                            <h4 class="mb-3"><?= ucfirst($login);  ?> account</h4>
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="character">Character</label>
                                        <select class="custom-select d-block w-100" id="character" required>
                                            <option value="">--Selecione</option>
                                            <?php foreach ($chars as $key => $char) : ?>
                                                <option value="<?= $char->charId; ?>"><?= $char->char_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor, escolha um país válido.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="nickname">Coins</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><img src="<?= url('cdn/assets/media/images/icones_itens/etc_coin_of_fair_i00.png'); ?>" width="24" class="m-0 p-0"> </span>
                                            </div>
                                            <input type="number" class="form-control" id="coins" placeholder="Ex: 20" min="1" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Seu nickname é obrigatório.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr class="mb-4">
                                <h4 class="mb-3">Pagamento</h4>
                                <div class="d-block my-3">
                                    <div class="custom-control custom-radio">
                                        <input id="credito" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                        <label class="custom-control-label" for="credito">Cartão de crédito</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="boleto" name="paymentMethod" type="radio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="boleto">Boleto</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="debito" name="paymentMethod" type="radio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="debito">Cartão de débito</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="paypal">PayPal</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-nome">Nome no cartão</label>
                                        <input type="text" class="form-control" id="cc-nome" placeholder="" required>

                                        <div class="invalid-feedback">
                                            O nome que está no cartão é obrigatório.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-numero">N° cartão</label>
                                        <input type="text" class="form-control" id="cc-numero" placeholder="" required>
                                        <div class="invalid-feedback">
                                            O número do cartão de crédito é obrigatório.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="cc-expiracao">Validade</label>
                                        <input type="text" class="form-control" id="cc-expiracao" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Data de expiração é obrigatória.
                                        </div>
                                    </div>
                                    <!--<div class="col-md-3 mb-3">
                                        <label for="cc-cvv">CVV</label>
                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Código de segurança é obrigatório.
                                        </div>
                                    </div> -->
                                </div>
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Buy coins</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<?php } else {

    $router->redirect('goat.web.home');   ?>

<?php } ?>

<?php $v->start('js'); ?>



<script>
   // let imageLogin = "<?= url('cdn/assets/media/images/gifs/load.gif') ?>";
    let buscarNomeSubclasse = '<?= $router->route('admin.request.buscarNomeSubclasse'); ?>';
    let buscarNomeClasse = '<?= $router->route('admin.request.buscarNomeClasse'); ?>';
    let imageItem = '<?= url('cdn/assets/media/images/icones_itens/') ?>';

    $(document).ready(() => {

        $('#character').hide();
        $('#mudar-senha').hide();
        $('#donation').hide();

        $('#link-characters').click((e) => {
            e.preventDefault();

            $('#info-conta').hide();
            $('#mudar-senha').hide();
            $('#character').fadeIn();
            $('#donation').hide();
        });
        $('#link-information').click((e) => {
            e.preventDefault();

            $('#mudar-senha').hide();
            $('#character').hide();
            $('#donation').hide();
            $('#info-conta').fadeIn();
        });
        $('#link-password').click((e) => {
            e.preventDefault();

            $('#character').hide();
            $('#info-conta').hide();
            $('#donation').hide();
            $('#mudar-senha').fadeIn();
        });
        $('#link-donation').click((e) => {
            e.preventDefault();
            $('#donation').fadeIn();
            $('#character').hide();
            $('#info-conta').hide();
            $('#mudar-senha').hide();
        });
    });
</script>
<script src="<?= url('themes/theme1/userPanel/js/changePassword.js'); ?>"></script>
<script src="<?= url('themes/theme1/userPanel/js/changeChar.js'); ?>"></script>
<?php $v->end(); ?>