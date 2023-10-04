<?php
include_once '../controllers/C_barang.php';

$barang = new C_barang();
 
if ($_GET['aksi'] == 'tambah') {

    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];

    //unggah gambar atau poto
    //ekstensi yang diperbolehkan saat upload poto
    $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');

    //memngambil nama photo
    $nama_photo = $_FILES['photo']['name'];

    //digunakan untuk memisahkan string menjadi array berdasarkan karakter yang ditentukan.disini,string yang dipisahkan adalah $nama_photo,yang kemungkinan berisi nama file gambar dengan ekstensi.
    $x = explode('.', $nama_photo);

    // setelah string dipisahkan dengan explode(),kita menggunakan fungsi end() untuk mendapatkan elemen terakhir dari array yanng dihasilkan( yaitu, ekstensi file). kemudian fungsi strtolower()digunakan untuk mengonversi ekstensi ke huruf kecil,untuk menghindari masalah sesnsitivitas huruf besar/kecil dalam pemprosesan lebih lanjut.
    $ekstensi = strtolower(end($x));

    //mendapatkan ukuran phooto yang di update
    $ukuran = $_FILES['photo']['size'];

    //untuk mendapatkan temporary file yg di upload
    $file_tmp = $_FILES['photo']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
         
        if ($ukuran < 1044070) {

            move_uploaded_file($file_tmp, '../assets/img/' . $nama_photo);

            
           $query = $barang->tambah($id=0, $nama_barang, $stock, $harga, $nama_photo);
        }else{
            echo "UKURAN GAMBAR TERLALU BESAR";
        }
    }else{
        echo "EKSTENSI TIDAK DIPERBOLEHKAN";

}

    
}elseif ($_GET['aksi'] == 'update'){

    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];
    
 //unggah gambar atau poto
    //ekstensi yang diperbolehkan saat upload poto
    $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');

    //memngambil nama photo
    $nama_photo = $_FILES['photo']['name'];

    //digunakan untuk memisahkan string menjadi array berdasarkan karakter yang ditentukan.disini,string yang dipisahkan adalah $nama_photo,yang kemungkinan berisi nama file gambar dengan ekstensi.
    $x = explode('.', $nama_photo);

    // setelah string dipisahkan dengan explode(),kita menggunakan fungsi end() untuk mendapatkan elemen terakhir dari array yanng dihasilkan( yaitu, ekstensi file). kemudian fungsi strtolower()digunakan untuk mengonversi ekstensi ke huruf kecil,untuk menghindari masalah sesnsitivitas huruf besar/kecil dalam pemprosesan lebih lanjut.
    $ekstensi = strtolower(end($x));

    //mendapatkan ukuran phooto yang di update
    $ukuran = $_FILES['photo']['size'];

    //untuk mendapatkan temporary file yg di upload
    $file_tmp = $_FILES['photo']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
         
        if ($ukuran < 1044070) {

            move_uploaded_file($file_tmp, '../assets/img/' . $nama_photo);

            
           $query = $barang->update($id, $nama_barang, $stock, $harga, $nama_photo);
        }else{
            echo "UKURAN GAMBAR TERLALU BESAR";
        }
    }else{
        echo "EKSTENSI TIDAK DIPERBOLEHKAN";

}

    

}elseif ($_GET['aksi'] == 'hapus') {
    
    $id = $_GET['id'];

    $barang->delete($id);
    
}
?>