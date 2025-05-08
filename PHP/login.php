<?php
require "conn.php";
$user_email = $_POST["email"];
$user_pass = $_POST["password"];
$result = $conn->query("select * from accounts where email like '$user_email' and password like '$user_pass';");

if($result != false && $result->num_rows > 0) {
	echo "success";
}
else{
	echo "fail";
}
$conn->close();

?>