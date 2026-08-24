<?php
// Server-side script that returns section content dynamically (used by 5.10)

if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case "home":
            echo "<h3>Home</h3><p>Welcome to our website homepage!</p>";
            break;
        case "products":
            echo "<h3>Products</h3><ul><li>Laptop - Rs.55000</li><li>Mouse - Rs.499</li><li>Keyboard - Rs.899</li></ul>";
            break;
        case "blog":
            echo "<h3>Blog</h3><p>Latest Post: 'Learning PHP with AJAX and jQuery' - published today.</p>";
            break;
        case "contact":
            echo "<h3>Contact Us</h3><p>Email: info@example.com<br>Phone: +91-9999999999</p>";
            break;
        default:
            echo "<p>Page not found.</p>";
    }
}
?>
