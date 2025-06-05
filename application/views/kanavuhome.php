
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <style>
    body {
      font-family: 'Sen', sans-serif;
    }
      /* count running */
    html {
      scroll-behavior: smooth;
    }
    .stat-box {
      padding: 20px;
      transition: background-color 0.3s;
    }
    .stat-box:hover {
      background-color: #f9f9f9;
    }
    .stat-box img {
      width: 50px;
      height: 50px;
    }
    h2.count-up {
    /*   font-size: 2.5rem; */
      font-weight: bold;
    }
    /* carousel img */
    .carousel-item {
      height: 100vh;
    }

    .bi-share {
      font-size: 1.3rem;
      /* Adjust the size of the share icon */
      cursor: pointer;
      color: #ED3136;
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
      background-color: #ED3136;
      color: white;
      font-size: 16px;
      padding: 8px 20px;
      border-radius: 25px;
      text-decoration: none;
      transition: 0.3s background-color;
    }

    /* start a kanavu button */
    .startkanavu-button {
      border: 1px solid #ED3136;
      color: #ED3136;
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
    .imgtext1 p,
    .imgtext2 p{
        font-size: 40px;
      }

    .imgtext1 span,
    .imgtext2 span {
      color: #ED3136;
      font-weight: bolder;
      font-size: 35px;
    }

    .btn-3,
    .btn-4 {
      background-color: #ED3136;
      color: white;
      border-radius: 20px;
    }

    /* cards section */
    .card {
      width: 100%;
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

    /* .carousel-control-prev {
      margin-top: -300px;
    }

    .carousel-control-next {
      margin-top: -300px;
    } */

    .card-title {
      font-size: 18px;
      font-weight: bold;
    }

    .card_button {
      border: 1px solid rgba(174, 168, 168, 1);
      border-radius: 25px;
    }

    .donate_btn {
      border: 1px solid #ED3136;
      color: #ED3136;
      border-radius: 25px;
    }

    /* readmore_button in card */
    .readmore_btn {
      border: 1px solid #ED3136;
      color: #ED3136;
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
      background-color: #ED3136;
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

      #carouselExampleSlidesOnly{
        height:100%;
      }
    }

    /* For larger screens, display three cards per slide */
    @media (min-width: 769px) {
      #carouselExampleSlidesOnly{
        
        margin-top:30px;
        
      }
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
      /* background-color: #e9ecef; */
      /* Soft light gray, or choose a color that fits your design */
      padding: 40px 0;
      /* Add some padding for breathing room */
      border-radius: 10px;
      /* Rounded corners */
      /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
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
    background: url('assets/img/1.svg') center center/cover no-repeat;
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
.carousel-item {
    padding-left: 0px;
    padding-right: 0px;
}
.carousel-inner {
    width: 100%;
    overflow: hidden;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: black !important;
    border-radius: 50%;
    width: 30px;
    height: 30px;
}

@media (max-width: 768px) {
    .carousel-item .card-container {
        margin-bottom: 15px;
    }
    .carousel-inner {
        flex-wrap: nowrap;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
    }
}
@media (max-width: 767px) {
  .col-lg-4, .col-md-6 {
    flex: 0 0 100%;  /* On mobile view, each card takes the full width */
    max-width: 100%;
  }
}
.custom-dropdown {
    position: relative;
    display: inline-block;
    width: 45%;
  }

  .custom-dropdown select {
    appearance: none; /* Remove the default browser styling */
    -webkit-appearance: none; /* For Safari */
    -moz-appearance: none; /* For Firefox */
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    width: 100%;
    font-size: 16px;
    cursor: pointer;
  }

  .custom-dropdown::after {
    content: '▼'; /* Add a dropdown icon */
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    pointer-events: none; /* Make the icon unclickable */
    font-size: 14px;
    color: #666;
  }
  /* kani*/
 




.card-container {
    transition: transform 0.2s;
}
.card-container:hover {
    transform: translateY(-5px);
}
/* .card {
    width: 100%;
    max-width: 300px;
    height: 480px;
    border-radius: 15px;
    /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15), 0 8px 30px rgba(0, 0, 0, 0.1); 
    overflow: hidden;
} */
.card {
    width: 100%;
    max-width: 300px;
    height: 480px;
    border-radius: 15px;
    box-shadow: none; /* Explicitly remove default box-shadow */
    overflow: hidden;
}
.card:hover {
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2), 0 10px 40px rgba(0, 0, 0, 0.15);
}
.card-img-top {
    width: 100%;
    height: 230px;
    object-fit: cover;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}
.card-body {
    padding: 15px;
    display: flex;
    flex-direction: column;
}
.card-title {
    font-size: 18px;
   /*  font-weight: bold; */
    margin-bottom: 10px;
    line-height: 1.3;
    color:rgb(22, 24, 26); 
    
}
.card-text {
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 8px;
}
.progress {
    height: 8px; /* Thinner progress bar to match the image */
    border-radius: 5px;
    background-color: #f8d7da; /* Light pink background */
}
.progress-bar {
    background-color: #EB2D32; /* Red color for progress */
}
.btn.bg-danger {
    border-radius: 25px;
    font-size: 14px;
    padding: 8px 20px; /* Adjusted padding for better button size */
    background-color: #EB2D32;
    border: none;
}
.btn.bg-danger:hover {
    background-color: #d1262b; /* Slightly darker red on hover */
}

