<?php
$n = 1000;
for ($i = 0; $i<1000; $i++) {

    if ($n/2<50) {
        break;
    }
    echo $n=$n/2 ."<br/>";
}
echo "Kolichestvo iteraciy ravno ="." ". $i;