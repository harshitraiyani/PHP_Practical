<?php
// 3.4 Write a PHP script to delete a cookie

if (isset($_COOKIE['user_name'])) {
    // Set expiration time in the past to delete the cookie
    setcookie("user_name", "", time() - 3600, "/");
    echo "Cookie 'user_name' has been deleted.<br>";
} else {
    echo "Cookie 'user_name' does not exist.<br>";
}
?>
