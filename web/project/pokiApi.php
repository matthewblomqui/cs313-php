<?php
   $response = file_get_contents("https://pokeapi.co/api/v2/pokemon/?offset=0&limit=1000");
   //var_dump($response);
   $obj = json_decode($response, true);
   //var_dump($obj[results][0]);
   for ($i=0; $i < 10; $i++) { //801
      $str = $obj['results'][$i]['name'];
      $url = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/".($i+1).".png";

      echo "<div class=\"btn-group-vertical btn-group-toggle\" data-toggle=\"buttons\">".
               "<li class=\"btn btn-light\">".
                  "<img style=\"width:48px; height=100%;\" src=\"$url\">$str".
                  "<span class=\"type poison\">".
               "</li>".
            "</div>";
   }
?>