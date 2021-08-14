<?php
// inheritance

// use CetakInfo as GlobalCetakInfo;

class Produk{
    // properti
    public $judul ,
        $penulis ,
        $penerbit ,
        $harga ,
        $jmlHalaman,
        $jmlJam,
        $jenis;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$jmlHalaman = 0, $jmlJam = 0, $jenis = "jenis") // salah satu method ajaib
    {
        /* method ini akan langsung dijalankan secara otomatis
        ketika kita membuat object baru */
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->jmlJam = $jmlJam;
        $this->jenis = $jenis;
    }

    public function getLabel(){
        return "Penulis : $this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        // komik : Chainsaw Man | Fujimoto Tatsuki, Shounen jump (Rp.30000) - 100 Halaman
        $str = "{$this->jenis} : {$this->judul} | {$this->getLabel()} 
        - (Rp. {$this->harga})";

        if ($this->jenis == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman";
        } else if ($this->jenis == "Game" ){
            $str .= " ~ {$this->jmlJam} Jam";
        }
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

$produk1 = new Produk("Chainsaw Man","Fujimoto Tatsuki", "Shounen Jump", 30000,100,0,"Komik"); 
// ketika menggunakan konstruktor kita tidak perlu melakukan ini
// $produk1->judul = "Chainsaw Man"; 
// $produk1->penulis = "Fujimoto Tatsuki";
// $produk1->penerbit = "Shounen Jump";
// $produk1->harga = 30000;
// echo $produk1->getLabel();
echo $produk1->getInfoLengkap();
echo "<hr>";

$produk2 = new Produk("Don't Starve : New Home","Neil Amstrong","EP",150000,0,50,"Game");
// $produk2->judul = "Ennenn Shoubotai";
// $produk2->penulis = "Ohkubo Atsushi";
// $produk2->penerbit = "Shounen Jump";
// $produk2->harga = 35000;
// echo $produk2->getLabel();
echo $produk2->getInfoLengkap();
echo "<br>";





?>

