<?php
include 'db.php';

// Get the ID
$id = $_GET['id'];

// delete customer (added injection protection)
$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM customers WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
// back to main
header("Location: index.php");
?>