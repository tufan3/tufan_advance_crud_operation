<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>

    <?php
    include "link.php";
    ?>
</head>

<body class="logininfo">
    <?php
    include "dashboardHeader.php";
    ?>
    <!-- main part -->
    <h1 class="text-center mt-4">Dashboard</h1>

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
                            <option value="dhaka">Dhaka</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="sylhet">Sylhet</option>
                            <!-- Add more options for other districts -->
                        </select>

                        <br><br>

                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob">

                        <br><br>

                        <label>Education:</label>
                        <input type="checkbox" id="ssc" name="education[]" value="ssc">
                        <label for="ssc">SSC</label>
                        <input type="checkbox" id="hsc" name="education[]" value="hsc">
                        <label for="hsc">HSC</label>
                        <input type="checkbox" id="bsc" name="education[]" value="bsc">
                        <label for="bsc">BSc</label>
                        <input type="checkbox" id="msc" name="education[]" value="msc">
                        <label for="msc">MSc</label>

                        <br><br>

                        <label>Gender:</label>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>

                        <br><br>

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
                    <h1 class="modal-title fs-5" id="updateModalLabel">Update info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>

                <form action="#" method="post">
                    <div class="modal-body">
                        <div class="form-group mb-4 icon-design">
                            <i class="fa-regular fa-user"></i>
                            <input type="text" class="form-control border-bottom rounded-4" id="name" name="name"
                                placeholder="Name">
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" Name="save_student" class="btn btn-primary px-4">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- end  update item -->




    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php
                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong>
                            <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close">&times;</button>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                    <div class="card-header">
                        <h2 class="text-center mb-3">Fetch Data From Database
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
                                    <th scope="col">profile Picture</th>
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


    <script>
        $(document).ready(function () {
            $('.edit_btn').click(function (e) {
                e.preventDefault();

                var stud_id = $(this).closest('tr').find('.stud_id').text();

                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'checking_editbtn': true,
                        'student_id': stud_id,
                    },
                    success: function (response) {
                        // console.log(response);
                        $.each(response, function (key, value) {
                            $('#edit_id').val(value['id']);
                            $('#edit_fname').val(value['fname']);
                            $('#edit_lname').val(value['lname']);
                            $('#edit_class').val(value['class']);
                        });

                        $('#editStudentModal').modal('show');
                    }
                });

            });
        });
    </script>

</body>

</html>