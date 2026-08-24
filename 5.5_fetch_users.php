<?php
// Server-side script that fetches data from MySQL database (used by 5.5)
$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT id, fullname, email FROM users");

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Full Name</th><th>Email</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['fullname'] . "</td><td>" . $row['email'] . "</td></tr>";
}
echo "</table>";

$conn->close();
?>
