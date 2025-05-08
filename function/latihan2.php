<?php

    function salam() {
        echo '<br>Selamat datang di PHP';
    }

    function sapa($kawan) {
        echo "<br>Selamat pagi $kawan";
    }

    function kabar($kawan="Budi") {
        echo '<br>Hai apa kabar?' . $kawan;
    }

    salam();

    $nama =  'Adrian';
    sapa($nama);

    kabar($nama);


?>