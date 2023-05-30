<?= $this->extend('base_user') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h5 class="mb-4">Histori Catatan Kalori</h5>
                <div>
                    <form method="get">
                        <label for="date">Filter by date:</label>
                        <input type="date" name="date" id="date" value="<?= $date ?>">
                        <button class="btn btn-dark btn-sm " type="submit">Filter</button>
                    </form>
                </div>
            </div>

            <table class="table table-hover  table-bordered ">
                <thead>
                    <tr>
                        <th scope="col ">Name</th>
                        <th scope="col ">Kalori</th>
                        <th scope="col ">Jam Makan</th>
                        <th scope="col ">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $item) : ?>
                        <tr>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['kalori'] ?> kal </td>
                            <td><?= $item['jam'] ?></td>
                            <td><?= $item['date'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-right">Total</td>
                        <td><?= $total ?> kal</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>