<?php
   require "dbConnect.php";
   //$db = get_db();
   get_db(); // calling this saves the database info in variable $db

   $family_members = $db->prepare("SELECT * FROM w5_family_members");
   $family_members->execute();

   while ($fRow = $family_members->fetch(PDO::FETCH_ASSOC))
   {
      echo 'First Name: ' . $fRow['first_name'] . ' Last Name: ' . $fRow['last_name'] . '<br/>';
   }
?>