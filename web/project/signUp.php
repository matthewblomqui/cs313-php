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
                  $_SESSION['error'] = FALSE;
               }
            ?>
            <br><br><br><br><br><br><br><br><br>
            <form action="post_user.php" method="post">
               <div class="row">
                  <div class="col-3"></div>
                  <div class="col input-group mt-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text">Username:</span>
                     </div>
                     <input type="text" name="username" id="username" class="form-control" required>
                  </div>
                  <div class="col-3"></div>
               </div>
               <div class="row">
                  <div class="col-3"></div>
                  <div class="col input-group mt-3 mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text">Password: </span>
                     </div>
                     <input type="password" name="pass" id="pass" class="form-control" required>
                  </div>
                  <div class="col-3"></div>
               </div>
               <div class="row mb-3">
                  <div class="col-3"></div>
                  <input type="submit" name="create" class="col btn btn-success" value="Create New Account">
                  <div class="col-3"></div>
               </div>
            </form>
            <div class="row">
               <div class="col-3"></div>
               <input type="button" name="login" class="col btn btn-secondary" value="Back to Log In Page" onclick="login()">
               <div class="col-3"></div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../footer.php';?>
   </body>
</html>