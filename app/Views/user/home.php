
<div class="row mt-5 mb-5">
    <?php
    if (session()->getFlashdata('notifikasi')) {
        echo '<div class="alert alert-success" role="alert">';
        echo session()->getFlashdata('notifikasi');
        echo '</div>';
    }
    ?>
    <?php
    foreach ($allData as $key => $value) { ?>
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="card">
            <div class="card-header">
            <?= $value['tanggal']  ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $value['nama']  ?></h5>
                <p class="card-text">
                <?= $value['informasi']  ?>
                </p>
                <a href="<?= base_url('pendaftaran/formulir/' . $value['id_event']) ?>" class="btn btn-primary">Daftar</a>
            </div>
        </div>
    </div>
    <?php  } ?>
</div>