/* Single Row for Supporters and Created by */
.supporters-section, .created-by-section {
   
    display: flex;
    align-items: center;
   
}
.supporters-section {
    flex: 10; /* Give more space to Supporters */
    min-width: 0;
    overflow: hidden; /* Prevent overflow */
}
.created-by-section {
    flex: 8; /* Minimize space for Created by */
    justify-content: flex-end;
   min-width: 0;
}

.supporters-section p, .created-by-section p {
    font-size: 14px;
   /* color: #6c757d;  Muted text color */
   color:black;
}
.supporters-section p {
    display: flex;
    align-items: center;
    white-space: normal; /* Allow wrapping if needed */
}
.supporters-section .supporter-count {
    font-weight: bold;
    font-size: 16px;
    color:black; /* Bold the number */
    margin-right: 4px; /* Space between number and "Supporters" */
}
/* Truncate Text with Ellipsis */
.truncate-text {
    position: relative;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 60px;
    cursor: pointer;
}
.truncate-text1 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 100px;
    text-align: center;
}
.truncate-text:hover:after {
    content: attr(data-fulltext);
    position: absolute;
    top: -30px;
    left: 0;
    background-color: #333;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    white-space: normal;
    z-index: 10;
    font-size: 14px;
    max-width: 250px;
    word-break: break-word;
}

/* Share Icon and Text */
.share-section {
    display: flex;
    align-items: center;
    cursor: pointer;
}
.share-section i {
    color: #EB2D32;
    font-size: 16px;
}
.share-section span {
    color: #EB2D32;
    font-size: 14px;
    font-weight: 500;
    margin-left: 5px;
}

/* Mobile Responsiveness */
@media (max-width: 767px) {
    .card {
        max-width: 100%;
        height: auto;
        margin: 0 auto 15px;
    }
    .card-img-top {
        height: 200px;
    }
    .card-title {
        font-size: 16px;
    }
    .card-text {
        font-size: 12px;
    }
    .supporters-section p, .created-by-section p {
        font-size: 12px;
    }
    .supporters-section i, .created-by-section i {
        font-size: 14px;
    }
    .created-by-section .rounded-circle {
        width: 25px;
        height: 25px;
    }
    .created-by-section .bi-person-fill {
        font-size: 16px;
    }
    .btn.bg-danger {
        font-size: 12px;
        padding: 6px 15px;
    }
    .share-section span {
        font-size: 12px;
    }
}
  </style>
</head>

<body>
  <nav id="header" class="navbar navbar-expand-lg bg-light py-4 fixed-top">
    
  </nav>
<br>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
         <img src="<?= base_url('assets/img/old1.png') ?>" class="d-block w-100" alt="Image 1"> 
        <div class="imgtext1 mt-5 pt-5">
          <p>THE <strong>WORLD'S <br>PLATFORM</strong> FOR <br>
            <span>HELP</span>
          </p>
          <div class="imgtext11">
            <ul>
              <li style="font-weight: bold;margin-left">"Empowering Lives, Defeating diseases & disasters"</li>
              <!-- <li>Join Us in the Fight & Healing.</li><br> -->
              <li>
                <a href="<?= base_url('/individual') ?>">
                  <button type="button" class="btn border rounded-pill mt-3 px-4 py-2 shadow-sm" style="background-color:#ED3136 ; color: white; border: none;">
                    Start a Fundraiser
                  </button>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>
<br>
      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/old2.png') ?>" class="d-block w-100" alt="Image 2">
        <div class="imgtext2 mt-5 pt-5">
          <p>WE ARE ON A MISSION TO <br>
            <span>HELP THE WORLD</span>
          </p>
          <div class="imgtext22">
            <ul>
              <li style="font-weight: bold;">"Empowering Lives, Defeating diseases & disasters"</li>
              <!-- <li>Join Us in the Fight & Healing.</li><br> -->
              <li>
                <a href="<?= base_url('/individual') ?>">
                  <button type="button" class="btn border rounded-pill mt-3 px-4 py-2 shadow-sm" style="background-color: #ED3136; color: white; border: none;">
                    Start a Fundraiser
                  </button>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>



