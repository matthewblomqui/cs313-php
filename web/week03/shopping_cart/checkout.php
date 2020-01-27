<?php 
   session_start();

   if (isset($_POST['qtyPB'])) {
      $_SESSION['pokeball'] = $_POST['qtyPB'];
   }
   if (isset($_POST['qtyGB'])) {
      $_SESSION['greatball'] = $_POST['qtyGB'];
   }
   if (isset($_POST['qtyUB'])) {
      $_SESSION['ultraball'] = $_POST['qtyUB'];
   }
   if (isset($_POST['qtyMP'])) {
      $_SESSION['maxpotion'] = $_POST['qtyMP'];
   }
   if (isset($_POST['qtyFR'])) {
      $_SESSION['fullrestore'] = $_POST['qtyFR'];
   }
   if (isset($_POST['qtySR'])) {
      $_SESSION['superrepel'] = $_POST['qtySR'];
   }
   if (isset($_POST['qtyMR'])) {
      $_SESSION['maxrepel'] = $_POST['qtyMR'];
   }
   if (isset($_POST['qtyER'])) {
      $_SESSION['escaperope'] = $_POST['qtyER'];
   }
   if (isset($_POST['tInput'])) {
      $_SESSION['total'] = $_POST['tInput'];
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
         <div class="col-8 pt-3 pokeDark text-white">
            <hr>
            <h2 class="text-primary text-center">Checkout Details</h2>
            <hr>
            <form method="post" action="" class="text-center">  
               Name: <br><input type="text" name="name">
               <br><br>
               Address: <br><input type="text" name="address">
               <br><br>
               City: <br><input type="text" name="city">
               <br><br>
               State: <br><input type="text" name="state">
               <br><br>
               Zip Code: <br><input type="text" name="zip">
               <br><br>
               Comment: <br><textarea name="comment" rows="5" cols="40"></textarea>
               <br><br>
               <input type="submit" name="View" value="View Cart" onclick="javascript: form.action='view_cart.php';" class="btn btn-primary">
               <input type="submit" name="Confirm" value="Confirm" onclick="javascript: form.action='confirmation.php';" class="btn btn-success">
            </form>

            <br><br><br><br>
         </div>
         <div class="col-2"></div>
      </div>
      
      <?php include '../../footer.php';?>
   </body>
</html>