<?php
    $x = 9999;
    var_dump(is_numeric($x));//true karena angka

    $x = "9999";
    var_dump(is_numeric($x));//true karena angka

    $x = "99.99" + 100;
    var_dump(is_numeric($x));//true karena angka

    $x = "Hello";
    var_dump(is_numeric($x));//false karena huruf bukan angka
?>