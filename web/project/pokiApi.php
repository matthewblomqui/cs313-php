<?php
   $response = file_get_contents("https://pokeapi.co/api/v2/pokemon/?offset=0&limit=1000");
   //var_dump($response);
   $obj = json_decode($response, true);
   //var_dump($obj[results][0]);
   for ($i=0; $i < 10; $i++) { //801
      $j = $i + 1;
      $str = $obj['results'][$i]['name'];
      $url = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/$j.png";

      echo "<div id=\"item$j\" class=\"btn-group-vertical btn-group-toggle\" data-toggle=\"buttons\">".
               "<li class=\"btn btn-light\">".
                  "<img style=\"width:52px; height=100%;\" src=\"$url\">".
                  "<span class=\"pr-3\">$str</span>".
                  "<span class=\"type normal\">".
               "</li>".
            "</div>";
   }
?>