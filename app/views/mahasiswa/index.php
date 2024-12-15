<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row">
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                    Launch demo modal
                </button>
                <br></br>
                <h3>Daftar Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach($data['mhs'] as $mhs) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $mhs['nama'] ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary">Detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>     
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="tajukModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="tajukModal">Tambah Mahasiswa</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="umur" class="form-control" id="umur" name="umur">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
    </div>
  </div>
</div>

