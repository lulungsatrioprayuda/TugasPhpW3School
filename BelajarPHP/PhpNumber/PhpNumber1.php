<?php
    $x = 5959;
    var_dump(is_int($x)); //kondisi true karena isinya adalah integer

    echo"<br>";

    $x = 59.59;
    var_dump(is_int($x)); // outpunya salah karena isinya adalah double
?>