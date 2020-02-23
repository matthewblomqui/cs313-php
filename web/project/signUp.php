<?php
       session_start();
       require 'dbConnect.php';
       $db = get_db();
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <title>Login</title>
      <link rel="stylesheet" href="prove.css">
   </head>
   <script>
      function login() {
         window.location.replace('login.php');
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
            <?php
               if ($_SESSION['error'])
               {
                  $str = $_SESSION['errorStr'];
                  echo "<div class=\"alert alert-danger alert-dismissible\">".
                        "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>".
                        "<strong>Warning!</strong> $str".
                     "</div>";
               }
            ?>
            <form action="post_user.php" method="post">
               Username:<br>
               <input type="text" name="username" id="username" required><br>
               Password:<br>
               <input type="password" name="pass" id="pass" required><br><br>

               <input type="submit" name="create" value="Create"><br><br>
            </form>
            <input type="button" name="login" value="Log In" onclick="login()"><br><br>
         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../footer.php';?>
   </body>
</html>