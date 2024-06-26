<div id="embedBox" style="display: none">
    <div class="row text-center">
        <div class="col-3">
            <a href="<?= base_url(); ?>" class="active-link header-link">Home</a>
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

    <form action="<?= base_url('/data'); ?>" method="POST" enctype='multipart/form-data'>
        <input type="file" id="audio_data" name="audio_data" style="display: none;" />

        <div class="row">
            <div class="col-12">
                <div class="form-floating mb-3 text-dark">
                    <textarea onkeyup="charCounter(this)" class="form-control" name="message" id="message" placeholder="Message" style="height: 8rem;"></textarea>
                    <label for="message">Message (<span id="counter" class="text-dark"></span> character left)</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-floating mb-3 text-dark">
                    <input type="password" class="form-control" id="encPwd" name="secret_key" placeholder="Secret Key (Optional)" value="<?= old('email') ?>">
                    <label for="encPwd">Secret Key (Optional)</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6 text-end">
                <button onclick="embedText()" type="submit" class="btn btn-secondary-action btn-block btn-select-file">Encrypt</button>
            </div>
            <div class="col-6 text-start">
                <a href="<?= base_url('/home'); ?>" class="btn btn-block btn-secondary-action">Back</a>
            </div>
        </div>
    </form>

    <?= $this->include('templates/_partials/footer'); ?>
</div>