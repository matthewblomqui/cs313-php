<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
            $("#myBtn").click(function(){
               $("btn-light").addClass('d-none');
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
               <div class="row">
                  <button type="button" class="col btn-lg btn-outline-danger btn-rounded waves-effect">+</button>
                  <button type="button" class="col btn-lg btn-outline-danger btn-rounded waves-effect">+</button>
                  <button type="button" class="col btn-lg btn-outline-danger btn-rounded waves-effect">+</button>
                  <button type="button" class="col btn-lg btn-outline-danger btn-rounded waves-effect">+</button>
                  <button type="button" class="col btn-lg btn-outline-danger btn-rounded waves-effect">+</button>
                  <button type="button" class="col btn-lg btn-outline-danger btn-rounded waves-effect">+</button>
               </div>
               <br>
               <input class="form-control" id="search" type="text" placeholder="Search for Pokemon">
               <br>
               <ul class="list-group" id="list">
                  <?php
                     $response = file_get_contents("https://pokeapi.co/api/v2/pokemon/?offset=0&limit=1000");
                     //var_dump($response);
                     $obj = json_decode($response, true);
                     //var_dump($obj[results][0]);
                     for ($i=0; $i < 10; $i++) {
                        $str = $obj['results'][$i]['name'];
                        $url = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/".($i+1).".png";

                        echo "<div class=\"btn-group-vertical btn-group-toggle\" data-toggle=\"buttons\"><li class=\"btn btn-light\"><img style=\"width:48px; height=100%;\" src=\"$url\">$str</li></div>";
                     }
                  ?>
               </ul>
               <br><br><br><br><br><br>
            </div>
         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../footer.php';?>
   </body>
</html>