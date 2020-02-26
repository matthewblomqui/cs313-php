<?php
   session_start();
   require 'dbConnect.php';
   $db = get_db();
   
   foreach ($_POST as $key => $value) {
      # code...
      //echo "here is the key:".$key;

      // sql to delete a record
      $sql = "DELETE FROM team WHERE id=$key";
      $statement = $db->prepare($sql);
      $statement->execute();

   }
   header('Location: index.php');
   die();
?>