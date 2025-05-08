<?php
require "conn.php";

 //fetch table rows from mysql db
    $sql = "select * from drinks";
    $result = mysqli_query($conn, $sql);
    
    //built in json
    echo('{"drinks": ');

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