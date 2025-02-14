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
  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

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

  .navbar-toggler {
    padding: .25rem .75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid #4f373766;
    border-radius: .25rem;
    transition: box-shadow .15s ease-in-out;
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

  /* Custom select dropdown wrapper */
  .custom-dropdown-wrapper {
    position: relative;
  }

  /* Custom select dropdown */
  .custom-dropdown {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding-right: 30px;
    /* Space for the icon */
    background-color: #fff;
    /* Background color */
  }

  /* Dropdown icon styling */
  .custom-dropdown-icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    /* Prevents the icon from being clickable */
    font-size: 16px;
    color: #6c757d;
    /* Gray color */
  }

  /* Optional: Custom focus styling */
  .custom-dropdown:focus {
    outline: none;
  }

  .footer {
    height: 250px;
    width: 100%;
    left: 0;
    right: 0;
    background-color: #EB2D32;
    /* margin-top: 88px; */
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

  */
  /* .footer {
    background-color: #d32f2f;
    color: white;
    
} */

  /* .footer h5 {
    margin-bottom: 15px;
    text-align: center;
} */

  /* .footer1 {
    text-align: center;
    margin-bottom: 10px;
} */

  .footer1 a {
    color: white;
    /* margin: 0 7px; */
    text-decoration: none;
  }

  /* .footer1 a:hover {
    text-decoration: underline;
} */

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

  /* .footer p {
    margin-bottom: 0; 
    font-size: 14px;
} */

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
    color: black !important;
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
    /* border: 2px solid black; */
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

    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="phone"],
    input[type="date"],
    select {
      width: 100%;
      height: auto;
    }

    .primary button {
      width: 100%;
    }
  }

  @media (max-width: 767px) {

    /* donate  image below nav bar */
    .donate_img {
      width: 100%;
      /* Ensure the parent container takes full width */
      position: relative;
    }

    .donate_img img {
      width: 100%;
      height: 300px;
      /* Maintain aspect ratio */
      object-fit: cover;
      /* Ensures the image fills its container */
    }

    @media (min-width: 769px) and (max-width: 1024px) {
      .container.box {
        margin-left: 50px;
      }
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
    color: white !important;
    /* Force white text */
    background-color: red !important;
    /* Force red background */
    border-color: red !important;
    /* Force red border */
  }

  .error-text {
    font-size: 0.875em;
    color: red;
  }

  .btn.no-hover {
    background-color: #dc3545 !important;
    /* Force red background */
    color: white !important;
    /* Force white text */
    border-color: #dc3545 !important;
    /* Match border color */
  }

  .btn.no-hover:hover,
  .btn.no-hover:focus,
  .btn.no-hover:active {
    background-color: #dc3545 !important;
    /* Force red background on hover, focus, and active */
    color: white !important;
    /* Force white text on hover, focus, and active */
    border-color: #dc3545 !important;
    /* Match border color on hover, focus, and active */
  }
  /* Ensure the dropdown menu is fully visible on smaller screens */
@media (max-width: 768px) {
  #userProfile .dropdown-menu {
    right: 0 !important; /* Align the dropdown to the right edge */
    left: auto !important; /* Override default left alignment */
    min-width: 150px; /* Adjust the width as needed */
  }
  
  #userProfile img {
    width: 25px; /* Slightly smaller profile image for mobile */
    height: 25px;
  }
  
  #userProfile .dropdown-item {
    text-align: center; /* Center-align items for better UX */
  }
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
              <a class="nav-link mx-lg-2" href="<?= base_url('/myFundraisers') ?>">My Fundraiser</a>
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

          <!-- User profile or login -->
          <div class="d-flex align-items-center ms-auto">
  <?php if ($this->session->userdata('Kanavu_userId')): ?>
    <div class="d-flex align-items-center">
      <div class="dropdown" id="userProfile">
        <div class="d-flex align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="<?= base_url('/assets/img/Ellipse 12.png') ?>" alt="Profile Image"
            style="width: 30px; height: 30px; border-radius: 50%;">
          <span class="ms-2"><?= $this->session->userdata('Kanavu_userName') ?></span>
        </div>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userProfile">
          <li>
            <a class="dropdown-item" href="<?= base_url('/logout') ?>">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </li>
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
    </div>
  </nav>
  <div class="donate_img mt-5 pt-4 text-center">
  <img src="<?= base_url('assets/img/fundraiserpage.png') ?>" 
       style="width: 100%; height: 250px; ">
