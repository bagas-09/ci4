<h4 class="fw-bold py-3 mb-4"><?= $title ?></h4>

<?php
if (session()->getFlashdata('notifikasi')) {
    echo '<div class="alert alert-success" role="alert">';
    echo session()->getFlashdata('notifikasi');
    echo '</div>';
}
?>

<div class="card">
    <div class="table-responsive text-nowrap">
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah
            </button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Informasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no = 1;
                foreach ($allData as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><i class="fab fa-angular fa-lg text-danger"></i>
                        <strong><?= $value['nama']  ?></strong>
                    </td>
                    <td><?= $value['tanggal']  ?></td>
                    <td><?= $value['informasi']  ?></td>
                    <td>
                        <button type="button" class="btn btn-icon btn-success" data-bs-toggle="modal"
                            data-bs-target="#editModal<?= $value['id_event']  ?>">
                            <span class="tf-icons bx bx-edit-alt"></span>
                        </button>
                        <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteModal<?= $value['id_event']  ?>">
                            <span class="tf-icons bx bx-trash-alt"></span>
                        </button>
                    </td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->

<!-- Modal Add -->
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
            echo form_open('event/add/');
            ?>
            <div class="modal-body">
                <div>
                    <label class="form-label">Nama :</label>
                    <input type="text" class="form-control" name="nama" required />
                </div>
                <div>
                    <label class="form-label">Tanggal :</label>
                    <input type="date" class="form-control" name="tanggal" required />
                </div>
                <div>
                    <label class="form-label">Informasi :</label>
                    <textarea class="form-control" name="informasi" required></textarea>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<!-- Modal Hapus -->
<?php
foreach ($allData as $key => $value) { ?>
<div class="modal fade" id="deleteModal<?= $value['id_event']  ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Batal</button>
                <a href="<?= base_url('event/delete/' . $value['id_event']) ?>"
                    class="btn btn-outline-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
<?php  } ?>

<!-- Modal Edit -->
<?php
foreach ($allData as $key => $value) { ?>
<div class="modal fade" id="editModal<?= $value['id_event']  ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
            echo form_open('event/edit/' . $value['id_event']);
            ?>
            <div class="modal-body">
            <div>
                    <label class="form-label">Nama :</label>
                    <input type="text" class="form-control" name="nama" value="<?= $value['nama']  ?>" required />
                </div>
                <div>
                    <label class="form-label">Tanggal :</label>
                    <input type="date" class="form-control" name="tanggal" value="<?= $value['tanggal']  ?>" required />
                </div>
                <div>
                    <label class="form-label">Informasi :</label>
                    <textarea class="form-control" name="informasi" required><?= $value['informasi']  ?></textarea>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<?php  } ?>