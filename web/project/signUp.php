<?php
       session_start();
       require 'dbConnect.php';
       $db = get_db();
       $_SESSION['errorStr'] = "";
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <title>Login</title>
      <link rel="stylesheet" href="prove.css">
   </head>
   <script>
      function new_user() {
         window.location.replace('signUp.php');
      }
   </script>
   <body>
      <div class="row pt-3 pb-3 pokeDark text-warning">
         <h2 class="text-center col">Sign Up</h2>
      </div>

      <div class="row pokeLight">
         <div class="col back">
         </div>
         <div class="col-8 text-center">
            <form action="post_user.php" method="post">
               Username:<br>
               <input type="text" name="username" id="username"><br>
               Password:<br>
               <input type="password" name="pass" id="pass"><br><br>

               <input type="submit" name="create" value="Create"><br><br>
            </form>
         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../footer.php';?>
   </body>
</html>