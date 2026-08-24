<?php
// 4.7 Write a program that Update Data In a MySQL Table Using MySQLi and PDO

// ---- Using MySQLi ----
$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$updateId = 1;
$newEmail = "updated_ravi@example.com";

$stmt = $conn->prepare("UPDATE users SET email = ? WHERE id = ?");
$stmt->bind_param("si", $newEmail, $updateId);
if ($stmt->execute()) {
    echo "Record updated successfully using MySQLi (affected rows: " . $stmt->affected_rows . ")<br>";
} else {
    echo "Error updating record: " . $conn->error . "<br>";
}
$stmt->close();
$conn->close();

// ---- Using PDO ----
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $updateProductId = 1;
    $newPrice = 59999.00;

    $stmt2 = $pdo->prepare("UPDATE products SET price = :price WHERE id = :id");
    $stmt2->bindParam(':price', $newPrice);
    $stmt2->bindParam(':id', $updateProductId);
    $stmt2->execute();
    echo "Record updated successfully using PDO (rows affected: " . $stmt2->rowCount() . ")<br>";
    $pdo = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
