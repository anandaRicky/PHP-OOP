<?php

// jualan produk
// komik
// game

class Produk{
    // properti
    public $judul = "Judul", // mengisi nilai default
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Chainsaw Man";
$produk3->penulis = "Fujimoto Tatsuki";
$produk3->penerbit = "Shounen Jump";
$produk3->harga = 30000;

echo $produk3->getLabel();

echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Ennenn Shoubotai";
$produk4->penulis = "Ohkubo Atsushi";
$produk4->penerbit = "Shounen Jump";
$produk4->harga = 35000;

echo $produk4->getLabel();
?>

