<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= url() ?>/public/template/assets/css/style.css">
    <title><?= $title ?></title>
</head>
<body>
    <?= $v->section("content"); ?>

    <script src="<?= url() ?>/public/template/assets/js/jquery-min.js"></script>
    <script src="<?= url() ?>/public/template/assets/js/script.js"></script>
</body>
</html>