<?php
// $connection = mysqli_connect('localhost','yangzou','123','auction_13');

// function load_query($query){
//     global $connection;
//     $result = mysqli_query($connection, $query);
//     mysqli_close($connection);
//     return $result;
// }

$serverName = "auction13.database.windows.net"; // update me
$connectionOptions = array(
    "Database" => "auction13", // update me
    "Uid" => "group13", // update me
    "PWD" => "102465536Zz" // update me
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT * FROM Customers";
$getResults= sqlsrv_query($conn, $tsql);
echo 'HI';
echo ("Reading data from table" . PHP_EOL);
//if ($getResults == FALSE)
//    echo (sqlsrv_errors());
//while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
//    echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
//}
//sqlsrv_free_stmt($getResults);


