<?php
include 'database/connect.php';
$sql = "SELECT * FROM `profile`";
$results = mysqli_query($conn, $sql);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        $education = explode(", ", $row['education']);
        $educationText = implode(", ", $education);

        echo "<tr>
                <td class='profile_id'>" . $row['id'] . "</td>
                <td>" . $row['fname'] . "</td>
                <td>" . $row['lname'] . "</td>
                <td><img src='images/" . $row['profilePicture'] . "' width='50px' height='50px'></td>
                <td>" . $row['district'] . "</td>
                <td>" . $row['date_of_birth'] . "</td>
                <td>" . $educationText . "</td>
                <td>" . $row['gender'] . "</td>
                <td>" . $row['comments'] . "</td>
                <td>
                    <button class='btn btn-success update_btn'>Edit</button>
                    <button class='btn btn-danger delete_btn'>Delete</button>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='10'>No records found</td></tr>";
}

?>