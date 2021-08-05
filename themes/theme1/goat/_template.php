<!doctype html>
<html lang="<?= LANGUAGE ?>">
    <head>
        <!-- Required meta tags -->
        <meta charset="<?= CHARSET ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="l2goat,l2 goat,Greatest of all time, l2Greatest of all time,l2 Greatest of all time,l2Greatestofalltime, freya, l2, l2 freya, lineage, lineage2, lineage 2, lainiege, laineage, lainiage, lineage dois, lineage ii, internacional, international, portuguese, english, espanish, espanol, espanhol, portugues, ingles, l2j, br, en, 1x, 5x, 10x, 30x, 50x, 70x, 100x, 150x, 200x, 300x, 1000x, gracia, diversao gratis, free, l2 free, interlude, free fun, new server, novo servidor, o melhor servidor de lineage 2, o melhor servidor, o melhor servidor de todos os tempos, o maior servidor de todos os tempos">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= url('cdn/libs/bootstrap/dist/bootstrap-4.5.3/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?= url('themes/theme1/goat/css/l2_styles.css'); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/x-icon" href=" <?= url('cdn/assets/media/images/fav-icons/favicon.ico'); ?>">
        <title><?= $title ?></title>
    </head>

    <body style="background-color: black;">
    
        <?= $v->insert('fragments/menu-em-cima-navbar'); ?>
        <?= $v->insert('fragments/navbar'); ?>
        <?= $v->insert('fragments/navbar2'); ?>

        <?= $v->section('content'); ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= url('cdn/libs/jquery/jquery-3.5.1.js'); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="<?= url('cdn/libs/bootstrap/dist/bootstrap-4.5.3/js/bootstrap.min.js'); ?>"></script>
        <script src="<?= url('cdn/js/functions.js'); ?>"></script>
        <?= $v->section('siderbarJs') ?>
        <?= $v->section('js') ?>

    </body>

</html>