<?php
require "conn.php";
$email = $_POST["email"];
$password = $_POST["password"];

$check = $conn->query("SELECT * FROM accounts WHERE email LIKE '$email'");

if($check != false && $check->num_rows > 0) {
	$result = $conn->query("UPDATE accounts SET password = '$password' WHERE email LIKE '$email'");

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