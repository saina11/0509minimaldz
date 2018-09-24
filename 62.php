<?php
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
    if ($key <= 5) {
        echo $value.'<br>';
    }
    else {
        echo '<b>'.$value.'</b><br>';
    }
    }