<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="card -3" style="max-width: 540px;">
        <div class="row no-gutters">
            <!-- <div class="col-nd-4">
                <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img">
            </div> -->
            <div class="col-nd-8">
                <div class="card-body">
                    <h5 class="card-tittle"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Bos sejak
                            <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>