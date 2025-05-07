<?php

    //satu baris
    $fruit = ['name' => 'apple', 'color' => 'red', 'taste' => 'sweet'];

    //multibaris
    $car = [
        'brand' => 'toyota',
        'color' => 'black',
        'year' => 2020,
        'type' => 'SUV'
    ];

    foreach ($fruit as $key => $value) {
        echo "$key: $value <br>";
    }

    echo '<br><br>';

    foreach ($car as $key => $value) {
        echo "$key: $value <br>";
    }

?>