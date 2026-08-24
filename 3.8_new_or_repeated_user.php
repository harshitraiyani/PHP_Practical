<?php
// 3.8 PHP script to store a cookie on client's device to identify
// whether the user is a new one or a repeated one.

if (isset($_COOKIE['visited_before'])) {
    echo "Welcome back! You have visited this site before.<br>";
    echo "Your last visit count value: " . $_COOKIE['visited_before'] . "<br>";
    // Increment visit count
    $newCount = (int)$_COOKIE['visited_before'] + 1;
    setcookie("visited_before", $newCount, time() + (86400 * 30), "/");
} else {
    echo "Welcome! This is your first visit to this site.<br>";
    setcookie("visited_before", 1, time() + (86400 * 30), "/");
}
?>