<section class="stats-section py-5">
  <div class="container">
    <div class="row text-center">
      <!-- Fund Raised Column -->
      <div class="col-12 col-md-3">
        <div class="stat-box">
          <img src="<?= base_url('assets/img/money-bag1.png') ?>" alt="Icon" class="mb-3">
          <!-- <h2 class="count-up" data-target="3000" data-suffix="M">0</h2> -->
           <!-- <h2 class="count-up" data-target="<?= $total_fund ?>" data-suffix="M">0</h2> data-prefix="₹"-->
           <h2 class="count-up" data-target="<?= html_escape($total_fund) ?>"  data-prefix="₹">0</h2>
          <p>Total fund raised</p>
        </div>
      </div>
      <!-- Successful Events Column -->
      <div class="col-12 col-md-3">
        <div class="stat-box">
            <img src="<?= base_url('assets/img/calendar1.png') ?>" alt="Icon" class="mb-3">
          <!-- <h2 class="count-up" data-target="250" data-suffix="+">0</h2> -->
          <h2 class="count-up" data-target="<?= $total_events ?>" data-suffix="+">0</h2>
          <p>Successful events</p>
        </div>
      </div>
      <!-- Volunteers Column -->
      <div class="col-12 col-md-3">
        <div class="stat-box">
          <img src="<?= base_url('assets/img/hand1.png') ?>" alt="Icon" class="mb-3">
          <h2 class="count-up" data-target="550" data-suffix="+">0</h2>
           <!-- <h2 class="count-up" data-target="<?= $total_volunteers ?>" data-suffix="+">0</h2> -->
          <p>Worldwide volunteers</p>
        </div>
      </div>
      <!-- Donors Column -->
      <div class="col-12 col-md-3">
        <div class="stat-box">
          <img src="<?= base_url('assets/img/volunter1.png') ?>" alt="Icon" class="mb-3">
          <!-- <h2 class="count-up" data-target="500" data-suffix="+">0</h2> -->
           <h2 class="count-up" data-target="<?= $total_donors ?>" data-suffix="+">0</h2>
          <p>Our donors</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <div class="container-xxl mt-5">
  
    <div class="h4 text-center">BE THE REASON OF<span style="color:#ED3136"> SOMEONE SMILES</span></div>
    <div style="display: flex; justify-content: center;">
      <img class="w-25 heart" src="assets/img/underline.svg" alt="no image">
    </div>
    <div class="p text-center">We try our best to help helpless people,<br>Donate to charity causes around the world.</div>

  </div><br>
<!-- Fundraiser Cards with Fixed Size -->  <!--kani-->
<div class="container pt-4">
  <div class="row g-4" id="fundraiserCards">
    <?php if (!empty($fundraisers)): ?>
        <?php 
        // Sort fundraisers by progress percentage in ascending order
        function getProgressPercentage($fundraiser) {
            return $fundraiser->amount == 0 ? 0 : ($fundraiser->raised_amount / $fundraiser->amount) * 100;
        }

        // Sort the fundraisers by progress percentage in ascending order
       /*  usort($fundraisers, function($a, $b) {
            return getProgressPercentage($a) <=> getProgressPercentage($b);
        }); */

 usort($fundraisers, function($a, $b) {
        return $b->priority <=> $a->priority; // High priority first
     });

       


        // Show only first 8 fundraisers initially
        $displayedFundraisers = array_slice($fundraisers, 0, 8);
        foreach ($displayedFundraisers as $fundraiser): 
            // Set a fixed dummy image if the cover image is empty or does not exist
            $imageSrc = !empty($fundraiser->cover_image) && file_exists('assets/individualform_img/' . $fundraiser->cover_image) 
                        ? base_url('assets/individualform_img/' . htmlspecialchars($fundraiser->cover_image, ENT_QUOTES)) 
                        : base_url('assets/img/funddonate.jpg'); // Dummy image path
        ?>
            <div class="col-12 col-lg-3 col-md-6 mb-3 d-flex card-container" data-category="<?= htmlspecialchars($fundraiser->category, ENT_QUOTES) ?>">
                <a href="<?= base_url('helpus/'.str_replace(' ','-',$fundraiser->name).'-'. $fundraiser->id) ?>" style="text-decoration:none;color:black">
                    <div class="card h-100 fixed-card">
                        <!-- Fixed Height for Image -->
                        <img src="<?= $imageSrc ?>" 
                             class="card-img-top fixed-card-img img-placeholder">
                        <div class="card-body d-flex flex-column">
                            <!-- Cause Heading with overflow handling -->
                            <div class="flex-grow-1" style="min-height: 50px;">
                                <!-- <p class="card-title"> -->
                                  <p class="card-title" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                    <?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>
                                </p>
                            </div>

                            <!-- Supporters and Created by in a Single Row -->
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <!-- Supporters Section -->
                                <!-- <div class="d-flex align-items-center supporters-section">
                                    <i class="bi bi-heart-fill me-1" style="color: #EB2D32;"></i> -->
                                    
                            <div class="d-flex align-items-center supporters-section">
                                      <img src="<?= base_url('assets//img/heart1.svg') ?>" width="16" height="16" alt="Person Icon"style="margin-right: 6px;" >
                                    
                               
                                    <p class="mb-0 text-muted">
                                         <span class="supporter-count"><?= htmlspecialchars($fundraiser->supporters_count ?? 0) ?></span>
                                       <!--  <span class="supporter-count">13</span> -->
                                        Supporters
                                    </p>
                                </div>
                                <!-- Created by Section (Unchanged) C:\xampp\htdocs\kanavuhelp\assets\img\heart 1.svg-->
                                <div class="d-flex align-items-center created-by-section">
                                   
                                         <!-- <div class="d-flex align-items-center justify-content-center me-2"
                                           style="width: 30px; height: 25px; background-color: #EB2D32; border-radius: 50%;">
                                        <i class="bi bi-person-fill" style="color: white; font-size: 16px;"></i> -->
                                        <div class="d-flex align-items-center justify-content-center me-2">
                            
                                      <img src="<?= base_url('assets//img/Frame1000003573.svg') ?>" width="24" height="24" alt="Person Icon">

                
                                    </div>
                                    <p class="mb-0 text-muted truncate-text1" 
                                       data-fulltext="Created by <?= htmlspecialchars($fundraiser->created_by, ENT_QUOTES) ?>">
                                        <span style="font-size: 12px; color: #888;">Created by</span><br>
                                        <?= htmlspecialchars($fundraiser->created_by, ENT_QUOTES) ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Progress Bar and Raised Amount -->
                            <?php
                            $progress_percentage = getProgressPercentage($fundraiser);
                            ?>
                            <div class="flex-grow-1 mt-2" style="min-height: 60px;">
                                <p class="card-text">
                                     <strong> 
                                        ₹ <?= number_format(min($fundraiser->raised_amount, $fundraiser->amount)) ?></strong> <span style="color:#666;"> raised out of ₹ <?= number_format($fundraiser->amount) ?>
                                   </span> <!--  -->
                                </p>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-danger" 
                                         style="width: <?= $progress_percentage ?>%;" 
                                         role="progressbar" 
                                         aria-valuenow="<?= $progress_percentage ?>" 
                                         aria-valuemin="0" 
                                         aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <!-- Donate Button and Share -->
                            <div class="d-flex align-items-center mt-auto">
                                <?php if ($fundraiser->days_left >= 0 && (!$fundraiser->hide_donation_button)) : ?>
                                    <a href="#" class="btn bg-danger text-white btn-sm" onclick="setCauseId(<?= $fundraiser->id ?>); openDonationModal();">Donate Now</a>
                                    <div class="share-section ms-auto" 
                                         onclick="shareCause('<?= base_url('helpus/' . str_replace(' ', '-', $fundraiser->name) . '-' . $fundraiser->id) ?>', 
                                                          '<?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>', 
                                                          '<?= $imageSrc ?>')">
                                        <i class="bi bi-share"></i>
                                        <span>Share</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-center">No fundraisers available at the moment.</p>
    <?php endif; ?>
  </div>
