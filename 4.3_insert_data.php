<?php
// 4.3 Write a PHP program that Insert Data Into MySQL Using MySQLi and PDO

// ---- Using MySQLi ----
$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (fullname, email, username, password) 
        VALUES ('Ravi Patel', 'ravi@example.com', 'ravip', 'pass123')";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully using MySQLi. Last ID: " . $conn->insert_id . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

// ---- Using PDO ----
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql2 = "INSERT INTO products (product_name, price) VALUES ('Laptop', 55000.00)";
    $pdo->exec($sql2);
    echo "New record inserted successfully using PDO. Last ID: " . $pdo->lastInsertId() . "<br>";
    $pdo = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
