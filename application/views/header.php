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

        /* navigation bar  menu size */
        .offcanvas-body {
            font-size: 17px;
        }
        .nav-item a:hover{
         /*  color:#d9534f; */
          color: #ED3136
        }
    </style>
</head>

<body>

<div class="container-fluid">
  <a class="navbar-brand me-auto" href="<?= base_url('') ?>">
    <!-- <img src="<?= base_url('assets/img/Kanavu_help2.png') ?>" alt="Kanavu_help"> -->
     <img src="<?= base_url('assets/img/Kanavu_help2.png') ?>" alt="Kanavu_help" style="height: 70px; width: auto;">

  </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">
        <img src="<?= base_url('assets/img/Kanavu_help2.png') ?>" alt="Kanavu_help">
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
      <li class="nav-item"><a id="kanavuhomepage" class="nav-link mx-lg-2" href="<?= base_url('/kanavuhome#how-it-works-section') ?>">How it Works</a></li>
        <li class="nav-item"><a id="aboutuspage" class="nav-link" href="<?= base_url('/abouts') ?>">About us</a></li>
        <li class="nav-item"><a id="individualpage" class="nav-link" href="<?= base_url('/individual') ?>">Start a Fundraiser</a></li>
        <li class="nav-item"><a id="donatepage" class="nav-link" href="<?= base_url('/donate') ?>">Donate</a></li>
       
        <li class="nav-item"><a id="blogs" class="nav-link" href="<?= base_url('/blogs') ?>">Blog</a></li>
        <li class="nav-item"><a id="contactuspage" class="nav-link" href="<?= base_url('/contactus') ?>">Contact Us</a></li>
        <?php if ($this->session->userdata('Kanavu_userId')): ?>
        <li class="nav-item">
              <a id="signinpage" class="nav-link mx-lg-2" href="<?= base_url('/login') ?>"><?php if ($this->session->userdata('Kanavu_userId')) {echo "View Dashboard";}else {
                echo "Sign In";
              } ?></a>
              <?php else: ?>
                <li class="nav-item"><a id="signinpage" class="nav-link" href="<?= base_url('/login') ?>">Sign In</a></li>
            </li>
            <?php endif; ?>

       <!--  <?php if ($this->session->userdata('Kanavu_userId')): ?>
        <li class="nav-item"><a id="logoutpage" class="nav-link mx-lg-2" href="<?= base_url('/logout') ?>">Logout</a></li>
        <?php else: ?>
        <li class="nav-item"><a id="signinpage" class="nav-link mx-lg-2" href="<?= base_url('/login') ?>">Sign In</a></li>
        <?php endif; ?> -->
      </ul>
      <div class="d-flex align-items-center ms-auto">
        <?php if ($this->session->userdata('Kanavu_userId')): ?>
        <div class="d-flex align-items-center">
          <div class="dropdown" id="userProfile">
            <div class="d-flex align-items-center" role="button" data-bs-toggle="dropdown">
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
    
</body>

</html>