</div>
<!-- kani1 -->


 <!--kani start alignment-->

  <!-- See More Button -->
  <!-- See More Button -->
<?php  if (!empty($fundraisers)): ?>   
<div class="text-center mt-3">
  <a href="<?= base_url('/donate') ?>" class="btn" style="background-color: white; border: 1px solid #ED3136; color: #ED3136; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    See More Causes
  </a>
</div>
<?php endif; ?>

</div><br><br>

<script>
let allFundraisers = <?= json_encode($fundraisers) ?>;
let currentIndex = 3; // Already shown 3 cards

function loadMoreFundraisers() {
    const fundraiserContainer = document.getElementById('fundraiserCards');
    
    // Display next 3 fundraisers
    const nextFundraisers = allFundraisers.slice(currentIndex, currentIndex + 3);
    nextFundraisers.forEach(fundraiser => {
      // Use the same logic to set the dummy image if the cover image is missing
      const imageSrc = fundraiser.cover_image 
        ? '<?= base_url('assets/individualform_img/') ?>' + fundraiser.cover_image 
        : '<?= base_url('assets/img/blogs.png') ?>'; // Dummy image for missing images

      const card = document.createElement('div');
      card.classList.add('col-12', 'col-lg-4', 'col-md-6', 'mb-4', 'd-flex', 'card-container');
      card.setAttribute('data-category', fundraiser.category);
      card.innerHTML = `
        <a href="${'<?= base_url('helpus/') ?>' + fundraiser.name.replace(' ', '-') + '-' + fundraiser.id}" style="text-decoration:none;color:black">
          <div class="card fixed-card">
            <img src="${imageSrc}" width="316px" height="230px" class="card-img-top fixed-card-img img-placeholder" alt="no image">
            <div class="card-body d-flex flex-column">
              <p class="card-title">${fundraiser.cause_heading}</p>
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text text-muted mb-0">for ${fundraiser.name}</p>
                <button type="button" class="btn card_button text-muted ms-auto" style="border: none; background: none; box-shadow: none;">${fundraiser.category}</button>
              </div>
              <p class="card-text">
                <strong>₹ ${new Intl.NumberFormat().format(Math.min(fundraiser.raised_amount, fundraiser.amount))} raised out of ₹ ${new Intl.NumberFormat().format(fundraiser.amount)}</strong>
              </p>
              <div class="progress mb-2">
                <div class="progress-bar" style="width: ${(fundraiser.raised_amount / fundraiser.amount) * 100}%" role="progressbar" aria-valuenow="${(fundraiser.raised_amount / fundraiser.amount) * 100}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex align-items-center mt-auto">
                ${fundraiser.days_left >= 0 && !fundraiser.hide_donation_button ? ` 
                  <a href="#" class="btn donate_btn no-hover" onclick="setCauseId(${fundraiser.id})">Donate Now</a>
                   <i class="bi bi-share ms-2" onclick="shareCause('${'<?= base_url('helpus/') ?>' + fundraiser.name.replace(' ', '-') + '-' + fundraiser.id}', '${fundraiser.cause_heading}', '${imageSrc}')"></i>
                ` : ''}
              </div>
            </div>
          </div>
        </a>
      `;
      fundraiserContainer.appendChild(card);
    });
    
    currentIndex += 3;
    
    // Hide the button if all fundraisers are shown
    if (currentIndex >= allFundraisers.length) {
      document.getElementById('seeMoreBtn').style.display = 'none';
    }
  }