</div>

  <!--<div class="mx-auto text-center mt-8 md:ml-20 ">
    <button id="myDonationsButton" 
      class="inline-flex items-center bg-gray-100 border-red-500 py-2 px-6 text-red-500 focus:outline-none hover:text-red-200 rounded-full text-base p-4 mt-4 md:mt-0 mr-2 data"
      onclick="window.location.href='<?= base_url('/individual') ?>'">
      Individual
    </button>

    <button id="myFundraisersButton"
      class="inline-flex items-center bg-gray-100 border-red-500 py-2 px-6 focus:outline-none hover:text-red-200 rounded-full text-base p-4 mt-4 md:mt-0">
      Charities
</button>

</div>-->
  <div class="container-fluid box mt-auto py-3">
    <div class="row box1 mt-auto py-3">
      <div class="container-fluid mt-5">
        <div class="row align-items-center w-100">
          <!-- Left Column for Image and Text -->
          <div class="col-md-6 d-flex justify-content-center">
            <div class="text-center">
              <h3 class="mt-4"><strong>START YOUR FUNDRAISER</strong></h3>
              <h6>"We make a living by what we get, but we make a life by what we give"</h6>
              <img src="<?php echo base_url('/assets/img/startyourfund.jpg'); ?>" 
     alt="no img" 
     class="img-fluid" 
     style="max-width: 100%; height: auto; border-radius: 50%;">
            </div>
          </div>
          <!-- Right Column for Form -->
          <div class="col-md-6">
            <div id="multi-step-form-container" class="mt-auto py-3 w-100">
              <!-- Form Steps / Progress Bar -->
              <ul class="form-stepper form-stepper-horizontal text-center mx-auto col-md-10 flex-wrap">
                <li class="form-stepper-active text-center form-stepper-list" step="1">
                  <a class="mx-2">
                    <span class="form-stepper-circle"><span>1</span></span>
                  </a>
                </li>
                <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                  <a class="mx-2">
                    <span class="form-stepper-circle"><span>2</span></span>
                  </a>
                </li>
                <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                  <a class="mx-2">
                    <span class="form-stepper-circle"><span>3</span></span>
                  </a>
                </li>
              </ul>

              <form id="individualform" name="individualform" method="post" action="<?= base_url('kanavuhelp/individualform_data') ?>" enctype="multipart/form-data">
  <!-- Step 1 Content -->
  <section id="step-1" class="form-step col-12">
    <h2>Basic Details</h2>
    <div class="row my-3">
      <label for="category" class="col-md-4 col-form-label">I am raising fund for:<span class="text-danger">*</span></label>
      <div class="col-md-8">
        <div class="custom-dropdown-wrapper">
          <select name="category" id="category" class="form-control custom-dropdown" onchange="copySelection()" required>
            <option value="">Select</option>
            <?php foreach ($result as $row) { ?>
              <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
          </select>
          <i class="fas fa-chevron-down custom-dropdown-icon"></i>
        </div>
        <span id="category-error" class="text-danger"></span>
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-4 col-form-label">Name of beneficiary:<span class="text-danger">*</span></label>
      <div class="col-sm-8">
        <input type="text" id="name" name="name" class="form-control my-2" placeholder="Name of beneficiary" required>
        <span id="name-error" class="text-danger"></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="age" class="col-sm-4 col-form-label">Age of beneficiary:<span class="text-danger">*</span></label>
      <div class="col-sm-8">
        <input type="number" id="age" name="age" class="form-control my-2" placeholder="Age of beneficiary" required>
        <span id="age-error" class="text-danger"></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="location" class="col-sm-4 col-form-label">Location:<span class="text-danger">*</span></label>
      <div class="col-sm-8">
        <input type="text" id="location" name="location" class="form-control my-2" placeholder="Location" required>
        <span id="location-error" class="text-danger"></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-4 col-form-label">Mail Id:<span class="text-danger">*</span></label>
      <div class="col-sm-8">
        <input type="email" id="email" name="email" class="form-control my-2" placeholder="Mail Id*" required>
        <span id="email-error" class="text-danger"></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="phone" class="col-sm-4 col-form-label">Phone Number:<span class="text-danger">*</span></label>
      <div class="col-sm-8">
        <input type="tel" id="phone" name="phone" class="form-control my-2" placeholder="Phone Number*" required>
        <span id="phone-error" class="text-danger"></span>
      </div>
    </div>

    <div class="text-center mt-3">
      <button type="button" id="continueToStep2" class="btn btn-danger no-hover">Continue</button>
    </div>
  </section>

  <!-- OTP Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="otpModalLabel">OTP Verification</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="otp" class="form-label">Enter OTP</label>
          <input type="text" id="otp" class="form-control" placeholder="Enter OTP">
          <div id="otp-error" class="text-danger mt-2"></div>
        </div>
        <div class="modal-footer">
          <button type="button" id="verifyOtpButton" class="btn btn-danger no-hover">Verify OTP</button>
        </div>
      </div>
    </div>
  </div>

  <section id="step-2" class="form-step col-12 d-none">
  <h2>Cause Details</h2>

  <div class="row my-3">
    <label for="form_selected_text" class="col-md-4 col-form-label">I am raising fund for:</label>
    <div class="col-md-8">
      <input type="text" id="form_selected_text" class="form-control my-2" placeholder="I am raising fund for:" readonly>
    </div>
  </div>

  <div class="row my-3">
    <label for="amount" class="col-md-4 col-form-label">Amount:<span class="text-danger">*</span></label>
    <div class="col-md-8">
      <input type="number" id="amount" name="amount" class="form-control my-2" placeholder="Amount*" required>
      <span id="amount-error" class="text-danger"></span>
    </div>
  </div>

  <div class="row my-3">
    <label for="end_date" class="col-md-4 col-form-label">End Date:<span class="text-danger">*</span></label>
    <div class="col-md-8">
      <input type="date" id="end_date" name="end_date" class="form-control my-2" placeholder="End Date*" required>
      <span id="end-date-error" class="text-danger"></span>
    </div>
  </div>

  <div class="text-center mt-3">
    <button type="button" class="btn btn-danger no-hover btn-back" data-step="1">Back</button>
    <button type="button" id="continueToStep3" class="btn btn-danger no-hover">Continue</button>
  </div>
</section>

  <!-- Step 3 Content -->
<section id="step-3" class="form-step col-12 d-none">
  <h2>Elaborate Cause Details</h2>

  <!-- Cover Image Field -->
  <div class="row my-3">
    <label for="cover_image" class="col-md-4 col-form-label">Cover Image:<span class="text-danger">*</span></label>
    <div class="col-md-8">
      <input type="file" id="cover_image" name="cover_image" accept="image/jpeg, image/png, image/svg+xml" class="form-control my-2" onchange="validateCoverImage()" required>
      <small class="text-muted">
        Image dimensions up to 600x400 px, and formats: JPG, JPEG, PNG, SVG.
      </small>
      <span id="cover-image-error" class="text-danger"></span>
    </div>
  </div>

  <!-- Cause Title Field -->
  <div class="row my-3">
    <label for="cause_heading" class="col-md-4 col-form-label">Cause Title:<span class="text-danger">*</span></label>
    <div class="col-md-8">
      <input type="text" id="cause_heading" name="cause_heading" class="form-control my-2" placeholder="Cause Title" required oninput="validateCauseTitle()">
      <span id="cause-heading-error" class="text-danger"></span>
    </div>
  </div>

  <!-- Cause Description Field -->
  <div class="row my-3">
    <label for="cause_description" class="col-md-4 col-form-label">Description:<span class="text-danger">*</span></label>
    <div class="col-md-8">
      <textarea id="cause_description" name="cause_description" class="form-control my-2" rows="4" placeholder="Description" required oninput="validateCauseDescription()"></textarea>
      <span id="cause-description-error" class="text-danger"></span>
    </div>
  </div>

  <div style="color:red">Please wait for Admin verification of the cause. It will happen in 24 hours</div>

  <div class="text-center mt-3">
    <button type="button" class="btn btn-danger no-hover btn-back" data-step="2">Back</button>
    <button type="submit" class="btn btn-success no-hover" id="submitForApproval">Submit for Approval</button>
  </div>
</section>
</form>

              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- <script>
  document.addEventListener("DOMContentLoaded", function () {
  // Handle Step 1 "Continue" button
  document.getElementById("continueToStep2").addEventListener("click", function () {
    if (validateStep1()) {
      // Open OTP modal if Step 1 is valid
      const otpModal = new bootstrap.Modal(document.getElementById("myModal"));
      otpModal.show();
    }
  });

  // Handle OTP verification
  document.getElementById("verifyOtpButton").addEventListener("click", function () {
    const otpInput = document.getElementById("otp").value.trim();
    const otpError = document.getElementById("otp-error");
    const validOtp = "123456"; // Example OTP for validation

    if (otpInput === validOtp) {
      // Clear any errors and proceed to Step 2
      otpError.textContent = "";
      showStep(2);
      const otpModal = bootstrap.Modal.getInstance(document.getElementById("myModal"));
      otpModal.hide();
    } else {
      // Display error if OTP is invalid
      otpError.textContent = "Invalid OTP. Please try again.";
    }
  });

  // Handle Step 2 "Continue" button
  document.getElementById("continueToStep3").addEventListener("click", function () {
    if (validateStep2()) {
      showStep(3); // Navigate to Step 3
    }
  });

  // Handle Step 3 "Submit" button
  document.getElementById("submitForm").addEventListener("click", function () {
    if (validateStep3()) {
      alert("Form submitted successfully!");
      // Add form submission logic here
    }
  });

  // Show specific step
  function showStep(step) {
    document.querySelectorAll(".form-step").forEach(section => section.classList.add("d-none"));
    document.getElementById(`step-${step}`).classList.remove("d-none");
    document.querySelectorAll(".form-stepper-list").forEach(element => {
      element.classList.remove("form-stepper-active", "form-stepper-completed");
      element.classList.add("form-stepper-unfinished");
    });
    for (let i = 1; i <= step; i++) {
      const stepElement = document.querySelector(`.form-stepper-list[step="${i}"]`);
      stepElement.classList.remove("form-stepper-unfinished");
      stepElement.classList.add(i === step ? "form-stepper-active" : "form-stepper-completed");
    }
  }
  document.querySelectorAll('.btn-back').forEach((button) => {
    button.addEventListener('click', function () {
      const currentStep = parseInt(this.getAttribute('data-step'));
      showStep(currentStep); // Go back to the previous step
    });
  });
  // Validation functions
  function validateStep1() {
    return validateField("category", "category-error", "Please select a category.") &&
      validateField("name", "name-error", "Please enter the name.") &&
      validateAge() &&
      validateField("location", "location-error", "Please enter a location.") &&
      validateEmail() &&
      validatePhone();
  }

  function validateStep2() {
    return validateField("amount", "amount-error", "Please enter a valid amount.") &&
      validateField("end_date", "end-date-error", "Please select an end date.");
  }

  function validateStep3() {
    return validateField("cover_image", "cover-image-error", "Please upload a cover image.") &&
      validateField("cause_heading", "cause-heading-error", "Please enter the cause heading.") &&
      validateField("cause_description", "cause-description-error", "Please enter the cause description.");
  }

  function validateField(id, errorId, errorMessage) {
    const field = document.getElementById(id);
    const errorElement = document.getElementById(errorId);

    if (!field.value) {
      errorElement.textContent = errorMessage;
      return false;
    }

    errorElement.textContent = "";
    return true;
  }

  function validateAge() {
    const ageField = document.getElementById("age");
    const ageError = document.getElementById("age-error");
    const ageValue = ageField.value.trim();

    if (!ageValue || isNaN(ageValue) || ageValue < 1 || ageValue > 120) {
      ageError.textContent = "Please enter a valid age between 1 and 120.";
      return false;
    }

    ageError.textContent = "";
    return true;
  }

  function validateEmail() {
    const email = document.getElementById("email").value;
    const emailError = document.getElementById("email-error");
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (!regex.test(email)) {
      emailError.textContent = "Please enter a valid email address.";
      return false;
    }

    emailError.textContent = "";
    return true;
  }

  function validatePhone() {
    const phone = document.getElementById("phone").value;
    const phoneError = document.getElementById("phone-error");
    const regex = /^[0-9]{10}$/;

    if (!regex.test(phone)) {
      phoneError.textContent = "Please enter a valid phone number.";
      return false;
    }

    phoneError.textContent = "";
    return true;
  }
  
});
</script> -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  // Initialize Bootstrap modal for OTP
  const otpModal = new bootstrap.Modal(document.getElementById('myModal'));

  // Add event listeners for validation
  addValidationListeners();

  // Step 1: Continue button
  document.getElementById("continueToStep2").addEventListener("click", () => {
    if (validateStep1()) {
      sendOtp();
      otpModal.show();
    }
  });

  // OTP Verification
  document.getElementById("verifyOtpButton").addEventListener("click", () => {
    const otp = document.getElementById("otp").value.trim();
    if (otp === "123456") { // Simulated OTP
      otpModal.hide();
      showStep(2);
    } else {
      setError("otp-error", "Invalid OTP. Please try again.");
    }
  });

  // Step 2: Continue button
  document.getElementById("continueToStep3").addEventListener("click", () => {
    if (validateStep2()) showStep(3);
  });

 document.getElementById("submitApprovalButton").addEventListener("click", function() {
                  if (validateStep3()) {
                    document.getElementById("step-3").closest("form").submit();
                  }
// Submit for Approval button functionality
    document.getElementById("submitApprovalButton").addEventListener("click", function(event) {
      event.preventDefault(); // Prevents default form submission for validation

      // Check if required fields are filled
      const coverImage = document.getElementById("cover_image").files.length > 0;
      const causeHeading = document.getElementById("cause_heading").value.trim();
      const causeDescription = document.getElementById("cause_description").value.trim();

      if (coverImage && causeHeading && causeDescription) {
        alert("Form is ready to be submitted for approval.");
        document.querySelector("#individualform").submit(); // Proceed with form submission
      } else {
        alert("Please complete all required fields.");
      }
    });




  // Back button functionality
  document.querySelectorAll(".btn-back").forEach(button => {
    button.addEventListener("click", () => showStep(parseInt(button.dataset.step)));
  });

  // Utility: Show a specific step
  function showStep(step) {
    document.querySelectorAll(".form-step").forEach(section => section.classList.add("d-none"));
    document.getElementById(`step-${step}`).classList.remove("d-none");
  }

  // Validation event listeners
  function addValidationListeners() {
    const handlers = {
      name: validateName,
      age: validateAge,
      email: validateEmail,
      phone: validatePhone,
      amount: validateAmount,
      end_date: validateEndDate,
      cover_image: validateCoverImage,
      cause_heading: validateCauseTitle,
      cause_description: validateCauseDescription
    };

    for (const id in handlers) {
      const field = document.getElementById(id);
      if (field) field.addEventListener(field.type === "file" ? "change" : "input", handlers[id]);
    }
  }

  function validateName() {
    const nameInput = document.getElementById("name").value.trim();
    const errorElement = document.getElementById("name-error");
    const nameRegex = /^[A-Za-z][A-Za-z\s'-]{1,49}$/;

    if (!nameInput) {
        errorElement.textContent = "Enter your name.";
        return false;
    } else if (!nameRegex.test(nameInput)) {
        errorElement.textContent = "Name can only contain letters, spaces, and hyphens, and must start with a letter.";
        return false;
    } else {
        errorElement.textContent = ""; // Clear any previous error message
        return true;
    }
}
  function validateAge() {
    const age = parseInt(document.getElementById("age").value, 10);
    if (isNaN(age) || age < 1 || age > 120) {
      setError("age-error", "Enter a valid age between 1 and 120.");
      return false;
    }
    setError("age-error", "");
    return true;
  }

  function validateEmail() {
    const email = document.getElementById("email").value.trim();
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!regex.test(email)) {
      setError("email-error", "Enter a valid email address.");
      return false;
    }
    setError("email-error", "");
    return true;
  }

  function validatePhone() {
    const phone = document.getElementById("phone").value.trim();
    const regex = /^[0-9]{10}$/;
    if (!regex.test(phone)) {
      setError("phone-error", "Enter a valid 10-digit phone number.");
      return false;
    }
    setError("phone-error", "");
    return true;
  }
  function validateAmount() {
  const amountField = document.getElementById("amount");
  const errorElement = document.getElementById("amount-error");
  const amountValue = amountField.value.trim();

  if (!amountValue) {
    errorElement.textContent = "Amount is required.";
    return false;
  }

  if (isNaN(amountValue) || parseFloat(amountValue) <= 10) {
    errorElement.textContent = "Amount must be greater than 10.";
    return false;
  }

  errorElement.textContent = "";
  return true;
}

// Replace `validationHandlers.amount` in the main script with the new `validateAmount` function:
validationHandlers.amount = validateAmount;

// Ensure the event listener for the amount field uses the updated function:
document.getElementById("amount").addEventListener("input", validateAmount);

function validateEndDate() {
  const endDateField = document.getElementById("end_date");
  const errorElement = document.getElementById("end-date-error");
  const endDateValue = endDateField.value;

  if (!endDateValue) {
    errorElement.textContent = "Select an end date.";
    return false;
  }

  const selectedDate = new Date(endDateValue);
  const today = new Date();
  
  // Normalize times to midnight for accurate comparison
  today.setHours(0, 0, 0, 0);
  selectedDate.setHours(0, 0, 0, 0);

  if (selectedDate < today) {
    errorElement.textContent = "The date must be today or a future date.";
    return false;
  }

  errorElement.textContent = "";
  return true;
}

// Add real-time validation for the `end_date` field:
document.getElementById("end_date").addEventListener("input", validateEndDate);

// Ensure `validationHandlers.end_date` uses the updated function:
validationHandlers.end_date = validateEndDate;

function validateCoverImage() {
  const file = document.getElementById("cover_image").files[0];
  const errorElement = document.getElementById("cover-image-error");

  if (!file) {
    setError("cover-image-error", "Upload a cover image.");
    return false;
  }

  // Check file type (only JPG, PNG, and SVG)
  if (!["image/jpeg", "image/png", "image/svg+xml"].includes(file.type)) {
    setError("cover-image-error", "Only JPG, PNG, and SVG formats are allowed.");
    return false;
  }

  // Validate dimensions (should be greater than or equal to 600x400)
  const img = new Image();
  const objectUrl = URL.createObjectURL(file);

  img.onload = function () {
    // Check if the image dimensions are greater than or equal to 600x400 pixels
    if (img.width < 600 || img.height < 400) {
      setError("cover-image-error", "Image dimensions must be at least 600x400 pixels.");
      URL.revokeObjectURL(objectUrl); // Free memory
      return false;
    }

    // If all validations pass
    setError("cover-image-error", "");
    URL.revokeObjectURL(objectUrl); // Free memory
    return true;
  };

  img.onerror = function () {
    setError("cover-image-error", "Invalid image file.");
    URL.revokeObjectURL(objectUrl); // Free memory
    return false;
  };

  img.src = objectUrl; // Trigger `onload`
}

  function validateCauseTitle() {
  const headingField = document.getElementById("cause_heading");
  const heading = headingField.value.trim();
  const errorElement = document.getElementById("cause-heading-error");
  const regex = /^[a-zA-Z\s]+$/;

  console.log("Validating Cause Title:", heading);

  if (!heading) {
    errorElement.textContent = "Cause title is required.";
    return false;
  }

  if (!regex.test(heading)) {
    errorElement.textContent = "Cause title must only contain alphabets and spaces.";
    return false;
  }

  if (heading.length > 5) {
    errorElement.textContent = "Cause title must not exceed 50 characters.";
    return false;
  }

  errorElement.textContent = "";
  return true;
}

function validateCauseDescription() {
  const descriptionField = document.getElementById("cause_description");
  const description = descriptionField.value.trim();
  const errorElement = document.getElementById("cause-description-error");

  if (!description) {
    errorElement.textContent = "Cause description is required.";
    return false;
  }

  if (description.length < 5) {
    errorElement.textContent = "Cause description must be at least 50 characters.";
    return false;
  }

  errorElement.textContent = "";
  return true;
}

// Add real-time validation for the `cause_description` field:
document.getElementById("cause_description").addEventListener("input", validateCauseDescription);
  // Step-specific validation
  function validateStep1() {
    return validateName() &&
      validateAge() &&
      validateEmail() &&
      validatePhone();
  }

  function validateStep2() {
    return validateAmount() &&
      validateEndDate();
  }

  function validateStep3() {
  const isCoverImageValid = validateCoverImage();
  const isCauseTitleValid = validateCauseTitle();
  const isCauseDescriptionValid = validateCauseDescription();

  console.log({ isCoverImageValid, isCauseTitleValid, isCauseDescriptionValid });

  return isCoverImageValid && isCauseTitleValid && isCauseDescriptionValid;
}

  // Utility: Set error message
  function setError(errorId, message) {
    document.getElementById(errorId).textContent = message;
  }

  // Simulate OTP sending
  function sendOtp() {
    const email = document.getElementById("email").value.trim();
    alert("OTP sent to email: " + email); // Replace with actual OTP logic
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
          <a class="footer-lable lable" href="<?= base_url('/terms_of_use') ?>">Terms of Use</a>
          <a class="footer-lable" href="<?= base_url('/privacy_policy') ?>">Privacy Policy</a>
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

