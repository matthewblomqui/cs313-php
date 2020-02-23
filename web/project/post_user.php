<?php
   session_start();
   require 'dbConnect.php';
   $db = get_db();
   $url = 'login.php';
   $name = $_POST['username'];
   $pass = $_POST['pass'];


   // echo "username = $name\n";
   // echo "pass = $pass\n";
   $hash = password_hash($pass, PASSWORD_DEFAULT);
   // echo "hash = $hash\n";

   $retrieveStatement = $db->prepare("SELECT username FROM pokeUser WHERE username = :name");
   $retrieveStatement->bindValue(':name', $name);
   $retrieveStatement->execute();

   $row = $retrieveStatement->fetch(PDO::FETCH_ASSOC);
   if (isset($row['username'])) {
      $_SESSION['errorStr'] = "taken";
      $url = 'signUp.php';
      header('Location: ' . $url);
      die();
   }

   $inserStatement = $db->prepare("INSERT INTO pokeUser (username, userpassword) VALUES(:name, :hash)");
   $inserStatement->bindValue(':name', $name);
   $inserStatement->bindValue(':hash', $hash);
   $inserStatement->execute();

   header('Location: ' . $url);
   die();
?>