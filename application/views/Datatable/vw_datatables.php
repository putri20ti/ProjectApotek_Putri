    <div class="container-fluid">

        <!-- Page Heading -->
        <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a></p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Obat</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Satuan</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Stok</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php

                    foreach($obat as $i):

                $nama=$i['nama'];
                $satuan=$i['satuan'];
                $harga_beli=$i['harga_beli'];
                $harga_jual=$i['harga_jual'];
                $jumlah_stok=$i['jumlah_stok'];
                
?>
                            <tr>

                                <td><?php echo $nama;?> </td>
                                <td><?php echo $satuan;?> </td>
                                <td><?php echo $harga_beli;?> </td>
                                <td><?php echo $harga_jual;?> </td>
                                <td><?php echo $jumlah_stok;?> </td>

                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
                <script src="<?=base_url('assets/')?>js/jquery-1.11.1.min.js"></script>
                <script src="<?=base_url('assets/')?>js/bootstrap.min.js"></script>
                <script src="<?=base_url('assets/')?>js/jquery.dataTables.min.js"></script>
                <script src="<?=base_url('assets/')?>js/dataTables.bootstrap.js"></script>
                <script type="<?=base_url('assets/')?>text/javascript">
                $(function() {
                    $('#example1').dataTable();
                });
                </script>
                </body>

                </html>