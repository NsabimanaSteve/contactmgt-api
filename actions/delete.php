<?php
// delete a contact by id
header('Content-Type: application/json');

// connect to database
include __DIR__ . "/db.php";

// get post data
$id = $_POST['id'] ?? '';

// delete contact
$sql = "DELETE FROM contacts WHERE pid=$id";
$conn->query($sql);

// check if delete was successful
if ($conn->affected_rows > 0) {
    echo json_encode(["success" => true], JSON_PRETTY_PRINT);
} else {
    echo json_encode(["success" => false, "error" => "Contact not found"], JSON_PRETTY_PRINT);
}
$conn->close();
?>
