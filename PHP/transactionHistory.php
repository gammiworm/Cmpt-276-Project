<?php
require "conn.php";
$accounts_id = $_POST["accounts_id"];
//$accounts_id = "2";

 //fetch table rows from mysql db
    $sql = "SELECT * FROM transaction INNER JOIN accounts ON transaction.accounts_id=accounts.ID WHERE accounts.ID = '$accounts_id';";
    $result = mysqli_query($conn, $sql);

    //built in json echo
    echo('{"transactionHistory": ');

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