<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="table-responsive">
            <?= $this->session->flashdata('message');?>
            <table class="table">
                <div class="float-right">
                    <a href="<?= base_url('Profil/export') ?>" class="btn btn-primary m-2"><i
                            class="fa fa-filepdf"></i>&nbsp;&nbsp;Export</a>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total Bayar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($transaksi as $us) : ?>
                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td><?= $us['nama']; ?></td>
                        <td><?= $us['harga_jual']; ?></td>
                        <td><?= $us['jumlah']; ?></td>
                        <td><?= $us['total']; ?></td>
                        <td><a href="<?= base_url('profil/deltransaksi/') . $us['id']; ?>" class="btn btn-danger"><i
                                    class="fa fa-trash"></a></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Table End -->