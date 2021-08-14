<?php
// Visibility - access modifier

class Produk{
    // properti
    public $judul ,
        $penulis ,
        $penerbit;

    protected $harga,
        $diskon = 0;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){   // salah satu method ajaib
        /* method ini akan langsung dijalankan secara otomatis
        ketika kita membuat object baru */
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function setHarga(){
        $harga = $this->harga - ($this->harga * $this->diskon / 100);
        if ($this->diskon > 0) {
            // (Rp. 20000 (Diskon 50%))
            return "{$harga} - Diskon $this->diskon%";
        } else {
        return "{$harga}";
        }
    }

    public function getLabel(){
        return "Penulis : $this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        // komik : Chainsaw Man | Fujimoto Tatsuki, Shounen jump (Rp.30000) - 100 Halaman
        $str = "{$this->judul} | {$this->getLabel()} 
        - (Rp. {$this->setHarga()})";
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

$produk1 = new Komik("Chainsaw Man","Fujimoto Tatsuki", "Shounen Jump", 30000,100);
// ketika menggunakan konstruktor kita tidak perlu melakukan ini
// $produk1->judul = "Chainsaw Man"; 
// $produk1->penulis = "Fujimoto Tatsuki";
// $produk1->penerbit = "Shounen Jump";
// $produk1->harga = 30000;
// echo $produk1->getLabel();
$produk1->setDiskon(50);
echo $produk1->getInfoProduk();

echo "<hr>";

$produk2 = new Game("Don't Starve New Home","Neil Amstrong","EP",150000,50);
// $produk2->judul = "Ennenn Shoubotai";
// $produk2->penulis = "Ohkubo Atsushi";
// $produk2->penerbit = "Shounen Jump";
// $produk2->harga = 35000;
// echo $produk2->getLabel();
// $produk2->setDiskon(50);
$produk2->setDiskon(0);
echo $produk2->getInfoProduk();
echo "<br>";
