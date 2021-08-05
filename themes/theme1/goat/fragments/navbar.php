<nav class="navbar navbar-expand-md navbar-dark l2-navbar ">
    <div class="container-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url('informations'); ?>">Informations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url('downloads'); ?>">Downloads</a>
                </li>
            </ul>
            <img src="<?= url('cdn/assets/media/images/logos/logo-freya1.png'); ?>">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= url('register'); ?>">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url('statistics'); ?>">Statistics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url('donate'); ?>">Donations</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
