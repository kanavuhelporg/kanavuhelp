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
    #details{
      display:block-inline;
    }
    #location{
      margin-left:12%;
    }
    #loc_icon{
      margin-left:25%;
      color:#E01A2B;
      font-size:26px;
    }
    #phone{
      margin-left:7%
    }
    #phone_icon{
      margin-left:17%;
      color:#E01A2B;
      font-size:26px;
    }
    #email{
      margin-left:-3%;
    }
    #envelope_icon{
      margin-left:35%;
      color:#E01A2B;
      font-size:26px;
    }
    .line{
      margin-left:35%;
      transform:translate(20px,-40px);
    }
    
    input[type]{
      width:50%;
    }
    .area{
      width:50%;
    }
    .form1{
      margin-left:17%;
    }
    .msg_btn{
      margin-left:15%;
    }
    @media (min-width: 767px) and (max-width: 990px) {
      .line{
      margin-left:39%;
      transform:translate(-70px,-50px);
    }
    .msg_btn{
      margin-left:7%;
    }
}
@media (max-width: 767px) {

  /* carousel */
  .line{
      margin-left:30%;
      transform:translate(-70px,-50px);
    }
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
    #details{
      display:block;
    }
    #location{
      margin-left:17%;
    }
    #loc_icon{
      margin-left:19%;
      color:#E01A2B;
      font-size:26px;
    }
    #phone{
      margin-left:22%
    }
    #phone_icon{
      margin-left:13%;
      color:#E01A2B;
      font-size:26px;
    }
    #email{
      margin-left:15%;
    }
    #envelope_icon{
      margin-left:22%;
      color:#E01A2B;
      font-size:26px;
    }
    .form1{
      margin-left:3%;
    }
    input[type]{
      width:90%;
    }
    .area{
      width:90%;
    }
    .msg_btn{
      margin-left:20%;
    }
    }
    </style>
    </head>
<body >
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
              <a class="nav-link mx-lg-2" href="<?= base_url('/donate') ?>" >Donate</a>
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
              <a class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>"style="color:rgba(235, 45, 50, 1)">Contact Us</a>
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
    <img src="<?=base_url('assets/img/contact_us.png')?>" width="100%">
  </div>
  
  <div class="row text-center mt-5 mb-5" >
    <div class="col-12 col-md-4 mt-3" >
        <i class="fa-solid fa-location-dot fs-4" style="color:#EB2D32;" ></i>
        <br><strong>The Kanavu Startup Village</strong>
        <br><strong>Annamalaikottai, Sivagiri</strong>
    </div>
    
    <div class="col-12 col-md-4 mt-3" >
        <i class="fa-solid fa-phone-volume fs-4" style="color:#EB2D32;"></i>
        <br><strong>+91 93792 48387</strong>
    </div>
    
    <div class="col-12 col-md-4 mt-3" >
        <i class="fa-regular fa-envelope fs-4"  style="color:#EB2D32;"></i>
        <br><strong>karthi.easwaramoorthy@gmail.com</strong>
    </div>
</div>




  <section class="text-gray-600 body-font">
    <div class="container px-5 py-6 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/7 md:w-1/2 sm:w-1/1 xsm:w-1/1  bg-gray-100 rounded-lg p-8 flex flex-col mx-auto mt-10">
      <br><br>  
      <h4 class="text-gray-900 text-lg font-medium title-font mb-5 text-center"><strong>GET IN TOUCH WITH US</strong>
        </h4>
        <div class="flex justify-center" >
          <img class=" max-w-screen-md line" src="<?php echo base_url('/assets/img/underline.svg'); ?>" alt="no image">
        </div>
        <h3 class="text-base text-black-500 text-center w-auto"><strong>Submit your inquiry, and we'll respond to you <br>as
            soon as possible!</strong></h3>
            <div class="relative mb-4 mt-5 form1">
  <form name="contactus" class="form1" id="myForm" onsubmit="return contact_us()" method="post" action="<?= base_url('kanavuhelp/contact_us') ?>">

    <!-- Name Field -->
    <div class="mb-3">
  
  
  
    <input type="text" class="form-control" name="full-name" id="exampleFormControlInput1" placeholder="Name*" required>
    <p id="demo" style="color:red"></p>
  </div>
<div class="mb-3">
  
  <input type="email" class="form-control" name="email" id="exampleFormControlInput2" placeholder="Mail ID*" required>
  <p id="demo1" style="color:red"></p>
</div>
<div class="mb-3">
  
  <input type="tel" class="form-control" name="phone" id="exampleFormControlInput3" placeholder="Phone Number*" required>
  <p id="demo2" style="color:red"></p>
</div>
<div class="mb-3">
  
  <textarea class="form-control area" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Message*" required></textarea>
  <p id="demo3" style="color:red"></p>
</div>
<button type="submit" class="btn btn-primary btn-lg msg_btn" style=" background-color:#E01A2B;border:none;border-radius:25px;font-size:15px;padding:12px">Send Us Message</button>
  </form>
  
</div>

  </section>
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
  <script>
  function contact_us(){
     // Get values from form inputs
     const name = document.getElementById("exampleFormControlInput1").value;
            const email = document.getElementById("exampleFormControlInput2").value;
            const phone = document.getElementById("exampleFormControlInput3").value;
            const message = document.getElementById("exampleFormControlTextarea1").value;

const error_message1=document.getElementById("demo");
const error_message2=document.getElementById("demo1");
const error_message3=document.getElementById("demo2");
const error_message4=document.getElementById("demo3");
error_message1.innerHTML="";
error_message2.innerHTML="";
error_message3.innerHTML="";
error_message4.innerHTML="";
            // Regular expressions for validation
            const nameRegex = /^[A-Za-z\s]+$/; // Allow only alphabets and spaces
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple email format
            const phoneRegex = /^\d{10}$/; // Phone number with 10 digits

            // Validate name
            if (name.length < 3 || (!nameRegex.test(name))) {
                error_message1.innerHTML+="Name must have atleast 3 characters <br> Only alphabets and spaces are allowed.";
                return false;
            }

            // Validate email
            if (!emailRegex.test(email)) {
                 error_message2.innerHTML+="Please enter a valid email address.";
                return false;
            }

            // Validate phone number
            if (!phoneRegex.test(phone)) {
                 error_message3.innerHTML+="Please enter a valid 10-digit phone number.";
                return false;
            }
            if(message.length<10)
            {
              error_message4.innerHTML+="Comments must be minimum of 10 characters";
              return false;
            }
            // If all fields are valid
            
            return true;
        
  }  
  </script>
  </body>
    </html>
    