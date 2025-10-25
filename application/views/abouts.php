<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>
  <link href="<?php echo base_url(); ?>assets/img/kanavulogoo.jpg"  rel="icon"/>
  <img src="<?= base_url('assets/img/Kanavu_help2.png') ?>" alt="Kanavu_help" style="height: 70px; width: auto;">
   
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
    /* Active page highlight */
    .nav-link.active {
      color: #E01A2B !important;
      font-weight: bold;
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
    .about p {
    line-height: 1.6; /* Improve readability */
    }
@media (max-width: 576px) {
    .about p {
        font-size: 0.9rem; /* Smaller text on mobile */
    }
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
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-white py-4 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="<?= base_url('') ?>">
                <img src="<?= base_url('assets/img/KSV LOGO (14).png') ?>" alt="Kanavu_help" style="height: 70px; width: auto;">
            </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">
             <img src="<?= base_url('assets/img/KSV LOGO (14).png') ?>" alt="Kanavu_help" style="height: 70px; width: auto;">
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a id="kanavuhomepage" class="nav-link mx-lg-2" href="<?= base_url('/kanavuhome#how-it-works-section') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="aboutuspage" class="nav-link mx-lg-2 active" href="<?= base_url('/abouts') ?>">About us</a>
                        </li>
                        <li class="nav-item">
                            <a id="individualpage" class="nav-link mx-lg-2" href="<?= base_url('/individual') ?>">Start a Fundraiser</a>
                        </li>
                        <li class="nav-item">
                            <a id="donatepage" class="nav-link mx-lg-2" href="<?= base_url('/donate') ?>">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a id="blogs" class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a id="contactuspage" class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
                        </li>
                        <?php if ($this->session->userdata('Kanavu_userId')): ?>
                            <li class="nav-item">
                                <a id="signinpage" class="nav-link mx-lg-2" href="<?= base_url('/login') ?>">View Dashboard</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a id="signinpage" class="nav-link mx-lg-2" href="<?= base_url('/login') ?>">Sign In</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <div class="d-flex align-items-center ms-auto">
                        <?php if ($this->session->userdata('Kanavu_userId')): ?>
                            <div class="d-flex align-items-center">
                                <div class="dropdown" id="userProfile">
                                    <div class="d-flex align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="<?= base_url('/assets/img/Ellipse 12.png') ?>" alt="Profile Image" style="width: 30px; height: 30px; border-radius: 50%;">
                                        <span class="ms-2"><?= $this->session->userdata('Kanavu_userName'); ?></span>
                                    </div>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="<?= base_url('/logout') ?>">
                                                <i class="fas fa-sign-out-alt"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
      </div>
    </div>
  </nav>
  
  
    
  <div class="container mt-5">
    <br><br>

    <!-- Underline Image -->
    <div class="text-center">
    <p class="text-center">
    <h2>
            "Mission to make a Smile" 
            <!-- <img src="<?php echo base_url('/assets/img/Emoji.png'); ?>" style="display: inline; vertical-align: middle;" alt="Emoji" width="30"> -->
            </h2>
            </p>
        <img class="img-fluid" src="<?php echo base_url('/assets/img/underline.svg'); ?>" alt="Underline" style="max-width: 100%; height: auto;">
    </div>

    <!-- About Text Section -->
    <div class="d-flex justify-content-center about mt-4">
        <p class="w-75 fs-4 text-center">
        The mission of Kanavu.Help is to bring together those who wish to lend a helping hand with those who are in need. We offer support in areas such as education, medical emergencies, disaster relief, and the fulfillment of unspoken dreams. Through compassion and transparency, we work to transform aspirations into tangible realities.
        "Together, we can brighten lives and turn dreams into living truths."
        </p>
    </div>

    <!-- Group Image -->
    <div class="text-center my-4">
        <img class="img-fluid" src="<?php echo base_url('/assets/img/Group 102.svg'); ?>" alt="Group 102" style="max-width: 100%; height: auto;">
    </div>
</div>


<footer class="footer bg-danger text-white py-4 mt-auto">
    <div class="container text-center">
        <h5>kanavu.help</h5>

        <div class="footer-links my-3">
            <a class="footer-lable border-end pe-3 me-3 text-white text-decoration-none" href="<?= base_url('/contactus') ?>">Contact</a>
            <a class="footer-lable border-end pe-3 me-3 text-white text-decoration-none" 
              href="<?= base_url('/terms_of_use') ?>" 
              target="_blank" 
              rel="noopener noreferrer">
              Terms of Use
            </a>
            <a class="footer-lable text-white text-decoration-none" 
              href="<?= base_url('/privacy_policy') ?>" 
              target="_blank" 
              rel="noopener noreferrer">
              Privacy Policy
            </a>
        </div>

        <div class="social-icons d-flex justify-content-center mb-3">
            <a href="https://www.facebook.com/profile.php?id=61574165466676" target="_blank" class="mx-2 text-white">
                <i class="fab fa-facebook-f me-3" style="font-size:24px"></i>
            </a>
            <a href="https://www.instagram.com/kanavu.help/" target="_blank" class="mx-2 text-white">
                <i class='fab fa-instagram me-3' style='font-size:24px'></i>
            </a>
            <a href="https://www.youtube.com/channel/UCA3Za4BS9L1CwPkuhqm260w" target="_blank" class="mx-2 text-white">
                <i class='fab fa-youtube me-3' style='font-size:24px'></i>
            </a>
        </div>
        
        <div class="text-center my-3">
            <img src="<?= base_url('/assets/img/footer-secured-card 1.svg'); ?>" alt="Secure Payment" class="img-fluid" style="max-width:300px;">
        </div>

        <p class="text-center" style="font-size:15px;">
  Copyright <?= date('Y'); ?> @ kanavu.help. All Rights Reserved.
</p>
    </div>
</footer>


<!-- Bootstrap JS and dependencies (Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById("currentYear").textContent = new Date().getFullYear();
    
    // Highlight current page in navigation
    document.addEventListener('DOMContentLoaded', function() {
        // Get current page URL
        const currentUrl = window.location.href;
        
        // Get all navigation links
        const navLinks = document.querySelectorAll('.nav-link');
        
        // Loop through each link
        navLinks.forEach(link => {
            // Check if the link's href matches the current URL
            if (link.href === currentUrl) {
                // Remove active class from all links
                navLinks.forEach(l => l.classList.remove('active'));
                // Add active class to current link
                link.classList.add('active');
            }
        });
        
        // Special handling for about page which might have different URL patterns
        if (currentUrl.includes('/abouts')) {
            navLinks.forEach(l => l.classList.remove('active'));
            document.getElementById('aboutuspage').classList.add('active');
        }
    });
</script>
</body>
</html>