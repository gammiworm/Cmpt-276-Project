<?php
require "conn.php";
$name = $_POST["name"];
//$name = "Burnaby Campus Machine";

 //fetch table rows from mysql db
    $sql = "select * from vendingmachine where name like '$name'";
    $result = mysqli_query($conn, $sql);

    //built in json echo
    echo('{"vendingMachine": ');

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    echo('}');

    //close the db connection
    mysqli_close($conn);


?>