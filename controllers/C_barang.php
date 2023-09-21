<?php

   include_once 'C_koneksi.php';
class C_barang{

    public function tampil() {

       $conn = new C_koneksi();

        $sql = "SELECT * FROM barang ORDER BY id DESC";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }

        return $hasil;
    }

    public function tambah($id,$nama,$stock,$harga,$photo) {
        $sql = "INSERT INTO barang VALUES
        ('$id','$nama','$stock','$harga','$photo')";

        $conn = new C_koneksi();

        $query = mysqli_query($conn->conn(),$sql);
        if ($query) {
            echo "Data berhasil ditambahkan ke tabel";
        }else{
            echo "Data gagal ditambahkan";
        }
    }
    public function edit($id) {
        $conn = new C_koneksi();

        $sql ="SELECT * FROM barang WHERE id = '$id'";

        $query = mysqli_query($conn->conn(),$sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }

        return $hasil;

    }
    
    public function update ($id,$nama,$stock,$harga,$photo) {

        $conn = new C_koneksi();

        $sql = "UPDATE barang SET nama_barang = '$nama', stock = '$stock', harga = '$harga', photo = '$photo' WHERE id = '$id'";

        $query = mysqli_query($conn->conn(), $sql);


        if ($query) {
            echo "<script>alert('Data Berhasil Diupdate ke Tabel Barang');window.location='../views/V_barang.php'</script>";
              
        }else {
            echo "Data Tidak Berhasil Diupdate ke Tabel Barang";
        }
    }
    public function delete($id){

        $conn = new C_koneksi();
    
        $sql = "DELETE FROM Barang WHERE id = '$id'";

        mysqli_query($conn->conn(), $sql);

        header("Location:../views/V_barang.php");

        
        
    }

}
?>