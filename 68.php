<?php
$number = 12817835;

# Искомая цифра
$search = 5;

# Считаем
$count = substr_count( $number, $search );

# Ищем
echo 'Cifra ' . $search . ' vstrechaietsa v chisle ' . $number . ' <b>' . $count . '</b> raz';