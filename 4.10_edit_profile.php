<?php
// 4.10 Provide an edit profile page to the user - view and update existing details

session_start();
// Assume user is logged in and their user id is stored in session
$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1; // demo default = 1

$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle profile update
if (isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("UPDATE users SET fullname = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $fullname, $email, $userId);
    if ($stmt->execute()) {
        echo "<p style='color:green;'>Profile updated successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error updating profile: " . $conn->error . "</p>";
    }
    $stmt->close();
}

// Fetch current details to display in form
$result = $conn->query("SELECT fullname, email, username FROM users WHERE id = $userId");
$user = $result->fetch_assoc();
$conn->close();
?>
<!DOCTYPE html>
<html>
<head><title>Edit Profile</title></head>
<body>
<h2>Edit Profile</h2>
<?php if ($user): ?>
<form method="post" action="">
    Full Name: <input type="text" name="fullname" value="<?php echo htmlspecialchars($user['fullname']); ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br><br>
    Username (not editable): <input type="text" value="<?php echo htmlspecialchars($user['username']); ?>" disabled><br><br>
    <input type="submit" name="update" value="Update Profile">
</form>
<?php else: ?>
<p>User not found.</p>
<?php endif; ?>
</body>
</html>
