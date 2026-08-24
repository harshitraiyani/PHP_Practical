<?php
// 4.6 Write a PHP code that Delete Data From a MySQL Table Using MySQLi and PDO

// ---- Using MySQLi ----
$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$deleteId = 5; // example id to delete
$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $deleteId);
if ($stmt->execute()) {
    echo "Record deleted successfully using MySQLi (affected rows: " . $stmt->affected_rows . ")<br>";
} else {
    echo "Error deleting record: " . $conn->error . "<br>";
}
$stmt->close();
$conn->close();

// ---- Using PDO ----
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $deleteProductId = 3; // example id to delete
    $stmt2 = $pdo->prepare("DELETE FROM products WHERE id = :id");
    $stmt2->bindParam(':id', $deleteProductId);
    $stmt2->execute();
    echo "Record deleted successfully using PDO (rows affected: " . $stmt2->rowCount() . ")<br>";
    $pdo = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
