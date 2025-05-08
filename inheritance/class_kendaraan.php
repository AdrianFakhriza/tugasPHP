<?php

    class Vehicle
    {
        protected $type;
        protected $fuel;

        protected function __construct($type, $fuel)
        {
            $this->type = $type;
            $this->fuel = $fuel;
        }

        protected function getInfo()
        {
            echo "Jenis kendaraan: $this->type<br>";
            echo "Bahan bakar: $this->fuel<br>";
        }
    }

    class Motor extends Vehicle
    {
        public $wheels;

        public function __construct($type, $fuel, $wheels)
        {
            parent::__construct($type, $fuel);
            $this->wheels = $wheels;
        }

        public function getInfo()
        {
            parent::getInfo();
            echo "Jumlah roda: $this->wheels<br>";
        }
    }

    class Submarine extends Vehicle
    {
        public $depth;

        public function __construct($type, $fuel, $depth)
        {
            parent::__construct($type, $fuel);
            $this->depth = $depth;
        }

        public function getInfo()
        {
            parent::getInfo();
            echo "Kedalaman: $this->depth<br>";
        }
    }

?>
