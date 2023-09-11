<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tufan</title>
    <?php
    include "link.php";
    ?>
</head>

<body class="background_image">
    <!-- header link -->
    <?php
    include "header.php";
    ?>

    <div class="logininfo ">
        <div class="mx-auto my-auto w-50 h-100 border border-info-subtle shadow rounded p-4 m-5">
            <form action="loginProcess.php" method="post">

                <!-- design part -->
                <h1 class="text-center mb-4 text-success">Login</h1>
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

                <button class="btn btn-primary mb-3 d-grid col-12 rounded-pill fs-4 fw-bold" type="submit"
                    name="submit">Login</button>
                <p class="text-center text-danger">Not an account?<a class="underline_info"
                        href="register.php">Register</a>
                </p>
            </form>
        </div>
    </div>
    <!-- footer link -->
    <?php
    // include "footer.php";
    ?>
</body>

</html>