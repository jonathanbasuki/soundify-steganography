<?= $this->extend('templates/base_app'); ?>

<?= $this->section('app'); ?>

<div id="main">
    <div class="row text-center">
        <div class="col-3">
            <a href="<?= base_url('/home'); ?>" class="header-link">Home</a>
        </div>
        <div class="col-3">
            <a href="<?= base_url('/history'); ?>" class="active-link header-link">History</a>
        </div>
        <div class="col-3">
            <a href="<?= base_url('/about'); ?>" class="header-link">About</a>
        </div>
        <div class="col-3">
            <a href="<?= base_url('/logout'); ?>" class="btn btn-sm btn-block btn-secondary-action">Logout</a>
        </div>
    </div>
    <hr>

    <div class="row text-center">
        <div class="col-12">
            <table class="table history-table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" style="width: 25%;">Date</th>
                        <th scope="col">Message</th>
                        <th scope="col">Secret Key</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($data['records']) < 1) : ?>
                        <td colspan="4">No record found.</td>
                    <?php endif; ?>

                    <?php

                    $no = 1;

                    foreach ($data['records'] as $record) :

                        $date = explode(' ', $record['created_at']);

                    ?>
                        <tr>
                            <th scope="row" style="width: 10%;">
                                <?= $no++; ?>
                            </th>
                            <td>
                                <span class="status shipped">
                                    <?= $date[0]; ?>
                                </span>
                            </td>
                            <td>
                                <?= $record['message']; ?>
                            </td>
                            <td>
                                <?= ($record['secret_key'] == null) ? '-' : $record['secret_key']; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('/delete/' . $record['id']); ?>" class="text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="m-0 size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <hr>

    <?= $this->include('templates/_partials/footer'); ?>
</div>

<?= $this->endSection(); ?>