function setCauseId(causeId) {
  document.getElementById('cause_id').value = causeId;
}
function shareCause(url, title, imgurl) {
    if (navigator.share) {
        // Use Web Share API if available
        navigator.share({
            title: title,
            text: `Check out this cause: ${title}`,
            url: url
        }).then(() => {
            console.log('Successfully shared');
        }).catch((error) => {
            console.error('Error sharing:', error);
        });
    } else {
        // Fallback to social media links if Web Share API is not supported
        const encodedUrl = encodeURIComponent(url);
        const encodedTitle = encodeURIComponent(`Check out this cause: ${title}`);
        const encodedImage = encodeURIComponent(imgurl);

        // Create share URLs
        const whatsappUrl = `https://api.whatsapp.com/send?text=${encodedTitle}%20${encodedUrl}%20${encodedImage}`;
        const facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodedUrl}&quote=${encodedTitle}`;
        const pinterestUrl = `https://pinterest.com/pin/create/button/?url=${encodedUrl}&media=${encodedImage}&description=${encodedTitle}`;

        // Display the share options to the user (you can use a modal or a dropdown)
        const shareOptions = `
            <div>
                <a href="${whatsappUrl}" target="_blank">Share on WhatsApp</a><br>
                <a href="${facebookUrl}" target="_blank">Share on Facebook</a><br>
                <a href="${pinterestUrl}" target="_blank">Share on Pinterest</a>
            </div>
        `;

        // You can append this HTML to a modal or any container you have for sharing options
        document.body.insertAdjacentHTML('beforeend', shareOptions);
    }
}
function openDonationModal() {
    // Show the modal using Bootstrap's modal method
    var donationModal = new bootstrap.Modal(document.getElementById('donationModal'));
    donationModal.show();
}
</script>

  <div class="position-relative" id="how-it-works-section">
    <div class="container-xxl ">

      <div class="h4 worktext" style="text-align:center;">START A FUNDRAISER IN <span
          style="color:#ED3136"> THREE SIMPLE STEPS</span></div>
    </div>
    <div style="display: flex; justify-content: center;">
        <img class="w-25 heart" src="assets/img/underline.svg" alt="no image">
      </div>
    <!-- <img src="<?= base_url('assets/img/steps.png') ?>" class="steps_img"
      style="object-fit: cover; width: 100%; margin-top: -200px;"> -->
    <div class="container " style="display:flex; justify-content:center">
      <div class="row justify-content-center" style="margin-top:65px;">
        <!-- Step 1 -->
        <div class="col-12 col-lg-4 text-center mb-4">
          <div class="step-container step-1 text-center">
            <div class="background-overlay"></div>
            <div class="step-icon">
              <!-- Add the corresponding icon here -->
            </div>
            <div class="step_1">
              <h2 class="mt-3">01</h2>
            </div>
            <h3 class="mt-5">Start your fundraiser</h3>
            <img src="<?= base_url('assets/img/Group 27.png') ?>" class="fundraiser_img mt-5 pt-3">
          </div>
        </div>

        <!-- Step 2 -->
        <div class="col-12 col-lg-4 text-center mb-4">
          <div class="step-container step-2 text-center">
            <div class="background-overlay"></div>
            <div class="step-icon">
              <!-- Add the corresponding icon here -->
            </div>
            <div class="step_2">
              <h2 class="mt-3">02</h2>
            </div>
            <h3 class="mt-5">Share your fundraiser</h3>
            <img src="<?= base_url('assets/img/Group 28.svg') ?>" class="fundraiser_img mt-5 pt-3">
          </div>
        </div>

        <!-- Step 3 -->
        <div class="col-12 col-lg-4 text-center mb-4">
          <div class="step-container step-3 text-center">
            <div class="background-overlay"></div>
            <div class="step-icon">
              <!-- Add the corresponding icon here -->
            </div>
            <div class="step_3">
              <h2 class="mt-3">03</h2>
            </div>
            <h3 class="mt-5">Withdraw Funds</h3>
            <img src="<?= base_url('assets/img/Group 29.svg') ?>" class="fundraiser_img mt-5 pt-3">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <section class="stats-section py-5">
    <div class="container">
      <div class="row text-center">
        <!-- Fund Raised Column 
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/money-bag.svg') ?>" alt="Icon" class="mb-3">
            <h2>30M</h2>
            <p>Total fund raised</p>
          </div>
        </div>
        <!-- Successful Events Column 
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/calendar.svg') ?>" alt="Icon" class="mb-3">
            <h2>250+</h2>
            <p>Successful events</p>
          </div>
        </div>
        <!-- Volunteers Column 
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/hand.svg') ?>" alt="Icon" class="mb-3">
            <h2>550+</h2>
            <p>Worldwide volunteers</p>
          </div>
        </div>
        <!-- Donors Column 
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/volunter.svg') ?>" alt="Icon" class="mb-3">
            <h2>500+</h2>
            <p>Our donors</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->




 <!-- counters column -->

  
  <!-- <div class="bg-light">
    <div class="container-xxl mt-5 pt-5">
      <div class="h4" style="text-align:center">LAST CHARITY BLOGS</div>
      <div style="display: flex; justify-content: center;">
        <img class="img-fluid heart" src="assets/img/underline.svg" alt="no image">
      </div>
      <div class="p" style="text-align:center">We exist for non-profits, social enterprises, community groups,<br>
        activist and individual citizens that are making.</div>
    </div><br>
    <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
      <div class="carousel-inner"> -->
  <!-- First slide (active) -->
  <!-- <div class="carousel-item active">
          <div class="row"> -->
  <!-- Show 1 card on mobile and 3 cards on large screens -->
  <!-- <div class="col-12 col-md-4 mb-4">
              <div class="card blogs_card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 1">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 2">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 3">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div> -->

  <!-- Second slide -->
  <!-- <div class="carousel-item">
          <div class="row">
            <div class="col-12 col-md-4 mb-4">
              <div class="card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 4">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 5">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-4 d-none d-md-block">
              <div class="card">
                <img src="<?= base_url('assets/img/blog1 1.png') ?>" class="card-img-top" alt="Image 6">
                <div class="card-body">
                  <div class="card_icons d-flex" style="color:#E01A2B">
                    <i class="fa-regular fa-calendar-days fs-4 me-2"></i>
                    <p class="text-muted mb-0">21 Jan, 2020</p>
                    <i class="fa-regular fa-user fs-5 ms-auto me-2"></i>
                    <p class="text-muted mb-0">By: Admin</p>
                  </div>
                  <h5 class="card-title mt-2">Donate for nutrition less poor people in Local</h5>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                  <a href="#" class="btn readmore_btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

  <!-- Controls -->
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> -->


  <div id="footer">
    
  </div>

  <!-- Donation Modal -->
  <div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Donation Form -->
        <form id="donationForm" method="POST" autocomplete="off" action="<?= base_url('kanavuhelp/processDonation') ?>" onsubmit="return validateForm()">
          <!-- Hidden fields to store cause ID and user ID -->
          <input type="hidden" name="cause_id" id="cause_id" value="">
          <input type="hidden" name="user_id" id="user_id" value="">

          <!-- Donation Form Fields -->
          <div class="text-center mb-3">
            <img src="<?= base_url('assets/img/handwithheart.png') ?>" alt="handwithheart_img" width="20%">
          </div>
          <div class="text-center mb-3">
            <img src="<?= base_url('assets/img/HDFC QRCode.jpg') ?>" alt="HDFC QR Code" width="50%">
          </div>

          <div class="text-center mt-2">
            <h5 class="modal-title text-danger fw-bold" id="donationModalLabel">Make a Secure Donation</h5>
          </div>

          <!-- Currency and Amount -->
          <div class="mb-3 row">
            <div class="col-md-5 offset-md-1">
              <label for="currency" class="form-label"></label>
              <!-- <select class="form-select" name="currency_type" id="currency" required>
                <option value="" disabled selected>Select Currency</option>
                <option>INR</option>
                <option>USD</option>
              </select> -->
            </div>
           
          </div>

          <div class="mb-3">
              <label for="amount" class="form-label">Enten Amount</label>
              <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter amount*" required>
              <p id="error5" class="text-danger small mt-1"></p>
            </div>

              <!-- Transaction ID -->
          <div class="mb-3">
            <label for="transactionid" class="form-label">Transaction ID</label>
            <input type="text" name="transactionid" class="form-control" id="transactionid" placeholder="Enter UPI Transaction ID*" required>
            <p id="error4" class="text-danger small mt-1"></p>
          </div>
           <!-- Phone Number -->
           <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" name="phoneno" class="form-control" id="phone" maxlength="10" placeholder="Enter your phone number*" required>
            <p id="error3" class="text-danger small mt-1"></p>
          </div>
          <!-- Email 
          <div class="mb-3">
            <label for="email" class="form-label">Email ID</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your EmailID*" required>
            <p id="error7" class="text-danger small mt-1"></p>
          </div>-->

          <!-- Name 
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" maxlength="40" placeholder="Enter Your Name*" required>
            <p id="error6" class="text-danger small mt-1"></p>
          </div>-->

          <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" maxlength="40" placeholder="Enter Your Name*" required>
    <p id="error6" class="text-danger small mt-1"></p>
