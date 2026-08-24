<?php
// 2.7 PHP code to use MySQL string manipulation functions
// Requires a MySQL connection (using mysqli)

$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 1) Length()
$result = $conn->query("SELECT LENGTH('Web Development') AS len");
$row = $result->fetch_assoc();
echo "1) Length(): " . $row['len'] . "<br>";

// 2) concat()
$result = $conn->query("SELECT CONCAT('Web', ' ', 'Development') AS concatenated");
$row = $result->fetch_assoc();
echo "2) Concat(): " . $row['concatenated'] . "<br>";

// 3) concat_ws()
$result = $conn->query("SELECT CONCAT_WS('-', 'PHP', 'MySQL', 'Apache') AS concatws");
$row = $result->fetch_assoc();
echo "3) Concat_ws(): " . $row['concatws'] . "<br>";

// 4) trim(), rtrim(), ltrim()
$result = $conn->query("SELECT TRIM('  Hello World  ') AS t, RTRIM('Hello   ') AS rt, LTRIM('   Hello') AS lt");
$row = $result->fetch_assoc();
echo "4) Trim(): '" . $row['t'] . "', Rtrim(): '" . $row['rt'] . "', Ltrim(): '" . $row['lt'] . "'<br>";

// 5) lpad(), rpad(), locate()
$result = $conn->query("SELECT LPAD('45', 5, '0') AS lp, RPAD('45', 5, '*') AS rp, LOCATE('Dev', 'Web Development') AS loc");
$row = $result->fetch_assoc();
echo "5) Lpad(): " . $row['lp'] . ", Rpad(): " . $row['rp'] . ", Locate(): " . $row['loc'] . "<br>";

$conn->close();
?>
