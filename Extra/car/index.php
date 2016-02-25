<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style1.css"
    </head>
    <body>
        <?php
        // put your code here
        ?>
<div class="dropdown">
  <button class="dropbtn">Car rental</button>
  <div class="dropdown-content">
      <a href="hire_vichle.php">Hie a vehicle </a>
    <a href="#">Lucknow airport pickup and drop</a>
    <a href="#">toor package</a>
    <a type="button"  href="index.php">wedding booking </a>
  </div>
  
</div>

    </body>
    <?php
    $st="ram";
   if ( !preg_match( "/^[a-zA-Z0-9]*$/", $st ) )
      echo 'hello';
   
    ?>
</html>

