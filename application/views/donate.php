<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    body {
      font-family: 'Sen', sans-serif;
    }
/* carousel */
    .carousel-item {
      height: 100vh;
    }

    .carousel-item img {
      object-fit: cover;
      height: 100%;
      width: 100%;
    }
/* Login_button */
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
/* nav bar menu size */
    .offcanvas-body {
      font-size: 17px;
    }
/* carousel text */
    .imgtext1,
    .imgtext2 {
      position: absolute;
      color: #000;
      width: 30%;
      font-size: 48px;
      font-style: normal;
      padding-bottom: 100px;
    }

    .imgtext1 {
      top: 50%;
      left: 65px;
      transform: translateY(-50%);
    }

    .imgtext2 {
      top: 50%;
      right: 65px;
      transform: translateY(-50%);
    }

    .imgtext1 strong,
    .imgtext2 strong {
      font-weight: bolder;
    }

    .imgtext11,
    .imgtext22 {
      font-size: 18px;
      margin-top: 5px;
    }

    .imgtext11 ul,
    .imgtext22 ul {
      list-style-type: none;
      padding-left: 0;
    }

    .imgtext11 ul li {
      margin-left: 0px;
    }


    .imgtext1 span,
    .imgtext2 span {
      color: #EB2D32;
      font-weight: bolder;
      font-size: 40px;
    }

    /* filter_button above cards */
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
    .donatefor {
      border: 1px solid #E01A2B;
      color: #E01A2B;
      background-color: #fff;
      border-radius: 20px;
    }
    /* card section */
    .card {
      width: 80%;
      /* Make the card width responsive */
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.2);
      
    }

    .carousel-item .row {
      margin-left: 150px;
      margin-right: 150px;
    }

    .carousel-item .col-12.col-md-4 {
      padding-left: 5px;
      padding-right: 5px;
      margin-bottom: 20px;
      
    }

 

    .card-title {
      font-size: 18px;
      font-weight: bold;
      
    }

    .card_button {
      border: 1px solid rgba(174, 168, 168, 1);
      border-radius: 25px;
    }

    .donate_btn {
      border: 1px solid rgba(224, 26, 43, 1);
      color: rgba(224, 26, 43, 1);
      border-radius: 25px;
    }

    /* footer */

    .footer {
      height: 250px;
      width: 100%;
      left: 0;
      right: 0;
      background-color: #EB2D32;
      margin-top: 50px;
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
@media (max-width: 767px) {

  /* carousel */

      .carousel-item {
        position: relative;
      }

      .carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
      }
      .card{
        margin-left: 10%;
      }

    /* donate  image below nav bar */
          .donate_img {
        width: 100%; /* Ensure the parent container takes full width */
        position: relative;
    }

    .donate_img img {
        width: 100%;
        height: 300px; /* Maintain aspect ratio */
        object-fit: cover; /* Ensures the image fills its container */
    }
    }
    </style>
    </head>
