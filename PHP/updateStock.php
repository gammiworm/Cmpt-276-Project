<?php
require "conn.php";
$vendingMachine_id = $_POST["vendingMachine_id"];
//$vendingMachine_id = "1";
$drinks_id = $_POST["drinks_id"];
//$drinks_id = "2";
$new_stock = $_POST["new_stock"];
//$new_stock = "11";
$result;

$check = $conn->query("SELECT * FROM vendingmachine WHERE ID LIKE '$vendingMachine_id'");

if($check != false && $check->num_rows > 0) {
    if($drinks_id == "1"){
        $result = $conn->query("UPDATE vendingmachine SET coffeeStock = '$new_stock' WHERE ID LIKE '$vendingMachine_id'");
    }
	if($drinks_id == "2"){
        $result = $conn->query("UPDATE vendingmachine SET mochaStock = '$new_stock' WHERE ID LIKE '$vendingMachine_id'");
    }
    if($drinks_id == "3"){
        $result = $conn->query("UPDATE vendingmachine SET vanillaStock = '$new_stock' WHERE ID LIKE '$vendingMachine_id'");
    }
    if($result != false) {
    	echo "success";
    }
    else{
    	echo "fail";
    }
}
else{
    echo "machineNotFound";
}
$conn->close();
?>
