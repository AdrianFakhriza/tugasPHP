<?php

    $nama = 'Adrian';
    $nilai = 90;

    //if-else multi kondisi
    if ($nilai >= 80 && $nilai <= 100) $keterangan = 'A';
    elseif ($nilai >= 70 && $nilai < 80) $keterangan = 'B';
     elseif ($nilai >= 60 && $nilai < 70) $keterangan = 'C';
     elseif ($nilai >= 50 && $nilai < 60) $keterangan = 'D';
     elseif ($nilai >= 0 && $nilai < 50)  $keterangan = 'E';    
     else {$keterangan = 'Tidak Valid';}

    echo "Nama: $nama<br>";
    echo "Nilai: $nilai<br>";
    echo "Keterangan: $keterangan<br>";

    // switch case
    switch ($keterangan) {
        case 'A':
            $predikat = "Memuaskan";
            break;
        case 'B':
            $predikat = "Baik";
            break;
        case 'C':
            $predikat = "Cukup";
            break;
        case 'D':
            $predikat = "Kurang";
            break;
        case 'E':
            $predikat = "Buruk";
            break;
        default:
            $predikat = "Nilai tidak valid.";
    }

    echo "Predikat: $predikat<br>";
?>