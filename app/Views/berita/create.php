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
                    <input type="text" class="form-control <?= isset($errors['title']) ? 'is-invalid' : ''; ?>" id="title" name="title" autofocus value="<?= old('title') ?>">
                    <div class="invalid-feedback">
                        <?= $errors['title'] ?? ''; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Isi Berita</label>
                    <textarea class="form-control <?= isset($errors['body']) ? 'is-invalid' : ''; ?>" id="body" name="body" rows="5"><?= old('body') ?></textarea>
                    <div class="invalid-feedback">
                        <?= $errors['body'] ?? ''; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail Berita</label>
                    <div class="w-full mb-3">
                        <img src="/img/default.png" class="img-thumbnail mb-2 img-preview" alt="">
                    </div>
                    <input class="form-control <?= isset($errors['thumbnail']) ? 'is-invalid' : ''; ?>" type="file" id="thumbnail" name="thumbnail" onchange="previewImg()">
                    <div class="invalid-feedback">
                        <?= $errors['thumbnail'] ?? ''; ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Berita</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>