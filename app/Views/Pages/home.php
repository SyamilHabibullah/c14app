    <?= $this->extend('layout/template'); ?>
    <?= $this->section('content'); ?>
    <section id="home" class="home">
        <div class="container pt-5">
            <div class="row">
                <div class="col">
                    <h1>Hallo Worlds</h1>
                    
                    <div class="alert alert-success" role="alert">
                        A simple success alert—check it out!
                    </div>
                    <button type="button" class="btn btn-danger">Danger</button>
                </div>
            </div>
        </div>
    </section>
    <?= $this->endSection(); ?>