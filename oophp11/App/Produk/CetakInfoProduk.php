<?php
class CetakInfoProduk
{
    private $daftarProduk;

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $pro) {
            $str .= "- {$pro->getInfoProduk()} <br>";
        }

        return $str;
    }
}
