<?php

// SOAL 1
echo "Masukkan Produk Elektronik: ";
$produk = strtoupper(trim(fgets(STDIN)));
echo "Masukkan Deskripsi Produk : ";
$deskripsi = ucwords(strtolower(trim(fgets(STDIN))));
if ($deskripsi > 4) {
    echo "Deskripsi terlalu panjang\n";
} else {
    echo "$deskripsi\n";
}
echo "Masukan Kode produksi: ";
$kode = trim(fgets(STDIN));
// $kode = str_word_count($kode);
if (is_numeric($kode) && $kode > 8) {
    echo "Input Invalid \n";
} else {
    echo "$kode \n";
}

echo "Nama Produk : $produk \n";
echo "Deskripsi : $deskripsi \n";
echo "Kode Produksi : $kode \n";

// SOAl 2
// echo "Masukkan Inputan : ";
// $input = strlen(trim(strtolower(fgets(STDIN))));
// if (substr($input < 50)){
//     echo "barang rare";
// }elseif (substr($input > 50)){
//     echo "barang super rare";
// }elseif 


# 3. Ubah tipe data string berikut ke bentuk array : 'Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab'
$string = "Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab";
var_dump(explode(", ", $string));

// SOAL 4
$array = [-2, 4, -18, 9, 0, 21, -5];
rsort($array);
foreach ($array as $key => $value) {
    echo "$value . \n";
};
// urutan negatif
$array1 = [-2, 4, -18, 9, 0, 21, -5];
sort($array1);
foreach ($array1 as $value1) {
    if ($value1 < 0) {
        echo "$value1 .\n";
    }
}
// urutan positif
$array2 = [-2, 4, -18, 9, 0, 21, -5];
sort($array2);
foreach ($array2 as $value2) {
    if ($value2 > 0) {
        echo "$value2 .\n";
    }
}

# *** data berikut untuk soal no 5-7
$data = [
    "id" => 582,
    "username" => "Fulan",
    "email" => "fulan@gmail.com",
    "password" => "123fulan321",
    "password_confirmation" => "123fulan321",
];

# 5. Tambah data nomor telepon pada array di atas 
$data["nomor_telepon"] = "082398062617";
var_dump($data);

# 6. Hapus data password_confirmation pada array di atas
unset($data["password_confirmation"]);
var_dump($data);

# 7. Ubah username fulan menjadi nama masing-masing dan tampilkan key dan valuenya dengan menggunakan foreach
$data["username"] = "Dimas Fitra Setiawan";
var_dump($data["username"]);
