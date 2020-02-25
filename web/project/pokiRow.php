<?php
   session_start();
   require 'dbConnect.php';
   $db = get_db();
   $id = $_SESSION['userId'];

   $teams = $db->prepare("SELECT * FROM team WHERE user_id = $id");
   $teams->execute();

   while ($row = $teams->fetch(PDO::FETCH_ASSOC))
   {
      $team_name = $row['team_name'];
      $p1 = $row['pokemon_1'];
      $p2 = $row['pokemon_2'];
      $p3 = $row['pokemon_3'];
      $p4 = $row['pokemon_4'];
      $p5 = $row['pokemon_5'];
      $p6 = $row['pokemon_6'];

      echo "<td>".  
               "<div class=\"custom-control custom-checkbox\">".
                  "<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\" name=\"example1\">".
                  "<label class=\"custom-control-label\" for=\"customCheck\"></label>".
               "</div>".
            "</td>";
      
      for ($i=0; $i < 6; $i++) { 
         $str = 'pokemon_'+$i;
         $poke = $row[$str];
         $pokemon = $db->prepare("SELECT * FROM pokemon WHERE pokedex = $poke");
         $pokemon->execute();
         if ($pRow = $pokemon->fetch(PDO::FETCH_ASSOC))
         {
            echo $pRow['name'].' ';
         }
      }

   }

   ?>
