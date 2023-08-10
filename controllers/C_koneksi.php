<?php
//-buat kelas sesuai dengan nama file
//-didalamnya terdapat sebuah fungsi yang bernama connection


//ini adalah kelas, nama kelas harus sama persis dengan nama file

class CoffeeShop
{
    public $Menu;       
    public $NomorAntrian;
    public $Stok;
    public $BestSeller;       
    public $Pemesanan;
    public $Transaksi;

//ini adalah fungsi atau method yang bernama connection dan fungsi harus ada di dalam kelas
    public function Menu($Menu) {
        $this->Menu = $Menu;     
    }
    public function NomorAntrian($NomorAntrian) {            
        $this->NomorAntrian = $NomorAntrian;
    }

    public function Stok($Stok) {    
        $this->Stok = $Stok;
    }
    public function BestSeller($BestSeller) {
        $this->BestSeller = $BestSeller;     
    }
    public function Pemesanan($Pemesanan) {            
        $this->Pemesanan = $Pemesanan;
    }

    public function Transaksi($Transaksi) {    
        $this->Transaksi = $Transaksi;
    }

    public function tampilkan() {    
        echo "CoffeeShop " . $this->Menu . " memiliki " . $this->jumlahRoda . " buah roda dan " . $this->jumlahKursi . " kursi";
    }

}

