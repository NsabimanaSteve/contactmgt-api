<?php
header('Content-Type: application/json');
include "db.php";

//query to get all contacts
$sql = "SELECT pid, pname, pphone FROM contacts";
$result = $conn->query($sql);

$contacts = [];

//fetch results into array
while ($row = $result->fetch_assoc()) {
    $contacts[] = $row;
}

//output JSON
echo json_encode($contacts);
?>

