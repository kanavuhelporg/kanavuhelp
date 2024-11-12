
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
    padding-right: 30px;  /* Space for the icon */
    background-color: #fff;  /* Background color */
}

/* Dropdown icon styling */
.custom-dropdown-icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;  /* Prevents the icon from being clickable */
    font-size: 16px;
    color: #6c757d;  /* Gray color */
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

  } */
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
@media (max-width: 767px) {
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
    color: white !important; /* Force white text */
    background-color: red !important; /* Force red background */
    border-color: red !important; /* Force red border */
}
.error-text {
    font-size: 0.875em;
    color: red;
}
.btn.no-hover {
        background-color: #dc3545 !important; /* Force red background */
        color: white !important; /* Force white text */
        border-color: #dc3545 !important; /* Match border color */
    }

    .btn.no-hover:hover,
    .btn.no-hover:focus,
    .btn.no-hover:active {
        background-color: #dc3545 !important; /* Force red background on hover, focus, and active */
        color: white !important; /* Force white text on hover, focus, and active */
        border-color: #dc3545 !important; /* Match border color on hover, focus, and active */
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
                    <div class="dropdown" id="userProfile">
                      <div class="d-flex align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url('/assets/img/Ellipse 12.png') ?>" alt="Profile Image"
                         style="width: 30px; height: 30px; border-radius: 50%;">
                          <span class="ms-2"><?= $this->session->userdata('userName') ?></span>
                      </div>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userProfile">
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
    </div>
</nav>
<div class="donate_img mt-5 pt-4">
    <img src="<?=base_url('assets/img/Frame 21.png')?>" width="100%">
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
                        <img src="<?php echo base_url('/assets/img/btfly.png'); ?>" alt="no img" class="img-fluid" style="max-width: 100%; height: auto;">
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

                        <form id="individualform" name="individualform" method="post" action="<?= base_url('kanavuhelp/individualform_data') ?>" enctype="multipart/form-data" class="row w-100">
                            <!-- Step 1 Content -->
                            <section id="step-1" class="form-step col-12">
                                <h2>Basic Details</h2>
                                <div class="row my-3">
    <label for="category" class="col-md-4 col-form-label">I am raising fund for:</label>
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
    <label for="name" class="col-sm-4 col-form-label">Name of beneficiary:</label>
    <div class="col-sm-8">
        <input type="text" id="name" name="name" class="form-control my-2" placeholder="Name of beneficiary" required>
        <span id="name-error" class="text-danger"></span>
    </div>
</div>
<div class="form-group row">
    <label for="age" class="col-sm-4 col-form-label">Age of beneficiary:</label>
    <div class="col-sm-8">
        <input type="number" id="age" name="age" class="form-control my-2" placeholder="Age of beneficiary" required>
        <span id="age-error" class="text-danger"></span>
    </div>
</div>
<div class="form-group row">
    <label for="location" class="col-sm-4 col-form-label">Location:</label>
    <div class="col-sm-8">
        <input type="text" id="location" name="location" class="form-control my-2" placeholder="Location" required>
        <span id="location-error" class="text-danger"></span>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label">Mail Id:*</label>
    <div class="col-sm-8">
        <input type="email" id="email" name="email" class="form-control my-2" placeholder="Mail Id*" required>
        <span id="email-error" class="text-danger"></span>
    </div>
</div>
<div class="form-group row">
    <label for="phone" class="col-sm-4 col-form-label">Phone Number:*</label>
    <div class="col-sm-8">
        <input type="tel" id="phone" name="phone" class="form-control my-2" placeholder="Phone Number*" required>
        <span id="phone-error" class="text-danger"></span>
    </div>
</div>

                                <div class="text-center mt-3">
                                    <button type="button" class="btn btn-danger no-hover" onclick="if(validateStep1()) showStep(2)">Continue</button>
                                </div>
                            </section>

                            <!-- Step 2 Content -->
                            <section id="step-2" class="form-step col-12 d-none">
    <h2>Cause Details</h2>

    <div class="row my-3">
        <label for="form_selected_text" class="col-md-4 col-form-label">I am raising fund for:</label>
        <div class="col-md-8">
            <input type="text" id="form_selected_text" class="form-control my-2" placeholder="I am raising fund for:" readonly>
        </div>
    </div>

    <div class="row my-3">
        <label for="amount" class="col-md-4 col-form-label">Amount*:</label>
        <div class="col-md-8">
            <input type="number" id="amount" name="amount" class="form-control my-2" placeholder="Amount*" required>
            <span id="amount-error" class="text-danger"></span>
        </div>
    </div>

    <div class="row my-3">
        <label for="end_date" class="col-md-4 col-form-label">End Date*:</label>
        <div class="col-md-8">
            <input type="date" id="end_date" name="end_date" class="form-control my-2" placeholder="End Date*" required>
            <span id="end-date-error" class="text-danger"></span>
        </div>
    </div>

    <div class="text-center mt-3">
        <button type="button" class="btn btn-danger no-hover" onclick="showStep(1)">Back</button>
        <button type="button" class="btn btn-danger no-hover" onclick="if(validateStep2()) showStep(3)">Continue</button>
    </div>
</section>


                            <!-- Step 3 Content -->
                            <section id="step-3" class="form-step col-12 d-none">
    <h2>Elaborate Cause Details</h2>

    <div class="row my-3">
        <label for="cover_image" class="col-md-4 col-form-label">Cover Image:</label>
        <div class="col-md-8">
            <input type="file" id="cover_image" name="cover_image" accept="image/jpeg, image/png, image/svg+xml" class="form-control my-2" required onchange="validateImage()">
            <span id="cover-image-error" class="text-danger"></span>
        </div>
    </div>

    <div class="row my-3">
        <label for="cause_heading" class="col-md-4 col-form-label">Heading:</label>
        <div class="col-md-8">
            <input type="text" id="cause_heading" name="cause_heading" class="form-control my-2" placeholder="Heading" required>
            <span id="cause-heading-error" class="text-danger"></span>
        </div>
    </div>

    <div class="row my-3">
        <label for="cause_description" class="col-md-4 col-form-label">Description:</label>
        <div class="col-md-8">
            <textarea id="cause_description" name="cause_description" class="form-control my-2" rows="4" placeholder="Description" required></textarea>
            <span id="cause-description-error" class="text-danger"></span>
        </div>
    </div>

    <div class="text-center mt-3">
        <button type="button" class="btn btn-danger no-hover" onclick="showStep(2)">Back</button>
        <button type="submit" class="btn btn-success no-hover">Submit for Approval</button>
    </div>
</section>

                        </form>
                        <script>
                        document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("category").addEventListener("change", () => validateField("category", "category-error", "Please select a category."));
    document.getElementById("name").addEventListener("input", () => validateField("name", "name-error", "Please enter the name."));
    document.getElementById("age").addEventListener("input", () => validateField("age", "age-error", "Please enter a valid age."));
    document.getElementById("location").addEventListener("input", () => validateField("location", "location-error", "Please enter a location."));
    document.getElementById("email").addEventListener("input", () => validateEmail());
    document.getElementById("phone").addEventListener("input", () => validatePhone());
    document.getElementById("amount").addEventListener("input", () => validateField("amount", "amount-error", "Please enter a valid amount."));
    document.getElementById("end_date").addEventListener("change", () => validateField("end_date", "end-date-error", "Please select an end date."));
    document.getElementById("cover_image").addEventListener("change", () => validateImage());
    document.getElementById("cause_heading").addEventListener("input", () => validateField("cause_heading", "cause-heading-error", "Please enter a heading."));
    document.getElementById("cause_description").addEventListener("input", () => validateField("cause_description", "cause-description-error", "Please enter a description."));
});

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

