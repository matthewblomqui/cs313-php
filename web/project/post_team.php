<?php
   session_start();
   require 'dbConnect.php';
   $db = get_db();
   $url = 'index.php';

   echo $_POST['team'].'<br>';
   echo $_POST['pokemon_1'].'<br>';
   echo $_POST['pokemon_2'].'<br>';
   echo $_POST['pokemon_3'].'<br>';
   echo $_POST['pokemon_4'].'<br>';
   echo $_POST['pokemon_5'].'<br>';
   echo $_POST['pokemon_6'].'<br>';

?>