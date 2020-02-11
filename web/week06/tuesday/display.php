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
            $statement = $db->prepare('SELECT * FROM w6_user WHERE id = :pseronId');
            $statement->bindValue(':personId', $personId);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id = $row['id'];
               $first = $row['first'];
               $last = $row['last'];
               $food_id = $row['food_id'];

               $statement = $db->prepare('SELECT food FROM w6_food WHERE id = $food_id');
               $statement->execute();
               while($fRow = $statement->fetch(PDO::FETCH_ASSOC))
               {
                  $food = $fRow['food'];
               }
               echo "<h1>$first $last's favorite food is $food</h1>";
            }
            // execute another query to get food data
            // display name and favorite food
         ?>

		</div>
	</body>
</html>