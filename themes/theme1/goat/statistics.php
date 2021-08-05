<?php $v->layout('_template'); ?>

<div class="container">
    <div class="row d-flex justify-content-center">

        <div class=" col-8 col-sm-8 col-md-8 col-lg-3 border border-primary rounded l2-sidebar ">
            <?= $v->insert('fragments/sidebar'); ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-9 border border-primary rounded l2-home">
            <?= $v->insert('fragments/statistics'); ?>
        </div>

    </div>
</div>


<?php $v->start('js'); ?>

<?php $v->end(); ?>