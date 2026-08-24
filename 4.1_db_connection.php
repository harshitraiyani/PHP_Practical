<?php
// 4.1 Write a program that established Database connection

// ---- Using MySQLi (Procedural) ----
$conn1 = mysqli_connect("localhost", "root", "", "test_db");
if (!$conn1) {
    die("MySQLi Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully using MySQLi (Procedural)<br>";
mysqli_close($conn1);

// ---- Using MySQLi (Object-Oriented) ----
$conn2 = new mysqli("localhost", "root", "", "test_db");
if ($conn2->connect_error) {
    die("MySQLi OOP Connection failed: " . $conn2->connect_error);
}
echo "Connected successfully using MySQLi (OOP)<br>";
$conn2->close();

// ---- Using PDO ----
try {
    $dsn = "mysql:host=localhost;dbname=test_db";
    $pdo = new PDO($dsn, "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully using PDO<br>";
    $pdo = null;
} catch (PDOException $e) {
    echo "PDO Connection failed: " . $e->getMessage();
}
?>
