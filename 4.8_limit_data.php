<?php
// 4.8 Demonstrate the Limit Data Selections From a MySQL Database

// ---- Using MySQLi ----
$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>Using MySQLi - LIMIT 3</h3>";
$sql = "SELECT id, fullname, email FROM users LIMIT 3";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . " | Name: " . $row['fullname'] . " | Email: " . $row['email'] . "<br>";
}

echo "<h3>Using MySQLi - LIMIT with OFFSET (skip 2, take 3)</h3>";
$sql2 = "SELECT id, fullname FROM users LIMIT 3 OFFSET 2";
$result2 = $conn->query($sql2);
while ($row = $result2->fetch_assoc()) {
    echo "ID: " . $row['id'] . " | Name: " . $row['fullname'] . "<br>";
}
$conn->close();

// ---- Using PDO ----
echo "<h3>Using PDO - LIMIT 3</h3>";
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT id, product_name FROM products LIMIT 3");
    foreach ($stmt as $row) {
        echo "ID: " . $row['id'] . " | Product: " . $row['product_name'] . "<br>";
    }
    $pdo = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
