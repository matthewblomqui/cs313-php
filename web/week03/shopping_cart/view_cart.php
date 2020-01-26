<?php
   session_start();

?>
<!DOCTYPE html>
<html class="no-js">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Pokemart Shop</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="shop.css">
   </head>
   <body>
      <?php include 'nav.php';?>

      <div class="row">
         <div class="col-2"></div>
         <div class="col pt-3 pokeDark">
            <hr>
            <h2 class="text-primary text-center">Cart Details</h2>
            <hr>
            <div class="row text-white">
               <?php
                  print_r($_SESSION);
               ?>
               <input type="submit" name="Submit" value="Checkout" class="btn btn-primary float-right">
               <input type="reset" name="clear" value="Empty Cart" class="btn btn-danger float-right">
            </div>
         </div>
         <div class="col-2"></div>
      </div>

      <?php include '../../footer.php';?>
   </body>
</html>