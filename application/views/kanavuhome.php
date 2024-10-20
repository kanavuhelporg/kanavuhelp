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

    .btn-3,
    .btn-4 {
      background-color: #EB2D32;
      color: white;
      border-radius: 20px;
    }
/* cards section */
    .card {
      width: 100%;
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

    .carousel-control-prev {
      margin-top: -300px;
    }

    .carousel-control-next {
      margin-top: -300px;
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
/* readmore_button in card */
    .readmore_btn {
      border: 1px solid rgba(224, 26, 43, 1);
      color: rgba(224, 26, 43, 1);
      border-radius: 25px;
    }

      /* how its works section */

    .how-it-works-container {
      display: flex;
      justify-content: space-around;
      /* Adjust spacing for the steps */
      padding: 40px 0;
      position: absolute;
      /* Positioning to overlay on the image */
      top: 50%;
      /* Center vertically */
      left: 50%;
      /* Center horizontally */
      transform: translate(-50%, -50%);
      /* Adjust to truly center */
      height: 550px;
    }

    .step-container {
      flex: 1;
      /* Allow equal width for all steps */
      margin: 0 10px;
      /* Small margins */
      padding: 20px;
      color: #fff;
      text-align: center;
      border-radius: 10px 10px 150px 150px;
      /* Rounded bottom corners */
      position: relative;
      /* For absolute positioning of overlay */
      width: 250px;
    }
   
    .step-1 {
      background-color: #50C878;
      /* Greenish color */
    }

    .step-2 {
      background-color: #FF6347;
      /* Tomato red color */
    }

    .step-3 {
      background-color: #FFD700;
      /* Yellow color */
    }

    .background-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: 0.2;
      /* Semi-transparent overlay */
      z-index: 1;
    }

    .step-1 .background-overlay {
      background-image: url('assets/img/Group4.svg');
    }

    .step-2 .background-overlay {
      background-image: url('assets/img/Group5.svg');
    }

    .step-3 .background-overlay {
      background-image: url('assets/img/Group3.svg');
    }

    .step-container h2,
    h3 {
      position: relative;
      z-index: 2;
      /* Ensure text is above overlay */
    }

    .step_1,
    .step_2,
    .step_3 {
      border: 3px solid;
      /* Set border for steps */
      border-radius: 50px;
      width: 50px;
      margin-top: -55px;
      /* Position above step */
      margin-left: 50%;
      /* Center horizontally */
      transform: translateX(-50%);
      /* Center using translate */
      background-color: white;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);
    }

    .step_1 {
      border-color: #50C878;
      /* Greenish */
      color: #50C878;
    }

    .step_2 {
      border-color: #FF6347;
      /* Tomato red */
      color: #FF6347;
    }

    .step_3 {
      border-color: #FFD700;
      /* Yellow */
      color: #FFD700;
    }
