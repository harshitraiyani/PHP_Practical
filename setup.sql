
CREATE DATABASE IF NOT EXISTS test_db;
USE test_db;

-- Table used by Unit 3 (3.7, 3.10) and Unit 4 (4.1 to 4.10)
CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS products (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

INSERT INTO users (fullname, email, username, password) VALUES
('Ravi Patel', 'ravi@example.com', 'ravip', 'pass123'),
('Amit Shah', 'amit@example.com', 'amits', 'amit@123'),
('Admin User', 'admin@example.com', 'admin', 'admin123');

INSERT INTO products (product_name, price) VALUES
('Laptop', 55000.00),
('Mouse', 499.00),
('Keyboard', 899.00);
