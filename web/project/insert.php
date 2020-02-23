<?php

$csv = array_map('str_getcsv', file('pokemon.csv'));

//var_dump($csv);

echo $csv[0][0];

?>