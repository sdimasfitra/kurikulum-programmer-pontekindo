<?php

function TampilkanTugas($tugas)
{
    echo "Daftar Tugasmu: \n";
    foreach ($tugas as $home => $task) {
        echo ($home + 1) . ". " . $task . "\n";
    }
}


function TambahkanTugas(&$tugas, $newtask)
{
    $tugas[] =  $newtask;
}


function HapusTugas(&$tugas, $home)
{
    if (isset($tugas[$home])) {
        unset($tugas[$home]);
    }
}
$tugas = array();

echo "Welcome to my To do List app";
while (true) {
    echo "\n--- MENU ---\n";
    echo "1. Lihat Daftar Tugasmu\n";
    echo "2. Tambah Tugas\n";
    echo "3. Hapus Tugas\n";
    echo "4. Keluar\n";

    $pilihan = readline("Pilih Menu (Masukkan Angka):\n");

    if ($pilihan === '1') {
        TampilkanTugas($tugas);
    } elseif ($pilihan === '2') {
        $newtask = readline("Masukkan Tugas Barumu: ");
        TambahkanTugas($tugas, $newtask);
        echo "-- Tugas Berhasil Ditambahkan --\n";
    } elseif ($pilihan === '3') {
        $home = readline("Masukkan Nomor Tugas Yang Ingin Kamu Hapus: ");
        $home--;
        HapusTugas($tugas, $home);
        echo "-- Tugasmu Berhasil Dihapus --\n";
    } elseif ($pilihan === '4') {
        echo "-- Terima Kasih Telah Menggunakan Aplikasi To Do List --\n";
        break;
    } else {
        echo "-- Pilihan Tidak Sesuai. Silahkan Masukkan Pilihan Yang Tersedia. --\n";
    }
}
