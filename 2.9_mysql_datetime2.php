<?php
// 2.9 PHP code to use MySQL date and time functions

$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$datetime = "2024-08-15 14:35:20";

// 1) HOUR()
$result = $conn->query("SELECT HOUR('$datetime') AS h");
$row = $result->fetch_assoc();
echo "1) HOUR(): " . $row['h'] . "<br>";

// 2) MINUTE()
$result = $conn->query("SELECT MINUTE('$datetime') AS m");
$row = $result->fetch_assoc();
echo "2) MINUTE(): " . $row['m'] . "<br>";

// 3) SECOND()
$result = $conn->query("SELECT SECOND('$datetime') AS s");
$row = $result->fetch_assoc();
echo "3) SECOND(): " . $row['s'] . "<br>";

// 4) DATE_FORMAT()
$result = $conn->query("SELECT DATE_FORMAT('$datetime', '%d-%m-%Y %H:%i:%s') AS df");
$row = $result->fetch_assoc();
echo "4) DATE_FORMAT(): " . $row['df'] . "<br>";

// 5) DATE_SUB()
$result = $conn->query("SELECT DATE_SUB('$datetime', INTERVAL 5 DAY) AS ds");
$row = $result->fetch_assoc();
echo "5) DATE_SUB() (minus 5 days): " . $row['ds'] . "<br>";

$conn->close();
?>
