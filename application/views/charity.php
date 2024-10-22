<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Charity</title>
      <link rel="stylesheet" href="style.css" />
      <!-- <link href="bootstrap.min.css" rel="stylesheet" />
         <script src="bootstrap.bundle.min.js"></script> -->
      <!-- Bootrap for the demo page -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!--wizard-->
      <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
   </head>
   <style>

      html, body {
    font-family: 'sen', sans-serif;
    height: 100%;
    margin: auto;
    padding: 0;
  }
  .wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.footer-container {
    margin-top: auto;
}
#footer {
    position: relative;
    bottom: 0;
    width: 100%;
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
    .navbar-toggler {
    padding: 0.25rem 0.75rem; /* Adjust vertical and horizontal padding */
    font-size: 1.25rem; /* Adjust font size */
    line-height: 1;
    color: #fff; /* White color for the toggler icon */
    background-color: transparent; /* No background color */
    border: 1px solid #41464b4f; /* Semi-transparent white border */
    border-radius: 0.25rem; /* Slightly rounded corners */
    transition: all 0.3s ease; /* Smooth transition for hover and focus effects */
}

    .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  padding: (1rem) var(1rem);
}
  #navbarscroll{
        margin-top:17px;
        margin-bottom:10px;
        margin-left:70px;
  }
  .btn {
      color: #EB2D32!important;
      font-weight: bolder !important;
      border-radius: 50px !important;
      border:1px solid red !important;
      
    }
    .btn:hover {
      background-color: #EB2D32 !important;
      color: white !important;
    }
    .btn-1 {
      margin-left: 260px !important;
      background-color: #EB2D32 !important;
      color: white !important;
      width:100px;
      height:45px;
    }
    .btn-2{
      height:45px;
    }
    .dropdown-toggle {
      font-size: 18px;
      color: black;
    }
    .navbar-brand {
      font-size: 16px;
    }
    .nav-item a{
      color:black !important;
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
      left:0;
      right:0;
      background-color: #EB2D32;
      margin-top: 88px;
      color: #f0f0f0;
    }

    .footer1 {
      text-align: center;
      padding: 10px;
      margin-left: 10px;
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
.footer-lable {
    color: white;
    text-decoration: none;
    padding-right: 20px;
    padding-left: 20px;
  } 

  .lable {
    border-right: 3px solid #fff;
  }

@media (min-width: 993px) {
   .img-fluid {
      margin-top:50px;   
      width: 100%;
      height:100%;
    }
   }
@media (min-width: 769px) and (max-width: 992px) {
   .img-fluid {
      margin-top:50px;   
      width: 100%;
      height:100%;
    }
   
.img1{
  display:none;
}
.footimg{
      margin-left:30%;

    }
/* .footing {
      margin-left: 50%;
      padding: 0px;
      height:12%;
    } */
}

@media (min-width: 577px) and (max-width: 768px) {
   .img-fluid {
      margin-top:40px;   
      width: 100%;
      height:100%;
    }
    .footimg {
     
      padding: 0px;
      height:12%;
    }
    .img1{
  display:none;
}
.footimg {
      margin-left:16%;}
}

@media(max-width:576px) {
   .logo{
     margin-left:10px;
     }
     .btn-1, .btn-2 {
    display: inline-block;
    margin-right: 10px;
    }
    .img-fluid {
      margin-top:95px;   
      width: 100%;
      height:100%;
    }
    .footimg {
      
      padding: 0px;
      height:8%;
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
    .mm{
      margin-top:10px;
      width:100%;
    }
    .box, .box1{
      margin-top:10px;

    }
/* .ff{
   margin-top:200px;
} */
.img1{
  display:none;
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
    font-size:20px;
   
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
    border: 1px solid rgba(0, 0, 0, 0.1);
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
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
ul.form-stepper > li:not(:last-of-type) {
    margin-bottom: 0.625rem;
    -webkit-transition: margin-bottom 0.4s;
    /* -o-transition: margin-bottom 0.4s;
    transition: margin-bottom 0.4s; */
}
.form-stepper-horizontal > li:not(:last-of-type) {
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
    color:939292 !important;
}
.form-stepper .form-stepper-completed .form-stepper-circle {
    background-color: #E01A2B !important;
    color: #fff;
}
.form-stepper .form-stepper-completed .label {
    
    color: #0e9594 !important;
}
.form-stepper .form-stepper-completed .form-stepper-circle:hover {
    background-color:E01A2B !important;
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
body #multi-step-form-container{
    width: 700px;
    height:630px;
    /* margin-bottom: 50px ; */
    padding: 20px;
    border: none;
    background-color: white;
    float:right;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
    border-radius: 10px;
    margin-left: 100px;
  }
  body label {
    display: block;
    margin-bottom: 8px;
    border-color:#E9E3E3;
  }
  body input, body select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }
  input{
    border:2px solid #E9E3E3;
    border-radius:10px;
  }
  textarea{
    border:2px solid #E9E3E3;
    border-radius:10px;
  }
  body button {
    background-color:#E01A2B;
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
    background-color:#F8F8F8;
  }
  
  .file-upload-input {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: none;
    background-color: transparent;
    outline: none;
  }
  .login_btn{
    margin-right: 20px;
  }
  .btn-red {
    color: white !important; /* Force white text */
    background-color: red !important; /* Force red background */
    border-color: red !important; /* Force red border */
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
      class="inline-flex items-center bg-gray-100 border-red-500 py-2 px-6 focus:outline-none hover:text-red-200 rounded-full text-base p-4 mt-4 md:mt-0 data"
      onclick="window.location.href='<?= base_url('/charity') ?>'">
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
                            <li class="form-stepper-unfinished text-center form-stepper-list" step="4">
                                <a class="mx-2">
                                    <span class="form-stepper-circle text-muted">
                                        <span>4</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- Step Wise Form Content -->
                        <form id="charityform" name="charityform" onsubmit="return charity()" method="post" action="<?= base_url('kanavuhelp/charityform_data') ?>" enctype="multipart/form-data" method="POST" class="row row-cols-1">
                            <!-- Step 1 Content -->
                            <section id="step-1" class="form-step" style="border:none;">
                                <p class="font-normal"><b>TELL US ABOUT YOUR FUNDRAISER</b></p>
                                <h6 class="font-normal">RAISING FUNDS FOR NGO/CHARITY PURPOSE</h6>

                                <!-- Step 1 input fields -->
                                <div class="col-md-12 my-3">
                                    <label for="amount"></label>
                                    <input type="number" id="amount" name="amount" placeholder="Amount" required>

                                    <label for="name"></label>
                                    <input type="text" id="title" name="title" placeholder="Fundraiser Title*" required>

                                    <label for="ngo"></label>
                                    <input type="text" id="ngo" name="ngo" placeholder="NGO Name*" required>

                                    <label for="education"></label>
                                    <input type="text" id="education" name="education" placeholder="Your Education Qualification*" required>

                                    <label for="employment"></label>
                                    <input type="text" id="employment" name="employment" placeholder="Your Employment Status*" required>

                                    <label for="aboutus"></label>
                                    <input type="text" id="aboutus" name="aboutus" placeholder="How did you hear about kanavu.help *">
                                </div>
                                <div class="mt-3 text-center">
                                    <button class="btn text-red-500 btn-navigate-form-step" type="button" step_number="2">Continue</button>
                                </div>
                            </section>
                            <!-- Step 2 Content, default hidden on page load. -->
                            <section id="step-2" class="form-step d-none" style="border:none;">
                                <p class="font-normal"><b>FUNDRAISER DETAILS</b></p>
                                <!-- Step 2 input fields -->
                                <div class="col-md-12 my-3">
                                    <div class="file-upload-container">
                                        <div class="container-fluid">
                                            <div class="form-group row">
                                                <label for="file" class="col-form-label col-12 col-sm-4 text-sm-right">Add Fundraiser Image/Video</label>
                                                <div class="col-12 col-sm-8">
                                                    <input type="file" class="form-control-file" id="file" name="file" accept="image/*,video/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div><br><br>
                                    <label for="city"></label>
                                    <input type="text" id="city" name="city" placeholder="City*" required>
                                  </div>
                                <div class="mt-3 d-flex justify-content-center">
                                    <button class="btn text-red-500 btn-navigate-form-step mx-2" type="button" step_number="1" style="width: 100px;">Back</button>
                                    <button class="btn text-red-500 btn-navigate-form-step mx-2" type="button" step_number="3">Continue</button>
                                </div>
                            </section>
                            <!-- Step 3 Content, default hidden on page load. -->
                            <section id="step-3" class="form-step d-none" style="border:none;">
                                <p class="font-normal"><b>TELL THE STORY WHY YOU ARE RUNNING A FUNDRAISER</b></p>
                                <!-- Step 3 input fields -->
                                <div class="container-fluid">
                                    <div class="form-group row">
                                        <!-- Description Textarea -->
                                        <div class="col-12 my-3">
                                            <label for="description">Description</label>
                                            <textarea id="description" name="description" class="form-control" rows="6" placeholder="Enter description here"></textarea>
                                        </div>

                                        <!-- Checkbox with Privacy Policy -->
                                        <div class="col-12 my-3">
                                            <div class="form-check">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    By clicking submit button you agree to our <u>privacy policy and terms and conditions</u>.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 d-flex justify-content-center">
                                    <button class="btn text-red-500 btn-navigate-form-step mx-2" type="button" step_number="2" style="width: 100px;">Back</button>
                                    <button class="btn text-red-500 submit-btn mx-2" type="submit">Submit for Approval</button>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
<script>
   /**
 * Define a function to navigate betweens form steps.
 * It accepts one parameter. That is - step number.
 */
const navigateToFormStep = (stepNumber) => {
    /**
     * Hide all form steps.
     */
    document.querySelectorAll(".form-step").forEach((formStepElement) => {
        formStepElement.classList.add("d-none");
    });
    /**
     * Mark all form steps as unfinished.
     */
    document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
        formStepHeader.classList.add("form-stepper-unfinished");
        formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
    });
    /**
     * Show the current form step (as passed to the function).
     */
    document.querySelector("#step-" + stepNumber).classList.remove("d-none");
    /**
     * Select the form step circle (progress bar).
     */
    const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
    /**
     * Mark the current form step as active.
     */
    formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
    formStepCircle.classList.add("form-stepper-active");
    /**
     * Loop through each form step circles.
     * This loop will continue up to the current step number.
     * Example: If the current step is 3,
     * then the loop will perform operations for step 1 and 2.
     */
    for (let index = 0; index < stepNumber; index++) {
        /**
         * Select the form step circle (progress bar).
         */
        const formStepCircle = document.querySelector('li[step="' + index + '"]');
        /**
         * Check if the element exist. If yes, then proceed.
         */
        if (formStepCircle) {
            /**
             * Mark the form step as completed.
             */
            formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
            formStepCircle.classList.add("form-stepper-completed");
        }
    }
};
/**
 * Select all form navigation buttons, and loop through them.
 */
document.querySelectorAll(".btn-navigate-form-step").forEach((formNavigationBtn) => {
    /**
     * Add a click event listener to the button.
     */
    formNavigationBtn.addEventListener("click", () => {
        /**
         * Get the value of the step.
         */
        const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
        /**
         * Call the function to navigate to the target form step.
         */
        navigateToFormStep(stepNumber);
    });
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


