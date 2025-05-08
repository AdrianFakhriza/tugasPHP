<?php
    //parent class
    class Hewan
    {
        protected $nama;

        public function __construct($nama)
        {
            $this->nama = $nama;
        }

        public function getNama()
        {
            return $this->nama;
        }
    }

    //child class
    class Kucing extends Hewan
    {
        public function bersuara()
        {
            return 'Meow!';
        }
    }

    $kucing = new Kucing('Tom');
    echo '<br>' . $kucing->getNama(); // Mengakses method dari parent class
    echo '<br>' . $kucing->bersuara(); // Mengakses method dari child class
    

?>