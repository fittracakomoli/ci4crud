<?php $this->extend('layout/template'); ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-4">Detail Berita</h2>
            <div class="card my-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $berita['thumbnail'] ?>" class="img-fluid rounded-start" alt="<?= $berita['slug'] ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $berita['title'] ?></h5>
                            <p class="card-text"><small class="text-body-secondary"><?= $berita['body'] ?></small></p>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>

                            <br></br>
                            <a href="/berita">Kembali ke daftar berita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>