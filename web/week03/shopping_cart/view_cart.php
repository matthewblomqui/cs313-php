<?php
   session_start();
   $price = array(200, 600, 1200, 2500, 3000, 500, 700, 550);

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

   <script>
      function tally() {
         var total = document.getElementById("total");
         var ball1 = document.getElementById("datapb").value;
         var ball2 = document.getElementById("datagb").value;
         var ball3 = document.getElementById("dataub").value;
         var pot1 = document.getElementById("datamp").value;
         var pot2 = document.getElementById("datafr").value;
         var rep1 = document.getElementById("datasr").value;
         var rep2 = document.getElementById("datamr").value;
         var escr = document.getElementById("dataer").value;
         total.innerText = ball1*200 + ball2*600 + ball3*1200 +
                           pot1*2500 + pot2*3000 + rep1*500 +
                           rep2*700 + escr*550;
      }

      $(document).ready(function(){
         $("#delpb").click(function(){
            $("#pb").hide();
         });
         $("#delgb").click(function(){
            $("#gb").hide();
         });
         $("#delub").click(function(){
            $("#ub").hide();
         });
         $("#delmp").click(function(){
            $("#mp").hide();
         });
         $("#delfr").click(function(){
            $("#fr").hide();
         });
         $("#delsr").click(function(){
            $("#sr").hide();
         });
         $("#delmr").click(function(){
            $("#mr").hide();
         });
         $("#deler").click(function(){
            $("#er").hide();
         });
         $("#datapb").on("change", function(){
            $("#subpb").text($("#datapb").val() * 200);
            tally();
         });
         $("#datagb").on("change", function(){
            $("#subgb").text($("#datagb").val() * 600);
            tally();
         });
         $("#dataub").on("change", function(){
            $("#subub").text($("#dataub").val() * 1200);
            tally();
         });
         $("#datamp").on("change", function(){
            $("#submp").text($("#datamp").val() * 2500);
            tally();
         });
         $("#datafr").on("change", function(){
            $("#subfr").text($("#datafr").val() * 3000);
            tally();
         });
         $("#datasr").on("change", function(){
            $("#subsr").text($("#datasr").val() * 500);
            tally();
         });
         $("#datamr").on("change", function(){
            $("#submr").text($("#datamr").val() * 700);
            tally();
         });
         $("#dataer").on("change", function(){
            $("#suber").text($("#dataer").val() * 550);
            tally();
         });
      });
   
   document.getElementById("pb").onload = function() {test()};

   function test() {
      alert("test");
   }
   </script>
</head>

<body>
   <?php include 'nav.php';?>

   <div class="row">
      <div class="col-2"></div> <!-- placeholder for spacing -->
     <div class="col pt-3 pokeDark">
         <hr>
         <h2 class="text-primary text-center">Cart Details</h2>
         <hr>

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
                     <tr id="pb">
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
                           <input type="number" class="form-control text-center"  id="datapb" value="<?php echo $_SESSION['pokeball']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="subpb"><?php echo ($_SESSION['pokeball'] * 200) ?></td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delpb">Delete</button>
                        </td>
                     </tr>
                     <tr id="gb">
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
                           <input type="number" class="form-control text-center" id="datagb" value="<?php echo $_SESSION['greatball']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="subgb"><?php echo $_SESSION['greatball'] * 600?></td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delgb">Delete</button>
                        </td>
                     </tr>
                     <tr id="ub">
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
                           <input type="number" class="form-control text-center" id="dataub" value="<?php echo $_SESSION['ultraball']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="subub"><?php echo $_SESSION['ultraball'] * 1200?></td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delub">Delete</button>
                        </td>
                     </tr>
                     <tr id="mp">
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
                           <input type="number" class="form-control text-center" id="datamp" value="<?php echo $_SESSION['maxpotion']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="submp"><?php echo $_SESSION['maxpotion']*2500?></td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delmp">Delete</button>
                        </td>
                     </tr>
                     <tr id="fr">
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
                           <input type="number" class="form-control text-center" id="datafr" value="<?php echo $_SESSION['fullrestore']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="subfr"><?php echo $_SESSION['fullrestore']*3000?></td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delfr">Delete</button>
                        </td>
                     </tr>
                     <tr id="sr">
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
                           <input type="number" class="form-control text-center" id="datasr" value="<?php echo $_SESSION['superrepel']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="subsr"><?php echo $_SESSION['superrepel']*500?></td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delsr">Delete</button>
                        </td>
                     </tr>
                     <tr id="mr">
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
                           <input type="number" class="form-control text-center" id="datamr" value="<?php echo $_SESSION['maxrepel']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="submr"><?php echo $_SESSION['maxrepel']*700?></td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delmr">Delete</button>
                        </td>
                     </tr>
                     <tr id="er">
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
                           <input type="number" class="form-control text-center" id="dataer" value="<?php echo $_SESSION['escaperope']?>">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="suber"><?php echo $_SESSION['escaperope']*550?></td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="deler">Delete</button>
                        </td>
                     </tr>
                  </tbody>
                  <tfoot>
                     <tr>
                        <td>
                           <a href="browse_shop.php" class="btn btn-primary">Continue Shopping</a>
                        </td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong>Total  <img src="pokedollar.png" alt="pokedollar" class="dollar-white"> <div id="total"><?php $t = 0; $i = 0; foreach($_SESSION as $x => $val) { $t += $val * $price[$i]; $i += 1;} echo $t; ?></div></strong></td>
                        <td><a href="checkout.php" class="btn btn-success btn-block">Checkout</a></td>
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
