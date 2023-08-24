<?php

        //modularisasi
        //menghubungkan dari file c_koneksi ke c_login(file lain ke file lainnya)
        include_once 'C_koneksi.php';
        //membuat kelas  login
        class C_login{
     
        
        //membuat fungsi untuk menangani register user
        //parameter adalah nilai yang diberikan kepada sebuah fungsi,metode,atau prosedur sebagai masukan untuk mengatur atau mengubah perilaku dari tindakan yang di jalankan oleh fungsi tersebut.          
        public function register($id=0, $nama, $email, $pass, $role) {
          
        //membuat sebuah variabel yang bertipe data objek dari kelas/file C_koneksi 
        $koneksi = new C_koneksi();


        //perintah untuk memasukkan data dari form regis kedalam tabel user
        $sql = "INSERT INTO user VALUES ('$id', '$nama', '$email', '$pass', '$role', '')";
     
        //$sql2 = "INSERT INTO (id, nama, email, password, role, photo,) users VALUES ('$id', '$nama', '$email', '$pass', '$role', '')";

        //mysql_query = function bawaan dari php
        //mengeksekusi perintah
        //memiliki 2 paramete, 1. koneksi, 2. perintahnya
        $query = mysqli_query($koneksi->conn(), $sql); //-> true/false

        //untuk mengecek data hasil dari query
        if ($query) {
            echo "Data berhasil di tambahkan";
        }else{
            echo "Data gagal ditambahkan";
        }


    }

        //membuat fungsi untuk login user
        public function login($email, $pass) {

            //untuk membuat sebuah variabel
            $conn = new C_koneksi();

            //mengecek apakah si tombol log in sudah di tekan atau belum
            if (isset($_POST['login'])) {

                //query untuk menampilkan data yang dipilih(email)
                $sql = "SELECT * FROM user WHERE email = '$email'";

                //eksekutor
                $query = mysqli_query($conn->conn(), $sql);

                //mengubah data dari bertipe data objek menjadi array asosiatif
                $data = mysqli_fetch_assoc($query);

                //untuk mengecek apakah ada data dari hasil query
                 if ($data){
                    
                       //untuk mengecek atau membandingkan inputan password dari user dengan password dari tabel user
                    if (password_verify($pass, $data['password'])){

                        //untuk mengecek apakah posisi login sebagai admin, atau mengecek apakah role user itu sebagai admin atau bukan
                        if ($data ['role'] == 'admin'){


                        //menampung data dari query database yang nantinya akan digunakan pada halaman admin atau user ketika log in berhasil
                        $_SESSION['data'] = $data;
                        $_SESSION['role'] = $data['role'];

                            // fungsi .. untuk memanggil folder luar
                            //memindahkan halaman ke halaman home
                             header("Location: ../views/home.php");

                             //fungsi exit agar tidak error, menampilkan proses
                              exit;

                              //untuk mengecek apakah posisi login sebagai user, atau mengecek apakah role user itu sebagai admin?user  setelah proses log in berhasil
                        }elseif ($data ['role'] == 'user'){
                          
                             //menampung data dari query database yang nantinya akan digunakan pada halaman admin atau user ketika log in berhasil
                            $_SESSION['data'] = $data;
                            $_SESSION['role'] = $data['role'];
    
                                // fungsi .. untuk memanggil folder luar
                                //memindahkan halaman ke halaman home
                                 header("Location: ../views/home.php");
    
                                 //fungsi exit agar tidak error untuk menghentikan proses 
                                  exit;
    
                        }   

                    }else{
                        echo "cek password";
                    }

                }else{
                    echo "cek username dan password";
                }



                }

        }

     }


?>

