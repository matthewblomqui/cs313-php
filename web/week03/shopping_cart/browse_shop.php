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
         <div class="col-3 pt-3 pokeDark text-white">
            <h3 class="pl-3">Message to Trainers</h3>
            <p class="pl-3">
               Welcome trainers! Here at the Pokemart, we have a
               collection of items that will help you on your journey
               to become the the best trainers out there. If there are
               items that you need, we have it! If there is something
               that you need that is not here, check back next week. 
               New items are in stock every week!
            </p>
         </div>
         <div class="col pt-3">
            <form action="browse_shop.php" method="post">
               <h3 class="text-center">Items</h3>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-2"></div>
                  <img src="pokeball.png" alt="pokeball" class="col-1 bg-light size">
                  <img src="pokedollar.png" alt="pokedollar" class="col-1 bg-light">200
                  <div class="col align-middle bg-light">A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.</div>
                  <div class="algin-middle bg-light">Qty: 
                     <input type="number" name="qtyPB" min="0" max="99" value="0">
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <br>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-2"></div>
                  <img src="greatball.png" alt="greatball" class="col-1 bg-light size">
                  <div class="col align-middle bg-light">A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.</div>
                  <div class="algin-middle bg-light">Qty: 
                     <input type="number" name="qtyGB" min="0" max="99" value="0">
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <br>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-2"></div>
                  <img src="ultraball.png" alt="ultraball" class="col-1 bg-light size">
                  <div class="col align-middle bg-light">A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.</div>
                  <div class="algin-middle bg-light">Qty: 
                     <input type="number" name="qtyUB" min="0" max="99" value="0">
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <br>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-2"></div>
                  <img src="maxpotion.png" alt="maxpotion" class="col-1 bg-light size">
                  <div class="col align-middle bg-light">A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.</div>
                  <div class="algin-middle bg-light">Qty: 
                     <input type="number" name="qtyMP" min="0" max="99" value="0">
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <br>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-2"></div>
                  <img src="fullpotion.png" alt="fullrestore" class="col-1 bg-light size">
                  <div class="col align-middle bg-light">A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.</div>
                  <div class="algin-middle bg-light">Qty: 
                     <input type="number" name="qtyFR" min="0" max="99" value="0">
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <br>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-2"></div>
                  <img src="superrepel.png" alt="superrepel" class="col-1 bg-light size">
                  <div class="col align-middle bg-light">A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.</div>
                  <div class="algin-middle bg-light">Qty: 
                     <input type="number" name="qtySR" min="0" max="99" value="0">
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <br>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-2"></div>
                  <img src="maxrepel.png" alt="maxrepel" class="col-1 bg-light size">
                  <div class="col align-middle bg-light">A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.</div>
                  <div class="algin-middle bg-light">Qty: 
                     <input type="number" name="qtyMR" min="0" max="99" value="0">
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <br>

               <div class="row h-24"> <!-- Single item -->
                  <div class="triangle-left col-2"></div>
                  <img src="escaperope.png" alt="escaperope" class="col-1 bg-light size">
                  <div class="col align-middle bg-light">A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.</div>
                  <div class="algin-middle bg-light">Qty: 
                     <input type="number" name="qtyER" min="0" max="99" value="0">
                  </div>
                  <div class="triangle-right col-2"></div>
               </div>

               <br>
               
               <div class="row h-24"> <!-- Buttons -->
                  <div class="col-2"></div>
                  <div class="col">
                     <input type="submit" name="Submit" value="Update Cart" class="btn btn-primary float-right">
                     <input type="reset" name="clear" value="Clear" class="btn btn-warning float-right">
                  </div>
                  <div class="col-2"></div>
               </div>

               <br><br><br><br><br><br>

               <?php
                  if(isset($_POST['Submit'])) {
                     $_SESSION['pokeball'] = $_POST['qtyPB'];
                     $_SESSION['greatball'] = $_POST['qtyGB'];
                     $_SESSION['ultraball'] = $_POST['qtyUB'];
                     $_SESSION['maxpotion'] = $_POST['qtyMP'];
                     $_SESSION['fullrestore'] = $_POST['qtyFR'];
                     $_SESSION['superrepel'] = $_POST['qtySR'];
                     $_SESSION['maxrepel'] = $_POST['qtyMR'];
                     $_SESSION['escaperope'] = $_POST['qtyER'];
                  }                  
               ?>
            </form>   
         </div>
         
      </div>

      <?php include '../../footer.php';?>
   </body>
</html>