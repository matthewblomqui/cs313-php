<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            // retrieve url parameter
            $personId = $_GET['personId'];
            // execute query to pull up data from that id
            $statement = $db->prepare('SELECT * FROM w6_user WHERE id = :personId');
            $statement->bindValue(':personId', $personId);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id = $row['id'];
               $first = $row['first_name'];
               $last = $row['last_name'];
               $food_id = $row['food_type'];

               // execute another query to get food data
               $food_statement = $db->prepare("SELECT food FROM w6_food WHERE id = $food_id");
               $food_statement->execute();
               while($fRow = $food_statement->fetch(PDO::FETCH_ASSOC))
               {
                  $food = $fRow['food'];
               }
               // display name and favorite food
               echo "<h1>$first $last's favorite food is $food</h1>";
            }
         ?>

		</div>
	</body>
</html>