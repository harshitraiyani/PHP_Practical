<!DOCTYPE html>
<html>
<head><title>User Login Authentication</title></head>
<body>
<h2>4.9 Authenticate User Using Login Form (checks users table)</h2>

<form method="post" action="">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="submit" value="Login">
</form>

<?php
if (isset($_POST['submit'])) {
    $conn = new mysqli("localhost", "root", "", "test_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // In real apps password should be verified with password_verify() if hashed
        if ($password == $row['password']) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['fullname'] = $row['fullname'];
            echo "<p>Login successful! Welcome, " . $row['fullname'] . "</p>";
            echo "<p>Redirecting to home page...</p>";
        } else {
            echo "<p style='color:red;'>Error: Incorrect password.</p>";
        }
    } else {
        echo "<p style='color:red;'>Error: Username not registered.</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
</body>
</html>
