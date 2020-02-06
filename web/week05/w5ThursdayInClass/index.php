<?php
   require "../inClass/dbConnect.php";
   $db = get_db();

   $images = $db->prepare("SELECT name, image FROM w5_event");
   $images->execute();

   while ($row = $images->fetch(PDO::FETCH_ASSOC))
   {
      $image = $row["image"];
      $name = $row["name"];
      echo "<h3>$name</h3><img src=\"$image\" alt=\"$name\"><br>";
   }
?>