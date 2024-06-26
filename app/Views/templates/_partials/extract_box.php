<div id="extractBox" style="display: none">
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

    <div class="row">
        <div class="col-12">
            <div class="form-floating mb-3 text-dark">
                <textarea onkeyup="charCounter(this)" class="form-control" id="message2" placeholder="Hidden Message" style="height: 8rem;" readonly></textarea>
                <label for="message">Hidden Message</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-floating mb-3 text-dark">
                <input type="password" id="decPwd" placeholder="Password (Optional)" class="form-control">
                <label for="decPwd">Secret Key</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-4 text-end">
            <button onclick="extractText()" type="button" class="btn btn-block btn-secondary-action">Extract</button>
        </div>
        <div class="col-4 text-center">
            <button onclick="copyText()" type="button" class="btn btn-block btn-secondary-action">Copy Message</button>
        </div>
        <div class="col-4 text-start">
            <button onclick="reset('extractBox')" type="button" class="btn btn-block btn-secondary-action">Back</button>
        </div>
    </div>

    <?= $this->include('templates/_partials/footer'); ?>
</div>