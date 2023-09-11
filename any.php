// $('#bsc[value="' + value['education'] + '"]').prop('checked', true);

// console.log('Education value from AJAX:', value['education']);

// if (value['education'] === 'ssc') {
// console.log('Setting SSC checkbox as checked');
// $('#ssc').val(value['education']).prop('checked', true);
// } else if (value['education'] === 'hsc') {
// console.log('Setting HSC checkbox as checked');
// $('#hsc').val(value['education']).prop('checked', true);
// } else if (value['education'] === 'bsc') {
// console.log('Setting BSc checkbox as checked');
// $('#bsc').val(value['education']).prop('checked', true);
// } else if (value['education'] === 'msc') {
// console.log('Setting MSc checkbox as checked');
// $('#msc').val(value['education']).prop('checked', true);
// }

//updated code
// if (response.education && response.education.length > 0) {
// response.education.forEach(function (value) {
// $('#' + value).prop('checked', true);
// });
// }

// var education = value['education'].split(", "); // Convert education text to an array

// education.forEach(function (edu) {
// if (edu == 'bsc') {
// $('#bsc' + edu).prop('checked', true);
// }
// });







<?php
// include 'database/connect.php';
// $sql = "SELECT * FROM `profile`";
// $results = mysqli_query($conn, $sql);
// if (mysqli_num_rows($results) > 0) {
//     while ($row = mysqli_fetch_assoc($results)) {
//         $education = explode(", ", $row['education']);
//         $educationText = implode(", ", $education);

//         echo "<tr>
//                 <td class='profile_id'>" . $row['id'] . "</td>
//                 <td>" . $row['fname'] . "</td>
//                 <td>" . $row['lname'] . "</td>
//                 <td><img src='images/" . $row['profilePicture'] . "' width='50px' height='50px'></td>
//                 <td>" . $row['district'] . "</td>
//                 <td>" . $row['date_of_birth'] . "</td>
//                 <td>" . $educationText . "</td>
//                 <td>" . $row['gender'] . "</td>
//                 <td>" . $row['comments'] . "</td>
//                 <td>
//                     <button class='btn btn-success update_btn'>Edit</button>
//                     <button class='btn btn-danger delete_btn'>Delete</button>
//                 </td>
//             </tr>";
//     }
// } else {
//     echo "<tr><td colspan='10'>No records found</td></tr>";
// }

?>



?>
<!-- <div class="alert alert-dismissible fade show" role="alert">
    <?php echo $_SESSION['status']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> -->

<?php ?>


// $sql = "INSERT INTO `profile`(`fname`, `lname`, `profilePicture`, `district`, `date_of_birth`, `education`, `gender`,
`comments`)
// VALUES ('$fname','$lname','$profilePicture',
// (SELECT `district_name` FROM `district` WHERE `district` = '$district_name'),
// '$dob','$educationValues','$gender','$comments')";





// education
// $('#bsc[value="' + value['education'] + '"]').prop('checked', true);

$('input[name^="update_education[]"][value="' + value.education + '"]').prop('checked', true);



// console.log('Education value from AJAX:', value['education']);

// if (value['education'] === 'ssc') {
// console.log('Setting SSC checkbox as checked');
// $('#ssc').val(value['education']).prop('checked', true);
// } else if (value['education'] === 'hsc') {
// console.log('Setting HSC checkbox as checked');
// $('#hsc').val(value['education']).prop('checked', true);
// } else if (value['education'] === 'bsc') {
// console.log('Setting BSc checkbox as checked');
// $('#bsc').val(value['education']).prop('checked', true);
// } else if (value['education'] === 'msc') {
// console.log('Setting MSc checkbox as checked');
// $('#msc').val(value['education']).prop('checked', true);
// }

//updated code
// if (response.education && response.education.length > 0) {
// response.education.forEach(function (value) {
// $('#' + value).prop('checked', true);
// });
// }

// var checkbox = '<input type="checkbox" name="education[]" value="' + key + '"';
                    // if (value == ' ssc') { // checkbox +=' checked' ; // } else if (value=='hsc' ) { // checkbox
    +=' checked' ; // } else if (value=='bsc' ) { // checkbox +=' checked' ; // } else if (value=='msc' ) { // checkbox
    +=' checked' ; // } // checkbox +='> ' + key + '<br>' ; // checkboxContainer.append(checkbox); //
    $('input[name="education[]" ][value="' + value.education + '" ]').prop('checked', true); // var
    education=value['education'].split(", "); // Convert education text to an array

                    // education.forEach(function (edu) {
                    //     if (edu == 'bsc') {
                    //         $('#bsc' + edu).prop('checked', true);
                    //     }
                    // });





                    <?php
                    $sql = "SELECT district_id, district FROM district";
                    $result = $conn->query($sql);
                    // Iterate through the district data and create options
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row["id"]}'>{$row["district"]}</option>";
                    }
                    ?>