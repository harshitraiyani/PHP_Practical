<?php
// 4.4 Demonstrate PHP MySQL Prepared Statements

// ---- Using MySQLi Prepared Statement ----
$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullname, $email, $username, $password);

$fullname = "Amit Shah";
$email = "amit@example.com";
$username = "amits";
$password = "amit@123";
$stmt->execute();
echo "Record inserted using MySQLi Prepared Statement. New ID: " . $stmt->insert_id . "<br>";
$stmt->close();
$conn->close();

// ---- Using PDO Prepared Statement ----
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt2 = $pdo->prepare("INSERT INTO products (product_name, price) VALUES (:name, :price)");
    $stmt2->bindParam(':name', $pname);
    $stmt2->bindParam(':price', $price);

    $pname = "Mouse";
    $price = 499.00;
    $stmt2->execute();
    echo "Record inserted using PDO Prepared Statement. New ID: " . $pdo->lastInsertId() . "<br>";
    $pdo = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
