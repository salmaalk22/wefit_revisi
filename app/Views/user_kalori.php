<?= $this->extend('base_user') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <h3 class="mb-3">Hitung Kalori</h3>
    <form action="/user/hitung" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Makanan</label>
            <input type="text" class="form-control bg-dark text-white" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Jumlah Kalori</label>
            <input type="text" class="form-control bg-dark text-white" id="username" name="kalori">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Jam Makan</label>
            <select name="jam" id="role" class="form-control bg-dark text-white">
                <option value="Pagi">Pagi</option>
                <option value="Siang">Siang</option>
                <option value="Sore">Sore</option>
                <option value="Nyemil">Nyemil</option>
            </select>
        </div>

        <button type="submit" class="btn btn-dark">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>
