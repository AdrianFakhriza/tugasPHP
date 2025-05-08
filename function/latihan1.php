<?php

    $str = 'Belajar bahasa pemrOGRaman PHP';

    $str = strtoupper($str);
    echo '<br>' . $str . '<br>';

    $str = strtolower($str);
    echo '<br>' . $str . '<br>';

    $str = ucfirst($str);
    echo '<br>' . $str . '<br>';

    $str = ucwords($str);
    echo '<br>' . $str . '<br>';

    echo '<hr>';

    $fruits = array('apple', 'orange', 'grape', 'banana', 'kiwi');
    sort($fruits); 

    foreach ($fruits as $fruit) {
        echo $fruit . '<br>';
    }

    echo '<hr>';

    arsort($fruits);
    
    foreach ($fruits as $fruit) {
        echo $fruit . '<br>';
    }
?>