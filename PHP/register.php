<?php
require "conn.php";
$email = $_POST["email"];
$password = $_POST["password"];

$check = $conn->query("SELECT * FROM accounts WHERE email LIKE '$email'");

if($check != false && $check->num_rows > 0) {
	echo "alreadyExists";
}
else{
    $result = $conn->query("INSERT INTO accounts (email, password) VALUES ('$email', '$password')");

    if($result != false) {
    	echo "success";
    }
    else{
    	echo "fail";
    }
}
$conn->close();
?>