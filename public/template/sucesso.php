<?php $v->layout("_template"); ?>

<div class="content">
    <h1>Parabéns!</h1>
    <p>Você acertou <?= $pontuacao ?>/<?= $total ?></p>
    <p>Clique <a href="<?= url() ?>">aqui</a> para voltar.</p>
</div>