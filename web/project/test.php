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
      $team_id = $row['id'];
      // Start row
      echo '<tr>';
      // check box for first column
      echo '<td><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="'.$team_id.'" name="example1"><label class="custom-control-label" for="'.$team_id.'"></label></td>';
      // second column
      echo '<td>'.$team_name.'</td>';
      // column 3-8
      for ($i=1; $i < 7; $i++) { 
         $poke = $row['pokemon_'.$i];
         $pokemon = $db->prepare("SELECT * FROM pokemon WHERE pokedex = $poke");
         $pokemon->execute();
         if ($pRow = $pokemon->fetch(PDO::FETCH_ASSOC))
         {
            $name = $pRow['name'];
            $img = '<img style="width:48px; height:auto;" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/'.$poke.'.png">';
            echo '<td>'.$img.$name.'</td>';
         }
      }
      // End row
      echo '</tr>';
   }
?>