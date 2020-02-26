<?php
   require 'dbConnect.php';
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