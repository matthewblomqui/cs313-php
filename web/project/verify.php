<?php

session_start();
require 'dbConnect.php';
$db = get_db();
$url = 'login.php';

$_SESSION['userID'] = "";
$_SESSION['errorStr'] = "";
$_SESSION['error'] = FALSE;


$name = $_POST['username'];
$pass = $_POST['pass'];

$statement = $db->prepare("SELECT id, userpassword FROM pokeuser WHERE username = :name");
$statement->bindValue(':name', $name);
$statement->execute();
$row = $statement->fetch(PDO::FETCH_ASSOC);

if (!isset($row['id'])) {
   header('Location: ' . $url);
   die();
}

$passwordHash = $row['userpassword'];

echo "verification: " . password_verify($pass, $passwordHash) . "<br>";
echo "PASSWORD HASH: " . $passwordHash;
if (password_verify($pass, $passwordHash)) {
   // Correct Password

   $_SESSION['userId'] = $row['id'];
   $url = 'index.php';
}

$_SESSION['errorStr'] = "Wrong username or password. Try again!";
$_SESSION['error'] = TRUE;
header('Location: ' . $url);
die();

?>
