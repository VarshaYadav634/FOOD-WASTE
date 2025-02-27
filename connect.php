<?php 

$con = mysqli_connect("localhost","root","","wc"); 

if (!$con) 

  { 

  die('Could not connect: ' . mysql_error()); 

  } 

echo "Database Connected"; 

   mysqli_close($con); 

 

?> 