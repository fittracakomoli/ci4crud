<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-4">Form Tambah Berita</h2>
            <form action="/berita/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Berita</label>
                    <input type="text" class="form-control" id="title" name="title" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Isi Berita</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail</label>
                    <input class="form-control" type="text" id="thumbnail" name="thumbnail" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Berita</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>