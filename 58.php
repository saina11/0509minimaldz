<?php
do {
    $arr = array(2, 5, 19, 13, 0, 10);
    foreach ($arr as $e) {
        if ($e == 2 || $e == 3 || $e == 4) {
            echo 'EST!';
            break (2);
        }
    }
    echo 'NET';
} while(0); //цикл do..while использован для того, чтобы стабильно работал break