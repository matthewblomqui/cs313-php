<?php
   session_start();
   $total = 0;

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
         //alert(($("#datapb").val() == null ? "null" : $("#datapb").val()));
         var ball1 = ($("#datapb").val() == null ? 0 : $("#datapb").val());
         var ball2 = ($("#datagb").val() == null ? 0 : $("#datagb").val());
         var ball3 = ($("#dataub").val() == null ? 0 : $("#dataub").val());
         var pot1 = ($("#datamp").val() == null ? 0 : $("#datamp").val());
         var pot2 = ($("#datafr").val() == null ? 0 : $("#datafr").val());
         var rep1 = ($("#datasr").val() == null ? 0 : $("#datasr").val());
         var rep2 = ($("#datamr").val() == null ? 0 : $("#datamr").val());
         var escr = ($("#dataer").val() == null ? 0 : $("#dataer").val());
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
                     <?php if ($_SESSION['pokeball'] != 0) {
                        $num = $_SESSION['pokeball'];
                        $price = $num * 200;
                        $total += $price;
                        echo '<tr id="pb">
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
                           <input type="number" class="form-control text-center"  id="datapb" value="'; echo $num.'">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="subpb">'; echo $price.'</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delpb">Delete</button>
                        </td>
                     </tr>'; }?>
                     <?php if ($_SESSION['greatball'] != 0) {
                        $num = $_SESSION['greatball'];
                        $price = $num * 600;
                        $total += $price;
                        echo '<tr id="gb">
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
                           <input type="number" class="form-control text-center" id="datagb" value="'; echo $num.'">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="subgb">'; echo $price.'</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delgb">Delete</button>
                        </td>
                     </tr>'; }?>
                     <?php if ($_SESSION['ultraball'] != 0) {
                        $num = $_SESSION['ultraball'];
                        $price = $num * 1200;
                        $total += $price;
                        echo '<tr id="ub">
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
                           <input type="number" class="form-control text-center" id="dataub" value="'; echo $num.'">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="subub">'; echo $price.'</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delub">Delete</button>
                        </td>
                     </tr>'; }?>
                     <?php if ($_SESSION['maxpotion'] != 0) {
                        $num = $_SESSION['maxpotion'];
                        $price = $num * 2500;
                        $total += $price;
                        echo '<tr id="mp">
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
                           <input type="number" class="form-control text-center" id="datamp" value="'; echo $num.'">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="submp">'; echo $price.'</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delmp">Delete</button>
                        </td>
                     </tr>'; }?>
                     <?php if ($_SESSION['fullrestore'] != 0) {
                        $num = $_SESSION['fullrestore'];
                        $price = $num * 3000;
                        $total += $price;
                        echo '<tr id="fr">
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
                           <input type="number" class="form-control text-center" id="datafr" value="'; echo $num.'">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="subfr">'; echo $price.'</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delfr">Delete</button>
                        </td>
                     </tr>'; }?>
                     <?php if ($_SESSION['superrepel'] != 0) {
                        $num = $_SESSION['superrepel'];
                        $price = $num * 500;
                        $total += $price;
                        echo '<tr id="sr">
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
                           <input type="number" class="form-control text-center" id="datasr" value="'; echo $num.'">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="subsr">'; echo $price.'</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delsr">Delete</button>
                        </td>
                     </tr>'; }?>
                     <?php if ($_SESSION['maxrepel'] != 0) {
                        $num = $_SESSION['maxrepel'];
                        $price = $num * 700;
                        $total += $price;
                        echo '<tr id="mr">
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
                           <input type="number" class="form-control text-center" id="datamr" value="'; echo $num.'">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="submr">'; echo $price.'</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="delmr">Delete</button>
                        </td>
                     </tr>'; }?>
                     <?php if ($_SESSION['escaperope'] != 0) {
                        $num = $_SESSION['escaperope'];
                        $price = $num * 550;
                        $total += $price;
                        echo '<tr id="er">
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
                           <input type="number" class="form-control text-center" id="dataer" value="'; echo $num.'">
                        </td>
                        <td data-th="Subtotal" class="text-center" id="suber">'; echo $price.'</td>
                        <td class="actions" data-th="">
                           <button class="btn btn-danger btn-md" id="deler">Delete</button>
                        </td>
                     </tr>'; }?>
                  </tbody>
                  <tfoot>
                     <tr>
                        <td>
                           <a href="browse_shop.php" class="btn btn-primary">Continue Shopping</a>
                        </td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong>Total  <img src="pokedollar.png" alt="pokedollar" class="dollar-white"> <div id="total"><?php echo $total;?></div></strong></td>
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
