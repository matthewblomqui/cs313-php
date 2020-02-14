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
               $response = file_get_contents("https://pokeapi.co/api/v2/pokemon/?offset=0&limit=1000");
               $response = file_get_contents("https://api-v3.igdb.com/games/");
               $response = json_decode($response);
               print_r($response);
            ?>

         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../../footer.php';?>
   </body>
</html>