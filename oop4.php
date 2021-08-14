<?php
// overriding - menggunakan method dengan nama yang sama namun berasala dari parent

// use CetakInfo as GlobalCetakInfo;

class Produk{
    // properti
    public $judul ,
        $penulis ,
        $penerbit ,
        $harga;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){   // salah satu method ajaib
        /* method ini akan langsung dijalankan secara otomatis
        ketika kita membuat object baru */
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "Penulis : $this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        // komik : Chainsaw Man | Fujimoto Tatsuki, Shounen jump (Rp.30000) - 100 Halaman
        $str = "{$this->judul} | {$this->getLabel()} 
        - (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";
        /*  
            menggunakan parent::nama_method() berguna untuk 
            menggunakan method dengan nama yang sama tapi berasal
            dari parent
        */
        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam";
        return $str;
    }
}



class CetakInfo{
    public function cetak(Produk $produk){ 
        /* parameter diberi kelas produk supaya tidak
        dapat dimasuki hal lain selain apa yang berada
        di kelas produk dengan object $produk*/
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }


}

$produk1 = new Komik("Chainsaw Man","Fujimoto Tatsuki", "Shounen Jump", 30000,100); 
// ketika menggunakan konstruktor kita tidak perlu melakukan ini
// $produk1->judul = "Chainsaw Man"; 
// $produk1->penulis = "Fujimoto Tatsuki";
// $produk1->penerbit = "Shounen Jump";
// $produk1->harga = 30000;
// echo $produk1->getLabel();
echo $produk1->getInfoProduk();
echo "<hr>";

$produk2 = new Game("Don't Starve New Home","Neil Amstrong","EP",150000,50);
// $produk2->judul = "Ennenn Shoubotai";
// $produk2->penulis = "Ohkubo Atsushi";
// $produk2->penerbit = "Shounen Jump";
// $produk2->harga = 35000;
// echo $produk2->getLabel();
echo $produk2->getInfoProduk();
echo "<br>";





?>

