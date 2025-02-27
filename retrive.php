<?php
$con = mysqli_connect("localhost", "root", "", "wc");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT business_name, address, waste_category, quantity FROM wastetable";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recycling Center Dashboard</title>
</head>
<body>
    <h2>Incoming Waste Collection Requests</h2>
    <table border="1">
        <tr>
            <th>Business Name</th>
            <th>Address</th>
            <th>Waste Category</th>
            <th>Quantity (kg)</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . htmlspecialchars($row["business_name"]) . "</td>
                        <td>" . htmlspecialchars($row["address"]) . "</td>
                        <td>" . htmlspecialchars($row["waste_category"]) . "</td>
                        <td>" . htmlspecialchars($row["quantity"]) . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No waste collection data available.</td></tr>";
        }
        mysqli_close($con);
        ?>

    </table>
</body>
</html>