</div>

<script>
    /* document.getElementById('name').addEventListener('input', function(e) {
        // Replace invalid characters with an empty string
        this.value = this.value.replace(/[^a-zA-Z\s.]/g, '');

        // Optional: Display error message if needed
        const errorMessage = document.getElementById('error6');
        if (this.value.length > 0 && !/^[a-zA-Z\s.]*$/.test(this.value)) {
            errorMessage.textContent = "Name can only contain letters, spaces, and dots.";
        } else {
            errorMessage.textContent = "";
        }
    }); */
</script>


          <!-- City -->
          <div class="mb-3">
            <label for="donorcity" class="form-label">City</label>
            <input type="text" name="city" class="form-control" id="donorcity" maxlength="40" placeholder="Enter Your City*" required>
            <p id="error8" class="text-danger small mt-1"></p>
          </div>

         

        

          <!-- Confirm Button -->
          <div class="d-flex justify-content-center">
            <button id="donatenowbtn" type="submit" class="btn btn-danger fw-bold w-50 rounded-3">
              Confirm Payment ₹
            </button>
          </div>
        </form>

        <!-- Terms and Privacy Policy -->
        <p class="text-center small mt-2">By continuing, you agree to our <a href="<?= base_url('/terms_of_use') ?>">Terms of Service</a> & <a href="<?= base_url('/privacy_policy') ?>">Privacy Policy</a></p>
      </div>
    </div>
  </div>
