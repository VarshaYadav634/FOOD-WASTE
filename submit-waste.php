<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Confirmation</title>
    <link rel="stylesheet" href="style2.css"> <!-- Link to your CSS file -->
    <style>
        /* Header styling */
        header {
            display: flex;
            justify-content: flex-end;  /* Align items to the right */
            align-items: center;
            padding: 10px 20px;
            background-color: azure;  /* Azure background for header */
        }
        header a {
            color: green;  /* Green color for the "Home" link */
            text-decoration: none;  /* Remove underline from link */
            font-size: 21px;
        }
        header a:hover {
            text-decoration: underline;  /* Underline the link on hover */
        }

        /* Container and message styling */
        .container {
            display: flex;
            justify-content: center;  /* Center the message box */
            align-items: center;
            height: 80vh;  /* Set height to center vertically */
        }
        .message {
            background-color: rgba(0, 128, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            text-align: center;
        }
        .message h2 {
            color: green;
        }
        .message p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

<!-- Header with Home link -->
<header>
    <a href="homepage.html">Home</a>
</header>

<?php  
$con = mysqli_connect("localhost", "root", "", "wc");  
if (!$con) {  
    die('Could not connect: ' . mysqli_connect_error());  
}  

$sql = "INSERT INTO wastetable(business_name, address, waste_category, quantity, contact_info)    
VALUES('$_POST[business_name]', '$_POST[address]', '$_POST[waste_category]', '$_POST[quantity]', '$_POST[contact_info]')";  
if (!mysqli_query($con, $sql)) {  
    die('Error: ' . mysqli_error($con));  
}  
?>

<div class="container">
    <div class="message">
        <h2>Submission Successful</h2>
        <p>Successfully submitted your data to recycling centers. We will contact you soon.</p>
    </div>
</div>

<?php
mysqli_close($con);  
?>

</body>
</html>
