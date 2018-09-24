<?php
$day = date('w');
$days = array(
    '1' => "Ponedelnik",
    '2' => 'Vtornik',
    '3' => 'Sreda',
    '4' => 'Chetverg',
    '5' => 'Piatniza',
    '6' => 'Subbota',
    '7' => 'Voskresenie',
);

        foreach ($days as $key => $value) {
    if ($key == $day) {
        echo '<i>'.$value.'</i><br>';
    }
    else {
        echo $value.'<br>';
    }
}