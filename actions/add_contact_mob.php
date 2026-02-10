<?php
header('Content-Type: text/plain');
include "db.php";

$name  = $_POST['ufullname'] ?? '';
$phone = $_POST['uphonename'] ?? '';

if ($name == '' || $phone == '') {
    echo "failed";
    exit;
}


$sql = "INSERT INTO contacts (pname, pphone) VALUES ('$name', '$phone')";
echo ($conn->query($sql)) ? "success" : "failed";
?>

