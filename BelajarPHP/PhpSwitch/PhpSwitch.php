<?php
    $favcolor = "red";

    switch($favcolor){
        case "red":
        echo "Your favorite color is red!";// akankeluar jika value dari variable favcolor adalah red
        break;

        case "blue":
        echo "Your favorite color is Blue";// akankeluar jika value dari variable favcolor adalah blue
        break;

        case "green":
        echo "Your favorite color is Green";// akankeluar jika value dari variable favcolor adalah green
        break;

        default:
        echo "Favorit warma kau antara merah , biru ,atau hijau";// akankeluar jika value dari variable favcolor tidak sesuai dengan case yang di sediakan
    }
?>