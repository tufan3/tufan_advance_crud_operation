<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <?php
    include "link.php";
    ?>
</head>

<body class="background_image">
    <!-- header section -->
    <?php
    include "header.php";
    ?>

    <!-- main section -->
    <div class="logininfo">
        <div class="mx-auto w-50 h-100 border border-info-subtle rounded-2 shadow p-5 m-5">
            <form action="" method="post">
                <?php
                include "registerProcess.php";
                ?>

                <!-- design part -->
                <h1 class="text-center mb-4 text-success">Register</h1>
                <div class="form-group icon-design mb-4">
                    <i class="fa-regular fa-user"></i>
                    <input type="text" class="form-control border-bottom rounded-4" id=" first_name" name="first_name"
                        placeholder="First Name" required>
                </div>

                <div class="form-group icon-design mb-4">
                    <i class="fa-regular fa-user"></i>
                    <input type="text" class="form-control border-bottom rounded-4" id=" last_name" name="last_name"
                        placeholder="Last Name" required>
                </div>

                <div class="form-group mb-4 icon-design">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" class="form-control border-bottom rounded-4" id="user_email" name="user_email"
                        placeholder="name@example.com" required>
                </div>


                <div class="form-group mb-4 icon-design">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" class="form-control border-bottom rounded-4" id="user_password"
                        name="user_password" placeholder="Enter your Password" required>
                </div>

                <div class="form-group mb-4 icon-design">
                    <i class="fa-regular fa-circle-check"></i>
                    <input type="password" class="form-control border-bottom rounded-4" id="confirm_password"
                        name="confirm_password" placeholder="Enter your Confirm Password" required>
                </div>

                <button class="btn btn-primary mb-3 d-grid col-12 rounded-pill fs-4 fw-bold" type="submit"
                    name="submit">Register</button>
                <p class="text-center text-info">Already have a account?<a class="underline_info"
                        href="login.php">Login</a>
                </p>
            </form>
        </div>
    </div>

    <!-- footer section -->
    <?php
    // include "footer.php";
    ?>

</body>

</html>