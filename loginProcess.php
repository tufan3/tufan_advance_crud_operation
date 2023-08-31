<?php
session_start();
require_once 'database/connect.php';
if (isset($_POST['submit'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $sql = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("location:dashboard.php");
    } else {
        // Invalid credentials
        header("location:login.php");
    }
}
?>