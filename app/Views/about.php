<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUNDIFY - About | Audio Steganography</title>

    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/icon.png">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
</head>

<body>
    <div class="container text-light">
        <?= $this->include('_partials/header'); ?>

        <div id="main">
            <div class="row">
                <div class="col-12">
                    <h5>What is <b>Soundify</b>?</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                        Soundify is a sophisticated web application designed to conceal confidential text messages within MP3 files seamlessly. Simply select your preferred MP3, input your message, and witness the creation of a new MP3 file. Unveiling the hidden message is a breeze – just reupload the newly generated file. For an added layer of security, you have the option to encrypt the message with a password. Experience a novel way to safeguard your messages with Soundify.
                    </p>

                    <p class="mb-1">
                        This project was built by:
                    </p>
                    <ul>
                        <li>2210511005 - Sufyan Al Afi</li>
                        <li>2210511015 - Jonathan Christoper Basuki</li>
                        <li>2210511031 - Dinda Elrossa Birulangit</li>
                        <li>2210511033 - Naura Muthia Alwanadi</li>
                        <li>2210511034 - Nadya Nurasia Koimah</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-4">
                <h5>Start using <a href="<?= base_url(); ?>" class="about-soundify text-light"><span class="dashed-underline">Soundify</span></a> now!</h5>
            </div>
        </div>

        <?= $this->include('_partials/footer'); ?>
    </div>
    </div>
</body>

</html>