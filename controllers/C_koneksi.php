<?php
//-buat kelas sesuai dengan nama file
//-didalamnya terdapat sebuah fungsi yang bernama connection


//ini adalah kelas, nama kelas harus sama persis dengan nama file

class C_koneksi{


//ini adalah fungsi atau method yang bernama connection dan fungsi harus ada di dalam kelas
    public function connection(){

               // untuk isinya kita lanjutkan hari rabu

               // membuat fungsi untuk terkoneksi kedalam database coffeeshop4

               $conn = mysqli_connect('localhost', 'root', '', 'coffeeshop4');
               //untuk mengecek apakah koneksi berhasil dibuat atau tidak
               if (!$conn){
                  die("Koneksi gagal dibuat : ".mysql_connect_error());
               }else{
                echo "Koneksi berhasil dibuat";

               }
            }
         

    }
    //inisialisasi objek
            $koneksi = new C_koneksi();
// memanggil method atau fungsi yang ada didalam kelas c_koneksi
            $koneksi->connection();
?>