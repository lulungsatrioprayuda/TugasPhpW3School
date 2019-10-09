<?php
    $x = 5; //ini deklarasi secara global karena ini berada di luar function manapun
    $y = 10;

    function myTest(){
        global $x, $y;// gunakan "global" jika ingin mendeklarasikan function di dalam method ini secara kelesuluhan atau global
        $y = $x + $y;
    }

    myTest();
    echo $y;
?>