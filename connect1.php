<?php 

$con = mysqli_connect("localhost","root","","mydb"); 

if (!$con) 

  { 

  die('Could not connect: ' . mysql_error()); 

  } 

echo "Database Connected"; 

   mysqli_close($con); 

 

?> 