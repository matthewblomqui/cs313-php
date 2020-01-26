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
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
         <a class="navbar-brand" href="#">
            <img src="pokemart_logo_small.jpg" alt="Logo" style="width:40px;">
         </a>
         <h3 class="text-light">Pokemart Shop</h3>
         <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
               <a class="nav-link" href="javascript:void(0)">Link</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="javascript:void(0)">Link</a>
               </li>
            </ul>
            <a class="" href="#">
               <img src="cart.png" alt="Logo" style="background: white; border-radius: 50%;width:60px;">
            </a>
         </div>
      </nav>

      <div class="row">
         <div class="col-2 pt-3">
            <h3 class="text-center">Category</h3>
         </div>
         <div class="col pt-3">
            <h3 class="text-center">Items</h3>
            <div class="row"> <!-- Single item -->
               <div class="triangle-left col-2"></div>
               <img src="pokeball.png" alt="pokeball" class="col-1">
               <div class="col-3">Info</div>
               <div class="triangle-right col-1"></div>
            </div>
            <div class="row"> <!-- Single item -->
               <div class="triangle-left col-2"></div>
               <img src="greatball.png" alt="pokeball" class="col-1">
               <div class="col-3">Info</div>
               <div class="triangle-right col-1"></div>
            </div>
            <div class="row"> <!-- Single item -->
               <div class="triangle-left col-2"></div>
               <img src="ultraball.png" alt="pokeball" class="col-1">
               <div class="col-3">Info</div>
               <div class="triangle-right col-1"></div>
            </div>
         </div>
      </div>

      <?php include '../../footer.php';?>
   </body>
</html>