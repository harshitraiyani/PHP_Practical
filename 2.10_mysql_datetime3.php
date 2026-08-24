<?php
// 2.10 PHP code to use MySQL date and time functions

$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 1) CURDATE() / CURRENT_DATE
$result = $conn->query("SELECT CURDATE() AS cd, CURRENT_DATE() AS cd2");
$row = $result->fetch_assoc();
echo "1) CURDATE(): " . $row['cd'] . ", CURRENT_DATE(): " . $row['cd2'] . "<br>";

// 2) CURTIME() / CURRENT_TIME()
$result = $conn->query("SELECT CURTIME() AS ct, CURRENT_TIME() AS ct2");
$row = $result->fetch_assoc();
echo "2) CURTIME(): " . $row['ct'] . ", CURRENT_TIME(): " . $row['ct2'] . "<br>";

// 3) UNIX_TIMESTAMP()
$result = $conn->query("SELECT UNIX_TIMESTAMP() AS uts");
$row = $result->fetch_assoc();
echo "3) UNIX_TIMESTAMP(): " . $row['uts'] . "<br>";

// 4) FROM_UNIXTIME()
$result = $conn->query("SELECT FROM_UNIXTIME(1723718400) AS fut");
$row = $result->fetch_assoc();
echo "4) FROM_UNIXTIME(): " . $row['fut'] . "<br>";

$conn->close();
?>
