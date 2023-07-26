<?php

// 1. Jelaskan perbedaan (||) dan (&&) dalam operator logika!
// Beserta Contoh Prakteknya...
// ||  simbol untuk operator logika 'OR' = Or -> || / or : salah satu true maka hasilnya true. Contohnya:
var_dump(1 * 5 ==  2 || 4 / 4 == 0);
// && simbol untuk operator logika = And -> &&  / and : salah satu false maka hasilnya false. Contohnya:
var_dump(2 <= "2" && 13 === 13);

// 2. Jelaskan perbedaan operator kali pada aritmatika dengan kali pada penugasan! Buatkan contohnya!
// // dikali -> *=
$angka1 *= $angka2;
echo $angka1;


// 3. Buatlah daftar id, judul buku, pustaka, harga buku dalam bentuk Array Assosiative!
$array = array(
    "daftar_id" => 15,
    "namabuku" => "Muhajirin",
    "pustaka" => "Rumaysho",
    "harga" => "Rp. 50.000"
);
var_dump($array);

// // 4. $a = 2 // pangkat
// $b = 9 
// Buatlah Dalam Menggunakan Operator Aritmatika Dengan Jenis Pangkat ...
// Dimana variable b pangkat variable a
$a = 2;
$b = 9;
$hasil = $a ** $b;
$b **= $a;
echo "$b \n";

// //5. Buatlah TERNARY Untuk Menampilkan tingkatan suhu suatu ruangan! 
// Dengan expression / Ekspresi Didalamnya Ada Operator Perbandingan
// Kurang dari 20 celcius : dingin , 21-35 normal, lebih dari 35 panas
echo "SUHU : ";
$suhu = trim(fgets(STDIN));
$suhu = 100;
$cuaca = $suhu <= 20 ? "Dingin" : 
          ($suhu 21 >= 35 ? "Normal" : 
          ($suhu >= 35 ? "Panas" : ));
echo "$cuaca. \n" ;

// 6. Operator Penugasan => Ani Punya Uang = 500000, dia ingin jajan senilai = 100000, lalu ibunya kasih uang = 250000 dan semua uang Ani dibagi rata kepada 3 adik dan dirinya Berapakah Uang Saat Ini Yang Dipegang Oleh Ani?
$ani = 500000;
$jajan = 100000;
$ibu = 250000;
$ani -= $jajan;
$ani += $ibu;

$ani = ($ani - $jajan + $ibu) / 3;
echo "$ani\n";

// // 7. Buat dengan operator logika dan pengkondisian dari soal cerita dibawah ini:
// Perusahaan 'Z' akan menerima seseorang sebagai karyawannya apabila memenuhi kriteria berikut ini : akhlaknya baik dan salah satu dari cekatan dan disiplin.
// Lalu Budi melamar kerja, dia memiliki akhlak yang baik,tidak cekatan dan namun dia disiplin.
// perusahaan z
$budi = "akhlak baik";
$budi = "tidak cekatan";
$budi = "disiplin";
if ($budi == "akhlak baik" and $budi == "cekatan") {
    $perusahaan = "Perusahaan : Menerima\n";
} elseif ($budi == "akhlak baik" and $budi == "disiplin") {
    $perusahaan = "Perusahaan : Menerima\n";
} elseif ($budi == "akhlak baik" and $budi == "cekatan" and $budi == "disiplin") {
    $perusahaan = "Perusahaan : Menerima\n";
} else {
    $perusahaan = "Perusahaan : Tidak Menerima\n";
}
// budi 
$budi1 = "Budi";
$akhlakbaik = true;
$cekatan = false;
$disiplin = true;
if (($akhlakbaik == true or $disiplin == true) and $cekatan == false) {
    $perusahaan = "Perusahaan : Menerima\n";
} else {
    $perusahaan = "Perusahaan : Tidak Menerima\n";
}
echo "Budi melamar kerja di perusahaan z, dia memiliki akhlak yang baik, disiplin namun tidak cekatan. Maka jawaban perusahaan : $perusahaan\n";
