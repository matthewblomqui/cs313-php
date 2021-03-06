<?php
   session_start();
   $name = test_input($_POST["name"]);
   $address = test_input($_POST["address"]);
   $city = test_input($_POST["city"]);
   $state = test_input($_POST["state"]);
   $zip = test_input($_POST["zip"]);
   $comment = test_input($_POST["comment"]);

   function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    unset($_POST);

    $items = array("Pokeball"=>$_SESSION['pokeball'], 
                   "Greatball"=>$_SESSION['greatball'], 
                   "Ultraball"=>$_SESSION['ultraball'], 
                   "Max Potion"=>$_SESSION['maxpotion'], 
                   "Full Restore"=>$_SESSION['fullrestore'], 
                   "Super Repel"=>$_SESSION['superrepel'], 
                   "Max Repel"=>$_SESSION['maxrepel'], 
                   "Escape Rope"=>$_SESSION['escaperope'])
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

      <div class="row">
         <div class="col-2"></div> <!-- placeholder for spacing -->
         <div class="col-8 pt-3 pokeDark text-white">
            <hr>
            <h2 class="text-primary text-center">Order Successful</h2>
            <hr>
            <div class="text-center">
               <strong>Shipping Address:</strong>
               <hr>
               <p><?php echo $name.'<br>'.$address.'<br>'.$city.' '.$state.', '.$zip.'<br><strong>Comments:</strong><br>'.$comment?></p>
               <hr>
               <strong>Items in Order:</strong>
               <hr>
               <?php 
                  foreach($items as $key => $val) {
                     if ($val != 0) {
                        echo $key." x".$val."<br>";
                     }
                  }
               ?>
               <hr>
               <strong>Total Price:</strong>
               <hr>
               <img src="pokedollar.png" alt="pokedollar" class="dollar-white">
               <?php echo $_SESSION['total']; ?>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br>
         </div>
         <div class="col-2"></div> <!-- placeholder for spacing -->
      </div>
      
      <?php include '../../footer.php';?>
   </body>
   <?php session_unset(); ?>
</html>