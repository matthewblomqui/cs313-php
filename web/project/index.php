<?php
   session_start();
   require 'dbConnect.php';
   $db = get_db();
   $id = $_SESSION['userId'];
   $username = $_SESSION['username'];
   if (!isset($_SESSION['userId']))
   {
      header('Location: login.php');
      die();
   }
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
   </head>
   <body>

      <div class="row pt-3 pb-3 pokeDark text-warning">
         <h2 class="text-center col">Pokemon Battle Simulator</h2>
      </div>

      <div class="row pokeLight">
         <div class="col back"> </div>

         <div class="col-8 text-center">
            <br>
            <h4>Welcome <?php echo $username.', Here are your teams';?></h4>
            <form action="" method="POST">
               <div class="container">
               <table class="table table-hover">
               </div>
            </form>
         </div>

         <div class="col back"> </div>
      </div>
      
      <?php include '../footer.php';?>
   </body>
</html>


