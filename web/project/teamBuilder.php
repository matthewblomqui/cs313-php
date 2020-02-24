<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <title>Pokemon Battle Simulator</title>
      <link rel="stylesheet" href="prove.css">
      <script src="script.js"></script>
   </head>
   <body>

      <div class="row pt-3 pb-3 pokeDark text-warning">
         <h2 class="text-center col">Team Builder</h2>
      </div>

      <div class="row pokeLight">
         <div class="col back">
         </div>
         <div class="col-8 text-center">
            <div class="container">
               <br>
               <div class="row">
                  <button type="button" class="btn btn-danger waves-effect ml-3">Return to Teams</button>
                  <button type="button" class="btn btn-success waves-effect ml-auto mr-3">Add to Teams</button>
               </div>
               <br>

               <h2>Make Team</h2>
               <input type="text" name="team_name" placeholder="Team Name">
               <ul id="team_list">

               </ul>
               <br>

               <input class="form-control" id="search" type="text" placeholder="Search for Pokemon">
               <br>
               <ul class="list-group" id="list">
                  <?php include 'pokiApi.php';?>
               </ul>
               <br><br><br><br><br><br>
            </div>
         </div>
         <div class="col back">
         </div>
      </div>

      <?php include '../footer.php';?>
   </body>
</html>