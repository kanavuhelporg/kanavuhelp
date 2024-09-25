<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Kanavu Help</title>
  <style>
    body {
      font-family: 'sen', sans-serif;
      overflow-x: hidden;
    }

    .logo {
      margin-left: 65px;
      font-weight: bolder;
      font-size: x-large;
    }

    #navbarscroll {
      margin-top: 17px;
      margin-bottom: 10px;
      margin-left: 70px;
    }

    .img-fluid1 {
      width: 100%;
      height: 212px;
      margin-top: 78px;
    }

    .btn {
      color: #EB2D32 !important;
      font-weight: bolder !important;
      border-radius: 50px !important;
      border: 1px solid red !important;
    }

    .btn:hover {
      background-color: #EB2D32 !important;
      color: white !important;
    }

    .btn-1 {
      margin-left: 280px !important;
      background-color: #EB2D32 !important;
      color: white !important;
      width: 100px;
      height: 45px;
    }

    .btn-2 {
      height: 45px;
    }

    .dropdown-toggle {
      font-size: 18px;
      color: black;
    }

    .navbar-brand {
      font-size: 16px;
    }

    .dropdown-toggle:hover,
    .navbar:hover,
    .navbar-brand:hover,
    .dropdown-item:hover {
      color: #EB2D32;
    }

    .drop_down {
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
      margin-left: 80%;
    }

    .login_btn {
      margin-right: 20px;
    }

    .profile-icon {
      width: 30px;
      height: 30px;
      border-radius: 50%;
    }

    .user-info {
      display: flex;
      align-items: center;
      cursor: pointer;
      margin-left: 15px;
    }

    /* .navbar-nav {
            margin-left: 10%; 
            padding-left: 30px;
        } */
    .handwithheart_img {
      text-align: center;
    }

    .footer {
      height: 250px;
      width: 100%;
      left: 0;
      right: 0;
      background-color: #EB2D32;
      margin-top: 88px;
      color: #f0f0f0;
    }

    .footer1 {
      text-align: center;
      padding: 10px;
      margin-left: 10px;
    }

    .footer-lable {
      color: white;
      text-decoration: none;
      padding-right: 20px;
      padding-left: 20px;
    }

    .lable {
      border-right: 3px solid #fff;
    }

    .footer1 a {
      margin-left: 20x;
    }

    .footimg {
      margin-left: 520px;
      padding: 20px;
    }

    .social-icons img {
      width: 20px;
      height: 20px;
      margin-left: 10px;

    }

    .fundraise_txt {
      font-family: sen;
    }

    .donatefor {
      border: 1px solid #E01A2B;
      color: #E01A2B;
      background-color: #fff;
      border-radius: 20px;
    }


    .filter-btn {
      background-color: transparent;
      /* No background color */
      border-width: 2px;
      /* Add border width for clarity */
    }

    .filter-btn.active {
      border-color: #EB2D32;
      /* Red border for active button */
      color: #EB2D32;
      /* Red text for active button */
    }

    .filter-btn:not(.active) {
      border-color: #A9A9A9;
      /* Grey border for inactive buttons */
      color: #A9A9A9;
      /* Grey text for inactive buttons */
    }

    .filter-btn:hover {
      border-color: #EB2D32;
      color: white;
      background-color: #EB2D32;
    }

    .card_section {
      width: 70%;
      
    }

    .card-title {
      font-size: 18px;
      font-weight: bold;
    }

    .buttons {
      background-color: transparent;
      border-radius: 20px;
      border: 2px solid lightgrey;
      color: lightgrey;
      margin-left: 30px;
      width: 85px;
    }
    .card_text{
      font-size:18px ;

    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url('index') ?>">
        <img class="logo" src="<?=base_url('assets/img/Kanavu_help.png')?>" alt="Kanavu Help">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarscroll"
        aria-controls="navbarscroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarscroll">
        <ul class="navbar-nav mb-2 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item dropdown px-3">
            <a class="nav-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
              style="text-decoration: none;">Fundraise for</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url('/individual') ?>">Individuals</a></li>
              <li><a class="dropdown-item" href="<?= base_url('/charity') ?>">Charities</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="navbar-brand p-5 p-md-1" href="<?= base_url('/donate') ?>"  #>Donate</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand p-3 p-md-1" href="<?= base_url('/myhelps') ?>">My Helps</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand p-3 p-md-1" href="#demo1">How it works</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand p-3 p-md-1" href="<?= base_url('/blogs') ?>" style="color:#E01A2B">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand p-3 p-md-1" href="<?= base_url('/contactus') ?>">Contact us</a>
          </li>
        </ul>
      </div>

      <div class="d-flex align-items-center ms-auto">

        <!-- Profile section -->
        <?php if ($this->session->userdata('userId')): ?>
          <div class="user-info " id="userProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <!-- Profile image -->
            <img src="<?= base_url('/assets/img/Ellipse 12.png') ?>" alt="Profile Image" class="profile-icon">
            <!-- Username next to image -->
            <span class="ms-2"><?= $this->session->userdata('userName') ?></span>
          </div>
          <!-- Dropdown for profile actions -->
          <ul class="dropdown-menu drop_down" aria-labelledby="userProfile">
            <li><a class="dropdown-item" href="<?= base_url('/logout') ?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </li>
          </ul>
        <?php else: ?>
          <!-- Show login button if user is not logged in -->
          <a href="<?= base_url('/login') ?>"><button type="button" class="btn btn-1 border login_btn">Login</button></a>
        <?php endif; ?>

        <!-- Add margin to the button to create space -->
        <a href="<?= base_url('/individual') ?>"><button type="button"
            class="btn btn-2 border register_btn me-3 ms-3">Start a Kanavu</button></a>

      </div>
    </div>
  </nav>
  <div class="blog_img">
    <img src="<?= base_url('assets/img/blogs.png') ?>" alt="donate_image" class="img-fluid1">
  </div>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- Card Section -->
  <div class="container card_section mt-5">
    <div class="row">
      <!-- Example Card 1 -->
      <div class="col-md-4">
        <div class="card">
          <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Card image 1">
          <div class="card-body">
          <div class="flex justify-between items-center mb-2 ml-6 mr-14">
              <img src="<?php echo base_url('/assets/img/calendar.svg'); ?>" alt="blog" style="width:20px;">April 11,
              2024
              <img src="<?php echo base_url('/assets/img/user-regular.svg'); ?>" alt="blog" style="margin-left:40px">By
              Admin
            </div>
            <p class="card-title"><strong>Donate for nutrition
            less poor people in Local</strong></p>

            <p class="card_tex text-muted">Lorem
            ipsum dolor sit amet, consectetur adipiscing</p>
            <a href="#" class="btn ">Read More</a>
          </div>
        </div>
      </div>
      <!-- Example Card 2 -->
      <div class="col-md-4">
        <div class="card">
          <img src="<?php echo base_url('/assets/img/blog2 1.png'); ?>" class="card-img-top"
            alt="Card image 2">
          <div class="card-body">
          <div class="flex justify-between items-center mb-2 ml-6 mr-14">
              <img src="<?php echo base_url('/assets/img/calendar.svg'); ?>" alt="blog" style="width:20px;">April 11,
              2024
              <img src="<?php echo base_url('/assets/img/user-regular.svg'); ?>" alt="blog" style="margin-left:40px">By
              Admin
            </div>
            <p class="card-title"><strong>Charity meetup in
            Berline next year</strong></p>

            <p class="card_tex text-muted">Lorem
            ipsum dolor sit amet, consectetur adipiscing</p>
            <a href="#" class="btn ">Read More</a>
          </div>
        </div>
      </div>
      <!-- Example Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <img src="<?php echo base_url('/assets/img/blog3 1.png'); ?>" class="card-img-top"
            alt="Card image 3">
          <div class="card-body">
          <div class="flex justify-between items-center mb-2 ml-6 mr-14">
              <img src="<?php echo base_url('/assets/img/calendar.svg'); ?>" alt="blog" style="width:20px;">April 11,
              2024
              <img src="<?php echo base_url('/assets/img/user-regular.svg'); ?>" alt="blog" style="margin-left:40px">By
              Admin
            </div>
            <p class="card-title"><strong>Donate for nutrition
            less poor people in Local</strong></p>

            <p class="card_tex text-muted">Lorem
            ipsum dolor sit amet, consectetur adipiscing</p>
            <a href="#" class="btn ">Read More</a>
          </div>
        </div>
      </div>
      <!-- Example Card 4 -->
      <div class="col-md-4 mt-5 mb-5">
        <div class="card">
          <img src="<?php echo base_url('/assets/img/blog4 1.png'); ?>" class="card-img-top" alt="Card image 3">
          <div class="card-body">
          <div class="flex justify-between items-center mb-2 ml-6 mr-14">
              <img src="<?php echo base_url('/assets/img/calendar.svg'); ?>" alt="blog" style="width:20px;">April 11,
              2024
              <img src="<?php echo base_url('/assets/img/user-regular.svg'); ?>" alt="blog" style="margin-left:40px">By
              Admin
            </div>
            <p class="card-title"><strong>Treatment for every
            helpless children</strong></p>

            <p class="card_tex text-muted">Lorem
            ipsum dolor sit amet, consectetur adipiscing</p>
            <a href="#" class="btn ">Read More</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <h5 style="text-align:center">localhost</h5>
      <!-- <span class="text-muted">Your footer content goes here.</span> -->
      <div class="footer1">
        <a class="footer-lable lable" href="<?= base_url('/abouts') ?>">About</a>
        <a class="footer-lable lable" href="<?= base_url('/contactus') ?>">Contact</a>
        <a class="footer-lable lable" href="#">Terms of Use</a>
        <a class="footer-lable" href="#">Privacy Policy</a>
      </div>
    </div>
    <div class="social-icons d-flex justify-content-center text-center">
      <a href="https://www.facebook.com/" target="_blank">
        <img src="assets/img/facebook-f.svg" alt="Facebook Logo">
      </a>
      <a href="https://twitter.com/" target="_blank">
        <img src="assets/img/twitter.svg" alt="Twitter Logo">
      </a>
      <!-- LinkedIn -->
      <a href="https://www.linkedin.com/" target="_blank">
        <img src="assets/img/linkedin-in.svg" alt="LinkedIn Logo">
      </a>
    </div>
    <img src="assets/img/footer-secured-card 1.svg" alt="no image" class="footimg">
    <p class="text-center">copyright 2024 @ localhost. All Rights Reserved.</p>
    </div>
  </footer>
</body>

</html>