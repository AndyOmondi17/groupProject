<?php
include '../Handlers/db_connect.php';

// retrieve data
$fullName = $_POST['fullName'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

// validate data
if (empty($fullName) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
    die('Please fill all required fields!');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Invalid email format!');
}
if ($password !== $confirmPassword) {
    die('Passwords do not match!');
}

// Hash password
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// insert user data into the database
$stmt = $conn->prepare("INSERT INTO users (fullName, username, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullName, $username, $email, $passwordHash);

if ($stmt->execute()) {
    echo "New user created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
