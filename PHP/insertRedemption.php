<?php
require "conn.php";
$date = $_POST["date"];
//$date = "2021-08-01";
$accounts_id = $_POST["accounts_id"];
//$accounts_id = "2";
$drinks_id = $_POST["drinks_id"];
//$drinks_id = "2";
$vendingMachine_id = $_POST["vendingMachine_id"];
//$vendingMachine_id = "1";


$result = $conn->query("INSERT INTO redeemHistory (date,accounts_id, drinks_id, vendingMachine_id) VALUES ('$date', '$accounts_id','$drinks_id','$vendingMachine_id')");
if($result != false) {
	echo "success";
}
else{
	echo "fail";
}

$conn->close();
?>