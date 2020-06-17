<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <img src="/img/profile2.png" width="20%" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Dr. W MT</h1>
        <p class="lead">Dosen Sistem Informasi </p>
        <!-- <img src="<?php echo base_url('/img/profile2.png'); ?>"> -->
    </div>
</div>
<section id="about" class="about mb-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h1>About</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col alert-warning -md-5 text-center" role="alert">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, aliquid minus accusantium eligendi soluta ex, sed beatae doloremque molestias magni consequatur nostrum ad ab quo, mollitia vitae reiciendis dignissimos ut?</p>
            </div>
            <div class="col alert-warning -md-5 text-center" role="alert">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Deleniti explicabo totam esse hic soluta amet deserunt,
                mollitia vero officia quidem voluptate unde corrupti
                provident, reprehenderit ab, vitae veniam maiores minima!
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>