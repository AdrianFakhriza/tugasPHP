<?php

    class Fruit
    {
        public $name;
        protected $color;
        private $weight;
    }

    $mango = new Fruit();
    echo $mango->name = 'Mangga'; //OK
    // echo $mango->color = 'Hijau'; // Error: Cannot access protected property Fruit::$color
    // echo $mango->weight = 2; // Error: Cannot access private property Fruit::$weight

?>