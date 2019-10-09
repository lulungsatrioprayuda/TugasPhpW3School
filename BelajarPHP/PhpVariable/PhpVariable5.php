<?php
    $x = 5 ;/*deklarasi global atau deklarasi untuk semua syntax yang ada di tag "<?php?> ini */

    function 
    
        myTest(){
        //menggunakan variable x yang sudah di di beri value, kedalam fungsi ini akan menghasikkan error, 
        echo "<p>Variable x di dalam fungsi adalah: $x</p>";
    }
        //ini memanggil variable di luar function "myTest" 
        myTest();
        echo"<p>Variable x di luar fungsi adalah : $x</p>";
?>
<!--  contoh didalam suatu function yaitu di dalam kurung kurawal "{}"
      dan contoh di luar function itu setelah ";" di suatu syntacnya contoh "nama_fungsi(); setalah titik koma itu silahkan di isi syntax nya agar berjalan" -->