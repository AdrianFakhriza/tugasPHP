<?php

    $fruits = [
        ['name' => 'apple', 'color' => 'red', 'taste' => 'sweet'],
        ['name' => 'banana', 'color' => 'yellow', 'taste' => 'sweet'],
        ['name' => 'cherry', 'color' => 'red', 'taste' => 'sweet'],
        ['name' => 'date', 'color' => 'brown', 'taste' => 'sweet'],
        ['name' => 'elderberry', 'color' => 'black', 'taste' => 'tart'],
        ['name' => 'fig', 'color' => 'purple', 'taste' => 'sweet'],
        ['name' => 'grape', 'color' => 'green', 'taste' => 'sweet'],
        ['name' => 'honeydew', 'color' => 'green', 'taste' => 'sweet']
    ];

    echo 'Buah: ' . $fruits[0]['name'] . ', Warna: ' . $fruits[0]['color'] . ', Rasa: ' . $fruits[0]['taste'] . '<br>';
    echo 'Buah: ' . $fruits[1]['name'] . ', Warna: ' . $fruits[1]['color'] . ', Rasa: ' . $fruits[1]['taste'] . '<br>';
    echo 'Buah: ' . $fruits[2]['name'] . ', Warna: ' . $fruits[2]['color'] . ', Rasa: ' . $fruits[2]['taste'] . '<br>';
    
    echo '<br><br>';

    foreach ($fruits as $fruit) {
        echo 'Buah: ' . $fruit['name'] . ', Warna: ' . $fruit['color'] . ', Rasa: ' . $fruit['taste'] . '<br>';
    }

?>
