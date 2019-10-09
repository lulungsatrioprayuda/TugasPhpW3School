<?php
    $t = date("H");

    if ($t < "10"){
        echo "Pagimu Menyenangkan!";
    }elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "have a Good Night!";
    }
?>