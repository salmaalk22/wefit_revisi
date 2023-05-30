<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <h3 class="mb-3">Tambah Exercise</h3>
    <?php $session = session(); ?>
    <?php if ($session->getFlashKeys('error')) : ?>
        <div class="alert alert-danger">
            <?= $session->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    <form action="/admin/exercise" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Link Video <smal>* Max size video 100mb</smal></label>
            <input type="text" class="form-control" id="video" name="video">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Type Exercise</label>
            <select name="type" id="role" class="form-control">
                <option value="Full Body" selected>Full Body</option>
                <option value="Arms">Arms</option>
                <option value="Legs">Legs</option>
                <option value="Abs">Abs</option>
                <option value="Chest">Chest</option>
                <option value="Back">Back</option>
            </select>
        </div>

        <button type="submit" class="btn btn-dark">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>