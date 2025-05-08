<?php

    class Lingkaran 
    {
        private $jariJari; //property
        const PHI = 3.14; //konstanta

        //constructor
        function __construct($r) {
            $this->jariJari = $r;
        }

        //method
        function getLuas() {
            return self::PHI * $this->jariJari * $this->jariJari;
        }
        function getKeliling() {
            return 2 * self::PHI * $this->jariJari;
        }
    }

    echo 'Nilai PHI: ' . Lingkaran::PHI . '<br><br>';
    $lingkaran1 = new Lingkaran(10);
    $lingkaran2 = new Lingkaran(4);
    
    echo 'Luas lingkaran 1: ' . $lingkaran1->getLuas() . '<br>';
    echo 'Luas lingkaran 2: ' . $lingkaran2->getLuas() . '<br>';
    echo '<hr>';
    echo 'Keliling lingkaran 1: ' . $lingkaran1->getKeliling() . '<br>';
    echo 'Keliling lingkaran 2: ' . $lingkaran2->getKeliling() . '<br>';
?>