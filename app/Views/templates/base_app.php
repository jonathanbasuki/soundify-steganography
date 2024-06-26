<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>

    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/icon.png">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/app_style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/table_style.css">
</head>

<body onload="enableHoverEffects()">
    <div class="container text-light">
        <?= $this->include('templates/_partials/header'); ?>

        <?= $this->renderSection('app'); ?>
    </div>

    <!-- inject:js -->
    <script src="<?= base_url(); ?>/assets/js/app_script.js"></script>
    <script src="<?= base_url(); ?>/dist/js/cryptojs.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/helpers.js"></script>
    <script src="<?= base_url(); ?>/assets/js/base32.js"></script>
    <script src="<?= base_url(); ?>/assets/js/mp3parser.js"></script>
    <script src="<?= base_url(); ?>/assets/js/mp3stego.js"></script>
    <!-- endinject -->

    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156479490-1"></script> -->
</body>

</html>