function validateImage() {
    const fileInput = document.getElementById("cover_image");
    const errorSpan = document.getElementById("cover-image-error");
    const file = fileInput.files[0];

    if (!file) {
        errorSpan.textContent = "Please upload a cover image.";
        fileInput.setCustomValidity("Please upload a cover image.");
        return false;
    }

    const maxSize = 2 * 1024 * 1024; // 2MB
    const allowedTypes = ["image/jpeg", "image/png", "image/svg+xml"];
    
    if (file.size > maxSize) {
        errorSpan.textContent = "File size exceeds 2MB. Please upload a smaller image.";
        fileInput.setCustomValidity("File size exceeds 2MB.");
        return false;
    }

    if (!allowedTypes.includes(file.type)) {
        errorSpan.textContent = "Invalid file type. Please upload a JPG, PNG, or SVG image.";
        fileInput.setCustomValidity("Invalid file type.");
        return false;
    }

    const img = new Image();

    img.onload = function () {
        // Only invalidate if the dimensions exceed 1024x768
        if (img.width > 1024 || img.height > 768) {
            errorSpan.textContent = "Image dimensions must not exceed 1024x768 px.";
            fileInput.setCustomValidity("Invalid image dimensions.");
        } else {
            errorSpan.textContent = ""; // Clear error
            fileInput.setCustomValidity(""); // Clear custom validity
        }
    };

    img.onerror = function () {
        errorSpan.textContent = "Invalid image file.";
        fileInput.setCustomValidity("Invalid image file.");
    };

    img.src = URL.createObjectURL(file);
}

