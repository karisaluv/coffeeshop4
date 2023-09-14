<?php
    //modular untuk memanggil file dari folder template
    include_once 'template/header.php';
    include_once 'template/sidebar.php';
    include_once 'template/topbar.php';
   include_once '../controllers/C_barang.php';

$barang = new C_barang();


?>
<!-- Begin Page Heading -->
<div class="container-fluid">

                     
                    <!-- Page Heading -->
                   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href = "tambah_barang.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus da-sm text-white-50"></i>Tambah Barang
                   </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($barang->tampil() as $b){
                                    ?>
                                    <tr>
                                        <td><?php echo $nomor++?></td>
                                        <td><?php echo $b->nama_barang?></td>
                                        <td><?php echo $b->harga?></td>
                                        <td><?php echo $b->stock?></td>
                                        <td><?php echo $b->foto?></td>
                                        <td><a href="C_koneksi.php?id=<?php echo $data ['id']; ?>" class="btn btn-primary btn-block">Hapus</a>
                                        <a href="C_koneksi.php?id=<?php echo $data ['id']; ?>" class="btn btn-primary btn-block">Edit</a>
                                        </td>
                                    </tr>
                                        <?php } ?>

                                        </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                                        
                                        </div>
                   <!-- End of Main Content -->

                   <!-- Footer -->

                   <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span> Copyright &copy; Your Website 2020</span>
                                        </div>
                                        </div>
                                        </footer>
                                          <!-- End of Footer -->

                                        </div>



