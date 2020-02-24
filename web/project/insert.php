<?php

$pokemon = array_map('str_getcsv', file('pokemon.csv'));
$types = array_map('str_getcsv', file('types.csv'));
$map = array(1=>"normal",2=>"fighting",3=>"flying",4=>"poison",
             5=>"ground",6=>"rock",7=>"bug",8=>"ghost",
             9=>"steel",10=>"fire",11=>"water",12=>"grass",
             13=>"electric",14=>"psychic",15=>"ice",16=>"dragon",
             17=>"dark",18=>"fairy");

$list = array();

echo "name,type_1,type_2,pokedex<br>";
$index = 1;
for ($i=1; $i < 808; $i++) { 
   $arr = array();
   $id = $pokemon[$i][0];
   $name = $pokemon[$i][1];
   
   echo $name;
   array_push($arr,$name);
   //echo $id.' '.$name;
   $num = $types[$index][0];
   $slot = $types[$index][2];
   while($num == $i)
   {
      $t = $types[$index][1];
      $tt = $map[$t];
      echo ','.$t;
      array_push($arr,$t);
      //echo ' '.$t.' '.$tt;
      $index++;
      $num = $types[$index][0];
      if ($slot == $types[$index][2])
      {
         echo ',';
         array_push($arr,"");
      }
      $slot = $types[$index][2];
   }
   echo ','.$id.'<br>';
   array_push($arr,$id);
   var_dump($arr);
   echo '<br>';
   
}

?>