function validateStep1() {
    return validateField("category", "category-error", "Please select a category.") &&
        validateField("name", "name-error", "Please enter the name.") &&
        validateField("age", "age-error", "Please enter a valid age.") &&
        validateField("location", "location-error", "Please enter a location.") &&
        validateEmail() &&
        validatePhone();
}

function validateStep2() {
    return validateField("amount", "amount-error", "Please enter a valid amount.") &&
        validateField("end_date", "end-date-error", "Please select an end date.");
}

function validateStep3() {
    return validateImage() &&
        validateField("cause_heading", "cause-heading-error", "Please enter a heading.") &&
        validateField("cause_description", "cause-description-error", "Please enter a description.");
}

document.getElementById("submitApprovalButton").addEventListener("click", function () {
    if (validateStep3()) {
        document.getElementById("step-3").closest("form").submit();
    }
});
</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



  <script>
    // Copy selected category to readonly input field
    function copySelection() {
        const selectedText = document.getElementById("category").options[document.getElementById("category").selectedIndex].text;
        document.getElementById("form_selected_text").value = selectedText;
    }

    // Open a modal by ID
    function openModal(modalId) {
        document.getElementById(modalId).style.display = "block";
    }

    // Close a modal by ID
    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
    }

    // Event listener for opening OTP modal
    document.getElementById("openModalBtn1").addEventListener("click", function () {
        openModal("myModal1");
    });

    // Close modal on 'x' button click
    document.querySelectorAll(".close").forEach(function (closeBtn) {
        closeBtn.addEventListener("click", function () {
            closeModal(closeBtn.closest('.modal').id);
        });
    });

    // OTP input field navigation
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

    // Verify OTP and navigate to Step 2 if valid
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

    // Resend OTP functionality
    document.querySelector(".resend a").addEventListener("click", function (event) {
        event.preventDefault();
        alert("OTP Resend functionality goes here.");
    });

    // Function to navigate between form steps
    const navigateToFormStep = (stepNumber) => {
        document.querySelectorAll(".form-step").forEach((step) => {
            step.classList.add("d-none");
        });
        document.getElementById("step-" + stepNumber).classList.remove("d-none");

        // Update progress bar for active step
        document.querySelectorAll(".form-stepper-list").forEach((stepElem, index) => {
            if (index < stepNumber) {
                stepElem.classList.remove("form-stepper-unfinished");
                stepElem.classList.add("form-stepper-active");
            } else {
                stepElem.classList.remove("form-stepper-active");
                stepElem.classList.add("form-stepper-unfinished");
            }
        });
    };

    // Navigate form steps on button click
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
            document.querySelector("#individualform").submit(); // Proceed with form submission
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


