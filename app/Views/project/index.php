<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Project</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Client</th>
                        <th scope="col">Nama Project</th>
                        <th scope="col">Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Tacaz</td>
                        <td>Aplikasi Sistem Informasi Inventory Barang </td>
                        <td><a href="" class="btn btn-success">Detail</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Munno</td>
                        <td>Aplikasi Sistem Informasi Karang Taruna </td>
                        <td><a href="" class="btn btn-success">Detail</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>