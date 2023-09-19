<?php


include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';

?>



<!-- Begin page content-->
<div class="container-fluid">
    <h1>
        Selamat Datang <?= $_SESSION['data']['nama']?>, dan rolenya sebagai <?= $_SESSION['data'] ['role'] ?>
        
    </h1>
</div>
<form action ="routers/r_login.php?aksi=login" method="POST" class="user">
                    <a href="../index.php">logout</a>
<!-- /.container-fluid-->
<?php
//modular untuk memanggil fie dari folder template
include_once 'template/footer.php';
?>