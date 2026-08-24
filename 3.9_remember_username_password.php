<!DOCTYPE html>
<html>
<head><title>Remember Me Login</title></head>
<body>
<h2>3.9 Remember Username and Password on Login Form</h2>

<?php
$savedUsername = isset($_COOKIE['remember_username']) ? $_COOKIE['remember_username'] : '';
$savedPassword = isset($_COOKIE['remember_password']) ? $_COOKIE['remember_password'] : '';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_POST['remember'])) {
        // Store cookies for 30 days
        setcookie("remember_username", $username, time() + (86400 * 30), "/");
        setcookie("remember_password", $password, time() + (86400 * 30), "/");
    } else {
        // Clear cookies if remember me not checked
        setcookie("remember_username", "", time() - 3600, "/");
        setcookie("remember_password", "", time() - 3600, "/");
    }
    $savedUsername = $username;
    $savedPassword = $password;
    echo "<p>Form submitted! (Demo only - in real apps, never store plain-text passwords in cookies)</p>";
}
?>

<form method="post" action="">
    Username: <input type="text" name="username" value="<?php echo htmlspecialchars($savedUsername); ?>"><br><br>
    Password: <input type="password" name="password" value="<?php echo htmlspecialchars($savedPassword); ?>"><br><br>
    <input type="checkbox" name="remember" <?php echo $savedUsername ? "checked" : ""; ?>> Remember Me<br><br>
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html>
