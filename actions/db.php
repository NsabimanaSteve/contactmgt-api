<?php
// database connection
$host = "localhost";
$user = "steve.nsabimana";
$pass = "Nsateve2@";
$db   = "mobileapps_2026B_steve_nsabimana";

//create connection
$conn = new mysqli($host, $user, $pass, $db);

// check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed: " . $conn->connect_error]));
}
?>

