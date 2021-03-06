<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mb-5">
    <div class="row">
        <div class="col pd-5">
            <h1 class="pd-5 py-5">Detail Komik</h1>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text">Penulis : <?= $komik['penulis']; ?></p>
                            <p class="card-text"><small class="text-muted">Penerbit : <?= $komik['penerbit']; ?></small></p>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                            <br><br>
                            <a href="/komik">kembali ke daftar komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>