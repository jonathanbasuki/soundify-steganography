<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUNDIFY | Audio Steganography</title>

    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/icon.png">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
</head>

<body onload="enableHoverEffects()">
    <div class="container text-light">
        <?= $this->include('_partials/header'); ?>

        <div id="main">
            <div class="row">
                <div class="col-12">
                    <h5>What is <a href="<?= base_url('/about'); ?>" class="about-soundify text-light"><span class="dashed-underline">Soundify</span> <span class="question-mark">?</span></a></h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12 pb-4 pb-md-5 pt-md-3">
                    <div id="dropArea">
                        <img src="assets/img/mp3.svg" class="mp3">
                        <small>Drop a file here, or</small>
                        <button onclick="input.click()" type="button" class="btn btn-select-file btn-sm">Select File</button>
                        <input onchange="loadFile()" type="file" id="input" name="input" accept=".mp3" />
                    </div>
                </div>
            </div>

            <?= $this->include('_partials/footer'); ?>
        </div>

        <div id="embedBox" style="display: none">
            <div class="row">
                <div class="col-12">
                    <textarea onkeyup="charCounter(this)" class="form-control" id="message" placeholder="Type your message here" rows="5"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    Remaining character: <span id="counter" class="text-light">995</span>
                </div>
                <div class="col-2 text-end">
                    <button onclick="clearText()" type="button" class="btn btn-sm btn-block btn-secondary-action">Clear</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="password" id="encPwd" placeholder="Password (Optional)" class="form-control">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 text-end">
                    <button onclick="embedText()" type="button" class="btn btn-secondary btn-block btn-select-file">Encrypt</button>
                </div>
                <div class="col-6 text-start">
                    <button onclick="reset('embedBox')" type="button" class="btn btn-block btn-secondary-action">Back</button>
                </div>
            </div>
        </div>

        <div id="extractBox" style="display: none">
            <div class="row">
                <div class="col-12">
                    <textarea class="form-control" id="message2" rows="5" placeholder="* Your message will appear here *" readonly></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="password" id="decPwd" placeholder="Password (Optional)" class="form-control">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4 text-end">
                    <button onclick="extractText()" type="button" class="btn btn-block btn-select-file">Extract</button>
                </div>
                <div class="col-4 text-center">
                    <button onclick="copyText()" type="button" class="btn btn-block btn-secondary-action">Copy Message</button>
                </div>
                <div class="col-4 text-start">
                    <button onclick="reset('extractBox')" type="button" class="btn btn-block btn-secondary-action">Back</button>
                </div>
            </div>
        </div>
    </div>

    <!-- inject:js -->
    <script src="<?= base_url(); ?>/lib/js/cryptojs.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/helpers.js"></script>
    <script src="<?= base_url(); ?>/assets/js/base32.js"></script>
    <script src="<?= base_url(); ?>/assets/js/mp3parser.js"></script>
    <script src="<?= base_url(); ?>/assets/js/mp3stego.js"></script>
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>
    <!-- endinject -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156479490-1"></script>
    <script>
        if (window.location.host === "stegonaut.com" || window.location.host === "www.stegonaut.com") {
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-156479490-1', {
                'anonymize_ip': true,
                'storage': 'none'
            });
        }
    </script>
</body>

</html>