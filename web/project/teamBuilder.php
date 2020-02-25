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
               <div class="card-group mb-3 mt-3">
                  <div class="card bg-light">
                     <img id="preview_1" class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <p id="name_1" class="bg-light rounded">pokemon name</p>
                        <span id="type_1_1" class="type"></span>
                        <span id="type_1_2" class=""></span>
                     </div>
                  </div>
                  <div class="card bg-light">
                     <img id="preview_2" class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <p id="name_2" class="bg-light rounded">pokemon name</p>
                        <span id="type_2_1" class="type"></span>
                        <span id="type_2_2"></span>
                     </div>
                  </div>
                  <div class="card bg-light">
                     <img id="preview_3" class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <p id="name_3" class="bg-light rounded">pokemon name</p>
                        <span id="type_3_1" class="type"></span>
                        <span id="type_3_2"></span>
                     </div>
                  </div>
                  <div class="card bg-light">
                     <img id="preview_4" class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <p id="name_4" class="bg-light rounded">pokemon name</p>
                        <span id="type_4_1" class="type"></span>
                        <span id="type_4_2"></span>
                     </div>
                  </div>
                  <div class="card bg-light">
                     <img id="preview_5" class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <p id="name_5" class="bg-light rounded">pokemon name</p>
                        <span id="type_5_1" class="type"></span>
                        <span id="type_5_2"></span>
                     </div>
                  </div>
                  <div class="card bg-light">
                     <img id="preview_6" class="card-img-top" src="images/0.png" alt="Default">
                     <div class="card-body">
                        <p id="name_6" class="bg-light rounded">pokemon name</p>
                        <span id="type_6_1" class="type"></span>
                        <span id="type_6_2"></span>
                     </div>
                  </div>
               </div>
               <form action="index.php" method="GET">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">Team Name</span>
                     </div>
                     <input type="text" class="form-control">
                     <button class="btn btn-success" type="button">Add Team</button>
                  </div>
                  <div class="container mt-3">
                     <select name="pokemon_1" id="p_1" class="custom-select input-group mb-3">
                        <option selected disabled>Select Pokemon 1</option>
                        <?php include 'pokeSelect.php';?>
                     </select>
                     <select name="pokemon_2" id="p_2" class="custom-select input-group mb-3">
                        <option selected disabled>Select Pokemon 2</option>
                        <?php include 'pokeSelect.php';?>
                     </select>                     
                     <select name="pokemon_3" id="p_3" class="custom-select input-group mb-3">
                        <option selected disabled>Select Pokemon 3</option>
                        <?php include 'pokeSelect.php';?>
                     </select>                     
                     <select name="pokemon_4" id="p_4" class="custom-select input-group mb-3">
                        <option selected disabled>Select Pokemon 4</option>
                        <?php include 'pokeSelect.php';?>
                     </select>                     
                     <select name="pokemon_5" id="p_5" class="custom-select input-group mb-3">
                        <option selected disabled>Select Pokemon 5</option>
                        <?php include 'pokeSelect.php';?>
                     </select>                     
                     <select name="pokemon_6" id="p_6" class="custom-select input-group mb-3">
                        <option selected disabled>Select Pokemon 6</option>
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