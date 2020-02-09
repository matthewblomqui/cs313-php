<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <title>Pokemon Battle Simulator</title>
      <link rel="stylesheet" href="prove.css">
   </head>
   <body>

      <div class="row pt-3 pb-3 pokeDark text-warning">
         <h2 class="text-center col">Team Builder</h2>
      </div>

      <div class="row pokeLight">
         <div class="col back">
         </div>
         <div class="col-8 text-center">
            
         <?php
            require "dbConnect.php";
            $db = get_db();

            $pokemon = $db->prepare("SELECT t.name, p.name FROM pokemon p JOIN teamset s ON s.pokemon_id = p.id JOIN team t ON t.id = s.team_id;");
            $pokemon->execute();

            while ($row = $pokemon->fetch(PDO::FETCH_ASSOC))
            {
               $team = $row["t.name"];
               $name = $row["p.name"];

               echo "<h3><b>Team:</b> $team <b>Name:</b> $$name</h3>";
            }
         ?>

         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../../footer.php';?>
   </body>
</html>