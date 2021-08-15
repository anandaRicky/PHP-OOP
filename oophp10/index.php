<?php

require_once 'App/init.php';

$produk1 = new Komik("Chainsaw Man", "Fujimoto Tatsuki", "Shounen Jump", 30000, 100);
// ketika menggunakan konstruktor kita tidak perlu melakukan ini
// $produk1->judul = "Chainsaw Man"; 
// $produk1->penulis = "Fujimoto Tatsuki";
// $produk1->penerbit = "Shounen Jump";
// $produk1->harga = 30000;
// echo $produk1->getLabel();
// $produk1->setDiskon(70);
// echo $produk1->getInfoProduk();

// echo "<br>";

$produk2 = new Game("Don't Starve New Home", "Neil Amstrong", "EP", 150000, 50);
// $produk2->judul = "Ennenn Shoubotai";
// $produk2->penulis = "Ohkubo Atsushi";
// $produk2->penerbit = "Shounen Jump";
// $produk2->harga = 35000;
// echo $produk2->getLabel();
// $produk2->setDiskon(50);
// $produk2->setDiskon(10);
// echo $produk2->getInfoProduk();
// echo "<hr>";

$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
