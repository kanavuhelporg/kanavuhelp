<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

  <style>
    body {
      font-family: 'Sen', sans-serif;
    }

    /* carousel img */
    .carousel-item {
      height: 100vh;
    }

    .bi-share {
      font-size: 1.3rem;
      /* Adjust the size of the share icon */
      cursor: pointer;
      color: #E01A2B;
      margin-left: auto;
      /* Pushes the share icon to the far right in its flex container */
    }

    .carousel-item img {
      object-fit: cover;
      height: 100%;
      width: 100%;
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

    .btn-3,
    .btn-4 {
      background-color: #EB2D32;
      color: white;
      border-radius: 20px;
    }

    /* cards section */
    .card {
      width: 100%;
      /* Make the card width responsive */
      /* box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.2); */
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

    .carousel-control-prev {
      margin-top: -300px;
    }

    .carousel-control-next {
      margin-top: -300px;
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

    /* readmore_button in card */
    .readmore_btn {
      border: 1px solid rgba(224, 26, 43, 1);
      color: rgba(224, 26, 43, 1);
      border-radius: 25px;
    }

    /* how its works section */

    .how-it-works-container {
      display: flex;
      justify-content: space-around;
      /* Adjust spacing for the steps */
      padding: 40px 0;
      position: absolute;
      /* Positioning to overlay on the image */
      top: 50%;
      /* Center vertically */
      left: 50%;
      /* Center horizontally */
      transform: translate(-50%, -50%);
      /* Adjust to truly center */
      height: 550px;
    }

    .step-container {
      flex: 1;
      /* Allow equal width for all steps */
      margin: 0 10px;
      /* Small margins */
      padding: 20px;
      color: #fff;
      text-align: center;
      border-radius: 10px 10px 150px 150px;
      /* Rounded bottom corners */
      position: relative;
      /* For absolute positioning of overlay */
      width: 250px;
    }

    .step-1 {
      background-color: #50C878;
      /* Greenish color */
    }

    .step-2 {
      background-color: #FF6347;
      /* Tomato red color */
    }

    .step-3 {
      background-color: #FFD700;
      /* Yellow color */
    }

    .background-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: 0.2;
      /* Semi-transparent overlay */
      z-index: 1;
    }

    .step-1 .background-overlay {
      background-image: url('assets/img/Group4.svg');
    }

    .step-2 .background-overlay {
      background-image: url('assets/img/Group5.svg');
    }

    .step-3 .background-overlay {
      background-image: url('assets/img/Group3.svg');
    }

    .step-container h2,
    h3 {
      position: relative;
      z-index: 2;
      /* Ensure text is above overlay */
    }

    .step_1,
    .step_2,
    .step_3 {
      border: 3px solid;
      /* Set border for steps */
      border-radius: 50px;
      width: 50px;
      margin-top: -55px;
      /* Position above step */
      margin-left: 50%;
      /* Center horizontally */
      transform: translateX(-50%);
      /* Center using translate */
      background-color: white;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);
    }

    .step_1 {
      border-color: #50C878;
      /* Greenish */
      color: #50C878;
    }

    .step_2 {
      border-color: #FF6347;
      /* Tomato red */
      color: #FF6347;
    }

    .step_3 {
      border-color: #FFD700;
      /* Yellow */
      color: #FFD700;
    }

    /* footer */
    .footer {
      height: 250px;
      width: 100%;
      left: 0;
      right: 0;
      background-color: #EB2D32;
      /* margin-top: -100px; */
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

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      /* how its works section */

      .how-it-works-container {
        flex-direction: column;
        /* Stack steps vertically */
        padding: 20px 0;
        /* Reduced padding for smaller screens */
        width: 100%;
        /* Full width */
      }

      .step-container {
        width: 90%;
        /* Full width for smaller screens */
        margin: 10px auto;
        /* Centering with margins */
      }

      .step_1,
      .step_2,
      .step_3 {
        margin-left: 45%;
        /* Adjusted for smaller screens */
      }

      h2 {
        font-size: 1.5rem;
        /* Smaller font size */
      }

      h3 {
        font-size: 1rem;
        /* Smaller font size */
      }
    }

    .step-icon {
      margin-bottom: 15px;
      font-size: 24px;
    }

    h2 {
      font-size: 2rem;
      /* color: #fff; */

    }

    h3 {
      font-size: 1.2rem;
      color: #fff;
      /* margin-top: 5px; */
      margin-left: 60px;
      margin-right: 70px;
      align-content: center;
      /* margin-right: 70px; */

    }

    .step_1 {
      border: 3px solid #50C878;
      border-radius: 50px;
      width: 70px;
      height: 70px;
      margin-top: -65px;
      margin-left: 50%;
      background-color: white;
      color: #50C878;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);

    }

    .step_2 {
      border: 3px solid #FF6347;
      border-radius: 50px;
      width: 70px;
      height: 70px;
      margin-top: -65px;
      margin-left: 50%;
      background-color: white;
      color: #FF6347;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);

    }

    .step_3 {
      border: 3px solid #FFD700;
      border-radius: 50px;
      width: 70px;
      height: 70px;
      margin-top: -65px;
      margin-left: 50%;
      background-color: white;
      color: #FFD700;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.4);

    }

    .step-container {
      position: relative;
      padding: 20px;
      color: #fff;
      text-align: center;
      border-radius: 10px 10px 150px 150px;
      /* Only round the bottom two corners */
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.2);

    }

    .step-1 {
      background-color: #50C878;
      /* Greenish color */
    }

    .step-2 {
      background-color: #FF6347;
      /* Tomato red color */
    }

    .step-3 {
      background-color: #FFD700;
      /* Yellow color */
    }

    .background-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: 0.2;
      /* Makes the background image semi-transparent */
      z-index: 1;
      border-radius: 0 0 150px 150px;
    }

    .step-1 .background-overlay {
      background-image: url('assets/img/Group4.svg');
    }

    .step-2 .background-overlay {
      background-image: url('assets/img/Group5.svg');
    }

    .step-3 .background-overlay {
      background-image: url('assets/img/Group3.svg');
    }

    .step-container h2,
    h3 {
      position: relative;
      z-index: 2;
    }

    ..worktext {
      display: none;
    }

    @media (max-width: 768px) {

      /* how its works section */
      .how-it-works-container {
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
      }

      .steps_img {
        display: none;
      }

      .step-container {
        width: 80%;
        margin-bottom: 20px;
      }
    }

    .worktext {
      margin-bottom: 30px;
      /* Space between heading and steps */
    }

    .bg-red-modal {
      background-color: grey;
      color: white;
      /* Adjust the text color if needed for better contrast */
    }

    @media (max-width: 1400px) {
      .carousel-item .row {
        margin-left: 0;
        margin-right: 0;
      }

    }

    @media (max-width: 767px) {

      /* carousel */
      .carousel-item {
        position: relative;
      }

      .carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
      }

      /* carousel text */
      .imgtext1,
      .imgtext2 {
        background-color: rgba(255, 255, 255, 0.7);
        padding: 20px;
        border-radius: 15px;
        position: absolute;
        z-index: 1;
        top: 50%;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .imgtext1,
      .imgtext2 {
        font-size: 24px;
        text-align: center;
      }

      .imgtext11,
      .imgtext22 {
        font-size: 16px;
        text-align: center;
      }

      .btn-3,
      .btn-4 {
        font-size: 14px;
      }

      /* how its works section */
      /* .worktext {
        margin-bottom: 550px;
        margin-top: -250px;
      } */
    }

    @media (max-width: 767px) {
      #fundraiserCarousel .carousel-inner .carousel-item {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      #fundraiserCarousel .carousel-inner .carousel-item .col-12 {
        max-width: 100%;
        /* Ensure full width for mobile */
      }
    }

    .donate_btn.no-hover {
      background-color: white;
      color: red;
      border: 1px solid red;
    }

    .donate_btn.no-hover:hover {
      background-color: white !important;
      color: red !important;
      border: 1px solid red !important;
    }

    .fixed-card {
      width: 100%;
      max-width: 320px;
      min-height: 450px;
      display: flex;
      flex-direction: column;
      margin-bottom: 15px;
      /* Adds space below each card in mobile view */
    }

    .fixed-card-img {
      height: 200px;
      width: 100%;
      object-fit: cover;
      background-size: cover;
      background-position: center;
    }

    /* Media query for single card display on mobile view */
    @media (max-width: 768px) {
      .carousel-item .col-12 {
        max-width: 100%;
        /* Ensure card takes full width */
        flex: 0 0 100%;
        /* Prevent overflow */
        padding: 0 10px;
        /* Add padding to prevent card edges from touching */
        margin-bottom: 20px;
        /* Add space between cards */
      }
    }

    /* For larger screens, display three cards per slide */
    @media (min-width: 769px) {
      .carousel-item .col-4 {
        max-width: 33.33%;
        /* Set the width of each card */
        flex: 0 0 33.33%;
        /* Ensures equal width for each card */
        margin-bottom: 20px;
        /* Adds spacing between cards */
      }
    }

    .fundraiser-carousel {
      background-color: white;
      /* Soft light gray, or choose a color that fits your design */
      padding: 40px 0;
      /* Add some padding for breathing room */
      border-radius: 10px;
      /* Rounded corners */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      /* Soft shadow for a lifted effect */
      margin-bottom: 30px;
      /* Extra space below the carousel */
    }
    .card_button {
    border: 1px solid gray !important;
    background: none;
    box-shadow: none;
}