<body>
  <nav class="navbar navbar-expand-lg bg-white py-4 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="<?=base_url('')?>">
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Fundraise for</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= base_url('/individual') ?>">Individuals</a></li>
                <li><a class="dropdown-item" href="<?= base_url('/charity') ?>">Charities</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/donate') ?>" style="color:rgba(235, 45, 50, 1)">Donate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/myhelps') ?>">My Helps</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/kanavuhome#how-it-works-section'); ?>">How it works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
            </li>
          </ul><br>
          <div class="d-flex align-items-center ms-auto">
            <?php if ($this->session->userdata('userId')): ?>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center" id="userProfile" role="button" data-bs-toggle="dropdown">
                  <img src="<?= base_url('/assets/img/Ellipse 12.png') ?>" alt="Profile Image"
                    style="width: 30px; height: 30px; border-radius: 50%;">
                  <span class="ms-2"><?= $this->session->userdata('userName') ?></span>
                </div>
                <ul class="dropdown-menu" aria-labelledby="userProfile">
                  <li><a class="dropdown-item" href="<?= base_url('/logout') ?>"><i class="fas fa-sign-out-alt"></i>
                      Logout</a></li>
                </ul>
              </div>
            <?php else: ?>
              <a href="<?=base_url('/login')?>" class="login-button me-2">Login</a>
            <?php endif; ?>
            <a href="<?=base_url('/individual')?>" class="startkanavu-button">Start a kanavu</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="donate_img mt-5 pt-4">
    <img src="<?=base_url('assets/img/Frame 21.png')?>" width="100%">
  </div>
  <div class="handwithheart_img text-center">
    <img src="<?= base_url('assets/img/handwithheart.png') ?>" alt="handwithheart_img" class="handwithheart_img mt-5 ">
    <p class="mt-3 "><b>"Fundraising is the gentle art of teaching the joy of giving."</b></p>

  </div>
  <div class="mx-auto text-center mt-8">
    <button
      class="filter-btn inline-flex items-center border-2 border-red-500 text-red-500 py-1 px-3 focus:outline-none rounded-full text-base p-4 mt-4 mr-3 md:mt-0 donatefor active"
      data-filter="all">All</button>

    <button
      class="filter-btn inline-flex items-center border-2 border-gray-400 text-gray-400 py-1 px-3 focus:outline-none rounded-full text-base p-4 mt-4 mr-3 md:mt-0 donatefor"
      data-filter="medical">Medical</button>

    <button
      class="filter-btn inline-flex items-center border-2 border-gray-400 text-gray-400 py-1 px-3 focus:outline-none rounded-full text-base p-4 mt-4 mr-3 md:mt-0 donatefor"
      data-filter="crisis">Crisis</button>

    <button
      class="filter-btn inline-flex items-center border-2 border-gray-400 text-gray-400 py-1 px-3 focus:outline-none rounded-full text-base p-4 mt-4 mr-3 md:mt-0 donatefor"
      data-filter="education">Education</button>

    <button
      class="filter-btn inline-flex items-center border-2 border-gray-400 text-gray-400 py-1 px-3 focus:outline-none rounded-full text-base mt-4 mr-3 md:mt-0 donatefor"
      data-filter="emergency">Emergency</button>

    <button
      class="filter-btn inline-flex items-center border-2 border-gray-400 text-gray-400 py-1 px-3 focus:outline-none rounded-full text-base mt-4 mr-3 md:mt-0 donatefor"
      data-filter="events">Events</button>
  </div><br>
  <script>
    document.querySelectorAll('.filter-btn').forEach(button => {
      button.addEventListener('click', () => {
        // Remove 'active' class from all buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
          btn.classList.remove('active');
        });
        // Add 'active' class to the clicked button
        button.classList.add('active');
      });
    });
  </script>
  <div class="container mt-5">
    <div class="row">
      <!-- First Card -->
      <div class="col-12 col-md-4 mb-4">
        <div class="card">
          <img src="<?= base_url('assets/img/cancer_treatment.png') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title">Cancer Treatment for a Girl Child in Maharashtra</p>
            <div class="d-flex justify-content-between align-items-center">
              <p class="card-text text-muted mb-0">by Kailaswaran</p>
              <button type="button" class="btn card_button text-muted ms-auto">Medical</button>
            </div>
            <p class="card-text"><strong>₹ 20,000</strong> raised out of ₹ 20,00,000</p>
            <div class="progress mb-2">
              <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <a href="#" class="btn donate_btn">Donate Now</a>
          </div>
        </div>
      </div>
      <!-- Second Card -->
      <div class="col-12 col-md-4 mb-4">
        <div class="card">
          <img src="<?= base_url('assets/img/cancer_treatment.png') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title">Flood-affected house near the Poyang Lake</p>
            <div class="d-flex justify-content-between align-items-center">
              <p class="card-text text-muted mb-0">by Kailaswaran</p>
              <button type="button" class="btn card_button text-muted ms-auto">Medical</button>
            </div>
            <p class="card-text"><strong>₹ 1,00,000</strong> raised out of ₹ 2,00,000</p>
            <div class="progress mb-2">
              <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <a href="#" class="btn donate_btn">Donate Now</a>
          </div>
        </div>
      </div>
      <!-- Third Card -->
      <div class="col-12 col-md-4 mb-4">
        <div class="card">
          <img src="<?= base_url('assets/img/cancer_treatment.png') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title">Cancer Treatment for a Girl in Gujarat</p>
            <div class="d-flex justify-content-between align-items-center">
              <p class="card-text text-muted mb-0">by Kailaswaran</p>
              <button type="button" class="btn card_button text-muted ms-auto">Medical</button>
            </div>
            <p class="card-text"><strong>₹ 1,50,000</strong> raised out of ₹ 2,00,000</p>
            <div class="progress mb-2">
              <div class="progress-bar w-75" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <a href="#" class="btn donate_btn">Donate Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Second row of cards -->
    <div class="row">
      <!-- Fourth Card -->
      <div class="col-12 col-md-4 mb-4">
        <div class="card">
          <img src="<?= base_url('assets/img/cancer_treatment.png') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title">Project Title 4</p>
            <div class="d-flex justify-content-between align-items-center">
              <p class="card-text text-muted mb-0">by Kailaswaran</p>
              <button type="button" class="btn card_button text-muted ms-auto">Medical</button>
            </div>
            <p class="card-text"><strong>₹ 30,000</strong> raised out of ₹ 50,000</p>
            <div class="progress mb-2">
              <div class="progress-bar w-20" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <a href="#" class="btn donate_btn">Donate Now</a>
          </div>
        </div>
      </div>
      <!-- Fifth Card -->
      <div class="col-12 col-md-4 mb-4">
        <div class="card">
          <img src="<?= base_url('assets/img/cancer_treatment.png') ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title">Project Title 5</p>
            <div class="d-flex justify-content-between align-items-center">
              <p class="card-text text-muted mb-0">by Kailaswaran</p>
              <button type="button" class="btn card_button text-muted ms-auto">Medical</button>
            </div>
            <p class="card-text"><strong>₹ 45,000</strong> raised out of ₹ 70,000</p>
            <div class="progress mb-2">
              <div class="progress-bar w-35" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <a href="#" class="btn donate_btn">Donate Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="footer">
      <footer class="footer mt-auto py-3">
        <div class="container">
          <h5 class="text-center">Kanavu.help</h5>
          <div class="row text-center">
            <div class="col-12">
              <div class="footer1">
                <a class="footer-lable lable" href="<?= base_url('kanavuhelp/abouts') ?>">About</a>
                <a class="footer-lable lable" href="<?= base_url('kanavuhelp/contactus') ?>">Contact</a>
                <a class="footer-lable lable" href="#">Terms of Use</a>
                <a class="footer-lable lable" href="#">Privacy Policy</a>
              </div>
            </div>
          </div>
        </div>
        <div class="social-icons d-flex justify-content-center text-center my-2">
          <a href="https://www.facebook.com/" target="_blank" class="mx-2">
            <img src="assets/img/facebook-f.svg" alt="Facebook Logo" class="img-fluid" style="max-width: 30px;">
          </a>
          <a href="https://twitter.com/" target="_blank" class="mx-2">
            <img src="assets/img/twitter.svg" alt="Twitter Logo" class="img-fluid" style="max-width: 30px;">
          </a>
          <a href="https://www.linkedin.com/" target="_blank" class="mx-2">
            <img src="assets/img/linkedin-in.svg" alt="LinkedIn Logo" class="img-fluid" style="max-width: 30px;">
          </a>
        </div>
        <img src="assets/img/footer-secured-card 1.svg" alt="Secure Card" class="footimg img-fluid mx-auto d-block"
          style="max-width: 200px;">
        <p class="text-center ">copyright 2024 @ Kanavu.help. All Rights Reserved.</p>
      </footer>
    </div>

      <!-- Bootstrap JS and dependencies (Popper.js) -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    