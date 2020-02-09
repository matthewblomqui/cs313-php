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

            $pokemon = $db->prepare("SELECT * FROM pokemon");
            $pokemon->execute();

            while ($row = $pokemon->fetch(PDO::FETCH_ASSOC))
            {
               $pokemon = $row["name"];
               $id = $row["id"];
               $teamset = $db->prepare("SELECT * FROM teamset WHERE id = $id");
               $teamset->execute();
               while($tRow = $teamset->fetch(PDO::FETCH_ASSOC))
               {
                  $team_id = $tRow["team_id"];
                  $team = $db->prepare("SELECT name FROM team WHERE id = $team_id");
                  while($sRow = $team->fetch(PDO::FETCH_ASSOC))
                  {
                     $team_name = $sRow["name"];
                  }
               }
               

               echo "<h3><b>Team:</b> $team_name <b>Name:</b> $pokemon</h3>";
            }
         ?>

         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../../footer.php';?>
   </body>
</html>