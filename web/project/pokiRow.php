<?php
   session_start();
   require 'dbConnect.php';
   $db = get_db();
   $id = $_SESSION['userId'];

   $teams = $db->prepare("SELECT * FROM team WHERE user_id = $id");
   $teams->execute();
   $final = "";

   while ($row = $teams->fetch(PDO::FETCH_ASSOC))
   {
      $team_name = $row['team_name'];
      $p1 = $row['pokemon_1'];
      $p2 = $row['pokemon_2'];
      $p3 = $row['pokemon_3'];
      $p4 = $row['pokemon_4'];
      $p5 = $row['pokemon_5'];
      $p6 = $row['pokemon_6'];

      $final = $final."<tr><td>".  
               "<div class=\"custom-control custom-checkbox\">".
                  "<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\" name=\"example1\">".
                  "<label class=\"custom-control-label\" for=\"customCheck\"></label>".
               "</div>".
            "</td><td>".$team_name."</td>";
      echo $final;
      
      for ($i=1; $i < 7; $i++) { 
         $str = 'pokemon_'.$i;
         $poke = $row[$str];
         $pokemon = $db->prepare("SELECT * FROM pokemon WHERE pokedex = $poke");
         $pokemon->execute();
         if ($pRow = $pokemon->fetch(PDO::FETCH_ASSOC))
         {
            $poke_name = $pRow['name'];
            $final = $final."<td><img style=\"width:48px; height:auto;\" src=\"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/".$poke.".png\">".$poke_name."</td>";
         }
      }
      $final = $final."</tr>";
      // echo $final;
   }

   ?>
