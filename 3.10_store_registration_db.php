<!DOCTYPE html>
<html>
<head><title>Registration Form</title></head>
<body>
<h2>3.10 Store Registration Form Details into Users Table</h2>

<form method="post" action="">
    Full Name: <input type="text" name="fullname" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="submit" value="Register">
</form>

<?php
if (isset($_POST['submit'])) {
    $conn = new mysqli("localhost", "root", "", "test_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email = $conn->real_escape_string($_POST['email']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // secure hashing

    // Table structure assumed:
    // CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY, fullname VARCHAR(100),
    // email VARCHAR(100), username VARCHAR(50) UNIQUE, password VARCHAR(255));

    $sql = "INSERT INTO users (fullname, email, username, password) VALUES ('$fullname', '$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Registration successful! New record inserted.</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }

    $conn->close();
}
?>
</body>
</html>