.card_button:hover {
    border: 1px solid gray !important; /* No border on hover */
    box-shadow: none; /* Prevent any shadow on hover */
    background: none; /* Ensure background doesn't change */
}
.img-placeholder {
    background-color: white; /* Placeholder background color */
    display: block;
    width: 100%; /* Ensures the space is consistent */
    height: 230px; /* Matches the image height */
    object-fit: cover; /* Maintains the aspect ratio */
}
.img-placeholder:not([src]) {
    background: url('path/to/placeholder-image.jpg') center center/cover no-repeat;
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
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light py-4 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#">
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
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/individual') ?>">Start a Fundraiser</a>
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
            <!-- <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blogs</a>
                    </li> -->
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
            </li>
          </ul>
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
  </nav>

  <div class="container">
        <h1>Privacy Policy</h1>

        <p>Effective Date: [Insert Date]</p>

        <h2>1. Introduction</h2>
        <p>Welcome to [Your Website Name]. We value your privacy and are committed to protecting the personal information you share with us. This Privacy Policy outlines how we collect, use, and safeguard your data.</p>

        <h2>2. Information We Collect</h2>
        <p>We collect various types of information to provide you with better services:</p>
        <ul>
            <li><strong>Personal Information:</strong> When you sign up or interact with our services, we collect personal information such as your name, email address, and contact details.</li>
            <li><strong>Usage Data:</strong> We collect data about how you interact with our website, including pages viewed, time spent on each page, and actions performed.</li>
            <li><strong>Cookies:</strong> We use cookies to enhance your experience and analyze website traffic. You can manage cookie preferences through your browser settings.</li>
        </ul>

        <h2>3. How We Use Your Information</h2>
        <p>We use the information we collect for the following purposes:</p>
        <ul>
            <li>To provide, maintain, and improve our services.</li>
            <li>To communicate with you about updates, promotions, or other relevant information.</li>
            <li>To analyze website usage and improve user experience.</li>
            <li>To comply with legal obligations and protect our rights.</li>
        </ul>

        <h2>4. Sharing Your Information</h2>
        <p>We will not sell or rent your personal information to third parties. However, we may share your data in the following circumstances:</p>
        <ul>
            <li><strong>Service Providers:</strong> We may share information with trusted third-party service providers who assist in operating our services.</li>
            <li><strong>Legal Compliance:</strong> We may disclose information to comply with legal obligations, such as a court order or government request.</li>
            <li><strong>Business Transfers:</strong> In case of a merger, acquisition, or sale of assets, your information may be transferred to the new owner.</li>
        </ul>

        <h2>5. Data Security</h2>
        <p>We take the security of your personal information seriously and employ industry-standard measures to protect it. However, please note that no method of transmission over the Internet is 100% secure.</p>

        <h2>6. Your Rights</h2>
        <p>Depending on your location, you may have the following rights regarding your personal data:</p>
        <ul>
            <li>The right to access and update your data.</li>
            <li>The right to request the deletion of your data.</li>
            <li>The right to object to the processing of your data.</li>
            <li>The right to withdraw consent for data processing (where applicable).</li>
        </ul>

        <h2>7. Changes to This Privacy Policy</h2>
        <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated effective date. We encourage you to review this policy periodically to stay informed about how we protect your information.</p>

        <h2>8. Contact Us</h2>
        <p>If you have any questions about this Privacy Policy or how we handle your personal information, please contact us at:</p>
        <p>Email: [Your Contact Email]</p>
        <p>Phone: [Your Contact Number]</p>

    </div>


  <div class="footer">
    <footer class="footer mt-auto py-3">
      <div class="container">
        <h5 class="text-center">Kanavu.help</h5>
        <div class="row text-center">
          <div class="col-12">
            <div class="footer1">
              <a class="footer-lable lable" href="<?= base_url('/abouts') ?>">About</a>
              <a class="footer-lable lable" href="<?= base_url('/contactus') ?>">Contact</a>
              <a class="footer-lable lable" href="<?= base_url('/terms_of_use') ?>">Terms of Use</a>
              <a class="footer-lable lable" href="<?= base_url('/privacy_policy') ?>">Privacy Policy</a>
            </div>
          </div>
        </div>
      </div>
      <div class="social-icons d-flex justify-content-center text-center my-2">
        <a href="https://www.facebook.com/" target="_blank" class="mx-2">
          <img src="<?= base_url('assets/img/facebook-f.svg') ?>" alt="Facebook Logo" class="img-fluid" style="max-width: 30px;">
        </a>
        <a href="https://twitter.com/" target="_blank" class="mx-2">
          <img src="<?= base_url('assets/img/twitter.svg') ?>" alt="Twitter Logo" class="img-fluid" style="max-width: 30px;">
        </a>
        <a href="https://www.linkedin.com/" target="_blank" class="mx-2">
          <img src="<?= base_url('assets/img/linkedin-in.svg') ?>" alt="LinkedIn Logo" class="img-fluid" style="max-width: 30px;">
        </a>
      </div>
      <img src="<?= base_url('assets/img/footer-secured-card 1.svg') ?>" alt="Secure Card" class="footimg img-fluid mx-auto d-block"
        style="max-width: 200px;">
      <p class="text-center ">copyright 2024 @ Kanavu.help. All Rights Reserved.</p>
    </footer>
  </div>

  <!-- Bootstrap JS and dependencies (Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>