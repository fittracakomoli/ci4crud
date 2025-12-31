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
                    <input type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id="title" name="title" autofocus value="<?= old('title') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('title'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Isi Berita</label>
                    <textarea class="form-control <?= ($validation->hasError('body')) ? 'is-invalid' : ''; ?>" id="body" name="body" rows="5"><?= old('body') ?></textarea>
                    <div class="invalid-feedback">
                        <?= $validation->getError('body'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail</label>
                    <input class="form-control <?= ($validation->hasError('thumbnail')) ? 'is-invalid' : ''; ?>" type="text" id="thumbnail" name="thumbnail" value="<?= old('thumbnail') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('thumbnail'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Berita</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>