<?php $v->layout("_template"); ?>

<div class="content">
    <div class="inicio-head">
        <div>
            <strong>Título:</strong>
            <p><?= $currentquiz[0]->TITULO ?></p>
            <a href="<?= url() ?>">Sair</a>
        </div>
        <div>
            <p><?= $currentquiz[0]->DESCRICAO ?></p>
        </div>
    </div>

    <form action="<?= url() ?>/sucesso" method="POST">
    <?php foreach($perguntas as $key) { ?>
    <div class="questao-single">
        <h3><?= $key["enunciado"] ?></h3>
        <div class="opcoes">
            <?php foreach($key["opcoes"] as $opcao) { ?>
            <div>
                <input type="radio" name="opcao<?= $opcao->PERGUNTA ?>" id="<?= $opcao->ID ?>" value="<?= $opcao->CORRETA ?>" required>
                <label for="<?= $opcao->ID ?>"><?= $opcao->DESCRICAO ?></label>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
        <div>
            <button>Enviar</button>
        </div>
    </form>
</div>
