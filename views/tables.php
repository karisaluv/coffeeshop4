<?php 
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>

                                    
                                        <tr>
                                            <th>no</th>
                                            <th>Nama</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>photo</th>
                                            <th>Action</th>
                                            <th>  <a href=""class="btn btn-primary btn-bock">edit</a>
                                              <a href="" class="btn btn-primary btn-bock">hapus</a></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>teh sosro</td>
                                            <th>Hot/Ice</th>
                                            <td>Rp. 8.000</td>
                                            <td>-</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>teh pucuk</td>
                                            <th>Hot/Ice</th>
                                            <td>Rp. 4.000</td>
                                            <td>-</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>teh botol</td>
                                            <th>Hot/Ice</th>
                                            <td>Rp. 5.000</td>
                                            <td>-</td>
                                            <td>1</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>teh kotak</td>
                                            <th>Hot/Ice</th>
                                            <td>Rp. 6.000</td>
                                            <td>-</td>
                                            <td>1</td>
                                          
                                        </tr>
                                        
                                    </tbody>
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
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <?php 
include_once 'template/footer.php';
?>