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

   $insert = $db->prepare("INSERT INTO team (name, user_id, pokemon_1, pokemon_2, pokemon_3, pokemon_4, pokemon_5, pokemon_6) VALUES (:name, :id, :p1, :p2, :p3, :p4, :p5, :p6)");
   $insert->bindValue(':name',$team);
   $insert->bindValue(':id',$id);
   $insert->bindValue(':p1',$pokemon_1);
   $insert->bindValue(':p2',$pokemon_2);
   $insert->bindValue(':p3',$pokemon_3);
   $insert->bindValue(':p4',$pokemon_4);
   $insert->bindValue(':p5',$pokemon_5);
   $insert->bindValue(':p6',$pokemon_6);
   $insert->execute();

   header('Location: ' . $url);
   die();
?>