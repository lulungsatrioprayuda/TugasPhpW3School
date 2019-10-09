<?php declare (strict_types=1);
function setHeight(int $minheight = 50){
    echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight(350);
setHeight();//akan mengnikuti default dari function setHeight yang ber value 50
setHeight(80);
?>