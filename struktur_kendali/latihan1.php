<?php

    //variable
    $nama = 'Adrian';
    $totalBelanja = 150000;
    $keterangan = '';

    // if-else
    if ($totalBelanja >= 100000) {
        $keterangan = "Selamat $nama, anda mendapatkan diskon!";
    } else {
        $keterangan = "Terima kasih $nama, sudah berbelanja.";
    }

    echo "Nama Pelanggan: $nama<br>";
    echo "Total Belanja: Rp$totalBelanja<br>";
    echo "Keterangan: $keterangan";



?>