<?php $v->layout('_template'); ?>

<div class="container">
    <div class="row">

        <div class="col-sm-12 col-md-4 col-lg-3 border border-primary rounded l2-sidebar">
            <?= $v->insert('fragments/sidebar'); ?>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-9 border border-primary rounded l2-home">
            <?= $v->insert('fragments/informations'); ?>
        </div>

    </div>
</div>


<?php $v->start('js'); ?>
<script>
    $(document).ready(() => {

      /*  $(window).resize(()=>{
            var w = window.outerWidth;
            var h = window.outerHeight;
            var txt = "Window size: width=" + w + ", height=" + h;
            //$('h1').append('height: ' + window.innerHeight + ' / width: ' + window.innerWidth);
            $('#oi').html(txt);
        });*/

    });
</script>
<?php $v->end(); ?>