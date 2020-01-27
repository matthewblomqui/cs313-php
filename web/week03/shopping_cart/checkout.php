<?php 
   session_start();

   if (!isset($_POST['pokeball'])) {
      $_SESSION['pokeball'] = $_POST['qtyPB'];
   }
   if (!isset($_POST['greatball'])) {
      $_SESSION['greatball'] = 0;
   }
   if (!isset($_POST['ultraball'])) {
      $_SESSION['ultraball'] = 0;
   }
   if (!isset($_POST['maxpotion'])) {
      $_SESSION['maxpotion'] = 0;
   }
   if (!isset($_POST['fullrestore'])) {
      $_SESSION['fullrestore'] = 0;
   }
   if (!isset($_POST['superrepel'])) {
      $_SESSION['superrepel'] = 0;
   }
   if (!isset($_POST['maxrepel'])) {
      $_SESSION['maxrepel'] = 0;
   }
   if (!isset($_POST['escaperope'])) {
      $_SESSION['escaperope'] = 0;
   }

?>
<!DOCTYPE html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Pokemart Checkout</title>
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

      <div class="row">
         <div class="col-2"></div>
         <div class="col-8 pt-3 pokeDark text-white"><?php print_r($_COOKIE); print_r($_SESSION); ?></div>
         <div class="col-2"></div>
      </div>
      
      <?php include '../../footer.php';?>
   </body>
</html>