<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    include "link.php";
    ?>
</head>

<body>
    <!-- Student add-->
    <div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="studentModalLabel">Studen info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>

                <form action="code.php" method="post">
                    <div class="modal-body">
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

                        <div class="form-group mb-4 icon-design">
                            <i class="fa-regular fa-user"></i>
                            <input type="text" class="form-control border-bottom rounded-4" id="class" name="class"
                                placeholder="Class">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" Name="save_student" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- end student add -->

    <!-- Student view modal -->
    <div class="modal fade" id="studentView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Student View Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="student_viewing_data">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Student view modal -->

    <!-- student modal edit -->
    <div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="editStudentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editStudentModalLabel">Student Update Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>

                <form action="code.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="edit_id" id="edit_id">

                        <div class="form-group mb-4 icon-design">
                            <i class="fa-regular fa-user"></i>
                            <input type="text" class="form-control border-bottom rounded-4" id="edit_fname" name="fname"
                                placeholder="First Name">
                        </div>

                        <div class="form-group mb-4 icon-design">
                            <i class="fa-regular fa-user"></i>
                            <input type="text" class="form-control border-bottom rounded-4" id="edit_lname" name="lname"
                                placeholder="Last Name">
                        </div>

                        <div class="form-group mb-4 icon-design">
                            <i class="fa-regular fa-user"></i>
                            <input type="text" class="form-control border-bottom rounded-4" id="edit_class" name="class"
                                placeholder="Class">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" Name="update_student" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- end student modal edit -->


    <!-- Student delete modal -->
    <div class="modal fade" id="deleteStudent" tabindex="-1" aria-labelledby="deleteStudentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteStudentLabel">Student Delete Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <form action="code.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id_delete" id="id_delete">
                        <h4>hi, you can delete this data</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" name="delete_student" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end Student delete modal -->





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
                                data-bs-target="#studentModal">
                                Add Student
                            </button>
                        </h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn = mysqli_connect("localhost", "root", "", "phpcrud");
                                $query = "SELECT * FROM students";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    while ($row = mysqli_fetch_array($query_run)) { ?>
                                        <tr>
                                            <td class="stud_id">
                                                <?php echo $row['id'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['fname'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['lname'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['class'] ?>
                                            </td>
                                            <td>
                                                <a href="#" class="badge badge-primary view_btn">View</a>
                                                <a href="#" class="badge badge-success edit_btn">Update</a>
                                                <a href="#" class="badge badge-danger delete_btn">Delete</a>
                                            </td>
                                        </tr>

                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            // view button
            $('.view_btn').click(function (e) {
                e.preventDefault();

                var stud_id = $(this).closest('tr').find('.stud_id').text();

                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'checking_viewbtn': true,
                        'student_id': stud_id,
                    },
                    success: function (response) {
                        // console.log(response);
                        $('.student_viewing_data').html(response);
                        $('#studentView').modal('show');
                    }
                });

            });


            // edit button
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

            // delete section
            $('.delete_btn').click(function (e) {
                e.preventDefault();

                var stud_id = $(this).closest('tr').find('.stud_id').val();
                // console.log(stud_id);
                $('#id_delete').val(stud_id);
                $('#deleteStudent').modal('show');

            });
        });
    </script>
</body>

</html>