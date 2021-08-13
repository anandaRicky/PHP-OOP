<?php

class Produk{
    // properti
    public $judul ,
        $penulis ,
        $penerbit ,
        $harga ;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) // salah satu method ajaib
    {
        /* method ini akan langsung dijalankan secara otomatis
        ketika kita membuat object baru */
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
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

$produk1 = new Produk("Chainsaw Man","Fujimoto Tatsuki", "Shounen Jump", "30000"); 
// ketika menggunakan konstruktor kita tidak perlu melakukan ini
// $produk1->judul = "Chainsaw Man"; 
// $produk1->penulis = "Fujimoto Tatsuki";
// $produk1->penerbit = "Shounen Jump";
// $produk1->harga = 30000;
echo $produk1->getLabel();

echo "<hr>";

$produk2 = new Produk("Ennenn Shoubotai","Ohkubo Atsushi","Shounen Jump",35000);
// $produk2->judul = "Ennenn Shoubotai";
// $produk2->penulis = "Ohkubo Atsushi";
// $produk2->penerbit = "Shounen Jump";
// $produk2->harga = 35000;
echo $produk2->getLabel();

echo "<br>";

$infoProduk1 = new CetakInfo();
echo $infoProduk1->cetak($produk1);

?>

