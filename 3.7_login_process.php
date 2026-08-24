<?php
// 3.7 Create a session when the user logs in. Provide option to logout.
// Once logged out, user should not access home page using URL.

session_start();

$validUsername = "admin";
$validPassword = "admin123";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $validUsername && $password == $validPassword) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: 3.7_home.php");
    exit();
} else {
    echo "Invalid username or password! <a href='3.7_login_form.html'>Try again</a>";
}
?>
