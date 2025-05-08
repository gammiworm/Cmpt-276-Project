<?php
require "conn.php";
$date = $_POST["date"];
//$date = "2021-08-01";
$accounts_id = $_POST["accounts_id"];
//$accounts_id = "2";
$bundles_id = $_POST["bundles_id"];
//$bundles_id = "2";

$result = $conn->query("INSERT INTO transaction (date,accounts_id, bundles_id) VALUES ('$date', '$accounts_id','$bundles_id')");
if($result != false) {
	echo "success";
}
else{
	echo "fail";
}

$conn->close();
?>