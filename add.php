<?php
session_start();
include 'database/connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $profilePicture = $_FILES['profilePicture']['name'];
    $tmpname = $_FILES['profilePicture']['tmp_name'];
    $uploction = 'images/' . $profilePicture;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $district = $_POST['district'];
    $dob = $_POST['dob'];
    $education = isset($_POST['education']) ? $_POST['education'] : [];
    $educationValues = implode(", ", $education);
    $gender = $_POST['gender'];
    $comments = $_POST['comments'];



    $sql = "INSERT INTO `profile`(`fname`, `lname`, `profilePicture`, `district`, `date_of_birth`, `education`, `gender`, `comments`) VALUES ('$fname','$lname','$profilePicture','$district','$dob','$educationValues','$gender','$comments')";


    if (mysqli_query($conn, $sql) == true) {
        move_uploaded_file($tmpname, $uploction);
        $_SESSION['status'] = "Successfully save";
        header('location:dashboard.php');
    } else {
        $_SESSION['status'] = "Not save";

    }

}

?>