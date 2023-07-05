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
    header("Location: ../sinUp.php?error=allfieldsrequired");
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../sinUp.php?error=invalidemail");
    exit();
}
if ($password !== $confirmPassword) {
    header("Location: ../sinUp.php?error=passwordmatch");
    exit();
}

// Hash password
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// insert user data into the database
$stmt = $conn->prepare("INSERT INTO users (fullName, username, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullName, $username, $email, $passwordHash);
try {
    if ($stmt->execute()) {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["fullname"] = $fullName;
        $_SESSION["email"] = $email;
        header("Location: ../index.php");
        
    }
} catch (Exception $e) {
    echo $e;
    header("Location: ../signUp.php?error=$stmt->error");
}


$stmt->close();
$conn->close();
?>
