<?php
   session_start();
   require 'dbConnect.php';
   $db = get_db();
?>

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
               <h2 class="mt-3">Team Preview</h2>
               <div class="card-deck mb-3">
                  <div class="card bg-light max-w">
                     <img class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <span class="type normal"></span>
                     </div>
                  </div>
                  <div class="card bg-light max-w">
                     <img class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <span class="type normal"></span>
                     </div>
                  </div>
                  <div class="card bg-light max-w">
                     <img class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <span class="type normal"></span>
                     </div>
                  </div>
                  <div class="card bg-light max-w">
                     <img class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <span class="type normal"></span>
                     </div>
                  </div>
                  <div class="card bg-light max-w">
                     <img class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <span class="type normal"></span>
                     </div>
                  </div>
                  <div class="card bg-light max-w">
                     <img class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <span class="type normal"></span>
                     </div>
                  </div>
               </div>
               <!-- TODO: Add Preview boxes here -->
               <form action="">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">Team Name</span>
                     </div>
                     <input type="text" class="form-control">
                     <button class="btn btn-success" type="button">Add Team</button>
                  </div>
                  <div class="container mt-3">
                     <select name="pokemon_1" class="custom-select input-group mb-3">
                        <option selected disabled id="p_1">Select Pokemon 1</option>
                        <?php include 'pokeSelect.php';?>
                     </select>
                     <select name="pokemon_2" class="custom-select input-group mb-3">
                        <option selected disabled id="p_2">Select Pokemon 2</option>
                        <?php include 'pokeSelect.php';?>
                     </select>                     
                     <select name="pokemon_3" class="custom-select input-group mb-3">
                        <option selected disabled id="p_3">Select Pokemon 3</option>
                        <?php include 'pokeSelect.php';?>
                     </select>                     
                     <select name="pokemon_4" class="custom-select input-group mb-3">
                        <option selected disabled id="p_4">Select Pokemon 4</option>
                        <?php include 'pokeSelect.php';?>
                     </select>                     
                     <select name="pokemon_5" class="custom-select input-group mb-3">
                        <option selected disabled id="p_5">Select Pokemon 5</option>
                        <?php include 'pokeSelect.php';?>
                     </select>                     
                     <select name="pokemon_6" class="custom-select input-group mb-3">
                        <option selected disabled id="p_6">Select Pokemon 6</option>
                        <?php include 'pokeSelect.php';?>
                     </select>
                  </div>
               </form>
                  <button type="button" class="btn btn-danger btn-block" onclick="teams()">Return to Teams</button>
               
               
               <!-- <input class="form-control" id="search" type="text" placeholder="Search for Pokemon">
               <br>
               <ul class="list-group" id="list">
                  <?php include 'pokiApi.php';?>
               </ul> -->
               <br><br><br><br><br><br>
            </div>
         </div>
         <div class="col back">
            </div>
         </div>
         
      <?php include '../footer.php';?>
   </body>
</html>