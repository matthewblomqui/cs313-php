<?php
   session_start();

?>

<!DOCTYPE html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Pokemart Cart</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="shop.css">
   </head>
   <body>
      <?php include 'nav.php';?>

      <div class="col-8 pt-3 pokeDark text-white">
         <?php print_r($_SESSION); ?>
         <hr>
         <h2 class="text-primary text-center">Order Successful</h2>
         <hr>

      </div>
      
      <?php include '../../footer.php';?>
   </body>
</html>