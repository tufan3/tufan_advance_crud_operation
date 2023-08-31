<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "phpcrud");
if (isset($_POST['save_student'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $class = $_POST['class'];

    $query = "INSERT INTO `students` (fname, lname, class) VALUES ('$fname','$lname', '$class')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['status'] = "Successfully save";
        header('location:any.php');
    } else {
        $_SESSION['status'] = "Not save";

    }
}

// View section
if (isset($_POST['checking_viewbtn'])) {
    $s_id = $_POST['student_id'];

    $query = "SELECT * FROM `students` WHERE id='$s_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run)) {
        foreach ($query_run as $row) {
            echo $return = '
            <h5>ID: ' . $row['id'] . '</h5>
            <h5>First Name: ' . $row['fname'] . '</h5>
            <h5>Last Name: ' . $row['lname'] . '</h5>
            <h5>Class: ' . $row['class'] . '</h5>
            ';
        }
    }
}

// edit section
if (isset($_POST['checking_editbtn'])) {
    $s_id = $_POST['student_id'];

    $result_array = [];

    $query = "SELECT * FROM `students` WHERE id='$s_id' ";
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
if (isset($_POST['update_student'])) {
    $id = $_POST['edit_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $class = $_POST['class'];

    $query = "UPDATE `students` SET fname='$fname', lname='$lname', class='$class' WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['status'] = "Successfully Update";
        header('location:any.php');
    } else {
        $_SESSION['status'] = "Not Update";
        header('location:any.php');
    }
}


// delete section
if (isset($_POST['delete_student'])) {
    $id = $_POST['id_delete'];

    $query = "DELETE FROM `students` WHERE id = '$id'";
    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
        $_SESSION['status'] = "Successfully Delete";
        header('location:any.php');
    } else {
        $_SESSION['status'] = "Not Delete";
        header('location:any.php');
    }
}

?>