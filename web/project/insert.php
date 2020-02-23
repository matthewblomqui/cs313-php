<?php

$csv = array_map('str_getcsv', file('pokemon.csv'));

//var_dump($csv);
for ($i=0; $i < 807; $i++) { 
   # code...
   echo $csv[i][0];
}
?>