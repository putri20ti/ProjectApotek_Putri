                   <div class="col-12">
                       <div class="bg-secondary rounded h-100 p-4">
                           <div class="table-responsive">
                               <?= $this->session->flashdata('message');?>
                               <table class="table">
                                   <div class="col-sm-12 col-xl-6"><a href="<?= base_url() ?>Obat/tambah"
                                           class="btn btn-primary m-2">Tambah Obat</a>
                                   </div>
                                   <thead>
                                       <tr>
                                           <th scope="col">No</th>
                                           <th scope="col">Nama</th>
                                           <th scope="col">Satuan</th>
                                           <th scope="col">Harga Beli</th>
                                           <th scope="col">Harga Jual</th>
                                           <th scope="col">Jumlah Stok</th>
                                           <th scope="col">Aksi</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php $i = 1; ?>
                                       <?php foreach ($obat as $us) : ?>
                                       <tr>
                                           <td> <?= $i; ?>.</td>
                                           <td><?= $us['nama']; ?></td>
                                           <td><?= $us['satuan']; ?></td>
                                           <td><?= $us['harga_beli']; ?></td>
                                           <td><?= $us['harga_jual']; ?></td>
                                           <td><?= $us['jumlah_stok']; ?></td>
                                           <td>
                                               <a href="<?= base_url('Obat/hapus/') . $us['id']; ?>"
                                                   class="badge badge-danger">Hapus</a>
                                               <a href="<?= base_url('Obat/edit/') . $us['id']; ?>"
                                                   class="badge badge-warning">Edit</a>
                                               <a href="<?= base_url('Obat/detail/') . $us['id']; ?>"
                                                   class="badge badge-warning">Detail</a>
                                           </td>
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