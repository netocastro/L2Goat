<h6>Server Status</h6>



<hr>
<div class="l2-status">
    <p><span>Login: </span><span class="text-<?= ($loginServer ? 'success' : 'danger') ?>"><?= ($loginServer ? 'Online' : 'Offline') ?></span></p>
    <p><span>Game:</span><span class="text-<?= ($gameServer ? 'success' : 'danger') ?>"><?= ($gameServer ? 'Online' : 'Offline') ?></span></p>
    <p><span>Online: </span><span class="text-primary"><?= (isset($online) ? $online : 9999 ) ?></span></p>
</div>

<h6>User panel</h6>
<hr>
<div class="l2-login">
    <form id="form-login" action="<?= $router->route('goat.request.login'); ?>" method="POST" data-type="JSON">
        <div>
            <span class="fa fa-user"></span>
            <input type="text" placeholder="Login" name="login">
        </div>
        <div>
            <span class="fa fa-unlock-alt"></span>
            <input type="password" placeholder="password" name="password">
        </div>



        <a href="<?= url('recoverPassword') ?>">I forgot my password</a><button type="submit" id="botao-login">Login</button>
        <div class="load text-center"></div>
    </form>
</div>

<h6>Vote System</h6>
<hr>
<div class="l2-vote">
    <a href="#">Topserver</a>
    <a href="#">Topzone</a>
    <a href="#">Hopzone</a>
    <a href="#">Network</a>
</div>

<h6>Contact</h6>
<hr>
<div class="l2-contact">
    <a href="#"><span class="fa fa-instagram l2-instagram"></span></a>
    <a href="#"><span class="fa fa-facebook l2-facebook"></span></a>
    <a href="#"><span class="fa fa-whatsapp l2-whatsapp"></span></a>
    <a href="#"><span class="fa fa-envelope l2-googleplus"></span></a>
</div>

<h6>Gallery</h6>
<hr>
<div class="l2-gallery">
    <a><img src="<?= url('cdn/assets/media/images/fundo1.jpg'); ?>"></a>
    <a><img src="<?= url('cdn/assets/media/images/fundo2.jpg'); ?>"></a>
    <a><img src="<?= url('cdn/assets/media/images/fundo5.jpg'); ?>"></a>
    <a><img src="<?= url('cdn/assets/media/images/fundo6.jpg'); ?>"></a>
    <a><img src="<?= url('cdn/assets/media/images/fundo7.jpg'); ?>"></a>
    <a><img src="<?= url('cdn/assets/media/images/fundo8.jpg'); ?>"></a>
</div>

<?php $v->start('siderbarJs'); ?>

<script>
    let painelAdmin = "<?= $router->route('admin.web.userPanel') ?>";
</script>

<script src="<?= url('themes/theme1/goat/js/login.js'); ?>"></script>

<?php $v->end(); ?>