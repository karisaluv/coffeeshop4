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
                                            <th>menu</th>
                                            <th>Opsi</th>
                                            <th>harga</th>
                                            <th>stok</th>
                                            <th>photo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cappucinno</td>
                                            <th>Hot/Ice</th>
                                            <td>Rp.26.000 / 29.000</td>
                                            <td>50</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Americano</td>
                                            <th>Hot/Ice</th>
                                            <td>Rp. 19.000 / 19.000</td>
                                            <td>20</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Chocolate</td>
                                            <th>Hot/Ice</th>
                                            <td>Rp. 27.000 / 35.000</td>
                                            <td>50</td>
                                            <td>1</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Greentea</td>
                                            <th>Hot/Ice</th>
                                            <td>Rp. 27.000 / 35.000</td>
                                            <td>50</td>
                                            <td>1</td>
                                          
                                        </tr>
                                        <tr>
                                            <td>Redvelvet</td>
                                            <th>Hot/Ice</th>
                                            <td>Rp. 27.000 / 35.000</td>
                                            <td>50</td>
                                            <td>1</td>
                                          
                                        </tr>
                                        <tr>
                                            <td>Potato wedges</td>
                                            <th>-</th>
                                            <td>Rp. 31.000</td>
                                            <td>50</td>
                                            <td>1</td>
                                          
                                        </tr>
                                        <tr>
                                            <td>Steak</td>
                                            <th>-/th>
                                            <td>Rp. 75.000</td>
                                            <td>50</td>
                                            <td>1</td>
                                          
                                        </tr>
                                        <tr>
                                            <td>chicken teriyaki</td>
                                            <th>-</th>
                                            <td>Rp. 25.000</td>
                                            <td>50</td>
                                            <td>1</td>
                                          
                                        </tr>
                                        <tr>
                                            <td>Dimsum</td>
                                            <th>-</th>
                                            <td>Rp.15.000</td>
                                            <td>50</td>
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