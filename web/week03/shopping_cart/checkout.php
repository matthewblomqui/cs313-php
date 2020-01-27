<?php session_start();?>
<!DOCTYPE html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="">
   </head>
   <body>
      <?php include 'nav.php';?>

      <div class="col pt-3 pokeDark text-white"><?php print_r($_SESSION); ?></div>
      
      <?php include '../../footer.php';?>
   </body>
</html>