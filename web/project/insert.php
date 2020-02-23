<?php

$csv = array_map('str_getcsv', file('pokemon.csv'));

$id = $csv[0][0];
$name = $csv[0][1];

echo $id.' '.$name;

?>