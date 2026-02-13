<?php
// update an existing contact
header('Content-Type: application/json');

// connect to database
include __DIR__ . "/db.php";

// get post data
$id = $_POST['id'] ?? '';
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';

// update contact
$sql = "UPDATE contacts SET pname='$name', pphone='$phone' WHERE pid=$id";
$conn->query($sql);

// check if update was successful
if ($conn->affected_rows > 0) {
    echo json_encode(["success" => true], JSON_PRETTY_PRINT);
} else {
    echo json_encode(["success" => false, "error" => "Contact not found"], JSON_PRETTY_PRINT);
}
$conn->close();
?>
