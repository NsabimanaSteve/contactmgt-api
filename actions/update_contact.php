<?php
header('Content-Type: text/plain');
include "db.php";

// get POST data
$cid   = $_POST['cid'] ?? '';
$cname = $_POST['cname'] ?? '';
$cnum  = $_POST['cnum'] ?? '';

// validate input
if ($cid == '' || $cname == '' || $cnum == '') {
    echo "failed";
    exit;
}

// update the contact
$sql = "UPDATE contacts SET pname='$cname', pphone='$cnum' WHERE pid=$cid";
echo ($conn->query($sql)) ? "success" : "failed";
?>

