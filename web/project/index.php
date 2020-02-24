<?php
   session_start();
   require 'dbConnect.php';
   $db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <title>Pokemon Battle Simulator</title>
      <link rel="stylesheet" href="prove.css">
   </head>
   <body>

      <div class="row pt-3 pb-3 pokeDark text-warning">
         <h2 class="text-center col">Pokemon Battle Simulator</h2>
      </div>

      <div class="row pokeLight">
         <div class="col back">
         </div>
         <div class="col-8 text-center">
            
            <br>
            <h4>User Id:<?php echo $_SESSION['userId'];?></h4>
            <!-- <?php
               $pokemon = $db->prepare("SELECT * FROM pokemon");
               $pokemon->execute();

               while ($row = $pokemon->fetch(PDO::FETCH_ASSOC))
               {
                  $name = $row["name"];
                  $type = $row["type_1"];
                  $sub_type = $row["type_2"];
                  $type_1 = NULL;
                  $type_2 = NULL;

                  $types = $db->prepare("SELECT type_name FROM types WHERE type_id = $type");
                  $types->execute();
                  if ($a_type = $types->fetch(PDO::FETCH_ASSOC))
                  {
                     $type_1 = $a_type['type_name'];
                  }
                  if ($sub_type != NULL)
                  {
                     $types = $db->prepare("SELECT type_name FROM types WHERE type_id = $sub_type");
                     $types->execute();
                     if ($a_type = $types->fetch(PDO::FETCH_ASSOC))
                     {
                        $type_2 = $a_type['type_name'];
                     }
                  }
                  echo "<h3><b>Name:</b> $name <b>Type:</b> $type_1 $type_2</h3>";
               }
            ?> -->
            <a href="teamBuilder.php" class="btn btn-primary">Team Builder</a>
            <br><br><br><br><br><br>
         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../footer.php';?>
   </body>
</html>