/* footer */
    .footer {
      height: 250px;
      width: 100%;
      left: 0;
      right: 0;
      background-color: #EB2D32;
      /* margin-top: -100px; */
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

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      /* how its works section */

      .how-it-works-container {
        flex-direction: column;
        /* Stack steps vertically */
        padding: 20px 0;
        /* Reduced padding for smaller screens */
        width: 100%;
        /* Full width */
      }

      .step-container {
        width: 90%;
        /* Full width for smaller screens */
        margin: 10px auto;
        /* Centering with margins */
      }

      .step_1,
      .step_2,
      .step_3 {
        margin-left: 45%;
        /* Adjusted for smaller screens */
      }

      h2 {
        font-size: 1.5rem;
        /* Smaller font size */
      }

      h3 {
        font-size: 1rem;
        /* Smaller font size */
      }
    }

    .step-icon {
      margin-bottom: 15px;
      font-size: 24px;
    }

    h2 {
      font-size: 2rem;
      /* color: #fff; */

    }

    h3 {
      font-size: 1.2rem;
      color: #fff;
      /* margin-top: 5px; */
      margin-left: 60px;
      margin-right: 70px;
      align-content: center;
      /* margin-right: 70px; */

    }

    .step_1 {
      border: 3px solid #50C878;
      border-radius: 50px;
      width: 70px;
      height: 70px;
      margin-top: -65px;
      margin-left: 50%;
      background-color: white;
      color: #50C878;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);

    }

    .step_2 {
      border: 3px solid #FF6347;
      border-radius: 50px;
      width: 70px;
      height: 70px;
      margin-top: -65px;
      margin-left: 50%;
      background-color: white;
      color: #FF6347;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);

    }

    .step_3 {
      border: 3px solid #FFD700;
      border-radius: 50px;
      width: 70px;
      height: 70px;
      margin-top: -65px;
      margin-left: 50%;
      background-color: white;
      color: #FFD700;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);

    }

    .step-container {
      position: relative;
      padding: 20px;
      color: #fff;
      text-align: center;
      border-radius: 10px 10px 150px 150px;
      /* Only round the bottom two corners */
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.2);

    }

    .step-1 {
      background-color: #50C878;
      /* Greenish color */
    }

    .step-2 {
      background-color: #FF6347;
      /* Tomato red color */
    }

    .step-3 {
      background-color: #FFD700;
      /* Yellow color */
    }

    .background-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: 0.2;
      /* Makes the background image semi-transparent */
      z-index: 1;
      border-radius: 0 0 150px 150px;
    }

    .step-1 .background-overlay {
      background-image: url('assets/img/Group4.svg');
    }

    .step-2 .background-overlay {
      background-image: url('assets/img/Group5.svg');
    }

    .step-3 .background-overlay {
      background-image: url('assets/img/Group3.svg');
    }

    .step-container h2,
    h3 {
      position: relative;
      z-index: 2;
    }

    ..worktext {
      display: none;
    }

    @media (max-width: 768px) {

      /* how its works section */
      .how-it-works-container {
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
      }

      .steps_img {
        display: none;
      }

      .step-container {
        width: 80%;
        margin-bottom: 20px;
      }
    }

    .worktext {
      margin-bottom: 30px;
      /* Space between heading and steps */
    }


    @media (max-width: 1400px) {
      .carousel-item .row {
        margin-left: 0;
        margin-right: 0;
      }

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
/* carousel text */
      .imgtext1,
      .imgtext2 {
        background-color: rgba(255, 255, 255, 0.7);
        padding: 20px;
        border-radius: 15px;
        position: absolute;
        z-index: 1;
        top: 50%;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .imgtext1,
      .imgtext2 {
        font-size: 24px;
        text-align: center;
      }

      .imgtext11,
      .imgtext22 {
        font-size: 16px;
        text-align: center;
      }

      .btn-3,
      .btn-4 {
        font-size: 14px;
      }
      
/* how its works section */
      /* .worktext {
        margin-bottom: 550px;
        margin-top: -250px;
      } */
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light py-4 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#">
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
                        <a class="nav-link mx-lg-2" href="<?= base_url('/myhelps') ?>" style="color: rgba(235, 45, 50, 1)">My Helps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/kanavuhome#how-it-works-section') ?>">How it Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
                    </li>
                </ul>
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

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="<?= base_url('assets/img/1.svg') ?>" class="d-block w-100" alt="Image 1">
        <div class="imgtext1 mt-5 pt-5">
          <p>THE <strong>WORLD'S <br>PLATFORM</strong> FOR <br>
            <span>HELP</span>
          </p>
          <div class="imgtext11">
            <ul>
              <li style="font-weight: bold;margin-left">"Empowering Lives, Defeating diseases & disasters"</li>
              <li>Join Us in the Fight & Healing.</li><br>
              <li>
                <a href="<?= base_url('/individual') ?>">
                  <button type="button" class="btn border btn-3">Start a Fundraise</button>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/2.svg') ?>" class="d-block w-100" alt="Image 2">
        <div class="imgtext2 mt-5 pt-5">
          <p>WE ARE ON A MISSION TO <br>
            <span>HELP THE WORLD</span>
          </p>
          <div class="imgtext22">
            <ul>
              <li style="font-weight: bold;">"Empowering Lives, Defeating diseases & disasters"</li>
              <li>Join Us in the Fight & Healing.</li><br>
              <li>
                <a href="<?= base_url('/individual') ?>">
                  <button type="button" class="btn border btn-4">Start a Fundraise</button>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-xxl mt-5">
    <div class="h4" style="text-align:center">BE THE REASON OF<span style="color:#EB2D32"> SOMEONE SMILES</span></div>
    <div style="display: flex; justify-content: center;">
      <img class="img-fluid heart" src="assets/img/underline.svg" alt="no image">
    </div>
    <div class="p" style="text-align:center">we try our best to help helpless people,<br>Donate to charity causes
      around the world.</div>
  </div><br>
  <div class="container mt-5">
    <div id="cardCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <!-- First Card -->
            <div class="col-12 col-md-4">
              <div class="card">
                <img src="<?= base_url('assets/img/cancer_treatment.png') ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title">Cancer Treatment for a Girl Child in Maharashtra</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text text-muted mb-0">by Kailaswaran</p>
                    <button type="button" class="btn card_button text-muted ms-auto">Medical</button>
                    <!-- Add btn-secondary for styling -->
                  </div>
                  <p class="card-text"><strong>₹ 20,000</strong> raised out of ₹ 20,00,000</p>
                  <div class="progress mb-2">
                    <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <a href="#" class="btn donate_btn">Donate Now</a>
                </div>
              </div>
            </div>
            <!-- Second Card -->
            <div class="col-12 col-md-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/cancer_treatment.png') ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title">Flood-affected house near the Poyang Lake</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text text-muted mb-0">by Kailaswaran</p>
                    <button type="button" class="btn card_button text-muted ms-auto">Medical</button>
                    <!-- Add btn-secondary for styling -->
                  </div>
                  <p class="card-text"><strong>₹ 1,00,000</strong> raised out of ₹ 2,00,000</p>
                  <div class="progress mb-2">
                    <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <a href="#" class="btn donate_btn">Donate Now</a>
                </div>
              </div>
            </div>
            <!-- Third Card -->
            <div class="col-12 col-md-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/cancer_treatment.png') ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title">Cancer Treatment for a Girl in Gujarat</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text text-muted mb-0">by Kailaswaran</p>
                    <button type="button" class="btn card_button text-muted ms-auto">Medical</button>
                    <!-- Add btn-secondary for styling -->
                  </div>
                  <p class="card-text"><strong>₹ 1,50,000</strong> raised out of ₹ 2,00,000</p>
                  <div class="progress mb-2">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <a href="#" class="btn donate_btn">Donate Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Second Set of Cards -->
        <div class="carousel-item">
          <div class="row">
            <!-- First Card -->
            <div class="col-12 col-md-4">
              <div class="card">
                <img src="<?= base_url('assets/img/cancer_treatment.png') ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title">Project Title 4</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text text-muted mb-0">by Kailaswaran</p>
                    <button type="button" class="btn card_button text-muted ms-auto">Medical</button>
                    <!-- Add btn-secondary for styling -->
                  </div>
                  <p class="card-text"><strong>₹ 30,000</strong> raised out of ₹ 50,000</p>
                  <div class="progress mb-2">
                    <div class="progress-bar w-20" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <a href="#" class="btn donate_btn">Donate Now</a>
                </div>
              </div>
            </div>
            <!-- Second Card -->
            <div class="col-12 col-md-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/cancer_treatment.png') ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title">Project Title 5</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text text-muted mb-0">by Kailaswaran</p>
                    <button type="button" class="btn card_button text-muted ms-auto">Medical</button>
                    <!-- Add btn-secondary for styling -->
                  </div>
                  <p class="card-text"><strong>₹ 45,000</strong> raised out of ₹ 70,000</p>
                  <div class="progress mb-2">
                    <div class="progress-bar w-35" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <a href="#" class="btn donate_btn">Donate Now</a>
                </div>
              </div>
            </div>
            <!-- Third Card -->
            <div class="col-12 col-md-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/cancer_treatment.png') ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title">Project Title 6</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text text-muted mb-0">by Kailaswaran</p>
                    <button type="button" class="btn card_button text-muted ms-auto">Medical</button>
                    <!-- Add btn-secondary for styling -->
                  </div>
                  <p class="card-text"><strong>₹ 70,000</strong> raised out of ₹ 90,000</p>
                  <div class="progress mb-2">
                    <div class="progress-bar w-40" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <a href="#" class="btn donate_btn">Donate Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="position-relative" id="how-it-works-section">
    <div class="container-xxl ">
      <div class="h4 worktext" style="text-align:center;">HOW IT WORKS (START A FUNDRAISER IN <span
          style="color:#EB2D32"> THREE SIMPLE STEPS)</span></div>
      <div style="display: flex; justify-content: center;">
        <img class="img-fluid heart" src="assets/img/underline.svg" alt="no image">
      </div>
    </div>
    <!-- <img src="<?= base_url('assets/img/steps.png') ?>" class="steps_img"
      style="object-fit: cover; width: 100%; margin-top: -200px;"> -->
    <div class="container " style="display:flex; justify-content:center">
      <div class="row justify-content-center" style="margin-top:65px;">
        <!-- Step 1 -->
        <div class="col-12 col-lg-4 text-center mb-4">
          <div class="step-container step-1 text-center">
            <div class="background-overlay"></div>
            <div class="step-icon">
              <!-- Add the corresponding icon here -->
            </div>
            <div class="step_1">
              <h2 class="mt-3">01</h2>
            </div>
            <h3 class="mt-5">Start your fundraiser</h3>
            <img src="<?= base_url('assets/img/Group 27.png') ?>" class="fundraiser_img mt-5 pt-3">
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-12 col-lg-4 text-center mb-4">
          <div class="step-container step-2 text-center">
            <div class="background-overlay"></div>
            <div class="step-icon">
              <!-- Add the corresponding icon here -->
            </div>
            <div class="step_2">
              <h2 class="mt-3">02</h2>
            </div>
            <h3 class="mt-5">Share your fundraiser</h3>
            <img src="<?= base_url('assets/img/Group 28.svg') ?>" class="fundraiser_img mt-5 pt-3">
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-12 col-lg-4 text-center mb-4">
          <div class="step-container step-3 text-center">
            <div class="background-overlay"></div>
            <div class="step-icon">
              <!-- Add the corresponding icon here -->
            </div>
            <div class="step_3">
              <h2 class="mt-3">03</h2>
            </div>
            <h3 class="mt-5">Withdraw Funds</h3>
            <img src="<?= base_url('assets/img/Group 29.svg') ?>" class="fundraiser_img mt-5 pt-3">
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="stats-section py-5">
    <div class="container">
      <div class="row text-center">
        <!-- Fund Raised Column -->
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/money-bag.svg') ?>" alt="Icon" class="mb-3">
            <h2>30M</h2>
            <p>Total fund raised</p>
          </div>
        </div>
        <!-- Successful Events Column -->
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/calendar.svg') ?>" alt="Icon" class="mb-3">
            <h2>250+</h2>
            <p>Successful events</p>
          </div>
        </div>
        <!-- Volunteers Column -->
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/hand.svg') ?>" alt="Icon" class="mb-3">
            <h2>550+</h2>
            <p>Worldwide volunteers</p>
          </div>
        </div>
        <!-- Donors Column -->
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/volunter.svg') ?>" alt="Icon" class="mb-3">
            <h2>500+</h2>
            <p>Our donors</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="bg-light">
    <div class="container-xxl mt-5 pt-5">
      <div class="h4" style="text-align:center">LAST CHARITY BLOGS</div>
      <div style="display: flex; justify-content: center;">
        <img class="img-fluid heart" src="assets/img/underline.svg" alt="no image">
      </div>
      <div class="p" style="text-align:center">We exist for non-profits, social enterprises, community groups,<br>
        activist and individual citizens that are making.</div>
    </div><br>
    <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- First slide (active) -->
        <div class="carousel-item active">
          <div class="row">
            <!-- Show 1 card on mobile and 3 cards on large screens -->
            <div class="col-12 col-md-4 mb-4">
              <div class="card blogs_card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 1">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 2">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 3">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Second slide -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-12 col-md-4 mb-4">
              <div class="card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 4">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 5">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 6">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



    <div class="footer">
      <footer class="footer mt-auto py-3">
        <div class="container">
          <h5 class="text-center">Kanavu.help</h5>
          <div class="row text-center">
            <div class="col-12">
              <div class="footer1">
                <a class="footer-lable lable" href="<?= base_url('/abouts') ?>">About</a>
                <a class="footer-lable lable" href="<?= base_url('/contactus') ?>">Contact</a>
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