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
      left:0;
      right:0;
    }
/* carousel */
    /* .carousel-item {
      height: 100vh;
    }

    .carousel-item img {
      object-fit: cover;
      height: 100%;
      width: 100%;
    } */
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
   
    
   
    .form1{
      margin-left:2%;
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
    .btn.text-danger.bg-white {
        transition: none !important; /* Disable hover transitions */
    }
    .btn.text-danger.bg-white:hover {
        background-color: white !important; /* Keep the background white */
        color: red !important; /* Keep the text red */
        border-color: red !important; /* Keep the border red */
    }

    </style>
    </head>
<body >
<?php include 'header.php'; ?>
  <div class="donate_img mt-5 pt-4">
    <img src="<?=base_url('assets/img/contact_us.png')?>" width="100%">
  </div>
  
  <div class="row text-center mt-4 mb-5" style="margin-left:0px;margin-right:0px;">
    <!-- Location Section -->
    <div class="col-12 col-md-4 mb-4 mb-md-0">
        <i class="fa-solid fa-location-dot fs-2" style="color: #EB2D32;"></i>
        <br><strong>The Kanavu Startup Village</strong>
        <br><strong>Annamalaikottai, Sivagiri</strong>
    </div>

    <!-- Phone Section -->
    <div class="col-12 col-md-4 mb-3 mb-md-0">
        <i class="fa-solid fa-phone-volume fs-2" style="color: #EB2D32;"></i>
        <br><strong>+91 93792 48387</strong>
    </div>

    <!-- Email Section -->
    <div class="col-12 col-md-4 mb-3 mb-md-0">
        <i class="fa-regular fa-envelope fs-2" style="color: #EB2D32;"></i>
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
            <form name="contactus" class="form1" id="myForm" onsubmit="return submitForm()" method="post" action="<?= base_url('kanavuhelp/contact_us') ?>">
  <!-- Name Field -->
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name:<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter your name" required onblur="validateName()">
    <p id="demo" style="color:red"></p>
  </div>

  <!-- Email Field -->
  <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">Mail ID:<span class="text-danger">*</span></label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput2" placeholder="Enter your email" required onblur="validateEmail()">
    <p id="demo1" style="color:red"></p>
  </div>

  <!-- Phone Field -->
  <div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">Phone Number:<span class="text-danger">*</span></label>
    <input type="tel" class="form-control" name="phone" id="exampleFormControlInput3" placeholder="Enter your phone number" required onblur="validatePhone()">
    <p id="demo2" style="color:red"></p>
  </div>

  <!-- Message Field -->
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Message:<span class="text-danger">*</span></label>
    <textarea class="form-control textarea-reduced-width" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your message" required onblur="validateMessage()"></textarea>
    <p id="demo3" style="color:red"></p>
  </div>

  <button 
    type="submit" 
    class="btn btn-primary btn-lg msg_btn border-2 text-danger fw-bold bg-white" 
    style="background-color:#E01A2B; border: 2px solid red; border-radius: 25px; font-size: 15px; padding: 12px;">
    Send Us Message
</button>

</form>

<script>
  function validateName() {
    const name = document.getElementById("exampleFormControlInput1").value;
    const nameRegex = /^[A-Za-z\s]+$/;
    if (!nameRegex.test(name)) {
      document.getElementById("demo").innerText = "Please enter a valid name (letters and spaces only).";
      return false;
    }
    document.getElementById("demo").innerText = "";
    return true;
  }

  function validateEmail() {
    const email = document.getElementById("exampleFormControlInput2").value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      document.getElementById("demo1").innerText = "Please enter a valid email address.";
      return false;
    }
    document.getElementById("demo1").innerText = "";
    return true;
  }

  function validatePhone() {
    const phone = document.getElementById("exampleFormControlInput3").value;
    const phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(phone)) {
      document.getElementById("demo2").innerText = "Please enter a valid phone number (10 digits).";
      return false;
    }
    document.getElementById("demo2").innerText = "";
    return true;
  }

  function validateMessage() {
    const message = document.getElementById("exampleFormControlTextarea1").value;
    if (message.length < 10) {
      document.getElementById("demo3").innerText = "Message must be at least 10 characters long.";
      return false;
    }
    document.getElementById("demo3").innerText = "";
    return true;
  }

  function submitForm() {
    return validateName() && validateEmail() && validatePhone() && validateMessage();
  }
</script>


<style>
  .textarea-reduced-width {
    max-width: 50%; /* Adjust width as needed */
  }
</style>

  
</div>

  </section>
  <?php include 'footer.php'; ?>
      <!-- Bootstrap JS and dependencies (Popper.js) -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
    </html>
    