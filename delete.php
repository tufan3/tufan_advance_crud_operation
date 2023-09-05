<?php
session_start();
include 'database/connect.php';
if (isset($_POST['delete_data'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM `profile` WHERE id = '$id'";
    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
        $_SESSION['status'] = '<div class="alert alert-danger">Successfully Deleted</div>';
        header('location:dashboard.php');
    } else {
        $_SESSION['status'] = "Not Delete";
    }
}
?>