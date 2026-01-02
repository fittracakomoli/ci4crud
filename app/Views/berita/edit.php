<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-4">Form Edit Berita</h2>
            <form action="/berita/update/<?= $berita['id'] ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $berita['slug']; ?>">
                <input type="hidden" name="thumbnailLama" value="<?= $berita['thumbnail']; ?>">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Berita</label>
                    <input type="text" class="form-control <?= isset($errors['title']) ? 'is-invalid' : ''; ?>" id="title" name="title" autofocus value="<?= old('title', $berita['title']) ?>">
                    <div class="invalid-feedback">
                        <?= $errors['title'] ?? ''; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Isi Berita</label>
                    <textarea class="form-control <?= isset($errors['body']) ? 'is-invalid' : ''; ?>" id="body" name="body" rows="5"><?= old('body', $berita['body']) ?></textarea>
                    <div class="invalid-feedback">
                        <?= $errors['body'] ?? ''; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail Berita</label>
                    <div class="w-full mb-3">
                        <img src="/img/<?= $berita['thumbnail'] ?>" class="img-thumbnail mb-2 img-preview" alt="">
                    </div>
                    <input class="form-control <?= isset($errors['thumbnail']) ? 'is-invalid' : ''; ?>" type="file" id="thumbnail" name="thumbnail" onchange="previewImg()">
                    <div class="invalid-feedback">
                        <?= $errors['thumbnail'] ?? ''; ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>