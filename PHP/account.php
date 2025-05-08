<?php
require "conn.php";
//$user_email = $_POST["email"];
$user_email = "tyler@test.com";

 //fetch table rows from mysql db
    $sql = "select * from accounts where email like '$user_email'";
    $result = mysqli_query($conn, $sql);

    //built in json echo
    echo('{"account": ');

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