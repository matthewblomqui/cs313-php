<?php

$csv = array_map('str_getcsv', file('pokemon.csv'));

//var_dump($csv);
for ($i=0; $csv[i][7] == 1; $i++) { 
   # code...
   echo $csv[i][0].' '.$csv[i][1]."<br>";
}
?>