<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanavu_help</title>
    
    
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
            background-color: #ED3136;
            color: white;
            font-size: 16px;
            padding: 8px 20px;
            border-radius: 25px;
            text-decoration: none;
            transition: 0.3s background-color;
        }

        /* start a kanavu button */
        .startkanavu-button {
            border: 1px solid #ED3136;
            color: #ED3136;
            font-size: 16px;
            padding: 8px 20px;
            border-radius: 25px;
            text-decoration: none;
            transition: 0.3s background-color;
        }

        /* navigation bar menu size */
        .offcanvas-body {
            font-size: 17px;
          
        }
        .nav-item a:hover {
            color: #ED3136;
        }

        /* Fix navbar toggler icon size for mobile view */
        .navbar-toggler {
            padding: 0.25rem 0.5rem; /* Reduce padding to make button smaller */
            font-size: 1rem; /* Adjust icon size */
            line-height: 1;
            border: 1px solid transparent; /* Keep border minimal */
        }

        .navbar-toggler-icon {
            width: 1.5em; /* Reduce icon size */
            height: 1.5em; /* Reduce icon size */
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.75)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); /* Default Bootstrap icon with adjusted stroke */
        }

        /* Ensure offcanvas menu displays correctly in mobile view */
        .offcanvas-end {
            width: 250px; /* Adjust width for better mobile display */
        }

        .offcanvas-body {
            padding: 1rem; /* Ensure proper padding for menu items */
        }

        .offcanvas-body .nav-item {
            margin-bottom: 0.5rem; /* Add spacing between menu items */
        }

        /* Ensure menu items are visible and styled in mobile view */
        .navbar-nav .nav-link {
            color: #000; /* Ensure text is visible */
            padding: 0.5rem 1rem; /* Add padding for touch targets */
        }

        /* Center menu items in laptop/desktop view */
        @media (min-width: 992px) {
            .navbar-nav {
                margin-left: auto;
                margin-right: auto;
                justify-content: center; /* Center the nav items */
                flex-grow: 0 !important; /* Prevent nav from taking full width */
            }
            .navbar-nav .nav-item {
                margin: 0 1px; /* Add spacing between menu items */
            }
        }

        /* Ensure navbar-toggler is on the far right in mobile view */
        @media (max-width: 991px) {
            .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navbar-brand {
        order: 1; /* logo on the left */
    }

    .navbar-toggler {
        order: 2; /* icon on the right */
        margin-left: auto;
    }
        }

        /* Media query to target mobile devices */
        @media (max-width: 576px) {
            .navbar-toggler {
                padding: 0.2rem 0.4rem; /* Further reduce padding for smaller screens */
            }
            .navbar-toggler-icon {
                width: 1.2em; /* Further reduce icon size for smaller screens */
                height: 1.2em;

            }
            .offcanvas-body {
                font-size: 16px; /* Slightly smaller font for mobile */
            }
            .navbar-nav .nav-link {
                font-size: 16px; /* Ensure readable font size */
            }
        }
    </style>
</head>

<body>
   
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="<?= base_url('') ?>">
                <img src="<?= base_url('assets/img/Kanavu_help2.png') ?>" alt="Kanavu_help" style="height: 70px; width: auto;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">
                        <img src="<?= base_url('assets/img/Kanavu_help2.png') ?>" alt="Kanavu_help" style="height: 50px; width: auto;">
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a id="kanavuhomepage" class="nav-link mx-lg-2" href="<?= base_url('/kanavuhome#how-it-works-section') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="aboutuspage" class="nav-link mx-lg-2" href="<?= base_url('/abouts') ?>">About us</a>
                        </li>
                        <li class="nav-item">
                            <a id="individualpage" class="nav-link mx-lg-2" href="<?= base_url('/individual') ?>">Start a Fundraiser</a>
                        </li>
                        <li class="nav-item">
                            <a id="donatepage" class="nav-link mx-lg-2" href="<?= base_url('/donate') ?>">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a id="blogs" class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a id="contactuspage" class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
                        </li>
                        <?php if ($this->session->userdata('Kanavu_userId')): ?>
                            <li class="nav-item">
                                <a id="signinpage" class="nav-link mx-lg-2" href="<?= base_url('/login') ?>">View Dashboard</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a id="signinpage" class="nav-link mx-lg-2" href="<?= base_url('/login') ?>">Sign In</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <div class="d-flex align-items-center ms-auto">
                        <?php if ($this->session->userdata('Kanavu_userId')): ?>
                            <div class="d-flex align-items-center">
                                <div class="dropdown" id="userProfile">
                                    <div class="d-flex align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="<?= base_url('/assets/img/Ellipse 12.png') ?>" alt="Profile Image" style="width: 30px; height: 30px; border-radius: 50%;">
                                        <span class="ms-2"><?= $this->session->userdata('Kanavu_userName'); ?></span>
                                    </div>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="<?= base_url('/logout') ?>">
                                                <i class="fas fa-sign-out-alt"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
   

    <!-- Bootstrap JS and dependencies (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>