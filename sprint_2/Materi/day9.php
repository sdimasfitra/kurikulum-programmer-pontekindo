<?php
$array = [];
do { // CRUD = CREATE, READ, UPDATE, DELETE
    // Create
    echo "Masukkan data : ";
    $array1 = trim(fgets(STDIN));
    $array[count($array) + 1] = $array1;

    // Read
    foreach ($array  as $key => $value) {
        echo "$key  . $value \n";
    }
    // Edit (Update)
    echo "Edit data (y/n) ? ";
    $e = trim(fgets(STDIN));
    if ($e == "y") {
        echo "Pilih Data Yang Ingin Diedit";
        $edit = trim(fgets(STDIN));
        echo "Anda mengedit $array[$edit]\n";
        echo "Masukkan Data Baru :";
        $update = trim(fgets(STDIN));
        $array[$edit] = $update;
    }

    // delete
    echo "Hapus Data (y/n) ?";
    $h = trim(fgets(STDIN));
    if ($h == "y") {
        // delete
        // unset, menimpa data array terlebih dahulu
        // barulah nanti akan dihapus data yg bagian akhir
        echo "Pilih Data Yang Ingin Dihapus";
        $delete = trim(fgets(STDIN));
        echo "Anda menghapus $array[$delete]\n";
        for ($i = $delete; $i < count($array); $i++) {
            $array[$i] = $array[$i + 1];
        }
        unset($array[count($array)]);
    }
} while (true);


// FUNCTION
// function : wadah yg berisi suatu program tertentu yg bisa kita gunakan kalo kita memanggilnya
function test() // fuction argument
{
    echo "Hello World. \n";
}
test();

// EXAMPLE FUNCTION
function notif($nama)
{ // => parameter : variable yg akan digunakan dlm function
    // global : mengambil variable diluar function
    echo "$nama Telah Terdaftar \n";
}
notif("Fitra"); // => argument : sebuah value yg akan dishare parameter


// default parameter
// function sayHi($nama, $divisi, $greeting = "Good Morning")
// {
//     echo "Hello! $nama dari devisi $greeting\n";
// }
// sayHi();
// sayHi("Dimas", "Programmer");


echo "Masukkan inputan :\n";
$input = (int)trim(fgets(STDIN));
function harusAngka(int $angka)
{
    echo $angka . "\n";
}
harusAngka(2);


// function sum(int $a, int $b)
// {
//     $t = $a + $b;
//     echo "$a+$b=$t\n";
// }
// sum("100", "100");


// variable length argument list
function total(...$jumlah)
{
    $total = 0;
    foreach ($jumlah as $value) {
        $total += $value;
    }
    echo "total:$total\n";
}
total(1, 2, 3, 4, 5, 6);
$array = [1, 2, 3, 4, 5, 6];

function ListName(...$nama)
{
    foreach ($nama as $value) {
        echo "$value\n";
    }
}
ListName("danu", "fitra");

// function return value
// return : data yg simpan ke function
// return & return type declaration
function sum(int $c, int $d): int
{
    $h = $c + $d;
    return $h;
}
echo sum(100, 100);
