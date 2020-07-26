<?php $v->layout("_template"); ?>

<div class="content">
    <h1>Ops! Tivemos um erro...</h1>
    <p><strong>Código do erro: </strong> <?= $errcode["errcode"] ?></p>
    <p>Clique <a href="<?= url() ?>">aqui</a> para voltar</p>
</div>