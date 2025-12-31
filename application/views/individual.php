<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fundraiser</title>


      <!--G4 (google analytics) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JF0Q147F1Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JF0Q147F1Y');
</script>
  <!-- <link href="<?php echo base_url(); ?>assets/img/LOGO_KSV.png"  rel="icon" /> -->
   <link href="<?php echo base_url(); ?>assets/img/kanavulogoo.jpg"  rel="icon"/>
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <!-- <link href="bootstrap.min.css" rel="stylesheet" />
         <script src="bootstrap.bundle.min.js"></script> -->
  <!-- Bootrap for the demo page -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
 <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <!--wizard-->
  <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet"
    type="text/css" />
  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
  body {
    font-family: 'sen', sans-serif;
  }
  html, body {
  overflow: auto; /* Ensure scrolling is enabled */
  height: 100%; /* Make sure the body occupies full height */
}
  .logo {
    margin-left: 65px;
    font-weight: bolder;
    font-size: x-large;
  }

  /* login_button */
  .login-button {
    background-color: #ed3136;
    color: white;
    font-size: 16px;
    padding: 8px 20px;
    border-radius: 25px;
    text-decoration: none;
    transition: 0.3s background-color;
  }

  /* start a kanavu button */
  .startkanavu-button {
    border: 1px solid #ed3136;
    color: #ed3136;
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

  /* .btn {
    color: #EB2D32 !important;
    font-weight: bolder !important;
    border-radius: 50px !important;
    border: 1px solid red !important;
  }

  .btn:hover {
    background-color: red !important;
    color: white !important;
  } */

  .btn-1 {
    margin-left: 260px !important;
    background-color: #ed3136 !important;
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
    /* color: black !important; */
  }

  .dropdown-toggle:hover,
  .navbar:hover,
  .navbar-brand:hover,
  .dropdown-item:hover {
    color: #ed3136;
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
    background-color: #ed3136;
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
    margin-top: 0px;
    margin-bottom: 0px;
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
  width: 100%;
  overflow: auto; /* Ensure inner sections are scrollable */
  /* height: 100vh; Viewport height to allow scrolling */
  /* min-height: 100vh; Ensures the section takes the full height of the viewport */
  padding: 20px; /* Adds padding for better appearance */
  box-sizing: border-box; /* Includes padding in width/height calculations */
  display: flex; /* Ensure layout flexibility */
  flex-direction: column; /* Columnar layout */
}

.col-12 {
  width: 100%;
  max-width: 100%;
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
    background-color: #ed3136 !important;
    color: #fff;
  }

  .form-stepper .form-stepper-active .label {
    color: #4361ee !important;
  }

  .form-stepper .form-stepper-active .form-stepper-circle:hover {
    background-color: #ed3136 !important;
    color: #fff !important;
  }

  .form-stepper .form-stepper-unfinished .form-stepper-circle {
    background-color: #D9D9D9;
    color: black !important;
  }

  .form-stepper .form-stepper-completed .form-stepper-circle {
    background-color: #ed3136 !important;
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
    /* width: 700px; */
    height: fit-content;
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
    background-color: #ed3136;
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
    color: #ed3136;
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

  .active-individual{
    color:red !important;
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
    background-color: #ed3136 !important;
    /* Force red background */
    border-color: #ed3136 !important;
    /* Force red border */
  }

  .error-text {
    font-size: 0.875em;
    color: #ed3136;
  }

  .btn.no-hover {
    background-color: #ed3136 !important;
    /* Force red background */
    color: white !important;
    /* Force white text */
    border-color: #ed3136 !important;
    /* Match border color */
  }

  .btn.no-hover:hover,
  .btn.no-hover:focus,
  .btn.no-hover:active {
    background-color: #ed3136 !important;
    /* Force red background on hover, focus, and active */
    color: white !important;
    /* Force white text on hover, focus, and active */
    border-color: #ed3136 !important;
    /* Match border color on hover, focus, and active */
  }

  /* Ensure the dropdown menu is fully visible on smaller screens */
  @media (max-width: 768px) {
    #userProfile .dropdown-menu {
      right: 0 !important;
      /* Align the dropdown to the right edge */
      left: auto !important;
      /* Override default left alignment */
      min-width: 150px;
      /* Adjust the width as needed */
    }

    #userProfile img {
      width: 25px;
      /* Slightly smaller profile image for mobile */
      height: 25px;
    }

    #userProfile .dropdown-item {
      text-align: center;
      /* Center-align items for better UX */
    }
  }
  .navbar-brand img {
    transition: transform 0.3s ease-in-out;
}

