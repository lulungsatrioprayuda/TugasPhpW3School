<?php declare(strict_types=1);
    function addNumbers (float $a, float $b) : int{
        return (int)($a + $b);//hasilnya menjadi 6 karena di bulatkan oleh tipe data int
    }
    echo addNumbers(1.2, 5.4);
?>