<?php
// inheritance bagian 2

// use CetakInfo as GlobalCetakInfo;

class Produk{
    // properti
    public $judul ,
        $penulis ,
        $penerbit ,
        $harga ,
        $jmlHalaman,
        $jmlJam;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$jmlHalaman = 0, $jmlJam = 0) // salah satu method ajaib
    {
        /* method ini akan langsung dijalankan secara otomatis
        ketika kita membuat object baru */
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->jmlJam = $jmlJam;
    }

    public function getLabel(){
        return "Penulis : $this->penulis, $this->penerbit";
    }
}

class Komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} 
        - (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} 
        - (Rp. {$this->harga}) ~ {$this->jmlJam} Jam";
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

$produk1 = new Komik("Chainsaw Man","Fujimoto Tatsuki", "Shounen Jump", 30000,100,0); 
// ketika menggunakan konstruktor kita tidak perlu melakukan ini
// $produk1->judul = "Chainsaw Man"; 
// $produk1->penulis = "Fujimoto Tatsuki";
// $produk1->penerbit = "Shounen Jump";
// $produk1->harga = 30000;
// echo $produk1->getLabel();
echo $produk1->getInfoProduk();
echo "<hr>";

$produk2 = new Game("Don't Starve : New Home","Neil Amstrong","EP",150000,0,50);
// $produk2->judul = "Ennenn Shoubotai";
// $produk2->penulis = "Ohkubo Atsushi";
// $produk2->penerbit = "Shounen Jump";
// $produk2->harga = 35000;
// echo $produk2->getLabel();
echo $produk2->getInfoProduk();
echo "<br>";





?>