.navbar-brand img:hover {
    transform: scale(1.08); /* Slight zoom-in */
}
</style>

<body>
  <nav id="header" class="navbar navbar-expand-lg bg-white py-4 fixed-top">
    
  </nav>

  <!-- <div class="donate_img mt-5 pt-4 text-center">
    <img src="<?= base_url('assets/img/fundimage.jpg') ?>"
      style="height: 400px;" class="img-fluid">
  </div>
 -->
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
  <div class="container-fluid box mt-5 py-3">
    <div class="row box1 mt-auto py-3">
      <div class="container-fluid mt-5">
        <div class="row align-items-center w-100">
          <!-- Left Column for Image and Text -->
          <div class="col-md-6 d-flex justify-content-center">
            <div class="text-center">
              <h3 class="mt-4 mb-3"><strong>START YOUR FUNDRAISER</strong></h3>
              <h6>"We make a living by what we get, but we make a life by what we give"</h6>
              <img src="<?php echo base_url('/assets/img/startyourfund_1.png'); ?>"
                alt="no img"
                class="img-fluid"
                style="max-width: 99%; height: 85%;">
            </div>
          </div>
          <!-- Right Column for Form -->
          <div class="col-md-6 mt-4">
            <div id="multi-step-form-container" class="mt-auto py-2 w-100 p-0">
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

              <form id="causeStep1" name="causeStep1" method="post" action="<?= base_url('kanavuhelp/insertUser') ?>" enctype="multipart/form-data">
                <!-- Step 1 Content -->
                 <?php 
                   if(!empty($mailstatus)){
                     echo "<div class=alert alert-danger>
                                OTP sent failed. Please try agin. 
                           </div>";
                   }
                   $this->session->unset_userdata("mailstatus");
                 ?>

                  <?php 
                   if($this->session->flashdata("fileuploadfailed")){
                     echo "<script>
                     console.log(hi');
                                window.alert(File not upload. Please try again.) 
                           </script>";
                   }
                 ?>
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
                    <label for="created_by" class="col-sm-4 col-form-label">Created by:<span class="text-danger">*</span></label>
                    <div class="col-sm-8">


                      
                      <input type="text" id="created_by" name="created_by" class="form-control my-2" placeholder="Created by" required>
                      <span id="created_by_error" class="text-danger"></span>
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
                    <button type="submit" id="continueToStep2" class="btn btn-danger no-hover">Continue</button>
                  </div>
                </section>
              </form>

              <form id="individualform" name="individualform" method="post" action="<?= base_url('kanavuhelp/individualform_data') ?>" enctype="multipart/form-data">
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
                  <input hidden type="text" name="step" value="steptwo">
                  <div class="row my-3">
                    <label for="form_selected_text" class="col-md-4 col-form-label">I am raising fund for: </label>
                    <div class="col-md-8">
                      <input type="text" id="form_selected_text" class="form-control my-2" placeholder="I am raising fund for: <?= $this->session->userdata('form_selected_text'); ?>" readonly>
                    </div>
                  </div>

                  <script>
                    function copySelection() {
                      const selectedCategory = document.getElementById("category").value;
                      const formSelectedText = document.getElementById("form_selected_text");

                      // If a valid category is selected, copy it to the input field
                      if (selectedCategory) {
                        formSelectedText.value = selectedCategory;
                      } else {
                        formSelectedText.value = ""; // Clear the input if no category is selected
                      }
                    }
                  </script>
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
                <section id="step-3" style="overflow:auto;" class="form-step col-12 d-none">
                  <h2>Elaborate Cause Details</h2>
                 
                  <!-- Cover Image Field -->
                  <div class="row my-3">
                    <label for="cover_image" class="col-md-4 col-form-label">Cover Image:<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                      <input type="file" id="cover_image" name="cover_image" accept="image/jpg,/image/jpeg, image/png, image/svg+xml" class="form-control my-2" onchange="validateCoverImage(this)" required>
                      <p id="cover-image-error" class="text-danger"></p>
                      <small class="text-muted">
                        Image dimensions up to 600x400 px, and formats: JPG, JPEG, PNG, SVG.
                      </small> 
                    </div>
                  </div>

                  <div class="row my-3">
                    <label for="cover_image_one" class="col-md-4 col-form-label">Cause Image One:</label>
                    <div class="col-md-8">
                      <input type="file" id="cover_image_one" name="document_one" accept="image/jpg,image/jpeg, image/png, image/svg+xml" class="form-control my-2" onchange="validateCoverImage(this)" required>
                      <p id="cover-image-error" class="text-danger"></p>
                      <small class="text-muted">
                        Image dimensions up to 600x400 px, and formats: JPG, JPEG, PNG, SVG.
                      </small> 
                    </div>
                  </div>

                  <div class="row my-3">
                    <label for="cover_image_two" class="col-md-4 col-form-label">Cause Image Two:</label>
                    <div class="col-md-8">
                      <input type="file" id="cover_image_two" name="document_two" accept="image/jpg,image/jpeg, image/png, image/svg+xml" class="form-control my-2" onchange="validateCoverImage(this)">
                      <p id="cover-image-error" class="text-danger"></p>
                      <small class="text-muted">
                        Image dimensions up to 600x400 px, and formats: JPG, JPEG, PNG, SVG.
                      </small> 
                    </div>
                  </div>

                  <div class="row my-3">
                    <label for="cover_image_three" class="col-md-4 col-form-label">Cause Image Three:</label>
                    <div class="col-md-8">
                      <input type="file" id="cover_image_three" name="document_three" accept="image/jpg,image/jpeg, image/png, image/svg+xml" class="form-control my-2" onchange="validateCoverImage(this)">
                      <p id="cover-image-error" class="text-danger"></p>
                      <small class="text-muted">
                        Image dimensions up to 600x400 px, and formats: JPG, JPEG, PNG, SVG.
                      </small> 
                     
                    </div>
                  </div>

                  <div class="row my-3">
                    <label for="cover_image_four" class="col-md-4 col-form-label">Cause Image Four:</label>
                    <div class="col-md-8">
                      <input type="file" id="cover_image_four" name="document_four" accept="image/jpg,image/jpeg, image/png, image/svg+xml" class="form-control my-2" onchange="validateCoverImage(this)">
                      <p id="cover-image-error" class="text-danger"></p>
                      <small class="text-muted">
                        Image dimensions up to 600x400 px, and formats: JPG, JPEG, PNG, SVG.
                      </small> 
                     
                    </div>
                  </div>

                  <div class="row my-3">
                    <label for="cover_image_five" class="col-md-4 col-form-label">Cause Image Five:</label>
                    <div class="col-md-8">
                      <input type="file" id="cover_image_five" name="document_five" accept="image/jpg,image/jpeg, image/png, image/svg+xml" class="form-control my-2" onchange="validateCoverImage(this)">
                      <p id="cover-image-error" class="text-danger"></p>
                      <small class="text-muted">
                        Image dimensions up to 600x400 px, and formats: JPG, JPEG, PNG, SVG.
                      </small> 
                    </div>
                  </div>

                  <div class="row my-3">
                    <label for="cause_video" class="col-md-4 col-form-label">Video Document Tamil:</label>
                    <div class="col-md-8">
                      <input type="file" onchange="validateCausevideo(this)" id="cause_video" name="cause_video" accept="video/mp4" class="form-control my-2">
                      <p id="cover-image-error" class="text-danger"></p>
                      <small class="text-muted">
                       Upload only mp4 format.
                      </small> 
                    </div>
                  </div>

                  <div class="row my-3">
                    <label for="cause_video_english" class="col-md-4 col-form-label">Video Document English:</label>
                    <div class="col-md-8">
                      <input type="file" onchange="validateCausevideo(this)" id="cause_video" name="cause_video_english" accept="video/mp4" class="form-control my-2">
                      <p id="english_video_error" class="text-danger"></p>
                      <small class="text-muted">
                       Upload only mp4 format.
                      </small> 
                    </div>
                  </div>

                  <div class="row my-3">
                    <label for="cause_video__link_tamil" class="col-md-4 col-form-label">You Tube Link: <span class="text-danger">*</span> </label>
                    <div class="col-md-8">
                      <input type="text" onchange="validateEmbed(this)" id="cause_video_link" name="cause_embed_link_tamil" class="form-control my-2" required>
                      <p id="tamil_embed_error" class="text-danger"></p>
                    </div>
                  </div>

                  <div class="row my-3">
                    <label for="cause_video" class="col-md-4 col-form-label">Confirm You Tube Link: </label>
                    <div class="col-md-8">
                      <input type="text" onchange="validateEmbed(this)" id="cause_video" name="cause_embed_link_english" class="form-control my-2">
                      <p id="cover-image-error" class="text-danger"></p>
                    </div>
                  </div>

                  <!-- <div class="row my-3">
                    <small class="text-muted">"Please note, only up to 5 images can be uploaded at a time.</small>
                    <label for="cover_image" class="col-md-4 col-form-label">Additional Documents:<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                      <input type="file" id="cover_images" name="cover_images[]" accept="image/jpeg, image/png, image/svg+xml" class="form-control my-2" onchange="validateCoverImage(this)" multiple required>
                      <small class="text-muted">
                        Image dimensions up to 600x400 px, and formats: JPG, JPEG, PNG, SVG.
                      </small> 
                      <p id="cover-image-error" class="text-danger"></p>
                    </div>
                  </div>-->
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
                    <button type="submit" class="btn btn-success no-hover" id="submitApprovalButton">Submit for Approval</button>
                  </div>
                </section>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!----------------banner---------------------->
  <!-- <div class="donate_img mt-5 pt-4 text-center">
    <img src="<?= base_url('assets/img/fundimage.jpg') ?>"
      style="height: 400px;" class="img-fluid">
  </div> -->
  <!----------------banner-end--------------------->

<!----------------------------footer----------------------->
  <div id="footer">

  </div>
 <!--------------------------footer-end-------------------->

  <!-- Message Modal -->
  <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="messageModalLabel">Notification</h5>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <!-- Form starts here -->
        <div class="modal-body" id="messageModalBody">

        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-primary">Ok</button>
        </div> -->
      </div>
    </div>
  </div>

  <?php if ($this->session->flashdata('otp_sent')): ?>
    <script>
      // Automatically trigger the OTP modal when the page loads
      window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
          backdrop: 'static',
          keyboard: false
        });
        myModal.show();
      };
    </script>
    
  <?php endif; ?>

  <?php if($this->session->flashdata("fundraisinglive")): ?>
  <script>
      window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById('fundraisinglive'),{
          backdrop: 'static',
          keyboard: false
        });
        myModal.show();
      };
    </script>

