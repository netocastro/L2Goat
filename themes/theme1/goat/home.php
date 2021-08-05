<?php $v->layout('_template') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-3 border border-primary rounded l2-sidebar">
            <?= $v->insert('fragments/sidebar'); ?>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-9 border border-primary rounded l2-home">
            <?= $v->insert('fragments/contentHome'); ?>
        </div>
    </div>
</div>
