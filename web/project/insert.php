<?php

$csv = array_map('str_getcsv', file('pokemon.csv'));



for ($i=0; $i < 807; $i++) { 
   # code...

   $id = $csv[$i][0];
   $name = $csv[$i][1];
   
   echo $id.' '.$name.'\n';
}

?>