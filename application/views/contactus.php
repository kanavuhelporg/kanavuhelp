<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>
  
  <!-- <link href="<?php echo base_url(); ?>assets/img/LOGO_KSV.png"  rel="icon" /> -->
   <link href="<?php echo base_url(); ?>assets/img/Kanavu_help2.png"  rel="icon" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <style>
    body {
      font-family: 'Sen', sans-serif;
      left:0;
      right:0;
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
    /* #phone{
      margin-left:7%
    } */
    #phone_icon{
      margin-left:17%;
      color:#E01A2B;
      font-size:26px;
    }
    /* #email{
      margin-left:-3%;
    } */
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
    .textarea-reduced-width
  {
    width:50%;
  }

  input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
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
    .textarea-reduced-width
  {
    width:90%;
  }
    }
    @media (max-width: 768px) {
  #userProfile .dropdown-menu {
    right: 0 !important; /* Align the dropdown to the right edge */
    left: auto !important; /* Override default left alignment */
    min-width: 150px; /* Adjust the width as needed */
  }
  .textarea-reduced-width
  {
    width:90%;
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
    </head>
<body>
  <nav id="header" class="navbar navbar-expand-lg bg-white py-4 fixed-top">
    
  </nav>
  <div class="donate_img mt-5 pt-4 text-center">
    <!-- <img src="<?php echo base_url('/assets/img/contact_page1.png'); ?>" alt="No Image" class="img-fluid"> -->
  </div>
  
  <div class="row text-center mt-4 mb-5" style="margin-left:0px;margin-right:0px;">
    <!-- Location Section -->
    <div class="col-12 col-md-4 mb-4 mb-md-0">
        <i class="fa-solid fa-location-dot fs-2" style="color: #EB2D32;"></i>
        <br><strong>Kanavu Startup Village</strong>
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
      <div class="lg:w-3/7 md:w-1/2 sm:w-1/1 xsm:w-1/1 bg-gray-100 rounded-lg p-8 flex flex-col mx-auto mt-10">
      <br><br>  
      <h2 class="text-gray-900 text-lg font-medium title-font text-center"><strong>GET IN TOUCH WITH US</strong>
        </h2>
        <div class="d-flex justify-content-center" >
          <img class="" src="<?php echo base_url('/assets/img/underline.svg'); ?>" alt="no image">
        </div>
       <!--  <h3 class="text-base text-black-500 text-center w-auto"><strong>Submit your inquiry, and we'll respond to you <br>as
            soon as possible!</strong></h3> -->
            <div class="relative mb-4 mt-5 form1">

            <form name="contactus" class="form1" id="myForm" method="post" action="<?= base_url('kanavuhelp/contact_us') ?>">
  <!-- Name Field -->
  <div class="mb-3">
    <label for="name" class="form-label">Name:<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
    <p id="name-error" style="color:red"></p>
  </div>

  <!-- Email Field -->
  <div class="mb-3">
    <label for="email" class="form-label">Mail ID:<span class="text-danger">*</span></label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
    <p id="email-error" style="color:red"></p>
  </div>

  <!-- Phone Field -->
  <div class="mb-3">
    <label for="phone" class="form-label">Phone Number:<span class="text-danger">*</span></label>
    <input type="number" onkeypress="if(this.value.length == 10) return false" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
    <p id="phone-error" style="color:red"></p>
  </div>

  <!-- Message Field -->
  <div class="mb-3">
<label for="message" class="form-label">Message:<span class="text-danger">*</span></label>
<textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter your message" required></textarea>
<p id="message-error" style="color:red"></p>
  </div>



  <button type="submit" id="submitButton" class="btn btn-primary btn-lg" style="background-color:#E01A2B;border:none;border-radius:25px;font-size:15px;padding:12px">Send Us Message</button>
</form>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="contactModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                         <div id="submitresponse">

                         </div>
                         <button type="button" class="btn btn-danger mt-2" data-bs-dismiss="modal" aria-label="Close">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>

<?php if ($this->session->flashdata('submitsuccessstatus')): ?>
    <script>
      // Automatically trigger the OTP modal when the page loads
      window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
        });
        document.getElementById('contactModalLabel').innerHTML = "<span class='text-success'>Success !</p>";
        document.getElementById('submitresponse').innerHTML = "<p class='fs-5'>Thanks for contacting us</p>";
        myModal.show();
      };
    </script>
    
  <?php endif; ?>

  <?php if ($this->session->flashdata('submiterrorstatus')): ?>
    <script>
      // Automatically trigger the OTP modal when the page loads
      window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
        });
        document.getElementById('contactModalLabel').innerHTML = "Error";
        document.getElementById('submitresponse').innerHTML = "<p class='fs-5'>Unexpected error occured. Please try again.</p>";
        myModal.show();
      };
    </script>
    
  <?php endif; ?>

            
            <script>
            document.addEventListener("DOMContentLoaded", function () {
  // Attach validation to fields
  document.getElementById("name").addEventListener("input", function () {
    validateName();
  });

  document.getElementById("email").addEventListener("input", function () {
    validateEmail();
  });

  document.getElementById("phone").addEventListener("input", function () {
    validatePhone();
  });

  document.getElementById("message").addEventListener("input", function () {
    validateMessage();
  });

  // Prevent form submission if validation fails
  document.getElementById("submitButton").addEventListener("click", function (e) {
    e.preventDefault(); // Prevent form submission
    if (validateForm()) {
      document.getElementById("myForm").submit();
    }
  });
});

