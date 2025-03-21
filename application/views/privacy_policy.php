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
          
          <li class="nav-item"><a id="aboutuspage" class="nav-link" href="<?= base_url('/abouts') ?>">About us</a></li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/individual') ?>">Start a Fundraiser</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/donate') ?>">Donate</a>
            </li>
            <!-- <li class="nav-item">
            <a class="nav-link mx-lg-2" href="<?= base_url('/myFundraisers') ?>">My Fundraiser</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/kanavuhome#how-it-works-section') ?>">How it Works</a>
            </li>
            <!-- <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blogs</a>
                    </li> -->
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
            </li>
            <li class="nav-item">
              <a id="signinpage" class="nav-link mx-lg-2" href="<?= base_url('/login') ?>"><?php if ($this->session->userdata('Kanavu_userId')) {echo "View Dashboard";}else {
                echo "Sign In";
              } ?></a>
            </li>
          </ul>
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
  <?php endif; ?>
</div>


        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <br><br><br><br>
    <div>
        <h1>Privacy Policy</h1>

        <p>Effective Date: [12/11/2024]</p>
  </div>
        <h2>INTRODUCTION</h2>
        <h5><strong>Welcome to Kanavu’s "Privacy Notice."</strong></h5>
        <p>Kanavu respects your privacy and is committed to protecting your personal data. This Privacy Policy notice explains how we handle your personal data when you visit our website (regardless of where you visit it from) and outlines your privacy rights and how the law protects you.</p>
        <p>This policy notice applies to all/any users accessing or using services on the Platform. Please refer to the Glossary at the end for definitions of key terms used in this document.</p>

        <h4>1.	WHO WE ARE</h4>
        <ul>
            <strong>a.	The Purpose of This Privacy Notice</strong> 
              <ul><li>This Privacy Notice explains how Kanavu collects, uses, and processes your personal data when you access or interact with the Kanavu website and its associated services (the website and connected services are collectively referred to as the “Platform” in this Privacy Notice).</li>
            <li>The Platform is not intended for children, and we do not knowingly collect data related to children.</li>
            <li>o	It is important to read this Privacy Notice alongside any other privacy or data processing notices we may provide at specific times when collecting or processing your personal data. This ensures you have a complete understanding of how and why we use your information. Please note that this Privacy Notice complements those notices and does not replace them.</li></ul>
        </ul>
        <ul>
            <strong>b.	Controllers</strong> 
              <ul><li>The Kanavu Group comprises multiple legal entities. This Privacy Notice is issued on behalf of the entire Kanavu Group. Therefore, when we use terms like "Kanavu," "we," "us," or "our" in this Privacy Notice, we are referring to the specific company within the Kanavu Group that is responsible for processing your personal data.</li>
            <li>Kanavu Social Ventures is the controller and responsible for this website. We have appointed a Data Privacy Manager to oversee questions related to this Privacy Notice.</li>
              <strong>Contact Details:</strong> 
              <p>1. Name of Data Privacy Manager: Karthi Easwaramoorthy</p>
              <p>2. Email address: help.kanavu@gmail.com</p>
              <p>3. Address: 21/83A, Annamalai Kottai, Periyakattu Thottam, Sivagiri, Erode- 638109, Tamil Nadu</p>
              <p>4. Phone number: 9379248387</p></ul>
        </ul>

        <ul>
            <strong>c.	Changes to the Privacy Notice and Your Duty to Inform Us of Changes</strong> 
              <ul><li>This version of the Privacy Notice was last updated on 21st November, and previous versions can be obtained by contacting us.</li>
            <li>It is important that the personal data we hold about you is accurate and current. Please keep us informed if your personal data changes during your relationship with us.</li>
            </ul>
        </ul>

        <h4>2.	THE DATA WE COLLECT ABOUT YOU</h4>
        <p>Personal data, or personal information, means any information about an individual from which that person can be identified. It does not include data where the identity has been removed (anonymous data).</p>
          <p>We may collect, use, store, and transfer various kinds of personal data, grouped as follows:</p>
          <p><strong>We may collect, use, store, and transfer various kinds of personal data, grouped as follows:</strong></p>
          <p>1. Identity Data: First name, last name, username, date of birth, language preferences, and gender.</p>
          <p>2. Contact Data: Email address. </P>
          <p>3. Financial Data: Payment card details.</p>
          <p>4. Transaction Data: Details about payments and services purchased.</p>
          <p>5. Technical Data: Geolocation, login data, browser type/version, operating system, and platform.</p>
          <p>6. Profile Data: Username, preferences, survey responses, and feedback.</p>
          <p>7. Usage Data: Information about how you use the Platform.</p>
          <p>We also collect, use and share Aggregated Data such as statistical or demographic data for any purpose.</p>

<p>Aggregated Data may be derived from your personal data but is not considered personal data in law as this data does not directly or indirectly reveal your identity. For example, we may aggregate your Usage Data to calculate the percentage of users accessing a specific website feature.</p>

<p>However, if we combine or connect Aggregated Data with your personal data so that it can directly or indirectly identify you, we treat the combined data as personal data which will be used in accordance with this Privacy Notice.</p>


        <h2>IF YOU FAIL TO PROVIDE PERSONAL DATA:</h2>
        <p>Where we need to collect personal data by law, or under the terms of a contract we have with you and you fail to provide that data when requested, we may not be able to offer the services that we aim to. In this case, we may have to cancel the service you have with us but we will notify you if this is the case at the time.
</p>

        <h4>3.	HOW IS YOUR PERSONAL DATA COLLECTED?</h4>
        <h5>We collect data using:</h5>
        <p>1. Direct Interactions: You may provide Identity and Contact Data when you: </p>
        <ul>
            <li>Create an account.</li>
            <li>Subscribe to newsletters. </li>
            <li>Enter a competition or survey</li>
            <li>Providing feedback.</li>
        </ul>
        <p>2.	Automated Technologies or Interactions: We may automatically collect Technical Data using cookies and other technologies.</p>


        <h4>4.	HOW WE USE YOUR PERSONAL DATA</h4>
        <p>We will only use your personal data when legally allowed, typically for the following purposes:</p>
        <ul>
            <li>Performance of a Contract: To provide services you request.</li>
            <li>Legitimate Interests: To improve our services or ensure security.</li>
            <li>Compliance with Legal Obligations: When required by law.</li>
        </ul>

        <h4>5.	DATA SECURITY</h4>
        <p>We have put appropriate security measures in place to prevent your personal data from unauthorized access, loss, or alteration.</p>

        <h4>6.	YOUR LEGAL RIGHTS</h4>
        <p>Under data protection laws, you have rights to: </p>
        <ul>
            <li>Access your personal data.</li>
            <li>Correct inaccurate or incomplete data.</li>
            <li>Request erasure of your data.</li>
            <li>Object to processing for legitimate interests</li>
            <li>Restrict processing of your data.</li>
            <li>To exercise any of these rights, please contact us using the details provided in Section 1b.</li>
        </ul>
        <h4>7. Glossary</h4>
        <ul>
          <li><span class="fw-bold">Controller:</span> The entity responsible for determining how and why your personal data is processed.</li>
          <li><span class="fw-bold">Platform: </span>Refers to the Kanavu website and associated services.</li>
          <li><span class="fw-bold">Personal Data: </span>Information that identifies an individual.</li>
        </ul>

    </div>


  <div class="footer">
    <footer class="footer mt-auto py-3">
      <div class="container">
        <h5 class="text-center">Kanavu.help</h5>
        <div class="row text-center">
          <div class="col-12">
            <div class="footer1">
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