<?php
session_start();

$valid_username = "admin";
$valid_password = "admin123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        header("Location: home.php");
        exit();
    } else {
        echo "<script>
            alert('Invalid username or password');
            window.location.href = 'index.php';
        </script>";
    }
}
