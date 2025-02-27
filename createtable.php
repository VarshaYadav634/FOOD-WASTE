<?php 

$con = mysqli_connect("localhost","root","","wc"); 

if (!$con) 

  { 

  die('Could not connect: '.mysql_error()); 

  } 

echo "Database Connected "; 

 

$sql="CREATE TABLE wastetable(
    business_name VARCHAR(100),
    address VARCHAR(255),
    waste_category VARCHAR(50),
    quantity INT,
    contact_info VARCHAR(100))";  

 

if (!mysqli_query($con,$sql)) 

  { 

  die('Error: '.mysqli_error()); 

  } 

echo "table created successfully... "; 


mysqli_close($con); 
?> 