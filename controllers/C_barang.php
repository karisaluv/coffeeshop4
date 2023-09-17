<?php

include_once 'C_koneksi.php';

 class C_Barang{
  
public function tampil(){

    $conn = new C_koneksi();

    //1.tampil - SELECT * FROM barang ORDER BY id DESC;

$sql = "SELECT * FROM 'barang' ORDER BY id DESC";

$query = mysqli_query($conn->conn(), $sql);

while ($q = mysql_fetch_object($query)){

    $hasil[]= $q;
}

return $hasil;

}

}
public function tambah($id, $nama, $qty, $harga, $photo){
    //2. tambah - INSERT INTO barang VALUES(1,'indomie','5','3000',''),(2,'teh gelas','5','1500','')

    $conn = new C_koneksi();

    $sql = "INSERT INTO barang VALUES('$id', '$nama', '$qty', '$harga', '$photo')";

    $query = mysqli_query($conn->conn(), $sql);

    if ($query){
        echo "Data Berhasil ditambahkan ke tabel barang";
    }else {
        echo "Data Tidak Berhasil ditambahkan ke tabel barang";
    }
    }

    public function edit($id){

        //3. edit - SELECT * FROM barang WHERE harga=1500

        $sql = "SELECT * FROM barang WHERE ID ='$id'";
    
    }

    Public function update($id, $nama, $qty, $harga, $photo){

        //update- UPDATE barang SET qty = '10' WHERE id = 2;

        $sql ="UPDATE barang SET nama_barang = '$nama', qty = '$qty' , harga = '$'harga', photo = '$photo' WHERE id = '$id'";

    }

    function delete(){

        // hapus = DELETE FROM barang WHERE nama_barang= 'INDOMIE'

        $sql = 'DELETE FROM'
    }


?>