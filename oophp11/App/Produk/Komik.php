<?php
class Komik extends Produk implements getInfoProduk
{
    /* 
        jika ingin menginplementasikan sebuah interface, tambahkan
        implements setelah extends
    */

    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo()
    {
        // komik : Chainsaw Man | Fujimoto Tatsuki, Shounen jump (Rp.30000) - 100 Halaman
        $str = "{$this->judul} | {$this->getLabel()} 
        - (Rp. {$this->getHarga()})";
        return $str;
    }

    public function getInfoProduk()
    {
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
?>