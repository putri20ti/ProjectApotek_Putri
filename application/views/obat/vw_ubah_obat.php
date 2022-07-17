<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="table-responsive">
            <h2 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h2>
            <table class="table">
                <div class="bg-secondary rounded h-100 p-4">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $obat['id']; ?>">
                        <div class=" form-floating mb-3">
                            <input type="nama" name="nama" value="<?= $obat['nama']; ?>" class="form-control"
                                id="floatingInput" placeholder="Nama Obat">
                            <label for="floatingInput">Nama</label>
                            <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="satuan" name="satuan" value="<?= $obat['satuan']; ?>" class="form-control"
                                id="floatingInput" placeholder="Satuan Obat">
                            <label for="floatingInput">Satuan</label>
                            <?= form_error('satuan', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="harga_beli" name="harga_beli" value="<?= $obat['harga_beli']; ?>"
                                class=" form-control" id="floatingInput" placeholder="Harga Beli">
                            <label for="floatingPassword">Harga Beli</label>
                            <?= form_error('harga_beli', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="harga_jual" name="harga_jual" value="<?= $obat['harga_jual']; ?>"
                                class=" form-control" id="floatingInput" placeholder="Harga Jual">
                            <label for="floatingPassword">Harga Jual</label>
                            <?= form_error('harga_jual', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="jumlah_stok" name="jumlah_stok" value="<?= $obat['jumlah_stok']; ?>"
                                class=" form-control" id="floatingInput" placeholder="Jumlah Stok">
                            <label for="floatingInput">Jumlah Stok</label>
                            <?= form_error('jumlah_stok', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <a href=" <?= base_url('Obat') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Obat</button>
                </div>
        </div>
    </div>
</div>
</div>
</div>