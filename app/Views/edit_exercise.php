<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <h3 class="mb-3">Edit Exercise</h3>
    <form action="/admin/exercise/edit/<?= $data['id'] ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input value="<?= $data['name'] ?>" type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="video" class="form-label">Link Video <smal>* Max size video 100mb</smal></label>
            <input value="<?= $data['video'] ?>" type="text" class="form-control" id="video" name="video">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Type Exercise</label>
            <select name="type" id="role" class="form-control">
                <option value="Arms" <?php ($data['type'] == "Arms") ? 'selected' : "" ?>>Arms</option>
                <option value="Legs" <?php ($data['type'] == "Legs") ? 'selected' : "" ?>>Legs</option>
                <option value="Abs" <?php ($data['type'] == "Abs") ? 'selected' : "" ?>>Abs</option>
                <option value="Chest" <?php ($data['type'] == "Chest") ? 'selected' : "" ?>>Chest</option>
                <option value="Back" <?php ($data['type'] == "Back") ? 'selected' : "" ?>>Back</option>
                <option value="Full Body" <?php ($data['type'] == "Full Body") ? 'selected' : "" ?>>Full Body</option>
            </select>
        </div>

        <button type="submit" class="btn btn-dark">Simpan</button>
    </form>
</div>
<?= $this->endSection()?>