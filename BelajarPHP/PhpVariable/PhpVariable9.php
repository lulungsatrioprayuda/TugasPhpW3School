<?php
    // ini menggunakan deklarasi static 
    function myTest(){
        static $x = 0;
        echo $x;
        $x++; // akan menambah nilai pada variable x 
    }
    myTest(); //menghasilkan 0
    myTest(); //menghasilkan 1 
    myTest(); //menghasilkan 2
?>