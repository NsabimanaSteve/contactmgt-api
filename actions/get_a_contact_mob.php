<?php
header('Content-Type: application/json');
include "db.php";

// get contact ID from GET request
$contid = $_GET['contid'] ?? '';

if ($contid == '') {
    echo json_encode(["error" => "No contact ID provided"]);
    exit;
}

//query to get one contact
$sql = "SELECT pid, pname, pphone FROM contacts WHERE pid = $contid";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
    echo json_encode($row);
} else {
    echo json_encode(["error" => "Contact not found"]);
}
?>

