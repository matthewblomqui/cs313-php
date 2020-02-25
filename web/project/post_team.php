<?php
   session_start();
   require 'dbConnect.php';
   $db = get_db();
   $url = 'index.php';
   $id = $_SESSION['userID'];
   $team = $_POST['team'];
   $pokemon_1 = $_POST['pokemon_1'];
   $pokemon_2 = $_POST['pokemon_2'];
   $pokemon_3 = $_POST['pokemon_3'];
   $pokemon_4 = $_POST['pokemon_4'];
   $pokemon_5 = $_POST['pokemon_5'];
   $pokemon_6 = $_POST['pokemon_6'];

   $insertStatement = $db->prepare("INSERT INTO team (name, user_id, pokemon_1, pokemon_2, pokemon_3, pokemon_4, pokemon_5, pokemon_6) VALUES (:team_name, :id, :p1, :p2, :p3, :p4, :p5, :p6)");
   echo "Success?";
   // $insertStatement->bindValue(':team_name',$team);
   // $insertStatement->bindValue(':id',$id);
   // $insertStatement->bindValue(':p1',$pokemon_1);
   // $insertStatement->bindValue(':p2',$pokemon_2);
   // $insertStatement->bindValue(':p3',$pokemon_3);
   // $insertStatement->bindValue(':p4',$pokemon_4);
   // $insertStatement->bindValue(':p5',$pokemon_5);
   // $insertStatement->bindValue(':p6',$pokemon_6);
   // $insertStatement->execute();

   // header('Location: ' . $url);
   // die();
?>