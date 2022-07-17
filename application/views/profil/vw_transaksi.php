<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?= $obat['id']; ?>">
                                    <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                                    <input type="hidden" name="jumlah_stok" value="<?= $obat['jumlah_stok'] ?>">
                                    <div class="form-group">
                                        <label for="nama">Nama Obat</label>
                                        <input name="nama" type="text" value="<?= $obat['nama']; ?>" readonly
                                            class="form-control" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="satuan">Satuan</label>
                                        <input name="satuan" type="text" value="<?= $obat['satuan']; ?>" readonly
                                            class="form-control" id="satuan">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_stok">Stok</label>
                                        <input name="jumlah_stok" value="<?= $obat['jumlah_stok']; ?>" type="text"
                                            readonly class="form-control" id="jumlah_stok">
                                    </div>

                                    <div class="form-group">
                                        <label for="harga_jual">Harga</label>
                                        <input name="harga_jual" value="<?= $obat['harga_jual']; ?>" type="text"
                                            readonly class="form-control" id="harga_jual">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah</label>
                                        <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
                                        <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="total">Total Harga</label>
                                        <input type="text" name="total" id="total" readonly class="form-control">
                                    </div>
                                    <button type="submit" id="tambah" name="tambah"
                                        class="btn btn-primary float-right">Tambah Ke Transaksi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>