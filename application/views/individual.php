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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!--wizard-->
      <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
   </head>
   <style>
      body {
      font-family: 'sen', sans-serif;
      overflow-x:hidden;
      left:0;
      right:0;
      bottom:0;
    }
 .logo {
      margin-left: 65px;
      font-weight: bolder;
      font-size: x-large;
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
      background-color: red !important;
      color: white !important;
    }
    .btn-1 {
      margin-left: 260px !important;
      background-color: red!important;
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
    height:680;
    /* margin-bottom: 50px ; */
    padding: 20px;
    border: none;
    background-color: white;
    float:right;
   
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
  select{
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
    width: 540px;
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
  .modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    /* overflow-y: auto; */
    background-color: rgba(0,0,0,0.5);
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
  padding-bottom:10px;
  
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
  color:black;    
}
.resend a{
  text-decoration:none;
  color:#E01A2B;
}
   </style>
   <body>
      <nav class="navbar  navbar-expand-lg bg-light fixed-top">
         <div class="container-fluid">
             <a class="navbar-brand" href="<?= base_url('/kanavuhelp') ?>">
                 <img class="logo" src="<?php echo base_url('/assets/img/kanavu_help.png');?>" alt="Kanavu Help">
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarscroll" aria-controls="navbarscroll" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             
             <div class="collapse navbar-collapse" id="navbarscroll">
             <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-nav-scroll text-center text-lg-start"> -->
             <ul class="navbar-nav mb-2 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                     <li class="nav-item dropdown px-3">
                         <a class="nav-item  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">Fundraise for</a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="<?= base_url('kanavuhelp/individual#step-1') ?>">Individuals</a></li>
                             <li><a class="dropdown-item" href="<?= base_url('kanavuhelp/charity') ?>">Charities</a></li>
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a class="navbar-brand p-5 p-md-1" href="<?= base_url('kanavuhelp/donate') ?>">Donate</a>
                     </li>
                     <li class="nav-item">
                         <a class="navbar-brand p-3 p-md-1" href="<?= base_url('kanavuhelp/myhelps') ?>">My Helps</a>
                     </li>
                     <li class="nav-item">
                         <a class="navbar-brand p-3 p-md-1" href="#demo1">How it works</a>
                     </li>
                     <li class="nav-item">
                         <a class="navbar-brand p-3 p-md-1" href="<?= base_url('kanavuhelp/blogs') ?>">Blogs</a>
                     </li>
                     <li class="nav-item">
                         <a class="navbar-brand p-3 p-md-1" href="<?= base_url('kanavuhelp/contactus') ?>">Contact us</a>
                     </li>
                 </ul>
             </div>
     </div>
     <div class="container navbar-link  justify-content-sm-start bttn">
                       <!-- <ul class="navbar-nav d-md-flex flex-row justify-content-end"> -->
                         <!-- <li class="nav-item"> -->
                             <a href="<?= base_url('kanavuhelp/login') ?>"><button type="button" class="btn btn-1 border">Login</button></a>
                         <!-- </li> -->
                         <!-- <li class="nav-item"> -->
                           <a href="<?=base_url('kanavuhelp/individual')?>">
                             <button type="button" class="btn btn-2 border">Start a Kanavu</button></a>
                         <!-- </li> -->
                         <!-- </ul> -->
                     </div>
     </nav>
     <div class="container-fluid mt-5 mt-md-4 mt-lg-5">
      <img src="<?php echo base_url('/assets/img/sthelp.png');?>" alt="No Image" class="img-fluid">
  </div>
  <div class="container box" style="margin-top:100px;margin-left: 200px;">
    <div class="row box1" style="margin-top:100px;">
       <div class="col-md-4 text-start mm text-center">
          <!-- <img src="Mask-Group-241.png" alt="" style="position: absolute; top: 0px; left: -60px;"> -->
          <h3 class="mt-10" style="margin-top: 50px;"><strong>START YOUR HELP</strong></h3>
               <h6>"We make a living by what we get,but we make a life by what we give"</h6>
               <img src="<?php echo base_url('/assets/img/btfly.png');?>" alt="no img" class="w-full h-auto img1" style="position: absolute; top: 200px; left: 30px; margin-top:400px;margin-left:200px;">
       </div>
      
    <div id="multi-step-form-container" class="mt-10" style="margin-top: 20px;">
        <!-- Form Steps / Progress Bar -->
        <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0 col-md-10 flex-wrap  ">
            <!-- Step 1 -->
            <li class="form-stepper-active text-center form-stepper-list" step="1">
                <a class="mx-2 ">
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
        <form id="individualForm" name="individualForm" onsubmit="return individual()"  action="<?= base_url('kanavuhelp/individualform_data') ?>" enctype="multipart/form-data" method="POST" class="row row-cols-1 ms-5 me-5" >
            <!-- Step 1 Content -->
            <section id="step-1" class="form-step "  style="height:450px;border:none;">
            <h2>Basic Details</h2>
                
                <!-- Step 1 input fields -->
                <div class=" col-md-12 my-3">
                <label for="form-select">I am raising fund for:</label>
                <select name="form_select" id="form_select" style="width: 540px; height: 40px;">
    <option value="" selected>--Select--</option>
    <option value="Medical">Medical</option>
    <option value="Crisis">Crisis</option>
    <?php foreach ($result as $row) { ?>
        <option value="<?php echo $row['id']; ?>" <?php echo set_select('form_select', $row['id'], False); ?>><?php echo $row['raising_fund_for']; ?></option> 
    <?php } ?>
</select><br>


    <label for="name"></label>
    <input type="text" id="name" name="name" placeholder="Name" required>

    <label for="email"> </label>
    <input type="email" id="email" name="email" placeholder="Mail Id*" required>

    <label for="phone"></label>
    <input type="phone" id="phone" name="phone" placeholder="Phone Number* " required>
                </div>
                <div class="mt-3 primary"  style="margin-left:450px;">
                    <button id="openModalBtn1" class="button btn-navigate-form-step" type="button" step_number="1">Continue</button>
                </div>
            </section>
            <div id="myModal1" class="modal">
            <div class="modal-content" >
                    <span class="close">&times;</span>
                    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4" style="min-width: 500px;">
          <div class="card bg-white mb-5 mt-5 border-0" style="box-shadow: 0 12px 15px rgba(0, 0, 0, 0.02);">
            <div class="card-body p-5 text-center" >
              <h4><b>Enter OTP to verify your account</b></h4>
              <p style="font-size:16px;"><b>Enter OTP to verify your account</b></p>
              <img src="<?php echo base_url('/assets/img/Group 55.png');?>" alt="No Image" class="h-auto inline-block" style="width:50px;height:50px;">
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
              <b>Didn’t receive the OTP? </b><br>In case you do not receive the OTP on your email id, please check your spam/junk folders.<br>  <a href=""><b>Resend</b></a>
              </p>
            </div>
          </div>
        </div>
      </div>
  </section>
            </div>
            </div>
            <!-- Step 2 Content, default hidden on page load. -->
            <section id="step-2" class="form-step d-none" style="border:none;">
            <h2>Beneficiary Details</h2>                <!-- Step 2 input fields -->
                <div class="col-md-12 my-3">
                <label for="name"></label>
                <input type="text" id="beneficiary_name" name="beneficiary_name" placeholder="Name" required>

                <label for="age"></label>
                <input type="age" id="beneficiary_age" name="beneficiary_age" placeholder="Age" required>

                <label for="location"></label>
                <input type="txt" id="location" name="location" placeholder="Location" required>

                <label for="phone"></label>
                <input type="phone" id="beneficiary_phone" name="beneficiary_phone" maxlength="10" placeholder="Phone Number* "required>
                </div>
                <div class="mt-3 primary" style="margin-left:330px;">
                    <button class="button btn-navigate-form-step" type="button" step_number="1"style="width:100px;">Back</button>
                    <button class="button btn-navigate-form-step" type="button" step_number="3">continue</button>
                </div>
            </section>
            <!-- Step 3 Content, default hidden on page load. -->
            <section id="step-3" class="form-step d-none" style="border:none;">
            <h2>Cause Details</h2>
                <!-- Step 3 input fields -->
                <div class="col-md-12 my-3">
                <label for="form-option">I am raising fund for:</label>
                <select name="form-option" id="form-option" style="width: 540px; height: 40px;">
    <option value="" selected>--Select--</option>
    <option value="Medical">Medical</option>
    <option value="Crisis">Crisis</option>
    <?php foreach ($result as $row) { ?>
        <option value="<?php echo $row['id']; ?>" <?php echo set_select('form-option', $row['id'], False); ?>><?php echo $row['raising-fund-for']; ?></option> 
    <?php } ?>
</select><br>
    <label for="amount"></label>
    <input type="number" id="amount" name="amount" placeholder="Amount*" required>

    <label for="end_date"></label>
    <input type="date" id="end_date" name="end_date" placeholder="End Date* " required>
                </div>
                <div class="mt-3 primary"style="margin-left:330px;">
                    <button class="button btn-navigate-form-step" type="button" step_number="2" style="width:100px;">Back</button>
                    <button class="button btn-navigate-form-step" type="button" step_number="4">continue</button>
                </div>
            </section>
            <section id="step-4" class="form-step d-none" style="border:none;">
            <h2>Elaborate Cause Details</h2>
                <div class="col-md-12 my-3">
                <div class="file-upload-container">
                <label for="cover_image">upload cover photo</label>
      <input type="file" id="cover_image" name="cover_image" accept="image/*"  required>
      </div><br><br>
      <label for="cause-heading"></label>
      <input type="text" id="cause-heading" name="cause-heading" placeholder="Heading" required>

      <label for="cause-description"></label>
      <input id="cause-description" name="cause-description" placeholder="Description" required>
                </div>
                <div class="mt-3 primary"style="margin-left:250px;">
                    <button class="button btn-navigate-form-step" type="button" step_number="3" style="width:100px;">Back</button>
                    <button class="button submit-btn" type="submit">Submit for Approval</button>
                </div>
            </section>
        </form>
    </div>
</div>
</div>
  
<script>
   /**
 * Define a function to navigate betweens form steps.
 * It accepts one parameter. That is - step number.
 */
function openModal(modalId) {
  var modal = document.getElementById(modalId);
  modal.style.display = "block";
}

// Function to close the modal
function closeModal(modalId) {
  var modal = document.getElementById(modalId);
  modal.style.display = "none";
}

// Event listeners for opening and closing modals
document.getElementById("openModalBtn1").addEventListener("click", function() {
  openModal("myModal1");
});
document.querySelectorAll(".close").forEach(function(closeBtn) {
  closeBtn.addEventListener("click", function() {
    var modalId = closeBtn.closest('.modal').id;
    closeModal(modalId);
  });
});
window.addEventListener("click", function(event) {
  document.querySelectorAll(".modal").forEach(function(modal) {
    if (event.target == modal) {
      closeModal(modal.id);
    }
  });
});
document.getElementById("verifyButton").addEventListener("click", function() {
  // Code to close the modal
  document.getElementById("myModal1").style.display = "none";
});
const inputs = document.querySelectorAll(".otp-field > input");
const button = document.querySelector(".btn");

window.addEventListener("load", () => inputs[0].focus());
button.setAttribute("disabled", "disabled");

inputs[0].addEventListener("paste", function (event) {
  event.preventDefault();

  const pastedValue = (event.clipboardData || window.clipboardData).getData(
    "text"
  );
  const otpLength = inputs.length;

  for (let i = 0; i < otpLength; i++) {
    if (i < pastedValue.length) {
      inputs[i].value = pastedValue[i];
      inputs[i].removeAttribute("disabled");
      inputs[i].focus;
    } else {
      inputs[i].value = ""; // Clear any remaining inputs
      inputs[i].focus;
    }
  }
});

inputs.forEach((input, index1) => {
  input.addEventListener("keyup", (e) => {
    const currentInput = input;
    const nextInput = input.nextElementSibling;
    const prevInput = input.previousElementSibling;

    if (currentInput.value.length > 1) {
      currentInput.value = "";
      return;
    }

    if (
      nextInput &&
      nextInput.hasAttribute("disabled") &&
      currentInput.value !== ""
    ) {
      nextInput.removeAttribute("disabled");
      nextInput.focus();
    }

    if (e.key === "Backspace") {
      inputs.forEach((input, index2) => {
        if (index1 <= index2 && prevInput) {
          input.setAttribute("disabled", true);
          input.value = "";
          prevInput.focus();
        }
      });
    }

    button.classList.remove("active");
    button.setAttribute("disabled", "disabled");

    const inputsNo = inputs.length;
    if (!inputs[inputsNo - 1].disabled && inputs[inputsNo - 1].value !== "") {
      button.classList.add("active");
      button.removeAttribute("disabled");

      return;
    }
  });
});
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
         <a class="footer-lable lable" href="<?= base_url('kanavuhelp/abouts') ?>">About</a>
         <a class="footer-lable lable" href="<?= base_url('kanavuhelp/contactus') ?>">Contact</a>
         <a class="footer-lable lable" href="#">Terms of Use</a>
         <a class="footer-lable" href="#">Privacy Policy</a>
       </div>
     </div>
     <div class="social-icons d-flex justify-content-center text-center">
       <a href="https://www.facebook.com/" target="_blank">
         <img src="<?php echo base_url('/assets/img/facebook-f.svg');?>" alt="Facebook Logo">
       </a>
       <a href="https://twitter.com/" target="_blank">
         <img src="<?php echo base_url('/assets/img/twitter.svg');?>" alt="Twitter Logo">
       </a>
       <!-- LinkedIn -->
       <a href="https://www.linkedin.com/" target="_blank">
         <img src="<?php echo base_url('/assets/img/linkedin-in.svg');?>" alt="LinkedIn Logo">
       </a>
     </div>
     <img src="<?php echo base_url('/assets/img/footer-secured-card 1.svg');?>" alt="no image" class="footimg">
     <p class="text-center" style="font-size:17px;">copyright 2024 @ kanavu.help. All Rights Reserved.</p>
 </div>
 </footer>
</body>
</html>
