
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fundraiser</title>
  <link rel="stylesheet" href="style.css" />
  <!-- <link href="bootstrap.min.css" rel="stylesheet" />
         <script src="bootstrap.bundle.min.js"></script> -->
  <!-- Bootrap for the demo page -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--wizard-->
  <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet"
    type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<style>
  body {
    font-family: 'sen', sans-serif;
  }

  .logo {
    margin-left: 65px;
    font-weight: bolder;
    font-size: x-large;
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
    .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  padding: (1rem) var(1rem);
}
  #navbarscroll {
    margin-top: 17px;
    margin-bottom: 10px;
    margin-left: 70px;
  }

  .btn {
    color: #EB2D32 !important;
    font-weight: bolder !important;
    border-radius: 50px !important;
    border: 1px solid red !important;
  }

  .btn:hover {
    background-color: red !important;
    color: white !important;
  }

  .btn-1 {
    margin-left: 260px !important;
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

  .nav-item a {
    color: black !important;
  }

  .dropdown-toggle:hover,
  .navbar:hover,
  .navbar-brand:hover,
  .dropdown-item:hover {
    color: #EB2D32;
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

  /* .footer1 a {
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

  } */
  /* .footer {
    background-color: #d32f2f;
    color: white;
    
} */

.footer h5 {
    margin-bottom: 15px;
    text-align: center;
}

/* .footer1 {
    text-align: center;
    margin-bottom: 10px;
} */

.footer1 a {
    color: white;
    /* margin: 0 7px; */
    text-decoration: none;
}

.footer1 a:hover {
    text-decoration: underline;
}

.social-icons {
    margin-top: 10px;
    margin-bottom: 10px;
}

.social-icons a {
    margin: 0 10px;
}

.text-center img {
    margin-top: 15px;
    margin-bottom: 15px;
}

.footer p {
    margin-bottom: 0; /* Prevent extra space below the copyright text */
    font-size: 14px;
}

  @media (min-width: 993px) {
    .img-fluid {
      margin-top: 50px;
      width: 100%;
      height: 100%;
    }
  }

  @media (min-width: 769px) and (max-width: 992px) {
    .img-fluid {
      margin-top: 50px;
      width: 100%;
      height: 100%;
    }

    .img1 {
      display: none;
    }

    .footimg {
      margin-left: 30%;

    }

    /* .footing {
      margin-left: 50%;
      padding: 0px;
      height:12%;
    } */
  }

  @media (min-width: 577px) and (max-width: 768px) {
    .img-fluid {
      margin-top: 40px;
      width: 100%;
      height: 100%;
    }

    .footimg {

      padding: 0px;
      height: 12%;
    }

    .img1 {
      display: none;
    }

    .footimg {
      margin-left: 16%;
    }
  }

  @media(max-width:576px) {
    .logo {
      margin-left: 10px;
    }

    .btn-1,
    .btn-2 {
      display: inline-block;
      margin-right: 10px;
    }

    .img-fluid {
      margin-top: 95px;
      width: 100%;
      height: 100%;
    }

    .footimg {

      padding: 0px;
      height: 8%;
    }

    /* .footer {
      height: 250px;
      width: 100%;
      left:0;
      right:0;
      margin-top:15%;
      color: #f0f0f0;
    } */
    /* .footing {
      margin-left: 15%;
      padding: 0px;
      height:8%;
    } */
    .mm {
      margin-top: 10px;
      width: 100%;
    }

    .box,
    .box1 {
      margin-top: 10px;

    }

    /* .ff{
   margin-top:200px;
} */
    .img1 {
      display: none;
    }

    /* .tab-content{
   margin-top:400px;
} */

    /* .sw > .nav .nav-link {
    width: 100%;
    margin: 5px 0; 
    text-align: center;
  } */
  }

  h1 {
    text-align: center;
  }

  p {
    margin: 0;
    font-size: 20px;

  }

  #multi-step-form-container {
    margin-top: 1rem;
  }

  .text-center {
    text-align: center;
  }

  .mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .pl-0 {
    padding-left: 0;
  }

  /* button {
    padding: 0.7rem 1.5rem;
    border: 1px solid E01A2B;
    background-color: E01A2B;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
   
} */
  .submit-btn {
    border: 1px solid E01A2B;
    background-color: E01A2B;
  }

  /* .mt-3 {
    margin-top: 1rem;
} */
  .d-none {
    display: none;
  }

  .form-step {
    border-radius: 20px;
    padding: auto;
  }

  .font-normal {
    font-weight: normal;
  }

  ul.form-stepper {
    counter-reset: section;
    margin-bottom: 2rem;
  }

  ul.form-stepper .form-stepper-circle {
    position: relative;
  }

  ul.form-stepper .form-stepper-circle span {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
  }
  
  .form-stepper-horizontal {
    position: relative;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
  }

  ul.form-stepper>li:not(:last-of-type) {
    margin-bottom: 0.625rem;
    -webkit-transition: margin-bottom 0.4s;
    /* -o-transition: margin-bottom 0.4s;
    transition: margin-bottom 0.4s; */
  }

  .form-stepper-horizontal>li:not(:last-of-type) {
    margin-bottom: 0 !important;
  }

  .form-stepper-horizontal li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: start;
    -webkit-transition: 0.5s;
    transition: 0.5s;
  }

  .form-stepper-horizontal li:not(:last-child):after {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    height: 1px;
    content: "";
    top: 32%;
  }

  .form-stepper-horizontal li:after {
    background-color: #000000;
  }

  .form-stepper-horizontal li.form-stepper-completed:after {
    background-color: #000000;
  }

  .form-stepper-horizontal li:last-child {
    flex: unset;
  }

  ul.form-stepper li a .form-stepper-circle {
    display: inline-block;
    width: 40px;
    height: 40px;
    /* margin-right: 0; */
    line-height: 1.7rem;
    text-align: center;
    background: rgba(0, 0, 0, 0.38);
    border-radius: 50%;
  }

  .form-stepper .form-stepper-active .form-stepper-circle {
    background-color: #E01A2B !important;
    color: #fff;
  }

  .form-stepper .form-stepper-active .label {
    color: #4361ee !important;
  }

  .form-stepper .form-stepper-active .form-stepper-circle:hover {
    background-color: #E01A2B !important;
    color: #fff !important;
  }

  .form-stepper .form-stepper-unfinished .form-stepper-circle {
    background-color: #D9D9D9;
    color: 939292 !important;
  }

  .form-stepper .form-stepper-completed .form-stepper-circle {
    background-color: #E01A2B !important;
    color: #fff;
  }

  .form-stepper .form-stepper-completed .label {

    color: #0e9594 !important;
  }

  .form-stepper .form-stepper-completed .form-stepper-circle:hover {
    background-color: E01A2B !important;
    color: #fff !important;
  }

  .form-stepper .form-stepper-active span.text-muted {
    color: #fff !important;
  }

  .form-stepper .form-stepper-completed span.text-muted {
    color: #fff !important;
  }

  .form-stepper .label {
    font-size: 1rem;
    /* margin-top: 0.5rem; */
  }

  .form-stepper a {
    cursor: default;
  }

  body #multi-step-form-container {
    width: 700px;
    height: 680;
    margin-bottom: 50px;
    padding: 20px;
    border: 2px solid black;
    border-radius: 10px;
    background-color: white;
    float: right;
    margin-left: 80px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);

  } 

  body label {
    display: block;
    margin-bottom: 8px;
    border-color: #E9E3E3;
  }

  body input,
  body select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }

  input {
    border: 2px solid #E9E3E3;
    border-radius: 10px;
  }

  textarea {
    border: 2px solid #E9E3E3;
    border-radius: 10px;
  }

  select {
    border: 2px solid #E9E3E3;
    border-radius: 10px;
  }

  body button {
    background-color: #E01A2B;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
  }

  body select option {
    padding: 8px;
  }

  .file-upload-container {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    width: 100%;
    display: inline-block;
    background-color: #F8F8F8;
  }

  .file-upload-input {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: none;
    background-color: transparent;
    outline: none;
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    /* overflow-y: auto; */
    background-color: rgba(0, 0, 0, 0.5);
  }

  /* CSS for the modal content */
  .modal-content {
    background-color: #FFFFFF;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #888;
    /* width: 30%; */
    max-width: 600px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    /* height:83%; */
  }

  /* Close button style */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  .otp-field {
    flex-direction: row;
    /* column-gap: 10px; */
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .otp-field input {
    /* height: 45px;
  width: 42px; */
    border-radius: 6px;
    outline: none;
    font-size: 1.125rem;
    text-align: center;
    border: 1px solid #ddd;
    padding-bottom: 10px;

  }

  .otp-field input:focus {
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
  }

  .otp-field input::-webkit-inner-spin-button,
  .otp-field input::-webkit-outer-spin-button {
    display: none;
  }

  .resend {
    font-size: 12px;
    color: black;
  }

  .resend a {
    text-decoration: none;
    color: #E01A2B;
  }

  .login_btn {
    margin-right: 20px;
  }
  @media (max-width: 768px) {

  .box1 {
    margin-top: 50px;
  }

  .mm {
    margin-top: 30px;
  }

  .img1 {
    position: relative;
    top: auto;
    left: auto;
    margin-top: 20px;
    margin-left: 0px;
  }

  /* .form-stepper-horizontal {
    flex-direction: column;
  } */

  /* .form-stepper-list {
    width: 100%;
  } */

  .otp-field input {
    width: 40px;
    margin: 0 5px;
  }

  .otp-field {
    display: flex;
    justify-content: center;
  }

  .modal-content {
    width: 90%;
    height: auto;
  }

  input[type="text"], input[type="email"], input[type="number"], input[type="phone"], input[type="date"], select {
    width: 100%;
    height: auto;
  }

  .primary button {
    width: 100%;
  }
}
.donate_img {
        width: 100%; /* Ensure the parent container takes full width */
        position: relative;
    }

    .donate_img img {
        width: 100%;
        height: 300px; /* Maintain aspect ratio */
        object-fit: cover; /* Ensures the image fills its container */
    }
@media (min-width: 769px) and (max-width: 1024px) {
  .container.box {
    margin-left: 50px;
  }

  .img1 {
    top: 150px;
    left: 20px;
    margin-left: 100px;
  }

  .otp-field input {
    width: 50px;
    margin: 0 8px;
  }
}
.btn-red {
    color: white !important; /* Force white text */
    background-color: red !important; /* Force red background */
    border-color: red !important; /* Force red border */
}
</style>

<body>
<nav class="navbar navbar-expand-lg bg-white py-4 fixed-top">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand me-auto" href="<?= base_url('') ?>">
            <img src="<?= base_url('assets/img/Kanavu_help.png') ?>" alt="Kanavu_help" style="max-width: 150px;">
        </a>

        <!-- Navbar toggler (for mobile view) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas (for mobile navigation) -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <img src="<?= base_url('assets/img/Kanavu_help.png') ?>" alt="Kanavu_help" style="max-width: 120px;">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- Navbar links -->
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/individual') ?>" style="color: rgba(235, 45, 50, 1)">Start a Fundraiser</a>
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
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
                    </li>
                </ul>

                <!-- User profile or login -->
                <div class="d-flex align-items-center ms-auto">
                    <?php if ($this->session->userdata('userId')): ?>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center" id="userProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?= base_url('assets/img/Ellipse 12.png') ?>" alt="Profile Image" class="rounded-circle" style="width: 30px; height: 30px;">
                                <span class="ms-2"><?= $this->session->userdata('userName') ?></span>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="userProfile">
                                <li><a class="dropdown-item" href="<?= base_url('/logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                      <a href="<?= base_url('/login') ?>" class="btn btn-red me-2">Login</a>
                    <?php endif; ?>
                    <!-- <a href="<?= base_url('/individual') ?>" class="btn btn-outline-primary me-2">Start a Kanavu</a> -->
                </div>
            </div>
        </div>
    </div>
</nav>
  <div class="donate_img mt-5 pt-4">
  <img src="<?=base_url('assets/img/sthelp.png')?>" width="100%">
  </div>
  <div class="mx-auto text-center mt-8 md:ml-20 ">
    <button id="myDonationsButton" 
      class="inline-flex items-center bg-gray-100 border-red-500 py-2 px-6 text-red-500 focus:outline-none hover:text-red-200 rounded-full text-base p-4 mt-4 md:mt-0 mr-2 data"
      onclick="window.location.href='<?= base_url('/individual') ?>'">
      Individual
    </button>

    <button id="myFundraisersButton"
      class="inline-flex items-center bg-gray-100 border-red-500 py-2 px-6 focus:outline-none hover:text-red-200 rounded-full text-base p-4 mt-4 md:mt-0">
      Charities
</button>

</div>
<div class="container-fluid box mt-auto py-3">
    <div class="row box1 mt-auto py-3">
        <div class="container-fluid mt-5">
            <div class="row align-items-center">
                <!-- Left Column for Image and Text -->
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="text-center">
                        <h3 class="mt-4"><strong>START YOUR HELP</strong></h3>
                        <h6>"We make a living by what we get, but we make a life by what we give"</h6>
                        <img src="<?php echo base_url('/assets/img/btfly.png');?>" alt="no img" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                </div>
                <!-- Right Column for Form -->
                <div class="col-md-6">
                  <div id="multi-step-form-container mt-auto py-3">
                  <!-- Form Steps / Progress Bar -->
                    <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0 col-md-10 flex-wrap">
                    <!-- Step 1 -->
                      <li class="form-stepper-active text-center form-stepper-list" step="1">
                        <a class="mx-2">
                            <span class="form-stepper-circle">
                                <span>1</span>
                            </span>
                        </a>
                      </li>
                      <!-- Step 2 -->
                      <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                        <a class="mx-2">
                            <span class="form-stepper-circle text-muted">
                                <span>2</span>
                            </span>
                        </a>
                      </li>
                      <!-- Step 3 -->
                      <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                        <a class="mx-2">
                            <span class="form-stepper-circle text-muted">
                                <span>3</span>
                            </span>
                        </a>
                      </li>
                    </ul>
                    <!-- Step Wise Form Content -->
                    <form id="individualform" name="individualform" onsubmit="return individual()" method="post" 
          action="<?= base_url('kanavuhelp/individualform_data') ?>" enctype="multipart/form-data" class="row">
        
        <!-- Step 1 Content -->
        <section id="step-1" class="form-step col-12" style="height: 450px;">
            <h2>Basic Details</h2>
            <div class="row col-12 my-3">
                <div class="col-md-4">
                    <label for="category" class="form-label">I am raising fund for:</label>
                </div>
                <div class="col-md-8">
    <select name="category" id="category" class="form-control" onchange="copySelection()">
        <option value="Medical">Medical</option>
        <option value="Crisis">Crisis</option>
        <option value="Education">Education</option>
        <option value="Emergency">Emergency</option>
        <option value="Events">Events</option>
        <?php foreach ($result as $row) { ?>
            <option value="<?php echo $row['id']; ?>" <?php echo set_select('category', $row['id'], False); ?>>
                <?php echo $row['raising_fund_for']; ?>
            </option>
        <?php } ?>
    </select>
</div>
            </div>

            <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
            <input type="number" id="age" name="age" class="form-control" placeholder="Age" required>
            <input type="text" id="location" name="location" class="form-control" placeholder="Location" required>
            <input type="email" id="email" name="email" class="form-control" placeholder="Mail Id*" required>
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone Number*" required>

            <div class="col-12 text-center mt-3">
                <button id="openModalBtn1" class="button btn-navigate-form-step" type="button" step_number="1">Continue</button>
            </div>
        </section>

        <!-- OTP Modal -->
        <div id="myModal1" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4" style="width:736px;height:530px;">
                  <div class="card bg-white mb-5 mt-5 border-0" style="box-shadow: 0 12px 15px rgba(0, 0, 0, 0.02);">
                    <div class="card-body p-5 text-center">
                      <h4><b>Enter OTP to verify your account</b></h4>
                      <p style="font-size:16px;"><b>Enter OTP to verify your account</b></p>
                      <img src="<?php echo base_url('/assets/img/Group 55.png'); ?>" alt="No Image"
                        class="h-auto inline-block" style="width:50px;height:50px;">
                      <p style="font-size:16px;"><b>We have sent OTP to your email, demo@gmail.com</b></p>
                      <div class="otp-field mb-4">
                        <input type="number" />
                        <input type="number" disabled />
                        <input type="number" disabled />
                        <input type="number" disabled />
                        <input type="number" disabled />
                        <input type="number" disabled />
                      </div>

                      <button id="verifyButton" class="button btn-navigate-form-step" step_number="2">
                        Continue
                      </button><br><br>
                      <p class="resend text-muted mb-0" style="font-size:17px;">
                        <b>Didn’t receive the OTP? </b><br>In case you do not receive the OTP on your email id, please
                        check your spam/junk folders.<br> <a href=""><b>Resend</b></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- Step 2 Content -->
        <!-- <section id="step-2" class="form-step d-none">
            <h2>Beneficiary Details</h2>
            <input type="text" id="beneficiary_name" name="beneficiary_name" placeholder="Name" required>
            <input type="number" id="beneficiary_age" name="beneficiary_age" placeholder="Age" required>
            <input type="text" id="beneficiary_location" name="beneficiary_location" placeholder="Location" required>
            <input type="tel" id="beneficiary_phone" name="beneficiary_phone" placeholder="Phone Number*" required>
            
            <button class="button btn-navigate-form-step" type="button" step_number="1">Back</button>
            <button class="button btn-navigate-form-step" type="button" step_number="3">Continue</button>
        </section> -->

        <!-- Step 3 Content -->
        <section id="step-2" class="form-step d-none" style="border:none;">
                            <h2>Cause Details</h2>
                                <!-- Step 2 input fields -->
                                <div class="col-md-12 my-3">
                                  <label for="form_selected_text">I am raising fund for:</label>
                                  <input type="text" name="form_option" id="form_selected_text" class="form-control" readonly>

                                    <!-- Other form fields for Step 2 -->
                                    <label for="amount"></label>
                                    <input type="number" id="amount" name="amount" placeholder="Amount*" required>

                                    <label for="end_date"></label>
                                    <input type="date" id="end_date" name="end_date" placeholder="End Date*" required>
                                </div>
                                <div class="mt-3 d-flex justify-content-center">
                                    <button class="btn text-red-500 btn-navigate-form-step mx-2" type="button" step_number="1" style="width: 100px;">Back</button>
                                    <button class="btn text-red-500 btn-navigate-form-step mx-2" type="button" step_number="3">Continue</button>
                                </div>
                            </section>

        <!-- Step 4 Content -->
        <section id="step-3" class="form-step d-none">
    <h2>Elaborate Cause Details</h2>
    <input type="file" id="cover_image" name="cover_image" accept="image/*" required>
    <input type="text" id="cause_heading" name="cause_heading" placeholder="Heading" required>
    <textarea id="cause_description" name="cause_description" placeholder="Description" required></textarea>
    <div>
      <button class="button btn-navigate-form-step" type="button" step_number="2">Back</button>
      <button class="button submit-btn" type="submit" id="submitApprovalButton">Submit for Approval</button>
    </div>
</section>
    </form>

      </div>
    </div>
  </div>

  <script>
    function copySelection() {
        // Get the selected option's text
        var selectedText = document.getElementById("category").options[document.getElementById("category").selectedIndex].text;
        // Set it in the readonly input field
        document.getElementById("form_selected_text").value = selectedText;
    }

    function openModal(modalId) {
        document.getElementById(modalId).style.display = "block";
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
    }

    document.getElementById("openModalBtn1").addEventListener("click", function () {
        openModal("myModal1");
    });

    document.querySelectorAll(".close").forEach(function (closeBtn) {
        closeBtn.addEventListener("click", function () {
            closeModal(closeBtn.closest('.modal').id);
        });
    });

    const inputs = document.querySelectorAll(".otp-field > input");
    inputs.forEach((input, index) => {
        input.addEventListener("input", () => {
            if (input.value.length === 1) {
                if (inputs[index + 1]) {
                    inputs[index + 1].removeAttribute("disabled");
                    inputs[index + 1].focus();
                }
            } else if (input.value.length === 0 && inputs[index - 1]) {
                inputs[index].setAttribute("disabled", true);
                inputs[index - 1].focus();
            }
        });
    });

    document.getElementById("verifyButton").addEventListener("click", function () {
        const otp = Array.from(inputs).map(input => input.value).join("");
        
        if (otp.length === 6) {
            console.log("OTP entered:", otp);
            closeModal("myModal1");
            navigateToFormStep(2);
        } else {
            alert("Please enter a valid 6-digit OTP.");
        }
    });

    document.querySelector(".resend a").addEventListener("click", function (event) {
        event.preventDefault();
        alert("OTP Resend functionality goes here.");
    });

    const navigateToFormStep = (stepNumber) => {
        document.querySelectorAll(".form-step").forEach((step) => {
            step.classList.add("d-none");
        });
        document.getElementById("step-" + stepNumber).classList.remove("d-none");
    };

    document.querySelectorAll(".btn-navigate-form-step").forEach((btn) => {
        btn.addEventListener("click", () => {
            const stepNumber = parseInt(btn.getAttribute("step_number"));
            navigateToFormStep(stepNumber);
        });
    });

    // Submit for Approval button functionality
    document.getElementById("submitApprovalButton").addEventListener("click", function(event) {
        event.preventDefault();  // Prevents default form submission for validation
        
        // Check if required fields are filled
        const coverImage = document.getElementById("cover_image").files.length > 0;
        const causeHeading = document.getElementById("cause_heading").value.trim();
        const causeDescription = document.getElementById("cause_description").value.trim();

        if (coverImage && causeHeading && causeDescription) {
            alert("Form is ready to be submitted for approval.");
            // Add any submission logic here, like sending data to the server
            document.querySelector("form").submit(); // Uncomment if you want to proceed with form submission
        } else {
            alert("Please complete all required fields.");
        }
    });
</script>

<div class="footer">
<footer class="footer mt-auto py-3">
  <div class="container">
    <h5 style="text-align:center">kanavu.help</h5>
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
      <img src="<?php echo base_url('/assets/img/facebook-f.svg'); ?>" alt="Facebook Logo">
    </a>
    <a href="https://twitter.com/" target="_blank">
      <img src="<?php echo base_url('/assets/img/twitter.svg'); ?>" alt="Twitter Logo">
    </a>
    <!-- LinkedIn -->
    <a href="https://www.linkedin.com/" target="_blank">
      <img src="<?php echo base_url('/assets/img/linkedin-in.svg'); ?>" alt="LinkedIn Logo">
    </a>
  </div>
  <div class="text-center my-3">
    <img src="<?php echo base_url('/assets/img/footer-secured-card 1.svg'); ?>" alt="no image" class="img-fluid mx-auto d-block" style="width: 200px; display: block;">
  </div>

  <p class="text-center" style="font-size:15px;">copyright 2024 @ kanavu.help. All Rights Reserved.</p>
</footer>
</div>
</body>

</html>


