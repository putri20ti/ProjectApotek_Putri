<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                        <div class="row">

                            <div class="card-header">
                                Detail Obat
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted"><?= $obat['nama']; ?></h6>
                                <div class="row">
                                    <div class="col-md-4">Nama Obat/Barang</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6"><?= $obat['nama']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">Satuan</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6"><?= $obat['satuan']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">Harga Beli</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6"><?= $obat['harga_beli']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">Harga Jual</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6"><?= $obat['harga_jual']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">Stok</div>
                                    <div class="col-md-2">:</div>
                                    <div class="col-md-6"><?= $obat['jumlah_stok']; ?></div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center">
                                <a href="<?= base_url('Obat') ?>" class="btn btn-danger">Tutup</a>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>