<?php

$csv = array_map('str_getcsv', file('pokemon.csv'));

echo $csv[0];

?>