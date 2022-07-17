<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col text-center">
            <h3 class="h3 text-dark"><?= $title ?></h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <td>Nama Obat</td>
                    <td>Harga Satuan</td>
                    <td>Jumlah</td>
                    <td>Total Bayar</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transaksi as $us) : ?>
                <tr>
                    <td><?= $us['nama'] ?></td>
                    <td><?= $us['harga_jual'] ?></td>
                    <td><?= $us['jumlah'] ?></td>
                    <td><?= $us['total'] ?> </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>