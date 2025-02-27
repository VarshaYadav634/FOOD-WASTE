<?php
$con = mysqli_connect("localhost", "root", "", "wc");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT business_name, address, waste_category, quantity FROM wastetable";
$result = mysqli_query($con, $sql);

$data = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}

mysqli_close($con);
echo json_encode($data);
?>
