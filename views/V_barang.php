<?php
//session_start();
//modular memanggil file dari folder tampleate
$halaman = "barang";
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
include_once '../controllers/C_barang.php';
$barang = new C_barang();
?>              



            <div class = "row">
                <div class = "col-lg-2">
                <div class = "col-lg-8">
               
                <a href="V_tambah_barang.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        
                                        <span class="text"><i class = "fas fa-plus fa-sm text-white-50"></i></span><span>Tambah Barang</span>

                                    </a>   
                                    </div>
                                    </div>
                                    </div>



                                    <h2><b>Barang</b></h2>
                                    


                <!-- /.container-fluid -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Barang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Stock</th>
                                            <th>Harga</th>
                                            <th>Photo</th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        $nomor = 1;
                                        foreach ($barang->tampil() as $b){ 
                                            ?>    
                                            
                                        <tr>                                            
                                            <td><?php echo $nomor++?></td>
                                            <td><?= $b->nama_barang?></td>
                                            <td><?= $b->stock?></td>
                                            <td><?= $b->harga?></td>
                                            <td><?= $b->photo?></td>
                                                                                 
                                        <td>
                                            <center>
                                                <a href="V_edit_barang.php?id=<?= $b->id ?>"><button type="button" class="btn btn-round btn-primary">Edit</button></a>

                                                <a onclick="return confirm('Apakah yakin data akan di hapus?')"  href="../routers/R_barang.php?id=<?= $b->id ?>&aksi=hapus"><button type="button" name="hapus" class="btn btn-round btn-danger">Hapus</button></a>
                                        </center>                                          
                                </td>


                                        </tr>
                                    
                                        <?php }?>
                                        
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Stock</th>
                                            <th>Harga</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                                        
<?php
    include_once 'template/footer.php';
                                        ?>
