<?php
   // retrieve POST data
   $textForPHP = htmlspecialchars($_POST["textForPHP"]);
   $email = htmlspecialchars($_POST["emailForPHP"]);
   $password = htmlspecialchars($_POST["passwordForPHP"]);
   $optradio = htmlspecialchars($_POST["optradio"]);
   $textbox = htmlspecialchars($_POST["textbox"]);

   echo "Countries: ";
   if (!empty($_POST["countries"]))  {
      foreach ($_POST["countries"] as $key => $value) {
         echo "$value";
      }
   }
   

   // do something with the data
   echo "Here is your name $textForPHP, email $email, and your password is $password, major is $optradio, comments are $textbox";

?>
