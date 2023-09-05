<?php
include 'database/connect.php';
$sql = "SELECT * FROM profile";
$results = mysqli_query($conn, $sql);
if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td class="profile_id">
                <?php echo $row['id'] ?>
            </td>
            <td>
                <?php echo $row['fname'] ?>
            </td>
            <td>
                <?php echo $row['lname'] ?>
            </td>
            <td>
                <?php
                $image = $row['profilePicture'];
                echo "<img style='width:50px; height: 50px;' src='images/$image'>";
                ?>
            </td>
            <td>
                <?php echo $row['district'] ?>
            </td>
            <td>
                <?php echo $row['date_of_birth'] ?>
            </td>
            <td>
                <?php echo $row['education'] ?>
            </td>
            <td>
                <?php echo $row['gender'] ?>
            </td>
            <td>
                <?php echo $row['comments'] ?>
            </td>
            <td>
                <a href="#" class="badge badge-success update_btn"><i class="fa-regular fa-pen-to-square"></i>
                </a>
                <a href="#" class="badge badge-danger delete_btn"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>

        <?php
    }
}

?>