<?php
// buat array 6 produk fashion dengan berisi id, ada nama barang, jumlah stok, harganya, deksripsi, tanggal produksi
echo "==================================\n";
echo "======= PRODUK FASHION =======\n";
echo "==================================\n";
$array = [
    "Produk Fashion" => [
        "Id" => 8,
        "Nama Barang" => "Koko Moslem",
        "Harga" => "Rp. 200.000",
        "Jumlah stok" => "9 Stok",
        "Deskripsi" => "Baju ini sangat cocok dan elegant saat digunakan untuk beribadah",
        "Tanggal Produksi" => "18 Juli 2023"
    ],
];

foreach ($array as $key => $value) {
    echo ". $key\n";
    foreach ($value as $key1 => $value1) {
        echo "$key1 : " . $value1 . PHP_EOL;
    }
}


// Manipulasi string : mengubah/mengedit, menambah, menghapus tipe data string

// strlen : menghitung panjang string
// $string = "Hello World Coding";
// var_dump(strlen("$string"));

// str_word_count() : menghitung jumlah kata dalam string
// var_dump(str_word_count($string));

// str_replace : menghitung string dgn string yg baru

// number_format : mengubah angka menjadi string dengan format saja
// $number = "1_989_987.78";
// var_dump(number_format($number, 1, ",", "."));

//strtoupper : mengubah semua huruf jadi kapital
// strtolower : huruf jadi kecil semua
// $besar = "terminal";
// $kecil = "TERMINAL";
// var_dump(strtoupper($besar));
// var_dump(strtolower($kecil));

// ucwords : ubah huruf pertama jadi kapital
// str_repeat : mengulang string
// substr : mengambil beberapa karakter dari data string
// var_dump(substr($string, 2, 1));

// menggunakan { } (curly brace) pada variabel didalam string
// $buku = "buku";
// echo "melakukan pem{$buku}an" . "\n saya beli buku Anda";

// mengubah tipe data 
// jadi string
$a = (string) 100;
var_dump($a);

// jadi float
$b = (float) trim(fgets(STDIN));

$string1 = "Hello Coding\n";
$array = (array) $string1;
$r = ["Hello Coding"];
// explode : ubah string jadi array
$c = ["Hello", "Coding"];
var_dump(explode(" ", $string1));

// implode : ubah array jadi string
var_dump(implode(",", $c));
