<?php
//modular untuk memanggil file dari folder template
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
?>

<div class="container-fluid">

    <!-- page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800"><?= $halaman ?></h1> -->

    <!--DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Barang</h6>
    </div>
    <div class="card-body">
        <div class=table-responsive>

                <!-- start isi dari konten card -->
                <div class="row">
                    <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Barang</h1>
                            </div>
                            <form action="../routers/R_barang.php?aksi=tambah" method="POST" class="user" enctype="multipart/form-data">


                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="id" name="id" hidden>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama Barang" name="nama_barang">
                                </div>

                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Stock" name="stock">
                                </div>

                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Harga" name="harga">
                                </div>

                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="Photo"
                                        placeholder="Photo" name="photo">
                                </div>

                                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a> -->

                                <div class="input-field">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah Barang" id="" name="tambah_barang">
                                </div>

                            </form>
                        </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
 
<?php
//modular untuk memanggil file dari folder template
include_once 'template/footer.php'; 
?>