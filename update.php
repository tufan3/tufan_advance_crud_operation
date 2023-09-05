<?php
session_start();
include 'database/connect.php';
// edit section
if (isset($_POST['checking_updatebtn'])) {
    $id = $_POST['profile_id'];

    $result_array = [];

    $query = "SELECT * FROM `profile` WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run)) {
        foreach ($query_run as $row) {
            array_push($result_array, $row);
            header('Content-type: application/json');
            echo json_encode($result_array);

        }
    }
}

// update section
if (isset($_POST['save_update'])) {
    $id = $_POST['update_id'];

    if ($_FILES["image"]["size"] != 0) {
        $image = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        $uploction = 'images/' . $image;
        move_uploaded_file($tmpname, $uploction);
    } else {
        $image = $_POST['image_old'];
    }

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $district = $_POST['district'];
    $dob = $_POST['dob'];
    $education = isset($_POST['education']) ? $_POST['education'] : [];
    $educationValues = implode(", ", $education);
    //printing the value
    echo "Education Values: " . $educationValues;
    $gender = $_POST['gender'];
    $comments = $_POST['comments'];

    $query = "UPDATE `profile` SET `fname`='$fname',`lname`='$lname',`profilePicture`='$image',`district`='$district',`date_of_birth`='$dob',`education`='$educationValues',`gender`='$gender',`comments`='$comments' WHERE `id`='$id'";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['status'] = '<div class="alert alert-success">Successfully Update</div>';
        header('location:dashboard.php');
    }
}
?>