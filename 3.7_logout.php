<?php
// Logout script - destroys session so user can't access home page via URL after logout
session_start();
session_unset();
session_destroy();
header("Location: 3.7_login_form.html");
exit();
?>