<div id="fundraisinglive" class="modal fade show">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <span class="h5 text-danger">Sorry !<span class="text-success"></span></span> 
              <button data-bs-dismiss="modal" class="btn btn-close"></button>              
           </div>
           <div class="modal-body">
              <p class="text-muted">We regret to inform you that your previous fundraising effort is still incomplete. Please complete it to proceed further.</p>
           </div>
           <div class="p-3">
           <button style="width:fit-content;" data-bs-dismiss="modal" class="btn btn-danger">Ok</button>
           </div>
        </div>
    </div>
  </div>
  <?php endif; ?>

  <script>

    $.ajax({
      type:"get",
      url:"kanavuhelp/getHeader",
      success:(result)=>{
           document.getElementById("header").innerHTML = result;
           document.getElementById("individualpage").classList.add("text-danger","fw-bold");
      },
      error:(error)=>{
           document.getElementById("header").innerHTML = "";
      }
    }); 

    $.ajax({
      type:"get",
      url:"kanavuhelp/getFooter",
      success:(result)=>{
           document.getElementById("footer").innerHTML = result;
      },
      error:(error)=>{
           document.getElementById("footer").innerHTML = "";
      }
    }); 

    let headerheight = document.getElementById("header").getBoundingClientRect().height;
    let displayheight = window.innerHeight;
    document.getElementById("step-3").style.height = `${displayheight - headerheight}px`;
        
    document.addEventListener("DOMContentLoaded", function() {
      const otpModal = new bootstrap.Modal(document.getElementById("myModal"));
      const messageModal = new bootstrap.Modal(document.getElementById("messageModal"));

      // Function to show popup messages
      function showPopupMessage(message) {
        document.getElementById("messageModalBody").innerHTML = message;
        messageModal.show();
    }

    let steponeform = document.getElementById("causeStep1");

      steponeform.addEventListener("submit",(e)=>{
           if(!stepOnevalidation()){
            e.preventDefault()
           }
    })

      // Continue to Step 2
    document.getElementById("continueToStep2").addEventListener("click", () => {
        if (stepOnevalidation()) {
          sendOtp();
          otpModal.show();
        }
    }); 

    function stepOnevalidation(){
       let category = document.forms["causeStep1"]["category"].value.trim();
       let created_by = document.forms["causeStep1"]["created_by"].value.trim();
       let name = document.forms["causeStep1"]["name"].value.trim();
       let age = document.forms["causeStep1"]["age"].value.trim();
       let location = document.forms["causeStep1"]["location"].value.trim();
       let email = document.forms["causeStep1"]["email"].value.trim();
       let phone = document.forms["causeStep1"]["phone"].value.trim();
       const categoryerrorElement = document.getElementById("category-error");
       const createdbyerrorElement = document.getElementById("created_by_error");
       const nameerrorElement = document.getElementById("name-error");
       const ageerrorElement = document.getElementById("age-error");
       const locationerrorElement = document.getElementById("location-error");
       const emailerrorElement = document.getElementById("email-error");
       const phoneerrorElement = document.getElementById("phone-error");
       
       let validatename = /^([A-Za-z\s]{1,49})+$/;
       let validatelocation = /^(?![0-9]*$)[a-zA-Z0-9\s]+$/;
       let validateemail = /^([A-Za-z0-9._-])+\@([a-z])+\.([a-z])+$/;
       let validatephone = /^([0-9]{10})+$/;
       console.log((!validatephone.test(phone)))
       if(category == ""){
        return false;          
       }

       if(created_by == "" || !created_by.match(validatename)){
          createdbyerrorElement.textContent = "Name can only contain letters, spaces, and hyphens.";
          return false;
        }
        else{
          createdbyerrorElement.textContent = ""
        }
        
        if(name == "" || !name.match(validatename)){
          nameerrorElement.textContent = "Name can only contain letters, spaces, and hyphens.";
          return false;
        }
        else{
          nameerrorElement.textContent = ""
        }
        
        if(age == "" || age < 1 || age > 120){
          ageerrorElement.textContent = "Enter a valid age between 1 and 120.";
          return false;
        }
        else{
          ageerrorElement.textContent = "";
        }  

        if(location == "" || !location.match(validatelocation)){
          locationerrorElement.textContent = "Please enter a location in correct format.";
          return false;
        }
        
        else{
          locationerrorElement.textContent = ""
        }

        if(email == "" || !email.match(validateemail)){
          emailerrorElement.textContent = "Enter a valid email address.";
          return false;
        }
        else{
          emailerrorElement.textContent = "";
        }
        
        if(phone == "" || !phone.match(validatephone)){
          console.log("hi")
          phoneerrorElement.textContent = "Enter a valid 10-digit phone number.";
          return false;
        }
        else{
          phoneerrorElement.textContent = "";
        }
        return true;
       }
      
  document.getElementById('verifyOtpButton').addEventListener('click', function () {
  // Hide OTP Modal
  const otpModal = new bootstrap.Modal(document.getElementById('myModal'));
  otpModal.hide();

  // Hide Step 1 and Show Step 2
  document.getElementById('step-1').classList.add('d-none');
  const step2 = document.getElementById('step-2');
  step2.classList.remove('d-none');
  step2.classList.add('d-flex');

  // Reset body scroll
  document.body.style.overflow = 'auto';
});

      // Verify OTP
      document.getElementById("verifyOtpButton").addEventListener("click", () => {
        const otp = document.getElementById("otp").value.trim();
        
        $.ajax({
        type:"post",
        url:"kanavuhelp/verifyOtp",
        data:{"otp":otp},
        success:(result)=> {
          if(result.trim() == "true"){
          const myModalElement = document.getElementById('myModal');
          myModalElement.classList.remove('show');
          myModalElement.style.display = 'none';
          document.body.classList.remove('modal-open');
          document.querySelector('.modal-backdrop').remove();
          console.log("OTP verified and modal hidden.");
          showStep(2); // Move to the next step
          }
          else{
            setError("otp-error", "Invalid OTP. Please try again.");
          }
        },
        error:(error)=>{
           setError("Unexpected error occured. Please try again.");
        }
        }); 
        
      });

      // Continue to Step 3
      document.getElementById("continueToStep3").addEventListener("click", () => {
        if (validateStep2()) {
          showStep(3);
        } else {
          showPopupMessage("Please fill in all required fields correctly before continuing.");
        }
      });

      // Submit Approval Button
      document.getElementById("submitApprovalButton").addEventListener("click", function(event) {
        event.preventDefault();
        if (validateStep3()) {
          showPopupMessage("Thanks for raising a cause.");
          setTimeout(() => {
            document.getElementById("individualform").submit();
          }, 2000); // Wait for 2 seconds to show the message before submitting
        } else {
          showPopupMessage("Please fill in all required fields correctly before submitting.");
        }
      });

      // Show specific step
      function showStep(step) {
        document.querySelectorAll(".form-step").forEach(section => section.classList.add("d-none"));
        document.getElementById(`step-${step}`).classList.remove("d-none");
        updateStepper(step);
      }

      // Update stepper status
      function updateStepper(step) {
        const steppers = document.querySelectorAll(".form-stepper-list");
        steppers.forEach((stepper, index) => {
          const stepNum = index + 1;

          if (stepNum < step) {
            stepper.classList.remove("form-stepper-active", "form-stepper-unfinished");
            stepper.classList.add("form-stepper-completed");
          } else if (stepNum === step) {
            stepper.classList.remove("form-stepper-completed", "form-stepper-unfinished");
            stepper.classList.add("form-stepper-active");
          } else {
            stepper.classList.remove("form-stepper-active", "form-stepper-completed");
            stepper.classList.add("form-stepper-unfinished");
          }
        });
      }

      // Utility: Set error message
      function setError(id, message) {
        document.getElementById(id).textContent = message;
      }

      // OTP Sending Simulation
      function sendOtp() {
        const email = document.getElementById("email").value.trim();
        showPopupMessage(`
                    <span> An OTP has been sent to your email address ${email}. Kindly check your inbox </span>&nbsp;
                    <span class="spinner-border text-danger"></span>
                    `);
      }

      // Validation Handlers
      const validationHandlers = {
        category: validateCategory,
        created_by: validateCreatedby,
        name: validateName,
        age: validateAge,
        location: validateLocation,
        email: validateEmail,
        phone: validatePhone,
        amount: validateAmount,
        end_date: validateEndDate,
        cover_image: validateCoverImage,
        cause_heading: validateCauseTitle,
        cause_description: validateCauseDescription,
      };

      Object.keys(validationHandlers).forEach(fieldId => {
        const field = document.getElementById(fieldId);
        if (field) {
          field.addEventListener("input", validationHandlers[fieldId]);
          field.addEventListener("blur", validationHandlers[fieldId]);
        }
      });

      function validateStep1() {
        if(validateCategory() && validateName() && validateLocation() && validateAge() && validateEmail() && validatePhone()){
          return true;
        }
        else{
          return false;
        }
      }

      function validateStep2() {
        return validateAmount() & validateEndDate();
      }

      function validateStep3() {
        return validateCauseTitle() & validateCauseDescription();
      }

      // Individual field validation functions
      function validateCategory() {
        const category = document.getElementById("category").value;
        const errorElement = document.getElementById("category-error");
        if (!category) {
          errorElement.textContent = "Please select a category.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateName() {
        const nameInput = document.getElementById("name").value.trim();
        const errorElement = document.getElementById("name-error");
        const nameRegex = /^([A-Za-z\s'-]{1,49})+$/;
        if (!nameInput) {
          errorElement.textContent = "Enter your name.";
          return false;
        } else{
            if(!nameInput.match(nameRegex)){
            errorElement.textContent = "Name can only contain letters, spaces, and hyphens.";
            return false;
            }
            else{
            errorElement.textContent = "";
            return true;
            }
        }
        }

        function validateEmbed() {

        }

        function validateCreatedby() {
        const nameInput = document.getElementById("created_by").value.trim();
        const errorElement = document.getElementById("created_by_error");
        const nameRegex = /^([A-Za-z\s'-]{1,49})+$/;
        if (!nameInput) {
          errorElement.textContent = "Enter your name.";
          return false;
        } else{
            if(!nameInput.match(nameRegex)){
            errorElement.textContent = "Name can only contain letters, spaces, and hyphens.";
            return false;
            }
            else{
            errorElement.textContent = "";
            return true;
            }
        }
        }   

      function validateAge() {
        const age = parseInt(document.getElementById("age").value, 10);
        const errorElement = document.getElementById("age-error");

        if (isNaN(age) || age < 1 || age > 120) {
          errorElement.textContent = "Enter a valid age between 1 and 120.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateLocation() {
        const location = document.getElementById("location").value;
        const errorElement = document.getElementById("location-error");
        if (!location) {
          errorElement.textContent = "Please select a location.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateEmail() {
        const email = document.getElementById("email").value.trim();
        const errorElement = document.getElementById("email-error");
        const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!regex.test(email)) {
          errorElement.textContent = "Enter a valid email address.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validatePhone() {
        const phone = document.getElementById("phone").value.trim();
        const errorElement = document.getElementById("phone-error");
        const regex = /^[0-9]{10}$/;

        if (!regex.test(phone)) {
          errorElement.textContent = "Enter a valid 10-digit phone number.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateAmount() {
        const amount = document.getElementById("amount").value.trim();
        const errorElement = document.getElementById("amount-error");

        if (!amount || isNaN(amount) || parseFloat(amount) < 1000 || parseFloat(amount) > 500000) {
          errorElement.textContent = "Amount must be between 1000 to 500000.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateEndDate() {
        const endDate = document.getElementById("end_date").value;
        const errorElement = document.getElementById("end-date-error");

        if (!endDate) {
          errorElement.textContent = "Select an end date.";
          return false;
        }

        const selectedDate = new Date(endDate);
        const today = new Date();
        today.setHours(0, 0, 0, 0);

        if (selectedDate < today) {
          errorElement.textContent = "The date must be today or a future date.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateCauseTitle() {
        const heading = document.getElementById("cause_heading").value.trim();
        const errorElement = document.getElementById("cause-heading-error");

        if (!heading) {
          errorElement.textContent = "Cause title is required.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateCauseDescription() {
        const description = document.getElementById("cause_description").value.trim();
        const errorElement = document.getElementById("cause-description-error");

        if (!description) {
          errorElement.textContent = "Cause description is required.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }
    });

    function validateCoverImage(file) {
        
        // const errorElement = document.getElementById("cover-image-error");
        // let files = document.getElementById("cover_images").files
        
       /*  if(files.length > 5){
          errorElement.textContent = "Please upload only 5 images to ensure a smooth and efficient process!";
          return false;
        } */
      /*  let imagesize = 2000000;
let uploadedimagesize = file.files[0].size;

// Check if image size is greater than 2MB
if (uploadedimagesize > imagesize) {
    file.nextElementSibling.textContent = "Image size should be below 2MB";
    file.value = "";  // Clear the file input
    return false;
} else {
    file.nextElementSibling.textContent = "";
}

// Check if a file is selected
if (!file) {
    file.nextElementSibling.textContent = "Upload a cover image.";
    return false;
}

// Validate image formats (JPG, JPEG, PNG only)
 // Only show error message if format is not valid
if (!["image/jpeg", "image/jpg", "image/png"].includes(file.type)) {
    file.nextElementSibling.textContent = "Only JPG, JPEG, and PNG formats are allowed.";
    return false;
} 
console.log(file.type);  // Check what the MIME type is being returned

if (!["image/jpeg", "image/png"].includes(file.type) && !file.type.endsWith("/jpg")) {
    file.nextElementSibling.textContent = "Only JPG, JPEG, and PNG formats are allowed.";
    return false;
}


return true;*/

let filereader = new FileReader();
    let fileuploadread = filereader.readAsDataURL(file.files[0]);
    let imagesize = 2000000;
    let uploadedimagesize = file.files[0].size;

// Check for image size greater than 2MB
    if(uploadedimagesize > imagesize){
        file.nextElementSibling.textContent = "Image size should be below 2MB";
        filereader.onloadstart = () => {
        file.value = "";  // Clear the file input
      return false;
    }
    return false;
} else {
    file.nextElementSibling.textContent = "";
}

// Check for supported image formats (JPG, JPEG, PNG)
if (!["image/jpeg", "image/jpg", "image/png"].includes(file.files[0].type)) {
    file.nextElementSibling.textContent = "Only JPG, JPEG, and PNG formats are allowed.";
    filereader.onloadstart = () => {
        file.value = "";  // Clear the file input if format is not supported
        return false;
    }
    return false;
}

return true;




      }

      function validateCausevideo(file){
        let videosize = 128000000;  // Max size set to 128MB (which is 128,000,000 bytes)
let uploadedvideosize = file.files[0].size;

// Check for video size greater than 39MB (128MB as in your code)
if (uploadedvideosize > videosize) {
    file.nextElementSibling.textContent = "Video size should be below 39MB";  // Show size error
    file.value = "";  // Clear the file input
    return false;
} else {
    file.nextElementSibling.textContent = "";
}

// Check for supported video format (only mp4 allowed)
if (file.files[0].type !== "video/mp4") {
    file.nextElementSibling.textContent = "Only MP4 video format is allowed.";  // Show format error
    file.value = "";  // Clear the file input if format is not supported
    return false;
}

return true;


      }
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>