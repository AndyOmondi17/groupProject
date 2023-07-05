<?php
include '../Handlers/db_connect.php';

if(isset($_POST["signin"])){

    $email = strtolower($_POST["email"]);
    $password = $_POST["password"];

    // Select user's record from the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // Verify the password
            if (password_verify($password, $row["password"])) {
                // Start the session and save user's info
                session_start();
                $_SESSION["username"] = $row["username"];
                $_SESSION["fullname"] = $row["fullname"];
                $_SESSION["email"] = $row["email"];
                // Redirect the user to the home page or dashboard
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: ../signIn.php?error=invalidpassword");
                exit();
            }
        }
    } else {
        header("Location: ../signIn.php?error=usernotexists");
        exit();
    }
}
?>







