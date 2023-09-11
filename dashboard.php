<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit;
}
include 'database/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <?php
    include "link.php";
    ?>
</head>

<body class="logininfo background_image">

    <?php
    include "dashboardHeader.php";
    ?>
    <!--  add item-->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">Add info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>

                <form action="add.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="name_design">
                            <div class="form-group mb-4 icon-design">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" class="form-control border-bottom rounded-4" id="fname" name="fname"
                                    placeholder="First Name">
                            </div>

                            <div class="form-group mb-4 icon-design">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" class="form-control border-bottom rounded-4" id="lname" name="lname"
                                    placeholder="Last Name">
                            </div>
                        </div>
                        <label for="profilePicture">Profile Picture:</label>
                        <input type="file" id="profilePicture" name="profilePicture">

                        <br><br>

                        <label for="district">Select District:</label>
                        <select id="district" name="district">
                            <option value="Select a district" disabled selected>Select a District</option>
                            <?php
                            $sql = "SELECT district_id, district_name FROM districts";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='{$row["district_name"]}'>
                                {$row["district_name"]}</option>";
                            }
                            ?>
                            <option value="dhaka">dhaka</option>
                        </select>

                        <br><br>

                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob">

                        <br><br>

                        <div>
                            <label>Education:</label>
                            <input type="checkbox" id="ssc" name="education[]" value="ssc">
                            <label for="ssc">SSC</label>
                            <input type="checkbox" id="hsc" name="education[]" value="hsc">
                            <label for="hsc">HSC</label>
                            <input type="checkbox" id="bsc" name="education[]" value="bsc">
                            <label for="bsc">BSc</label>
                            <input type="checkbox" id="msc" name="education[]" value="msc">
                            <label for="msc">MSc</label>
                        </div>

                        <div>
                            <label>Gender:</label>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                        </div>

                        <label for="comments">Comments:</label>
                        <textarea id="comments" name="comments" rows="4" cols="50"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" Name="save_student" class="btn btn-primary px-4">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end  add item -->


    <!--  Update item-->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateModalLabel">Update Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>

                <form action="update.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">

                        <div class="name_design">
                            <div class="form-group mb-4 icon-design">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" class="form-control border-bottom rounded-4" id="update_fname"
                                    name="fname" placeholder="First Name">
                            </div>

                            <div class="form-group mb-4 icon-design">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" class="form-control border-bottom rounded-4" id="update_lname"
                                    name="lname" placeholder="Last Name">
                            </div>
                        </div>


                        <label class="form-label">Upload Image</label>
                        <div class="col-2">
                            <img class="preview_img" src="images/default_profile.jpg" width="100px" height="100px">
                        </div>
                        <div class="col-10">
                            <div class="file-upload text-secondary">
                                <input type="file" class="image" name="image" accept="image/*">
                                <input type="hidden" name="image_old" id="image_old">
                            </div>
                        </div>
                        <br><br>


                        <label for="district">Select District:</label>
                        <select id="update_district" name="district">
                            <option value="Select a district" disabled selected>Select a District</option>
                            <?php
                            $sql = "SELECT district_id, district_name FROM districts";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='{$row["district_name"]}'>{$row["district_name"]}</option>";
                            }
                            ?>
                        </select>

                        <br><br>

                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="update_dob" name="dob" value="dob">

                        <br><br>

                        <div id="checkboxContainer">
                            <label for='update_education'>Education:</label>
                            <input type="checkbox" id="ssc" name="update_education[]" value="ssc">
                            <label for="ssc">SSC</label>
                            <input type="checkbox" id="hsc" name="update_education[]" value="hsc">
                            <label for="hsc">HSC</label>
                            <input type="checkbox" id="bsc" name="update_education[]" value="bsc">
                            <label for="bsc">BSc</label>
                            <input type="checkbox" id="msc" name="update_education[]" value="msc">
                            <label for="msc">MSc</label>
                        </div>

                        <label>Gender:</label>
                        <input type="radio" id="update_male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="update_female" name="gender" value="female">
                        <label for="female">Female</label>

                        <br><br>

                        <label for="comments">Comments:</label>
                        <textarea id="update_comments" name="comments" rows="4" cols="50"></textarea>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" Name="save_update" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- end  update item -->

    <!-- delete modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Student Delete Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <form action="delete.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" id="delete_id" name="delete_id">
                        <h4>Are you sure you want to delete this record?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="delete_data" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end delete modal -->




    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php
                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                        ?>
                        <div class="alert alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                    <div class="card-header">
                        <h2 class="text-center mb-3 bg-dark text-opacity-75 text-white p-3 rounded-4">Fetch Data From
                            Database
                            <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal"
                                data-bs-target="#addModal">
                                Add item
                            </button>
                        </h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered border-primary text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Profile Picture</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Education</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Comments</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'dashboardProcess.php';
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
    include 'footer.php';
    ?>

    <!-- <script src="js/script.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('.update_btn').click(function (e) {
                e.preventDefault();

                var profile_id = $(this).closest('tr').find('.profile_id').text();

                $.ajax({
                    type: "POST",
                    url: "update.php",
                    data: {
                        'checking_updatebtn': true,
                        'profile_id': profile_id,
                    },
                    success: function (response) {
                        $.each(response, function (key, value) {
                            $('#update_id').val(value['id']);
                            $('#update_fname').val(value['fname']);
                            $('#update_lname').val(value['lname']);
                            $('#update_district').val(value['district']);

                            // image section
                            $('.preview_img').attr('src', 'images/upload/' + value['profilePicture'] + '');
                            $('#image_old').val(value['profilePicture']);


                            // date of brith
                            $('#update_dob').val(value['date_of_birth']);


                            // education
                            var selectedEducationLevels = value['education'];

                            if (typeof selectedEducationLevels === 'string') {
                                // Split the comma-separated string into an array of values
                                var educationArray = selectedEducationLevels.split(', ');

                                // Iterate through the array and set the corresponding checkboxes
                                educationArray.forEach(function (edu) {
                                    $('input[name="update_education[]"][value="' + edu + '"]').prop('checked', true);
                                });
                            } else {
                                console.log("Invalid education data:", selectedEducationLevels);
                            }


                            // genter
                            if ((value['gender']) == 'male') {
                                $('#update_male').val(value['gender']).attr("checked", true);
                            } else if ((value['gender']) == 'female') {
                                $('#update_female').val(value['gender']).attr("checked", true);
                            }

                            $('#update_comments').val(value['comments']);
                        });
                        $('#updateModal').modal('show');
                    }
                });

            });

            // delete section
            $('.delete_btn').click(function (e) {
                e.preventDefault();

                var profile_id = $(this).closest('tr').find('.profile_id').text();
                console.log(profile_id);
                $('#delete_id').val(profile_id);
                $('#deleteModal').modal('show');

            });
        });
    </script>

</body>

</html>