<?php

$csv = array_map('str_getcsv', file('pokemon.csv'));


$id = $csv[1][0];
$name = $csv[1][1];

echo $id.' '.$name;

?>