<?php

//API endpoint to retrieve all contacts from database
header('Content-Type: application/json');

//connect to database
include __DIR__ . "/db.php";

//query all contacts
$sql = "SELECT pid, pname, pphone FROM contacts";
$result = $conn->query($sql);

//build response array
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

//return JSON response
echo json_encode(["success" => true, "data" => $data], JSON_PRETTY_PRINT);
$conn->close();
?>
