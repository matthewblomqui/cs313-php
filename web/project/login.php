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
      <h3><?php echo $_SESSION['errorStr']; ?></h3>
      <div class="row pt-3 pb-3 pokeDark text-warning">
         <h2 class="text-center col">Pokemon Battle Simulator</h2>
      </div>

      <div class="row pokeLight">
         <div class="col back">
         </div>
         <div class="col-8 text-center">
            <form action="verify.php" method="post">
               Username:<br>
               <input type="text" name="firstname" id="firstname"><br>
               Password:<br>
               <input type="password" name="pass" id="pass"><br><br>

               <input type="submit" name="log_in" value="Log In"><br><br>
            </form>
            <input type="button" name="new_user" value="Create New User" onclick="new_user()"><br><br>
         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../footer.php';?>
   </body>
</html>