<?php
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
      //echo 'Error!: ' . $ex->getMessage();
      die();
   }
?>


<?php
   session_start();
   $id = $_SESSION['userId'];
   
   // $db = get_db();
   $teams = $db->prepare("SELECT * FROM team WHERE user_id = $id");
   $teams->execute();

   while ($row = $teams->fetch(PDO::FETCH_ASSOC))
   {
      $team_name = $row['team_name'];

      // $p1 = $row['pokemon_1'];
      // $p2 = $row['pokemon_2'];
      // $p3 = $row['pokemon_3'];
      // $p4 = $row['pokemon_4'];
      // $p5 = $row['pokemon_5'];
      // $p6 = $row['pokemon_6'];

      // check box for first column
      echo '<td><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="check1" name="example1"><label class="custom-control-label" for="check1"></label></td>';
      // second column
      echo '<td>'.$team_name.'</td>';
      // column 3-8
      for ($i=1; $i < 7; $i++) { 
         $poke = $row['pokemon_'.$i];
         echo '<td>'.$poke.'</td>';
      }
      // echo '<td>'.$p1.'</td>';
      // echo '<td>'.$p2.'</td>';
      // echo '<td>'.$p3.'</td>';
      // echo '<td>'.$p4.'</td>';
      // echo '<td>'.$p5.'</td>';
      // echo '<td>'.$p6.'</td>';
   }
?>