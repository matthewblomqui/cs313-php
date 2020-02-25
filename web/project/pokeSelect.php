<?php
   $response = file_get_contents("https://pokeapi.co/api/v2/pokemon/?offset=0&limit=1000");
   $obj = json_decode($response, true);

   for ($i=0; $i < 807; $i++) { //801
      $j = $i + 1;
      $name = $obj['results'][$i]['name'];

      echo "<option value=\"$j\">$name</option>";
   }
?>