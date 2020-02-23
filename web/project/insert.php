<?php

$pokemon = array_map('str_getcsv', file('pokemon.csv'));
$types = array_map('str_getcsv', file('types.csv'));
$map = array(1=>"normal",2=>"fighting",3=>"flying",4=>"poison",
             5=>"ground",6=>"rock",7=>"bug",8=>"ghost",
             9=>"steel",10=>"fire",11=>"water",12=>"grass",
             13=>"electric",14=>"psychic",15=>"ice",16=>"dragon",
             17=>"dark",18=>"fairy");


$index = 1;
for ($i=0; $i < 808; $i++) { 
   # code...

   $id = $pokemon[$i][0];
   $name = $pokemon[$i][1];
   
   echo $id.' '.$name;
   $num = $types[$index][0];
   while($num == $i)
   {
      $t = $types[$index][1];
      $tt = $map[$t];
      echo ' '.$t.' '.$tt;
      $index++;
      $num = $types[$index][0];
   }
   echo '<br>';
   
}

?>