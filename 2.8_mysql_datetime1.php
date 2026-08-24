<?php
// 2.8 PHP code to use MySQL date and time functions

$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date = "2024-08-15";

// 1) DAYOFWEEK()
$result = $conn->query("SELECT DAYOFWEEK('$date') AS d");
$row = $result->fetch_assoc();
echo "1) DAYOFWEEK(): " . $row['d'] . "<br>";

// 2) WEEKDAY()
$result = $conn->query("SELECT WEEKDAY('$date') AS w");
$row = $result->fetch_assoc();
echo "2) WEEKDAY(): " . $row['w'] . "<br>";

// 3) DAYOFMONTH()
$result = $conn->query("SELECT DAYOFMONTH('$date') AS dm");
$row = $result->fetch_assoc();
echo "3) DAYOFMONTH(): " . $row['dm'] . "<br>";

// 4) DAYOFYEAR()
$result = $conn->query("SELECT DAYOFYEAR('$date') AS dy");
$row = $result->fetch_assoc();
echo "4) DAYOFYEAR(): " . $row['dy'] . "<br>";

// 5) DAYNAME()
$result = $conn->query("SELECT DAYNAME('$date') AS dn");
$row = $result->fetch_assoc();
echo "5) DAYNAME(): " . $row['dn'] . "<br>";

$conn->close();
?>
