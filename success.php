<?php
// Connect to the database
$con = mysqli_connect("localhost", "root", "", "mydb");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all entries from the logintable
$sql = "SELECT name, phone, street, district, state, pincode FROM logintable";
$result = mysqli_query($con, $sql);

// Initialize data array
$data = mysqli_fetch_all($result, MYSQLI_ASSOC); // Fetch all rows as an associative array

// Get the last entry if data is not empty
$lastEntry = !empty($data) ? end($data) : null;

// Close the connection
mysqli_close($con);

// Return the data in JSON format
header('Content-Type: application/json');
echo json_encode($lastEntry);
?>
