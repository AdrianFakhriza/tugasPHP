<?php

    class Fruit
    {
        //property
        public $name;
        public $color;

        //method
        function getName()
        {
            return $this->name;
        }
        function getColor()
        {
            return $this->color;
        }
    }

    //object instantiation
    $apple = new Fruit();
    $apple->name = 'Apple';
    $apple->color = 'Red';

    $banana = new Fruit();
    $banana->name = 'Banana';
    $banana->color = 'Yellow';

    //Tampilkan
    echo $apple->getName();
    echo $apple->getColor();
    echo '<br>';
    echo $banana->getName();
    echo $banana->getColor();

?>