<?php
// retrieve one contact by id
header('Content-Type: application/json');

// connect to database
include __DIR__ . "/db.php";

// get id from query parameter
$id = $_GET['id'] ?? '';

// query specific contact
$sql = "SELECT pid, pname, pphone FROM contacts WHERE pid = $id";
$result = $conn->query($sql);

// check if contact exists
if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    echo json_encode(["success" => true, "data" => $data], JSON_PRETTY_PRINT);
} else {
    echo json_encode(["success" => false, "error" => "Contact not found"], JSON_PRETTY_PRINT);
}
$conn->close();
?>
