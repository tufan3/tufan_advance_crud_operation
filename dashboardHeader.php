<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tufan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .nav_hover:hover {
            background-color: darkgrey;
            border-radius: 5px;
            color: black;
        }
    </style>

</head>

<body>
    <header class="header_section mb-5">
        <div class="container-fluid navbar-dark fixed-top bg-dark">
            <nav class="navbar navbar-expand-lg custom_nav-container m-0">
                <a class="navbar-brand" href="index.php">
                    <h2>LEO<span class="text-info">TECH</span></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <li class="nav-item active nav_hover">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item nav_hover">
                                <a class="nav-link" href="about.php"> About </a>
                            </li>
                            <li class="nav-item nav_hover">
                                <a class="nav-link" href="do.php"> What we do </a>
                            </li>
                            <li class="nav-item nav_hover">
                                <a class="nav-link" href="portfolio.php"> Portfolio </a>
                            </li>
                            <li class="nav-item nav_hover">
                                <a class="nav-link" href="contact.php">Contact us</a>
                            </li>
                            <li class="nav-item nav_hover">
                                <a class="nav-link" href="dashboard.php">Dashboard</a>
                            </li>
                        </ul>
                        <div>
                            <ul class="navbar-nav ml-auto nav_hover">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Profile
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                        <li>
                                            <a class="dropdown-item" href="profile.php">Profile</a>
                                            <!-- <button type="button" class="dropdown-item view_profile"
                                                data-bs-toggle="modal" data-bs-target="#profileModal">
                                                Profile
                                            </button> -->
                                        </li>
                                        <!-- <li><a class="dropdown-item" href="#">Change
                                                Password</a></li> -->
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>