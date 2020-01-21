<?php
   // retrieve POST data
   $name = htmlspecialchars($_POST["name"]);
   $email = htmlspecialchars($_POST["emailForPHP"]);
   $optradio = htmlspecialchars($_POST["optradio"]);
   $textbox = htmlspecialchars($_POST["textbox"]);

   // do something with the data
   echo "Here is your email $email, and your password is $password, major is $optradio, comments are $textbox";

   
?>
  