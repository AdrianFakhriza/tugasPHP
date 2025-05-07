<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1</title>
</head>
<body>
    
    <form method="post">
        <label>Nama :</label><br>
        <input type="text" name="fname" required><br>

        <label>Email:</label><br>
        <input type="text" name="email"></input><br>

        <label>Nilai Ujian:</label><br>
        <input type="text" name="nilai"></input><br>
        <input type="submit" name="proses" value="Kirim">
    </form>

    <?php
        if (isset($_POST['proses'])) {
            $nama = $_POST['fname'];
            $email = $_POST['email'];
            $nilai = $_POST['nilai'];
            
            echo "Nama: $nama<br>";
            echo "Email: $email<br>";
            echo "Nilai Ujian: $nilai<br>";
        }

        if($nilai >= 70) $keterangan = 'Lulus';
        elseif($nilai < 70) $keterangan = 'Tidak Lulus';
        else $keterangan = 'Tidak Valid';

        echo "Keterangan: $keterangan<br>";
    ?>

</body>
</html>