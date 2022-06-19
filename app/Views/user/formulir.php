<div class="row mt-5 mb-5">
    <div class="col-sm-12">
    <?php
                            echo form_open('pendaftaran/daftarpeserta/');
                            ?>
        <div class="form-group">
            <label class="col-form-label">Nama :</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="form-group">
            <label class="col-form-label">Email :</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label class="col-form-label">Tanggal Lahir :</label>
            <input type="date" class="form-control" name="tanggal"
                required>
        </div>
        <div class="form-group">
            <label class="col-form-label">Alamat :</label>
            <textarea class="form-control" name="alamat" required></textarea>
        </div>
        <input type="hidden" name="IDEvent" value="<?= $IDEvent ?>">
        <button type="submit" class="btn btn-primary mt-5">Daftar</button>
        <?php echo form_close() ?>
    </div>
</div>