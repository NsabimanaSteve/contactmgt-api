<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'db.php';

// Delete all records from contacts table
$delete = $conn->query("DELETE FROM contacts");

// Reset auto-increment to 1
$reset = $conn->query("ALTER TABLE contacts AUTO_INCREMENT = 1");

if ($delete && $reset) {
    echo json_encode(["success" => true, "message" => "Database reset. Next ID will be 1"]);
} else {
    echo json_encode(["success" => false, "error" => $conn->error]);
}

$conn->close();
?>
