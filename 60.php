<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
//unset($arr[0]);
foreach ($arr as $item=>$key) {
    echo $key;
    if ($key%3){
        echo ",";
    }
    else {
        echo "<br/>";
    }
}