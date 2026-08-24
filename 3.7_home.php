<?php
// Home page - only accessible if logged in
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: 3.7_login_form.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Home</title></head>
<body>
<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<p>This is the protected home page.</p>
<a href="3.7_logout.php">Logout</a>
</body>
</html>
