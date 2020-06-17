<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section id="contact" class="contact mb-5">
    <div class="container">
        <div class="row pt-4">
            <div class="col text-center pt-4">
                <h1>Contact Us</h1>
                <p>kontak dan hubungi saya</p>

            </div>
        </div>
        <div class="row pt-5 justify-content-center">
            <div class="col-lg-4 text-center">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Contact Us</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <?php foreach ($alamat as $a) : ?>
                    <ul class="list-group">
                        <li class="list-group-item bg-primary"><?= $a['tipe']; ?></li>
                        <li class="list-group-item"><?= $a['alamat']; ?></li>
                        <li class="list-group-item"><?= $a['kota']; ?></li>

                    </ul>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-6">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telephone</label>
                        <input type="text" class="form-control" id="telepon">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" id="pesan" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>