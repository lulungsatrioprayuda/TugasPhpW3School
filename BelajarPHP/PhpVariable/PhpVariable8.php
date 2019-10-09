<?php
    $x = 5 ;
    $y = 10 ;//seperti dbiasa deklarasikan secara global dulu

    function myTest(){
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; // memanggil variable menggunakan array $GLOBALS[index] , index di dalam ini bisa di gantikan menggunakan nama variable yang anda inginkan
    }
    
    myTest();
    echo $y; // akan mengasilkan 15 karena terdapat pada baris 6 hehe
?>