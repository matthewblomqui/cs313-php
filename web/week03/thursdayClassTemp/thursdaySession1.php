<?php
   // Start the session
?>
<!DOCTYPE html>
<html>
   <body>
      <?php
         // remove previous session variable
         // ...

         // Set session variables
         $_SESSION["favcolor"] = "green";
         $_SESSION["favanimal"] = "snow leopard";
         $_SESSION["favgame"];

         // echo that variables have been set
         echo "Session variables have been set.";
      ?>

      <a href="thursdaySession2.php">Check the variables on another page</a>

      <h3>Just for kicks, let's try this with a form</h3>
      <form action="" method="post">
         <input type="text" name="picture">
         <input type="submit" name="Submit" value="Submit!">
      </form>

      <?php // set session variables using a form ?>
   </body>
</html>