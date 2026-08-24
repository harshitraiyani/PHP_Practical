<?php
// 3.6 Write a PHP script to destroy a session

session_start();

// First show existing session data (if any)
if (isset($_SESSION['username'])) {
    echo "Session found for: " . $_SESSION['username'] . "<br>";
}

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

echo "Session has been destroyed successfully.<br>";
?>
