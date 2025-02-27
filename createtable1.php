<?php 

$con = mysqli_connect("localhost","root","","mydb"); 

if (!$con) 

  { 

  die('Could not connect: ' . mysql_error()); 

  } 

echo "Database Connected "; 

 

$sql="CREATE TABLE logintable(name varchar(50),phone int(10),street varchar(50),district varchar(30),state varchar(30),pincode int(6))";  

 

if (!mysqli_query($con,$sql)) 

  { 

  die('Error: ' . mysqli_error()); 

  } 

echo "Table Created succesfully…"; 

 

 

   mysqli_close($con); 

 

?> 