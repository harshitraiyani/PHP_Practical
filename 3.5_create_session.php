<?php
// 3.5 Write a PHP script to create a session

session_start();

$_SESSION['username'] = "Ravi Patel";
$_SESSION['role'] = "Student";

echo "Session created successfully!<br>";
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Role: " . $_SESSION['role'] . "<br>";
echo "Session ID: " . session_id() . "<br>";
?>
