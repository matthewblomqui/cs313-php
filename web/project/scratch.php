<?php
               
               $team = $db->prepare("SELECT * FROM team WHERE user_id = $id");
               $team->execute();

               while ($row = $team->fetch(PDO::FETCH_ASSOC))
               {
                  $tm = $row['team_name'];
                  echo "<h4>Team Name: $tm</h4>";
                  $p1 = $row['pokemon_1'];
                  $p2 = $row['pokemon_2'];
                  $p3 = $row['pokemon_3'];
                  $p4 = $row['pokemon_4'];
                  $p5 = $row['pokemon_5'];
                  $p6 = $row['pokemon_6'];
                  echo $p1.'<br>';
               }
            ?>
            <?php
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
            ?>