// Name Validation
function validateName() {
  const name = document.getElementById("name").value.trim();
  const errorElement = document.getElementById("name-error");
  const regex = /^[a-zA-Z]{3,}[/s]*/; // Only letters and spaces allowed

  if (!name) {
    errorElement.textContent = "Please enter your name.";
    return false;
  } else if (!regex.test(name)) {
    errorElement.textContent = "Name can only contain letters and spaces.";
    return false;
  }

  errorElement.textContent = "";
  return true;
}

// Email Validation
function validateEmail() {
  const email = document.getElementById("email").value.trim();
  const errorElement = document.getElementById("email-error");
  const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

  if (!email) {
    errorElement.textContent = "Please enter your email.";
    return false;
  } else if (!regex.test(email)) {
    errorElement.textContent = "Please enter a valid email address.";
    return false;
  }

  errorElement.textContent = "";
  return true;
}

// Phone Validation
function validatePhone() {
  const phone = document.getElementById("phone").value.trim();
  const errorElement = document.getElementById("phone-error");
  const regex = /^[0-9]{10}$/;

  if (!phone) {
    errorElement.textContent = "Please enter your phone number.";
    return false;
  } else if (!regex.test(phone)) {
    errorElement.textContent = "Phone number must be 10 digits.";
    return false;
  }

  errorElement.textContent = "";
  return true;
}

// Message Validation
function validateMessage() {
  const message = document.getElementById("message").value.trim();
  const errorElement = document.getElementById("message-error");

  if (!message) {
    errorElement.textContent = "Message is required.";
    return false;
  } else if (message.length < 10) {
    errorElement.textContent = "Message must be at least 10 characters long.";
    return false;
  }

  errorElement.textContent = "";
  return true;
}

// Overall Form Validation
function validateForm() {
  const isNameValid = validateName();
  const isEmailValid = validateEmail();
  const isPhoneValid = validatePhone();
  const isMessageValid = validateMessage();

  return isNameValid && isEmailValid && isPhoneValid && isMessageValid;
}

function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }

</script>
</div>

  </section>
<div id="footer">

</div>

<script>
  $.ajax({
      type:"get",
      url:"kanavuhelp/getHeader",
      success:(result)=>{
           document.getElementById("header").innerHTML = result;
           document.getElementById("contactuspage").classList.add("text-danger","fw-bold");
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
</script>
      <!-- Bootstrap JS and dependencies (Popper.js) -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
    </html>
    