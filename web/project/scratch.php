            <!-- <br>
            <h4>Welcome <?php echo $username.', Here are your teams';?></h4>
            <form action="" method="POST">
               <div class="container">          
                  <table class="table table-hover">
                     <thead>
                        <tr>
                        <th></th>
                        <th>Team Name</th>
                        <th>Pokemon 1</th>
                        <th>Pokemon 2</th>
                        <th>Pokemon 3</th>
                        <th>Pokemon 4</th>
                        <th>Pokemon 5</th>
                        <th>Pokemon 6</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                        <td>  
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                              <label class="custom-control-label" for="customCheck"></label>
                           </div>
                        </td>
                        <td>Team Boss</td>
                        <td><img style="width:48px; height:auto;" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/448.png">Lucario</td>
                        <td><img style="width:48px; height:auto;" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/94.png">Gengar</td>
                        <td><img style="width:48px; height:auto;" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/257.png">Blaziken</td>
                        <td><img style="width:48px; height:auto;" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/802.png">Marshadow</td>
                        <td><img style="width:48px; height:auto;" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/282.png">Gardevoir</td>
                        <td><img style="width:48px; height:auto;" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/3.png">Venusaur</td>
                        </tr>
                        <?php //include 'pokiRow.php'; ?>

                     </tbody>
                  </table>
               </div>
            </form>
            <a href="teamBuilder.php" class="btn btn-primary">Go to Team Builder</a>
            <a href="" class="btn btn-danger">Remove Selected Teams</a>
            <br><br><br><br><br><br> -->












































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