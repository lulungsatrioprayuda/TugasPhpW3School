<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "joe"=>"43");
    //for each kalau tidak salah yaitu untuk looping di dalam sebuah php , mencetak sampai akhir data yang ada di arrays
    foreach($age as $x => $b_value){
        echo "key=" . $x . ", Value=" . $b_value; //tanya ke pak angga tentang $x_value karena jika di hapus di bagian valuenya tidak keluar output
        echo "<br>";
    }
?>