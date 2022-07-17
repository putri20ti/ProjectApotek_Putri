<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah

                                Obat</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $obat ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah

                                Penjualan</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah

                                User</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $us ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-secondary text-center rounded p-4">
        <div class="card-body">
            <div class="chart-bar">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
</div>