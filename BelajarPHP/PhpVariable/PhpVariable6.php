<?php
    function myTest(){
        $x = 5; // ini local scope atau deklarasi lokal karena berada di dalam kurawal suatu method atau function
        echo "<p>Variable x di dalam fungsi atau function adalah : $x</p>";
    }
    myTest();
    //ini akan menghasilkan error karena variable x hanya terdapat di dalam kurung kurawal yang berada di dalam function test pertama
    echo "<p>Variable x di dalam fungsi atau function adalah : $x</p>";
?>