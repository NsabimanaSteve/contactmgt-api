<?php
header('Content-Type: text/plain');
include "db.php";

// get POST data
$cid = $_POST['cid'] ?? '';

if ($cid == '') {
    echo "false";
    exit;
}

// delete the contact
$sql = "DELETE FROM contacts WHERE pid=$cid";
echo ($conn->query($sql)) ? "true" : "false";
?>

