<?php
// 3.1 Write a PHP script to create cookie in a form.

$username = $_POST['username'];
setcookie("user_name", $username, time() + 86400, "/");
echo "Cookie 'user_name' has been set with value: " . $username;
?>
