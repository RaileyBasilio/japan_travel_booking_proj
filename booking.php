<?php

// DATABASE CONNECTION START
$serverName = "RaileyLAPTOP";
$connectionOptions = [
    "Database" => "PROJECT",
    "Uid" => "",
    "PWD" => ""
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
// DATABASE CONNECTION END




$FULL_NAME              = $_POST['Full_Name'];
$EMAIL                  = $_POST['Email'];
$DESTINATION            = $_POST['Destination'];
$TRAVEL_DATE            = $_POST['Travel_Date'];
$NUMBER_OF_TRAVELERS    = $_POST['Number_of_Travelers'];

$sql_1 = "INSERT INTO BOOKING (FULL_NAME, EMAIL, DESTINATION, TRAVEL_DATE, NUMBER_OF_TRAVELERS)
          VALUES ('$FULL_NAME', '$EMAIL', '$DESTINATION', '$TRAVEL_DATE', '$NUMBER_OF_TRAVELERS')";

$result_1 = sqlsrv_query($conn, $sql_1);

if ($result_1) {
    header("Location: booking_success.html");
    exit();
} else {
    die(print_r(sqlsrv_errors(), true));
}

?>