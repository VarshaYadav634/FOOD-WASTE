<?php  
// Check if form fields are set
if (!isset($_POST['name'], $_POST['phone'], $_POST['street'], $_POST['district'], $_POST['state'], $_POST['pincode'])) {
    die('Error: All fields are required.');
}

// Sanitize input data
$con = mysqli_connect("localhost", "root", "", "mydb");  

if (!$con) {  
    die('Error: Could not connect to the database. ' . mysqli_connect_error());  
}

$name = mysqli_real_escape_string($con, $_POST['name']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$street = mysqli_real_escape_string($con, $_POST['street']);
$district = mysqli_real_escape_string($con, $_POST['district']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$pincode = mysqli_real_escape_string($con, $_POST['pincode']);

// Check for duplicate entries (phone number)
$checkSql = "SELECT * FROM logintable WHERE phone='$phone'";
$checkResult = mysqli_query($con, $checkSql);

if (mysqli_num_rows($checkResult) > 0) {
    die('Error: Duplicate entry detected for the phone number: ' . $phone);
}

// SQL Insert query
$sql = "INSERT INTO logintable (name, phone, street, district, state, pincode)    
VALUES ('$name', '$phone', '$street', '$district', '$state', '$pincode')";  

if (!mysqli_query($con, $sql)) {  
    die('Error: Could not insert data into the database. ' . mysqli_error($con));  
}

mysqli_close($con);

// Redirect to paymentgateway.html
header("Location: paymentgateway.html");
exit();  
?>
