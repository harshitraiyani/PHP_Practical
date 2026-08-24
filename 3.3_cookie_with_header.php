<?php
// 3.3 Write a PHP script to use cookie with header

// Set cookie using setcookie() then redirect using header()
setcookie("visited", "yes", time() + 3600, "/");

// header() must be called before any output
header("Location: 3.2_read_cookie.php");
exit();
?>
