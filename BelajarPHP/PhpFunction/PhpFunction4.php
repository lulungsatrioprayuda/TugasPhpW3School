<?php

    function addNumbers(int $a, int $b){
        return $a + $b;
    }
    echo addNumbers(5, "5 days");// di data "5 days" tidak terdeteksi karenakedua variable bertipe 10 maka haslinya akan keluar 10 karena yang mengandung angka saja yang akan di panggil dan di jumlahkan 
?>