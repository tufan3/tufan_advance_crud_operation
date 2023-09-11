<?php
include 'database/connect.php';
$sql = "SELECT * FROM `users`";
$results = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($results);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <?php
    include 'link.php';
    ?>
</head>

<body class="logininfo background_image">
    <?php
    include 'dashboardHeader.php';
    ?>

    <div class="card m-5 mx-auto" style="max-width: 540px; height: 400px;">
        <div class="row g-0">
            <div class="col-md-4 g-4">
                <img src="images/profile/default_profile.jpg" class="img-fluid  rounded-circle" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">Name:
                        <?php echo $row['first_name'] . ' ' . $row['last_name'] ?>
                    </h4>
                    <p class="card-text">Email:
                        <?php echo $row['user_email'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php'
        ?>

    <!-- Modal -->
    <!-- <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="profileModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            // delete section
            $('.view_profile').click(function (e) {
                e.preventDefault();

                var profile_id = $(this).closest('tr').find('.profile_id').text();
                console.log(profile_id);
                $('#delete_id').val(profile_id);
                $('#deleteModal').modal('show');

            });
        });
    </script> -->
</body>

</html>