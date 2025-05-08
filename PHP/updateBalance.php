<?php
require "conn.php";
$email = $_POST["email"];
//$email = "masonliang6@hotmail.com";
$balance = $_POST["balance"];
//$balance = "6";


$check = $conn->query("SELECT * FROM accounts WHERE email LIKE '$email'");

if($check != false && $check->num_rows > 0) {
	$result = $conn->query("UPDATE accounts SET balance = '$balance' WHERE email LIKE '$email'");

    if($result != false) {
    	echo "success";
    }
    else{
    	echo "fail";
    }
}
else{
    echo "userNotFound";
}
$conn->close();
?>