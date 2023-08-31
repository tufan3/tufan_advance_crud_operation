<?php
include 'database/connect.php';
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $confirm_password = $_POST['confirm_password'];
    // $md5Password = md5($user_password);

    $errors = array();


    // Basic validation
    if (empty($first_name)) {
        $errors[] = "First name is required.";
    }

    if (empty($last_name)) {
        $errors[] = "Last Name is required.";
    }

    if (($user_email) == '') {
        $errors[] = "Email is required.";
    } elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($user_password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($user_password) < 6) {
        $errors[] = "Password must be 6 digit longer.";
    }

    if ($user_password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }


    if (empty($errors)) {
        $sql = "INSERT INTO users (first_name, last_name, user_email, user_password) VALUES ('$first_name','$last_name', '$user_email', '$user_password')";
        $results = mysqli_query($conn, $sql);
        if ($results) {
            echo "
                <script>
                    window.location.href = 'login.php';
                </script>";
        }
    } else {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}