<?php
// constant

/* cara mendefinisikan constant ada 2, yaitu

    1. define(NAMA_KONSTANTA,Value) - tidak perlu pakai $
    2. const NAMA = Value - tidak perlu pakai dolar
    
    - usahakan ketika mendefinisikan Constant selalu gunakan huruf 
        besar semua
    - apa perbedaan dari kedua pendefinisian Constant di atas? 
        1. define tidak bisa diletakan di dalam class (harus di luar class)
        2. const bisa digunakan/dibuat didalam class  (bisa di dalam class)
*/

define("NAMA","Ananda Ricky Fauzi");

echo NAMA;

echo "<br>";

const UMUR = 19;

echo UMUR;

class Coba{
    // define("JURUSAN","Teknologi Informasi"); 
    /* jika melakukan pendefinisian Constant dengan menggunakan 
        fungsi define() di dalam class maka akan terjadi error
    */

    const JURUSAN = "Teknologi Informasi";
    /* Berbeda jika kita menggunakan const, maka tidak akan
        terjadi error
    */
}

/* Jika ingin mengakses const di dalam class, maka kita harus menggunakan
    metode static keyword (yang pake :: ) 
*/
echo "<br>";

echo Coba::JURUSAN;


/*
    Di dalam PHP sebenarnya sudah terdapat magic const sebagai berikut:
    1. __LINE__ = yang berfungsi untuk menunjukan Pada Line berapa ketika
        diprint
    2. __FILE__ = akan menampilkan alamat dari file yang sedang dieksekusi

*/
echo "<br>";

echo __LINE__;
/* perintah di atas akan ngeprint '54' karena ada const __LINE__ ada di baris ke 54.
    jika __LINE__ dipindahkan ke baris ke '55' maka yang akan diprint juga akan berubah
    menjadi '55' bukan '54' lagi.
*/

echo "<br>";

echo __FILE__;
/*
    jika perintah diatas dieksekusi, maka akan menunjukan lokasi direktori dari file ini
*/

echo "<br>";

echo __DIR__; 
?>
