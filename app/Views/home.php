<?= $this->extend('templates/base_app'); ?>

<?= $this->section('app'); ?>

<div id="main">
    <div class="row text-center">
        <div class="col-3">
            <a href="<?= base_url('/home'); ?>" class="active-link header-link">Home</a>
        </div>
        <div class="col-3">
            <a href="<?= base_url('/history'); ?>" class="header-link">History</a>
        </div>
        <div class="col-3">
            <a href="<?= base_url('/about'); ?>" class="header-link">About</a>
        </div>
        <div class="col-3">
            <a href="<?= base_url('/logout'); ?>" class="btn btn-sm btn-block btn-secondary-action">Logout</a>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-12">
            <p class="mb-0 pb-0">
                <span class="about-soundify">Welcome back, </span><span><?= $data['user_email']; ?>!</span>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 pb-4 pb-md-5 pt-md-3">
            <form action="<?= base_url('/data'); ?>" method="POST" id="encrypt-audio">
                <div id="dropArea">
                    <img src="<?= base_url('/assets/img/mp3.svg'); ?>" class="mp3">
                    <small>Drop a file here, or</small>
                    <button onclick="input.click()" type="button" class="btn btn-select-file btn-sm">Select File</button>
                    <input onchange="loadFile()" type="file" id="input" name="input" accept=".mp3" />
                </div>
            </form>
        </div>
    </div>

    <?= $this->include('templates/_partials/footer'); ?>
</div>

<?= $this->include('templates/_partials/embed_box'); ?>
<?= $this->include('templates/_partials/extract_box'); ?>

<?= $this->endSection(); ?>