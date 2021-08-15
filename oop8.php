<?php
/* 
    abstract class 

    - kelas abstract sebenarnya hanya sebuah keputusan desain program saja
    jadi tidak digunakan pun tidak apa - apa, hanya saja supaya memudahkan
    dalam pemrograman nanti karena lebih terpusat

    - kelas abstract tidak boleh diinstansiasi (dibuat objectnya) dan hanya sebagai
    templatenya saja 

    - begitupun juga dengan method abstract, tidak boleh diisi apapun, hanya boleh
    didefinisikan saja
*/

abstract class Produk{
    /* 
        ubah class produk menjadi class abstrack 
        karena kita sepakat bahwa kita tidak akan membuat object (instansi)
        pada kelas produk, melainkan hanya pada turunannya
    */
    
    // properti
    private $judul ,
        $penulis ,
        $harga,
        $penerbit,
        $diskon = 0;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){   // salah satu method ajaib
        /* 
            method ini akan langsung dijalankan secara otomatis
            ketika kita membuat object baru 
        */
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // ------------------- setter - Getter ----------------------- 
        // setter

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

        // getter
    public function getJudul(){
        return $this->judul;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function getHarga(){
        $harga = $this->harga - ($this->harga * $this->getDiskon() / 100);
        if ($this->diskon > 0) {
            // (Rp. 20000 (Diskon 50%))
            return "{$harga} - Diskon {$this->getDiskon()}%";
        } else {
            return "{$harga}";
        }
    }

    public function getLabel()
    {
        return "Penulis : $this->penulis, $this->penerbit";
    }

    public function getDiskon(){
        return $this->diskon;
    }
    
    abstract public function getInfoProduk();
    /* 
        Update
        
        - karena method getInforProduk() sekarang menjadi abstract method
        maka tidak boleh diisi oleh apapun, nanti diisinya di kelas child/turunan
    */

    public function getInfo(){
        // komik : Chainsaw Man | Fujimoto Tatsuki, Shounen jump (Rp.30000) - 100 Halaman
        $str = "{$this->judul} | {$this->getLabel()} 
        - (Rp. {$this->getHarga()})";
        return $str;
    }

    // ---------------- setter - Getter ----------------------

}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";
        /*  
            - menggunakan parent::nama_method() berguna untuk 
            menggunakan method dengan nama yang sama tapi berasal
            dari parent

            - update -> ganti parent::getInfoProduk() menjadi $this->getInfo()
            karena method getInfoProduk menjadi kelas abstract yang tidak boleh
            ada isinya. lalu kita pindahkan isinya ke dalam method
            getInfo()
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
        $str = "Game : ". $this->getInfo() ." ~ {$this->waktuMain} Jam";
        return $str;
    }
}

class CetakInfoProduk{
    private $daftarProduk;

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk; 
    }

    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $pro){
            $str .= "- {$pro->getInfoProduk()} <br>";
        }

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
$produk1->setDiskon(70);
echo $produk1->getInfoProduk();

echo "<br>";

$produk2 = new Game("Don't Starve New Home","Neil Amstrong","EP",150000,50);
// $produk2->judul = "Ennenn Shoubotai";
// $produk2->penulis = "Ohkubo Atsushi";
// $produk2->penerbit = "Shounen Jump";
// $produk2->harga = 35000;
// echo $produk2->getLabel();
// $produk2->setDiskon(50);
$produk2->setDiskon(10);
echo $produk2->getInfoProduk();
echo "<hr>";

$cetakProduk = new CetakInfoProduk(); 

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
