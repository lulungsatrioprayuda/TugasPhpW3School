<!DOCTYPE html>
<html >
<head>
    <title>Document</title>
</head>
<body>
    <?php
        //memberi inisiasi dengan variable color yang berisi "red"
        $color = "red";
        //ini bisa
        echo "My car is&nbsp" . $color . "<br>";
        //ini tidak bisa karena tidak sama atau tidak sesuai dengan variable color yang di deklarasikan di awal
        echo "My car is&nbsp" . $COLOR  . "<br>";
        //ini tidak bisa karena tidak sama atau tidak sesuai dengan variable color yang di deklarasikan di awal
        echo "My car is&nbsp" . $coLOR . "<br>";
    ?>
</body>
</html>