<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <title>Pokemon Battle Simulator</title>
      <link rel="stylesheet" href="prove.css">
      <script>
         $(document).ready(function(){
            $("#search").on("keyup", function() {
               var value = $(this).val().toLowerCase();
               $("#list li").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
               });
            });
         });
      </script>
   </head>
   <body>

      <div class="row pt-3 pb-3 pokeDark text-warning">
         <h2 class="text-center col">Team Builder</h2>
      </div>

      <div class="row pokeLight">
         <div class="col back">
         </div>
         <div class="col-8 text-center">
            <div class="container">
               <br>
               <input class="form-control" id="search" type="text" placeholder="Search for Pokemon">
               <br>
               <ul class="list-group" id="list">
                  <?php
                     $response = file_get_contents("https://pokeapi.co/api/v2/pokemon/?offset=0&limit=1000");
                     //var_dump($response);
                     $obj = json_decode($response, true);
                     //var_dump($obj[0]);
                     for ($i=0; $i < 964; $i++) {
                        $str = $obj['results'][$i]['name'];
                        echo "<li class=\"list-group-item\">$str</li>";
                     }
                     //print_r($response);
                  ?>
               </ul>
            </div>
         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../../footer.php';?>
   </body>
</html>