<?php
   session_start();
   if (!isset($_SESSION['pokeball'])) {
      $_SESSION['pokeball'] = 0;
   }
   if (!isset($_SESSION['greatball'])) {
      $_SESSION['greatball'] = 0;
   }
   if (!isset($_SESSION['ultraball'])) {
      $_SESSION['ultraball'] = 0;
   }
   if (!isset($_SESSION['maxpotion'])) {
      $_SESSION['maxpotion'] = 0;
   }
   if (!isset($_SESSION['fullrestore'])) {
      $_SESSION['fullrestore'] = 0;
   }
   if (!isset($_SESSION['superrepel'])) {
      $_SESSION['superrepel'] = 0;
   }
   if (!isset($_SESSION['maxrepel'])) {
      $_SESSION['maxrepel'] = 0;
   }
   if (!isset($_SESSION['escaperope'])) {
      $_SESSION['escaperope'] = 0;
   }
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
         <div class="col-2 pt-3">
            <h3 class="text-center">Category</h3>
         </div>
         <div class="col pt-3">
            <form action="browse_shop.php" method="post">
               <h3 class="text-center">Items</h3>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-2"></div>
                  <img src="pokeball.png" alt="pokeball" class="col-1 bg-light">
                  <div class="col align-middle bg-light">A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.</div>
                  <div class="algin-middle bg-light">Qty: 
                     <input type="number" name="qtyPB" min="0" max="99" value="0">
                     
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <br>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-2"></div>
                  <img src="greatball.png" alt="greatball" class="col-1 bg-light">
                  <div class="col align-middle bg-light">A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.</div>
                  <div class="algin-middle bg-light">Qty: 
                     <input type="number" name="qtyGB" min="0" max="99" value="0">
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <br>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-2"></div>
                  <img src="ultraball.png" alt="ultraball" class="col-1 bg-light">
                  <div class="col align-middle bg-light">A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.</div>
                  <div class="algin-middle bg-light">Qty: 
                     <input type="number" name="qtyUB" min="0" max="99" value="0">
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <br>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-3"></div>
                  <div class="col"></div>
                     <input type="submit" name="Submit" value="Add to Cart" class="btn btn-primary float-right">
                     <input type="reset" name="clear" value="Clear Cart" class="btn btn-warning float-right">
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <?php
                  if(isset($_POST['Submit'])) {
                     $_SESSION['pokeball'] = $_POST['qtyPB'];
                     $_SESSION['greatball'] = $_POST['qtyGB'];
                     $_SESSION['ultraball'] = $_POST['qtyUB'];
                  }                  
               ?>
            </form>   
         </div>
         
      </div>

      <?php include '../../footer.php';?>
   </body>
</html>