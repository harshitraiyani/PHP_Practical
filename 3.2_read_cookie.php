<?php
// 3.2 Write a PHP script to read the cookie of a form

if (isset($_COOKIE['user_name'])) {
    echo "Welcome back, " . $_COOKIE['user_name'] . "!<br>";
} else {
    echo "Cookie 'user_name' is not set. Please set it first using 3.1.<br>";
}

// Print all cookies
echo "<h3>All Cookies:</h3>";
print_r($_COOKIE);
?>
