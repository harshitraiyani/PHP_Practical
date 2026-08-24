<?php
// 4.5 Write a PHP program that Select Data From a MySQL Database

// ---- Using MySQLi ----
$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>Using MySQLi</h3>";
$sql = "SELECT id, fullname, email, username FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . " | Name: " . $row['fullname'] . " | Email: " . $row['email'] . " | Username: " . $row['username'] . "<br>";
    }
} else {
    echo "No records found.<br>";
}
$conn->close();

// ---- Using PDO ----
echo "<h3>Using PDO</h3>";
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT id, product_name, price FROM products");
    foreach ($stmt as $row) {
        echo "ID: " . $row['id'] . " | Product: " . $row['product_name'] . " | Price: " . $row['price'] . "<br>";
    }
    $pdo = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
