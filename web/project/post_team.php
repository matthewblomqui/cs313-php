<?php
   session_start();
   require 'dbConnect.php';
   $db = get_db();
   $url = 'index.php';
   $id = $_POST['userID'];
   $team = $_POST['team'];
   $p1 = $_POST['pokemon_1'];
   $p2 = $_POST['pokemon_2'];
   $p3 = $_POST['pokemon_3'];
   $p4 = $_POST['pokemon_4'];
   $p5 = $_POST['pokemon_5'];
   $p6 = $_POST['pokemon_6'];
   echo $id.'<br>';
   echo $team.'<br>';
   echo $p1.'<br>';
   echo $p2.'<br>';
   echo $p3.'<br>';
   echo $p4.'<br>';
   echo $p5.'<br>';
   echo $p6.'<br>';

   try
   {
      $query = "INSERT INTO team (team_name, user_id, pokemon_1, pokemon_2, pokemon_3, pokemon_4, pokemon_5, pokemon_6) VALUES (:team,:id,:p1,:p2,:p3,:p4,:p5,:p6)";
      $insertStatement = $db->prepare($query);
      $insertStatement->bindValue(':team',$team);
      $insertStatement->bindValue(':id',$id);
      $insertStatement->bindValue(':p1',(int)$p1);
      $insertStatement->bindValue(':p2',(int)$p2);
      $insertStatement->bindValue(':p3',(int)$p3);
      $insertStatement->bindValue(':p4',(int)$p4);
      $insertStatement->bindValue(':p5',(int)$p5);
      $insertStatement->bindValue(':p6',(int)$p6);
      $insertStatement->execute();
   }
   catch (Exception $ex)
   {
      echo "Error with DB. Details: $ex";
      die();
   }
   echo "Success?";

   // header('Location: ' . $url);
   // die();
?>