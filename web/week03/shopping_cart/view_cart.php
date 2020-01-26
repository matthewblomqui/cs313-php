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
     <div class="col pt-3 pokeDark">
         <hr>
         <h2 class="text-primary text-center">Cart Details</h2>
         <hr>
         <?php
               print_r($_SESSION);
         ?>
         <br>

         <div class="row text-white">
            <div class="container">
               <table id="cart" class="table table-condensed text-white">
                  <thead>
                     <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td data-th="Product">
                           <div class="row">
                              <div class="col-sm-2 hidden-xs"><img src="pokeball.png" alt="pokeball" class="size" /></div>
                              <div class="col-sm-10">
                                 <h4 class="nomargin pl-3">Pokeball</h4>
                              </div>
                           </div>
                        </td>
                        <td data-th="Price">200</td>
                        <td data-th="Quantity">
                           <input type="number" class="form-control text-center" value="<?php echo $_SESSION['pokeball']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center">200</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md">Delete</button>
                        </td>
                     </tr>
                     <tr>
                        <td data-th="Product">
                           <div class="row">
                              <div class="col-sm-2 hidden-xs"><img src="greatball.png" alt="greatball" class="size" /></div>
                              <div class="col-sm-10">
                                 <h4 class="nomargin pl-3">Greatball</h4>
                              </div>
                           </div>
                        </td>
                        <td data-th="Price">600</td>
                        <td data-th="Quantity">
                           <input type="number" class="form-control text-center" value="<?php echo $_SESSION['greatball']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center">600</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md">Delete</button>
                        </td>
                     </tr>
                     <tr>
                        <td data-th="Product">
                           <div class="row">
                              <div class="col-sm-2 hidden-xs"><img src="ultraball.png" alt="ultraball" class="size" /></div>
                              <div class="col-sm-10">
                                 <h4 class="nomargin pl-3">Ultraball</h4>
                              </div>
                           </div>
                        </td>
                        <td data-th="Price">1200</td>
                        <td data-th="Quantity">
                           <input type="number" class="form-control text-center" value="<?php echo $_SESSION['ultraball']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center">1200</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md">Delete</button>
                        </td>
                     </tr>
                     <tr>
                        <td data-th="Product">
                           <div class="row">
                              <div class="col-sm-2 hidden-xs"><img src="maxpotion.png" alt="maxpotion" class="size" /></div>
                              <div class="col-sm-10">
                                 <h4 class="nomargin pl-3">Max Potion</h4>
                              </div>
                           </div>
                        </td>
                        <td data-th="Price">2500</td>
                        <td data-th="Quantity">
                           <input type="number" class="form-control text-center" value="<?php echo $_SESSION['maxpotion']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center">2500</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md">Delete</button>
                        </td>
                     </tr>
                     <tr>
                        <td data-th="Product">
                           <div class="row">
                              <div class="col-sm-2 hidden-xs"><img src="fullpotion.png" alt="fullrestore" class="size" /></div>
                              <div class="col-sm-10">
                                 <h4 class="nomargin pl-3">Full Restore</h4>
                              </div>
                           </div>
                        </td>
                        <td data-th="Price">3000</td>
                        <td data-th="Quantity">
                           <input type="number" class="form-control text-center" value="<?php echo $_SESSION['fullrestore']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center">3000</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md">Delete</button>
                        </td>
                     </tr>
                     <tr>
                        <td data-th="Product">
                           <div class="row">
                              <div class="col-sm-2 hidden-xs"><img src="superrepel.png" alt="superrepel" class="size" /></div>
                              <div class="col-sm-10">
                                 <h4 class="nomargin pl-3">Super Repel</h4>
                              </div>
                           </div>
                        </td>
                        <td data-th="Price">500</td>
                        <td data-th="Quantity">
                           <input type="number" class="form-control text-center" value="<?php echo $_SESSION['superrepel']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center">500</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md">Delete</button>
                        </td>
                     </tr>
                     <tr>
                        <td data-th="Product">
                           <div class="row">
                              <div class="col-sm-2 hidden-xs"><img src="maxrepel.png" alt="maxrepel" class="size" /></div>
                              <div class="col-sm-10">
                                 <h4 class="nomargin pl-3">Max Repel</h4>
                              </div>
                           </div>
                        </td>
                        <td data-th="Price">700</td>
                        <td data-th="Quantity">
                           <input type="number" class="form-control text-center" value="<?php echo $_SESSION['maxrepel']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center">700</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md">Delete</button>
                        </td>
                     </tr>
                     <tr>
                        <td data-th="Product">
                           <div class="row">
                              <div class="col-sm-2 hidden-xs"><img src="escaperope.png" alt="escaperope" class="size" /></div>
                              <div class="col-sm-10">
                                 <h4 class="nomargin pl-3">Escape Rope</h4>
                              </div>
                           </div>
                        </td>
                        <td data-th="Price">550</td>
                        <td data-th="Quantity">
                           <input type="number" class="form-control text-center" value="<?php echo $_SESSION['escaperope']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center">550</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md">Delete</button>
                        </td>
                     </tr>
                  </tbody>
                  <tfoot>
                     <tr>
                        <td>
                           <a href="browse_shop.php" class="btn btn-primary">Continue Shopping</a>
                           <a href="#" class="btn btn-warning">Update Cart</a>
                        </td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong>Total  <img src="pokedollar.png" alt="pokedollar" class="dollar-white"> 200</strong></td>
                        <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                     </tr>
                  </tfoot>
               </table>
               <br><br><br><br>
            </div>
         </div>
      </div>
      <div class="col-2"></div> <!-- placeholder for spacing -->
   </div>

   <?php include '../../footer.php';?>
</body>

</html>
