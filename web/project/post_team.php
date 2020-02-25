<?php
   session_start();
   require 'dbConnect.php';
   $db = get_db();
   $url = 'index.php';
   $id = $_SESSION['userID'];
   $team = $_POST['team'];
   $p1 = $_POST['pokemon_1'];
   $p2 = $_POST['pokemon_2'];
   $p3 = $_POST['pokemon_3'];
   $p4 = $_POST['pokemon_4'];
   $p5 = $_POST['pokemon_5'];
   $p6 = $_POST['pokemon_6'];

   $query = "INSERT INTO team (team_name, user_id, pokemon_1, pokemon_2, pokemon_3, pokemon_4, pokemon_5, pokemon_6) VALUES (:team,:id,:p1,:p2,:p3,:p4,:p5,:p6)";
   $insertStatement = $db->prepare($query);
   $insertStatement->bindValue(':team',$team);
   $insertStatement->bindValue(':id',$id);
   $insertStatement->bindValue(':p1',$p1);
   $insertStatement->bindValue(':p2',$p2);
   $insertStatement->bindValue(':p3',$p3);
   $insertStatement->bindValue(':p4',$p4);
   $insertStatement->bindValue(':p5',$p5);
   $insertStatement->bindValue(':p6',$p6);
   $insertStatement->execute();
   echo "Success?";

   // header('Location: ' . $url);
   // die();
?>