<?php
   function get_db() {
      $db = NULL;
      try
      {
         // Using environment variable to get URL: keyname 'DATABASE_URL'
         $dbUrl = getenv('DATABASE_URL');

         $dbOpts = parse_url($dbUrl);

         $dbHost = $dbOpts["host"];
         $dbPort = $dbOpts["port"];
         $dbUser = $dbOpts["user"];
         $dbPassword = $dbOpts["pass"];
         $dbName = ltrim($dbOpts["path"],'/');

         $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch (PDOException $ex)
      {
         echo 'Error!: ' . $ex->getMessage();
         die();
      }
      return $db;
   }
?>


<?php
   session_start();
   $id = $_SESSION['userId'];
   
   // $db = get_db();
   // $teams = $db->prepare("SELECT * FROM team WHERE user_id = $id");
   // $teams->execute();

   // check box for first column
   echo '<td><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="check1" name="example1"><label class="custom-control-label" for="check1"></label></td>';

?>