</div>

<!-- Donation Success Modal -->
<div class="modal fade" id="donationSuccess" tabindex="-1" aria-labelledby="donationSuccessLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-danger text-white">
      <div class="modal-header">
        <h5 class="modal-title" id="donationSuccessLabel">Donation Verification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Thanks for donating to us!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="donationRedirectBtn">OK</button>
      </div>
    </div>
  </div>
</div>


<!--login alert modal-->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>You need to log in to continue with the donation.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="loginRedirectBtn">OK</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade"  id="donationSuccess" tabindex="-1" aria-labelledby="donationSuccessLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-red-modal">
      <div class="modal-header">
        <h5 class="modal-title" id="donationSuccessLabel">Donation Verification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Thanks for donating us</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="donationRedirectBtn">OK</button>
      </div>
    </div>
  </div>
</div>

<script>
  // Simulate user login status (from backend or session)
  var isLoggedIn = <?= json_encode($is_logged_in); ?>; // Backend should set this

  $.ajax({
      type:"get",
      url:"kanavuhelp/getHeader",
      success:(result)=>{
           document.getElementById("header").innerHTML = result;
           let entry = "<?=$this->session->userdata("entry")?>" ? "<?=$this->session->userdata("entry")?>" : 0;
           console.log(entry);
           if(entry > 0){
           document.getElementById("kanavuhomepage").classList.add("text-danger","fw-bold");
           }
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


  // Handle Donate button click using event delegation
  document.querySelector('.container').addEventListener('click', function(event) {
    if (event.target.classList.contains('donate_btn')) {
      event.preventDefault(); // Prevent default link behavior

    /*  if (!isLoggedIn) {
        const baseUrl = "<?= base_url('/login') ?>"; 
        // Ask for confirmation before redirecting to the login page
        var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
      loginModal.show();
 
      // Redirect to login page with return URL on OK button click
      document.getElementById('loginRedirectBtn').addEventListener('click', function() {
        var currentUrl = window.location.href;

// Redirect to the login page with the returnUrl parameter
        window.location.href = `${baseUrl}?returnUrl=${encodeURIComponent(currentUrl)}`;
      });// Replace with your actual login URL
        
      } else {*/
        // Show the donation modal if logged in
        var donationModal = new bootstrap.Modal(document.getElementById('donationModal'));
        donationModal.show();
      //}
    }
  });

    // Handle modal close event to ensure page is accessible
  var donationModal = document.getElementById('donationModal');
  donationModal.addEventListener('hidden.bs.modal', function (event) {
    // This will trigger when the modal is fully closed
    document.body.classList.remove('modal-open'); // Ensure body is not still marked as modal-open
    var modalBackdrop = document.querySelector('.modal-backdrop');
    if (modalBackdrop) {
      modalBackdrop.remove(); // Remove backdrop if still present
    }

    // Reset form fields when the modal is closed
    donationModal.querySelector('form').reset();
  });
</script>

<script>
// Real-time validation function
function validateField(fieldId, errorId, validationFn, errorMessage, eventType = 'input') {
  const field = document.getElementById(fieldId);
  const errorElement = document.getElementById(errorId);

  field.addEventListener(eventType, () => {
    if (field.value === '') {
      errorElement.textContent = 'Please enter a value.';
    } else if (!validationFn(field.value)) {
      errorElement.textContent = errorMessage;
    } else {
      errorElement.textContent = ''; // Clear error if validation passes
    }
  });
}

// Validation functions
//const isCurrencySelected = (value) => value !== '';
const isAmountValid = (value) => parseFloat(value) > 0 && !isNaN(value);
const isPhoneNumberValid = (value) => /^[6-9]\d{9}$/.test(value);
const isTransactionIdValid = (value) => /^[1-9]\d{11}$/.test(value);
/* const isNameValid = (value) => /^[a-zA-Z]{3,}\s*$/.test(value); */
const isNameValid = (value) => /^[a-zA-Z\s.]+$/.test(value) && value.trim().length >= 3;

//const isEmailValid = (value) => /^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(value);

// Attach real-time validation for each field
window.onload = () => {
 // validateField('currency', 'error5', isCurrencySelected, 'Select a currency.', 'change');
  validateField('amount', 'error8', isAmountValid, 'Amount must be greater than 0.');
  validateField('name', 'error6', isNameValid, 'Enter Valid Name');
 // validateField('email', 'error7', isEmailValid, 'Enter a valid Email ID.');
  validateField('phone', 'error3', isPhoneNumberValid, 'Phone number must start with 6, 7, 8, or 9 and be exactly 10 digits.');
  validateField('transactionid', 'error4', isTransactionIdValid, 'Transaction ID must be exactly 12 digits.');



};

// Final validation and form submission
document.getElementById('donationForm').onsubmit = function (event) {
  event.preventDefault(); // Prevent form submission for manual handling
  let isValid = true;

  // Perform final validation
 /*  if (!isCurrencySelected(document.getElementById('currency').value)) {
    document.getElementById('error5').innerText = 'Select a currency.';
    isValid = false;
  } */
  if (document.getElementById('amount').value !== '') {
    if (!isAmountValid(document.getElementById('amount').value)) {
      document.getElementById('error8').innerText = 'Amount must be greater than 0.';
      isValid = false;
    }
  }
  if (!isNameValid(document.getElementById('name').value)) {
    document.getElementById('error6').innerText = 'Enter Valid Name';
    isValid = false;
  }
 /*  if (!isEmailValid(document.getElementById('email').value)) {
    document.getElementById('error7').innerText = 'Enter a valid Email ID.';
    isValid = false;
  } */
  if (!isPhoneNumberValid(document.getElementById('phone').value)) {
    document.getElementById('error3').innerText = 'Phone number must start with 6, 7, 8, or 9 and be exactly 10 digits.';
    isValid = false;
  }
  if (!isTransactionIdValid(document.getElementById('transactionid').value)) {
    document.getElementById('error4').innerText = 'Transaction ID must be exactly 12 digits.';
    isValid = false;
  }

  if (!isValid) {
    return; // Stop submission if validation fails
  }

  // AJAX Request to Server
  const formData = new FormData(this);

  fetch('/kanavuhelp/processDonation', {
    method: 'POST',
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.status === 'error') {
        document.getElementById('error4').innerText = data.message;
      } else if (data.status === 'success') {
        // Hide the donation modal if visible
        const donationModalElement = document.getElementById('donationModal');
        const donationModal = bootstrap.Modal.getOrCreateInstance(donationModalElement);
        if (donationModalElement.classList.contains('show')) {
          donationModal.hide();
        }

        // Show success modal
        const successModal = new bootstrap.Modal(document.getElementById('donationSuccess'));
        successModal.show();

        // Redirect on button click in the success modal
        document.getElementById('donationRedirectBtn').addEventListener('click', function () {
          window.location.href = data.redirect;
        });
      }
    })
    .catch(() => {
      document.getElementById('error4').innerText = 'An unexpected error occurred. Please try again.';
    });
};



//section counter running
  function animateCounter(el) {
    const target = +el.getAttribute('data-target');
     const prefix = el.getAttribute('data-prefix') || '';
    const suffix = el.getAttribute('data-suffix') || '';
    const duration = 2000; // Total duration of the animation in ms
    const startTime = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const value = Math.floor(progress * target);

    //  el.textContent = value.toLocaleString() + suffix;
   el.textContent = prefix + value.toLocaleString('en-IN') + suffix;

      if (progress < 1) {
        requestAnimationFrame(update);
      }
    }

    requestAnimationFrame(update);
  }

  const counters = document.querySelectorAll('.count-up');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target); // Prevent re-trigger
      }
    });
  }, {
    threshold: 0.5
  });

  counters.forEach(counter => observer.observe(counter));

   // Add hover event listener to each stat-box
  document.querySelectorAll('.stat-box').forEach(box => {
    const counter = box.querySelector('.count-up');
    box.addEventListener('mouseenter', () => animateCounter(counter));
  });

</script>

  <!-- Bootstrap JS and dependencies (Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

