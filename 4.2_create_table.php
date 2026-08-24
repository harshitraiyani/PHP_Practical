<?php
// 4.2 Create a MySQL Table Using MySQLi and PDO

// ---- Using MySQLi ----
$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully using MySQLi<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}
$conn->close();

// ---- Using PDO ----
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql2 = "CREATE TABLE IF NOT EXISTS products (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(100) NOT NULL,
        price DECIMAL(10,2) NOT NULL
    )";
    $pdo->exec($sql2);
    echo "Table 'products' created successfully using PDO<br>";
    $pdo = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
