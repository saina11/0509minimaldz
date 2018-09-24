<?php
$num = "555555555";
$sum = 0;
for($i = 0; $i <= strlen($num); $i++) {
    $sum += $num[$i];
}
echo $num."<br/>";
echo $sum;