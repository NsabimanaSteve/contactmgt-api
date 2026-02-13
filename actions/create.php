<?php
// create a new contact
header('Content-Type: application/json');

// connect to database
include __DIR__ . "/db.php";

// get post data
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';

// insert new contact
$sql = "INSERT INTO contacts (pname, pphone) VALUES ('$name', '$phone')";

// execute query and return response
if ($conn->query($sql)) {
    echo json_encode(["success" => true, "data" => ["id" => $conn->insert_id]], JSON_PRETTY_PRINT);
} else {
    echo json_encode(["success" => false, "error" => $conn->error], JSON_PRETTY_PRINT);
}
$conn->close();
?>
