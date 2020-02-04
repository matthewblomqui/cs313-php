<?php
   require "dbConnect.php";
   $db = get_db();

   $family_members = $db->prepare("SELECT * FROM w5_family_members");
   $family_members->execute();

   while ($fRow = $family_members->fetch(PDO::FETCH_ASSOC))
   {
      $first_name = $fRow["first_name"];
      $last_name = $fRow["last_name"];
      $relationship_id = $fRow["relationship_id"];
      $relation_name = $db->prepare("SELECT description FROM w5_relationships WHERE id = $relationship_id");
      $relation_name->execute();
      while($rRow = $relation_name->fetch(PDO::FETCH_ASSOC))
      {
         $relation_name = $rRow["description"];
      }

      echo "<p>$first_name $last_name is my $relationship_name ($relationship_id)</p>";
   }
?>