<?php
abstract class Produk
{
    /* 
        ubah class produk menjadi class abstrack 
        karena kita sepakat bahwa kita tidak akan membuat object (instansi)
        pada kelas produk, melainkan hanya pada turunannya
    */

    // properti
    protected $judul,
        $penulis,
        $harga,
        $penerbit,
        $diskon = 0;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {   // salah satu method ajaib
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

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    // getter
    public function getJudul()
    {
        return $this->judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function getHarga()
    {
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

    public function getDiskon()
    {
        return $this->diskon;
    }

    /* 
        Update
        
        - karena method getInforProduk() sekarang menjadi abstract method
        maka tidak boleh diisi oleh apapun, nanti diisinya di kelas child/turunan
    */

    abstract public function getInfo();

    // ---------------- setter - Getter ----------------------

}
?>
