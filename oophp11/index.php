<?php

require_once 'App/init.php';

// $produk1 = new Komik("Chainsaw Man", "Fujimoto Tatsuki", "Shounen Jump", 30000, 100);


// $produk2 = new Game("Don't Starve New Home", "Neil Amstrong", "EP", 150000, 50);

// $cetakProduk = new CetakInfoProduk();

// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// echo "<br>";

/* 
    cara mmemanggil namespace adalah dengan menyebut 
    namespace nya juga

    Usulan cara menulis namespace adalah :
    namespace vendor\Namespace\SubNamespace;

    - vendor biasanya berupa nama 'pembuatnya'
    atau nama aplikasinya

    - kita juga bisa menggunakan alias dengan cara :
    use namespace\vendor\.. as namaBaru;
*/

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ServiceUser();
echo "<hr>";
new ProdukUser();
echo "<hr>";

