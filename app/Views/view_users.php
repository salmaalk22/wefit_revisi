<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-4 mb-4">
            <form action="<?= base_url('admin/users') ?>" method="get">
                <div class="input-group">
                    <input value="<?= $search ?>" type="text" name="search" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h5 class="mb-4">Lists Users</h5>
                <div>
                    <a href="<?= base_url('admin/users/tambah/') ?>" class="btn btn-sm btn-dark">Tambah Admin</a>
                </div>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td><?= $user['role'] ?></td>
                            <td class="d-flex">
                                <div>
                                    <a href="<?= base_url('admin/users/edit/' . $user['id']) ?>" class="btn btn-sm btn-secondary rounded-pill">Edit</a>
                                </div>
                                <form action="/admin/users/delete/<?= $user['id'] ?>" method="post" onsubmit="return confirm('Are you sure?')">
                                    <input type="hidden" name="_method" value="delete" />
                                    <button type="submit" class="btn btn-sm btn-dark rounded-pill">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>