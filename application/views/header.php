<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanavu_help</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        body {
            font-family: 'Sen', sans-serif;
        }

        /* carousel img */
        .carousel-item {
            height: 100vh;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        /* login_button */
        .login-button {
            background-color: #E01A2B;
            color: white;
            font-size: 16px;
            padding: 8px 20px;
            border-radius: 25px;
            text-decoration: none;
            transition: 0.3s background-color;
        }

        /* start a kanavu button */
        .startkanavu-button {
            border: 1px solid #E01A2B;
            color: #E01A2B;
            font-size: 16px;
            padding: 8px 20px;
            border-radius: 25px;
            text-decoration: none;
            transition: 0.3s background-color;
        }

        /* navigation bar  menu size */
        .offcanvas-body {
            font-size: 17px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light py-4 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/img/Kanavu_help.png') ?>" alt="Kanavu_help">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">
                        <img src="<?= base_url('assets/img/Kanavu_help.png') ?>" alt="Kanavu_help">
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/individual') ?>">Start a Fundraiser</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="<?= base_url('/donate') ?>">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="<?= base_url('/myhelps') ?>">My Helps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="<?= base_url('/kanavuhome#how-it-works-section') ?>">How it Works</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blogs</a>
                    </li> -->
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center ms-auto">
                        <?php if ($this->session->userdata('userId')): ?>
                            <div class="d-flex align-items-center">
                                <div class="dropdown" id="userProfile">
                                    <div class="d-flex align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="<?= base_url('/assets/img/Ellipse 12.png') ?>" alt="Profile Image"
                                            style="width: 30px; height: 30px; border-radius: 50%;">
                                        <span class="ms-2"><?= $this->session->userdata('userName') ?></span>
                                    </div>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userProfile">
                                        <li><a class="dropdown-item" href="<?= base_url('/profile') ?>"><i class="fas fa-user"></i> View Profile</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('/logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php else: ?>
                            <a href="<?= base_url('/login') ?>" class="login-button me-2">Login</a>
                        <?php endif; ?>
                    </div>



                </div>
            </div>
        </div>
    </nav>
    </script>

    <!-- Bootstrap JS and dependencies (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>