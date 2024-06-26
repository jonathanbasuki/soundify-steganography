<?= $this->extend('templates/base_app'); ?>

<?= $this->section('app'); ?>

<div id="main">
    <hr class="mt-0">

    <div class="row">
        <div class="col-12">
            <h5>Welcome to <b>Soundify</b>!</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>
                Soundify is a sophisticated web application designed to conceal confidential text messages within MP3 files seamlessly. Simply select your preferred MP3, input your message, and witness the creation of a new MP3 file. Unveiling the hidden message is a breeze – just reupload the newly generated file. For an added layer of security, you have the option to encrypt the message with a password. Experience a novel way to safeguard your messages with Soundify.
            </p>

            <p class="mb-3">
                Meet our <a href="<?= base_url('/team'); ?>" class="about-soundify text-light"><span class="dashed-underline">Team behind Soundify</span></a>.
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a href="<?= base_url('/login'); ?>" class="about-soundify text-light btn btn-lg btn-secondary-action">Start using Soundify now!</a>
    </div>
</div>

<hr>

<?= $this->include('templates/_partials/footer'); ?>

<?= $this->endSection(); ?>