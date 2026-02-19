
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>



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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <style>
    body {
      font-family: 'Sen', sans-serif;
    }
    div[data-testid="resolution-label"],
    .resolution-label,
    #resolution-display,
    .viewport-size,
    .responsive-viewer-label {
      display: none !important;
    }
      /* count running */
    html {
      scroll-behavior: smooth;
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
      color: #ed3136;
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
    .nav-link {
      color: black !important;
      /* font-weight: bold; */
    }
    .nav-link.active {
      color: #ed3136 !important;
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
    .imgtext1 p,
    .imgtext2 p{
        font-size: 40px;
      }

    .imgtext1 span,
    .imgtext2 span {
      color: #ed3136;
      font-weight: bolder;
      font-size: 35px;
    }

    .btn-3,
    .btn-4 {
      background-color: #ed3136;
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
      border: 1px solid #ed3136;
      color: #ed3136;
      border-radius: 25px;
    }

    /* readmore_button in card */
    .readmore_btn {
      border: 1px solid #ed3136;
      color: #ed3136;
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
      background-color: #ed3136;
      /* Tomato red color */
    }

    .step-3 {
      background-color: #FFD700;
      /* Yellow color */
    }
    .nav-link.active {
      color: #ed3136 !important;
      font-weight: bold;
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
      border-color: #ed3136;
      /* Tomato red */
      color: #ed3136;
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
      background-color: #ed3136;
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
      border: 3px solid #ed3136;
      border-radius: 50px;
      width: 70px;
      height: 70px;
      margin-top: -65px;
      margin-left: 50%;
      background-color: white;
      color: #ed3136;
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
      background-color: #ed3136;
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
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2), 0 10px 40px rgba(0, 0, 0, 0.15);
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
        /* padding: 15px; */
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
        background-color: #ed3136; /* Red color for progress */
    }
    .btn.bg-danger {
        border-radius: 25px;
        font-size: 14px;
        padding: 8px 20px; /* Adjusted padding for better button size */
        background-color: #ed3136;
        border: none;
    }
    .btn.bg-danger:hover {
        background-color: #ed3136; /* Slightly darker red on hover */
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
        color: #ed3136;
        font-size: 16px;
    }
    .share-section span {
        color: #ed3136;
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

    .carousel-indicators {
      bottom: 10px;
    }
    .carousel-indicators button {
      width: 30px;
      height: 4px;
      background-color: #ff9999 !important;
      border-radius: 2px;
      opacity: 0.5;
      transition: opacity 0.3s, background-color 0.3s;
    }

    .carousel-indicators .active {
      background-color: #ed3136 !important;
      opacity: 1;
    }
    @media (max-width: 768px) {
      .carousel-indicators {
        bottom: -10px !important;
      }
      .carousel-indicators button {
        width: 20px;
        height: 3px;
        
      }
    }

      /* Raising the funds css style by poovarasan */
      .step-circle {
          width: 40px;
          height: 40px;
          border-radius: 50%;
          background-color: #e6e6e6;
          color: black;
          text-align: center;
          line-height: 40px;
          font-weight: bold;
        }

        .step-item.active .step-circle {
          background-color: #ed3136;
          color: white;
        }

        .video-box {
          position: relative;
          border-radius: 20px;
          overflow: hidden;
          box-shadow: 0 0 20px rgba(0,0,0,0.1);
          margin-bottom: 20px;
          width: fit-content;
        }

        #progressContainer {
          width: 100%;
          height: 8px;
          background-color: #ddd;
          border-radius: 4px;
          overflow: hidden;
          margin-top: 8px;
        }

        #progressBar {
          width: 0%;
          height: 100%;
          background-color: #ed3136;
          transition: width 0.1s linear;
        }

        .step-item i {
          visibility: hidden;
        }

        .step-item.active i {
          visibility: visible;
        }

        #playPauseBtn {
          position: absolute;
          top: 10px;
          right: 10px;
          font-size: 20px;
          color: white;
          background-color: rgba(0, 0, 0, 0.5);
          border-radius: 50%;
          width: 36px;
          height: 36px;
          display: flex;
          align-items: center;
          justify-content: center;
          cursor: pointer;
          z-index: 2;
          opacity: 0;
          pointer-events: none;
          transition: opacity 0.3s ease;
        }

        .video-box:hover #playPauseBtn {
          opacity: 1;
          pointer-events: auto;
        }

        #playPauseBtn:hover {
          background-color: rgba(0, 0, 0, 0.7);
          transform: scale(1.1);
        }

        video {
          width: 500px;
          height: auto;
          object-fit: cover;
          display: block;
        }
        .raise_video {
          position: relative;
          width: 100%;
          height: auto;
          overflow: hidden;
        }

        @media (max-width: 768px) {
          .step-circle {
            margin-top: 5px;
          }

          video {
            width: 100%;
            height: auto;
          }
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
        #currency, #amount {
        height: 48px !important;     /* Equal height */
        font-size: 15px;
        padding-left: 12px;
      }
      .note-box {
        background: #ffe6e6;           /* light red background */
        border-left: 4px solid #d9534f; /* red left border */
        padding: 10px 15px;
        border-radius: 6px;
        color: #ed3136;                /* dark red text */
        font-size: 15px;
    }
.navbar-brand img {
    transition: transform 0.3s ease-in-out;
}

.navbar-brand img:hover {
    transform: scale(1.08); /* Slight zoom-in */
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
                            <a id="kanavuhomepage" class="nav-link mx-lg-2 active" href="<?= base_url('/kanavuhome#how-it-works-section') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="aboutuspage" class="nav-link mx-lg-2 " href="<?= base_url('/abouts') ?>">About us</a>
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
<br>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
         <img src="<?= base_url('assets/img/old1.jpg') ?>" class="d-block w-100" alt="Image 1"> 
        <div class="imgtext1 mt-5 pt-5">
          <p>THE <strong>WORLD'S <br>PLATFORM</strong> FOR <br>
            <span style="color: #ed3136;">HELP</span>
          </p>
          <div class="imgtext11">
            <ul>
              <li style="font-weight: bold;margin-left">"Empowering Lives, Defeating diseases & disasters"</li>
              <!-- <li>Join Us in the Fight & Healing.</li><br> -->
              <li>
                <a href="<?= base_url('/individual') ?>">
                  <button type="button" class="btn border rounded-pill mt-3 px-4 py-2 shadow-sm" style="background-color:#ed3136 ; color: white; border: none;">
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
        <img src="<?= base_url('assets/img/old2.jpg') ?>" class="d-block w-100" alt="Image 2">
        <div class="imgtext2 mt-5 pt-5">
          <p>WE ARE ON A MISSION TO <br>
            <span style="color: #ed3136;">HELP THE WORLD</span>
          </p>
          <div class="imgtext22">
            <ul>
              <li style="font-weight: bold;">"Empowering Lives, Defeating diseases & disasters"</li>
              <!-- <li>Join Us in the Fight & Healing.</li><br> -->
              <li>
                <a href="<?= base_url('/individual') ?>">
                  <button type="button" class="btn border rounded-pill mt-3 px-4 py-2 shadow-sm" style="background-color: #ed3136; color: white; border: none;">
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

   <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
  </div>

  <section class="stats-section py-5">
    <div class="container">
      <div class="row text-center">
        <!-- Fund Raised -->
        <div class="col-6 col-sm-6 col-md-3 mb-4 mb-md-0">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/money-bag1.png') ?>" alt="Icon" class="mb-3 img-fluid">
            <h2 class="count-up" data-target="<?= html_escape($total_fund) ?>" data-prefix="₹">0</h2>
            <p>Fund raises</p>
          </div>
        </div>

        <!-- Successful Events -->
        <div class="col-6 col-sm-6 col-md-3 mb-4 mb-md-0">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/calendar1.png') ?>" alt="Icon" class="mb-3 img-fluid">
            <h2 class="count-up" data-target="<?= $total_events ?>" data-suffix="+">0</h2>
            <p>Causes</p>
          </div>
        </div>

        <!-- Volunteers -->
        <div class="col-6 col-sm-6 col-md-3 mb-4 mb-md-0">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/hand1.png') ?>" alt="Icon" class="mb-3 img-fluid">
            <h2 class="count-up" data-target="550" data-suffix="+">0</h2>
            <p>Volunteers</p>
          </div>
        </div>

        <!-- Donors -->
        <div class="col-6 col-sm-6 col-md-3 mb-4 mb-md-0">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/volunter1.png') ?>" alt="Icon" class="mb-3 img-fluid">
            <h2 class="count-up" data-target="<?= $total_donors ?>" data-suffix="+">0</h2>
            <p>Donors</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    /* ===== Base styling ===== */
    .stat-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .stat-box img {
      width: 50px;
      height: 50px;
    }

    .stat-box h2 {
      font-size: 2rem;
      margin: 10px 0;
    }

    .stat-box p {
      margin: 0;
    }

    /* ===== Tablet view (768px–991px) ===== */
    @media (min-width: 768px) and (max-width: 991px) {
      .stats-section .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
        padding: 10px;
      }

      .stat-box img {
        width: 40px;
        height: 40px;
      }

      .stat-box h2 {
        font-size: 1.6rem;
      }

      .stat-box p {
        font-size: 0.9rem;
      }
    }

    /* ===== Mobile view (below 768px) ===== */
    @media (max-width: 767px) {
      .stats-section .row.text-center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .stats-section .col-6 {
        flex: 0 0 100% !important;
        max-width: 100% !important;
        width: 100% !important;
        margin-bottom: 25px !important;
      }

      .stat-box {
        width: 100%;
      }

      .stat-box img {
        width: 45px;
        height: 45px;
        margin-bottom: 10px;
      }

      .stat-box h2 {
        font-size: 1.8rem;
      }

      .stat-box p {
        font-size: 1rem;
      }
    }
  </style>


  <div class="container-xxl">
  
    <div class="h4 text-center mb-4">BE THE REASON OF<span style="color: #ed3136"> SOMEONE SMILES</span></div>
    <div style="display: flex; justify-content: center;">
      <img class="w-25 heart" src="assets/img/underline.svg" alt="no image">
    </div>
    <div class="p text-center mt-4">We try our best to help helpless people,<br>Donate to charity causes around the world.</div>

  </div><br>

  <!-- Fundraiser Cards with Fixed Size -->  <!--kani-->
  <div class="container pt-4"> 
    <div class="row g-4" id="fundraiserCards">
        <?php if (!empty($fundraisers)): ?>

            <?php 
            // Helper to calculate progress
            function getProgressPercentage($fundraiser) {
                if ($fundraiser->amount == 0) return 0;
                return min(($fundraiser->raised_amount / $fundraiser->amount) * 100, 100);
            }

            // Sort by lowest percentage
            usort($fundraisers, function($a, $b) {
                return getProgressPercentage($a) <=> getProgressPercentage($b);
            });

            foreach ($fundraisers as $fundraiser): 
                $is_goal_reached = $fundraiser->raised_amount >= $fundraiser->amount;

                // Image path fix
                $image_path = FCPATH . 'assets/individualform_img/' . $fundraiser->cover_image;
                if (!empty($fundraiser->cover_image) && is_file($image_path)) {
                    $imageSrc = base_url('assets/individualform_img/' . rawurlencode($fundraiser->cover_image));
                } else {
                    $imageSrc = base_url('assets/img/funddonate.jpg');
                }

                $progress_percentage = getProgressPercentage($fundraiser);
            ?>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">

                <div class="card h-100 shadow-sm">

                    <!-- Cover Image -->
                    <a href="<?= base_url('helpus/' . str_replace(' ', '-', $fundraiser->name) . '-' . $fundraiser->id) ?>">
                        <img src="<?= $imageSrc ?>" 
                             alt="<?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>"
                             class="card-img-top">
                    </a>

                    <div class="card-body d-flex flex-column">

                        <!-- Title -->
                        <h5 class="card-title text-truncate">
                            <?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>
                        </h5>

                        <!-- Supporters & Creator -->
                        <div class="d-flex justify-content-between mb-2 small text-muted">
                            <span class="text-truncate" style="max-width: 40%;">
                                <img src="<?= base_url('assets/img/heart1.svg') ?>" width="16" class="me-1">
                                <?= intval($fundraiser->supporters_count) ?> 
                                Supporter<?= $fundraiser->supporters_count > 1 ? 's' : '' ?>
                            </span>

                            <span class="text-truncate" style="max-width: 55%;">
                                <img src="<?= base_url('assets/img/Frame.svg') ?>" width="16" class="me-1">
                                Created By <?= htmlspecialchars($fundraiser->created_by, ENT_QUOTES) ?>
                            </span>
                        </div>

                        <!-- Raised + Progress -->
                        <p class="mb-1 small">
                            <strong>₹<?= number_format(min($fundraiser->raised_amount, $fundraiser->amount)) ?> / 
                            ₹<?= number_format($fundraiser->amount) ?></strong>
                        </p>

                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-danger" 
                                 style="width: <?= $progress_percentage ?>%;">
                            </div>
                        </div>

                        <!-- Donate + Share -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <?php if ($is_goal_reached): ?>
                                <span class="badge bg-success">Completed</span>
                            <?php else: ?>
                                <button class="btn btn-danger btn-sm donate_btn" 
                                        onclick="setCauseId(<?= $fundraiser->id ?>); openDonationModal('<?= $fundraiser->is_runforcause ?>');" style="padding: 5px 15px; border-radius: 25px;">
                                    Donate Now
                                </button>
                            <?php endif; ?>

                            <div class="text-danger d-flex align-items-center" style="cursor:pointer;"
                                 onclick="shareCause(
                                    '<?= base_url('helpus/' . str_replace(' ', '-', $fundraiser->name) . '-' . $fundraiser->id) ?>',
                                    '<?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>',
                                    '<?= $imageSrc ?>'
                                 )">
                                <i class="bi bi-share fs-6"></i>
                                <!-- <span class="ms-1 fs-6">Share</span> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">No fundraisers available at the moment.</p>
        <?php endif; ?>
    </div>
</div>


<!-- Responsive styles -->
<style>
  /* Remove forced spacing */
#fundraiserCards {
    display: flex;
    flex-wrap: wrap;
}

/* Card hover */
.card {
    width: 100%;
    max-width: 500px;
    height: 100%;
    transition: transform 0.2s ease-in-out;
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2), 0 10px 40px rgba(0, 0, 0, 0.15);
}
.card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2), 0 10px 40px rgba(0, 0, 0, 0.15);
}

/* Image FIX – full cover */
.card-img-top {
    width: 100%;
    height: 230px;
    object-fit: cover;
    object-position: center;
}

/* Mobile optimizations */
@media (max-width: 576px) {
    .card-img-top {
        height: 180px;
        object-fit: cover;
        object-position: center;
    }
    .card-title {
        font-size: 1rem;
    }
}

</style>
  <!-- kani1 -->

 <!--kani start alignment-->

  <!-- See More Button -->
  <!-- See More Button -->
<?php  if (!empty($fundraisers)): ?>   
<div class="text-center mt-3">
  <a href="<?= base_url('/donate') ?>" class="btn" style="background-color: white; border: 1px solid #ed3136; color: #ed3136; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
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
                <a href="#" class="btn bg-danger text-white donate_btn">Donate Now</a>

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

  <!-- <div class="position-relative" id="how-it-works-section">
    <div class="container-xxl ">

      <div class="h4 worktext" style="text-align:center;">START A FUNDRAISER IN <span
          style="color:#ED3136"> THREE SIMPLE STEPS</span></div>
      </div>
    <div style="display: flex; justify-content: center;">
        <img class="w-25 heart" src="assets/img/underline.svg" alt="no image">
      </div>
    <!-- <img src="<?= base_url('assets/img/steps.png') ?>" class="steps_img"
      style="object-fit: cover; width: 100%; margin-top: -200px;"> --
    <div class="container " style="display:flex; justify-content:center">
      <div class="row justify-content-center" style="margin-top:65px;">
        <!-- Step 1 --
        <div class="col-12 col-lg-4 text-center mb-4">
          <div class="step-container step-1 text-center">
            <div class="background-overlay"></div>
            <div class="step-icon">
              <!-- Add the corresponding icon here --
            </div>
            <div class="step_1">
              <h2 class="mt-3">01</h2>
            </div>
            <h3 class="mt-5">Start your fundraiser</h3>
            <img src="<?= base_url('assets/img/Group 27.png') ?>" class="fundraiser_img mt-5 pt-3">
          </div>
        </div>

        <!-- Step 2 --
        <div class="col-12 col-lg-4 text-center mb-4">
          <div class="step-container step-2 text-center">
            <div class="background-overlay"></div>
            <div class="step-icon">
              <!-- Add the corresponding icon here --
            </div>
            <div class="step_2">
              <h2 class="mt-3">02</h2>
            </div>
            <h3 class="mt-5">Share your fundraiser</h3>
            <img src="<?= base_url('assets/img/Group 28.svg') ?>" class="fundraiser_img mt-5 pt-3">
          </div>
        </div>

        <!-- Step 3 --
        <div class="col-12 col-lg-4 text-center mb-4">
          <div class="step-container step-3 text-center">
            <div class="background-overlay"></div>
            <div class="step-icon">
              <!-- Add the corresponding icon here --
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
  </div> -->

  <!-- By Poovarasan for raising funds -->
  <section class="fundraiser-steps-section">

 <div class="fundraiser-wrapper">

    <h2 class="section-title">
        START A FUNDRAISER IN <span>THREE SIMPLE STEPS</span>
    </h2>

    <div class="underline">
        <img src="assets/img/underline.svg" alt="">
    </div>

    <div class="fundraiser-grid">

        <!-- VIDEO COLUMN -->
        <div class="fundraiser-video">
            <div class="video-frame">

                <video id="stepVideo" autoplay muted playsinline>
                    <source src="<?= base_url('assets/video/Help Website 1.mp4'); ?>" type="video/mp4">
                </video>

                <div class="progress-bar-container">
                    <div class="progress-bar" id="progressBar"></div>
                </div>

                <div class="play-pause-btn" id="playPauseBtn">
                    <i class="bi bi-pause-fill"></i>
                </div>

            </div>
        </div>

        <!-- CONTENT COLUMN -->
        <div class="fundraiser-content">
            <ul class="steps-list">

                <li class="step-item active" data-step="1">
                    <span class="caret"><i class="bi bi-caret-left-fill"></i></span>
                    <span class="step-circle me-3">1</span>
                    <div>
                        <h5>Use our tools to create your fundraiser</h5>
                        <p>You’ll be guided by prompts to add fundraiser details and set your goal. Make updates anytime.You’ll be guided by prompts to add fundraiser details and set your goal. Make updates anytime.</p>
                    </div>
                </li>

                <li class="step-item" data-step="2">
                    <span class="caret"><i class="bi bi-caret-left-fill"></i></span>
                    <span class="step-circle me-3">2</span>
                    <div>
                        <h5>Reach donors by sharing</h5>
                        <p>Share your fundraiser link and use the resources in your dashboard to gain momentum.You’ll be guided by prompts to add fundraiser details and set your goal. Make updates anytime.</p>
                    </div>
                </li>

                <li class="step-item" data-step="3">
                    <span class="caret"><i class="bi bi-caret-left-fill"></i></span>
                    <span class="step-circle me-3">3</span>
                    <div>
                        <h5>Securely receive funds</h5>
                        <p>Add your bank information or invite your beneficiary and start receiving fundsYou’ll be guided by prompts to add fundraiser details and set your goal. Make updates anytime.You’ll be guided by prompts to add fundraiser details and set your goal. Make updates anytime..</p>
                    </div>
                </li>

            </ul>
        </div>

    </div>
</div>

</section>

  <!-- ✅ CSS -->
<style>
    /* SECTION */
.fundraiser-steps-section {
    padding: 70px 0;
    background: #fff;
}

/* FIXED WIDTH – ALIGNMENT LOCK */
.fundraiser-wrapper {
    max-width: 1240px;
    margin: 0 auto;
    width: 100%;
    padding: 0 20px;
}

/* TITLE */
.section-title {
    text-align: center;
    font-size: 28px;
    font-weight: 700;
    width: 100%;
    padding: 0 20px;
}

.section-title span {
    color: #ed3136;
}

/* UNDERLINE */
.underline {
    text-align: center;
    margin: 10px auto 40px;
    width: 100%;
    padding: 0 20px;
}

/* GRID – KEEP TWO COLUMNS ALWAYS */
.fundraiser-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: stretch; /* 🔥 KEY CHANGE */
}

/* VIDEO COLUMN */
.fundraiser-video {
    display: flex;
    height: 100%;
}

/* VIDEO FRAME – REMOVE ASPECT RATIO, STRETCH HEIGHT */
.video-frame {
    position: relative;
    width: 100%;
    height: 100%; /* 🔥 KEY CHANGE */
    background: #523636ff;
    border-radius: 16px;
    overflow: hidden;
}

/* VIDEO FITS FRAME */
.video-frame video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* PROGRESS BAR */
.progress-bar-container {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: #e0e0e0;
    border-radius: 0 0 10px 10px;
    overflow: hidden;
}

.progress-bar {
    width: 0;
    height: 100%;
    background: #ed3136;
}

/* PLAY BUTTON */
.play-pause-btn {
    position: absolute;
    bottom: 15px;
    right: 15px;
    width: 40px;
    height: 40px;
    background: rgba(0, 0, 0, 0.6);
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

/* CONTENT COLUMN */
.fundraiser-content {
    display: flex;
    height: 100%;
    align-items: stretch; /* 🔥 KEY CHANGE */
}

/* STEPS LIST */
.steps-list {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

/* STEP ITEM */
.step-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
    border-radius: 8px;
    padding: 14px 16px;
}

.step-item:hover {
    background: #f8f9fa;
}

/* CARET */
.caret {
    opacity: 0;
    color: #ed3136;
    font-size: 20px;
    transition: 0.3s;
}

.step-item:hover .caret,
.step-item.active .caret {
    opacity: 1;
}

/* STEP CIRCLE */
.step-circle {
    width: 40px;
    height: 40px;
    border: 2px solid #ed3136;
    border-radius: 50%;
    color: #ed3136;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    flex-shrink: 0;
}

.step-item.active .step-circle {
    background: #ed3136;
    color: #fff;
}

/* TEXT */
.step-item h5 {
    margin: 0 0 6px;
    font-weight: 600;
}

.step-item p {
    margin: 0;
    color: #555;
}

.step-item:hover h5,
.step-item.active h5 {
    color: #ed3136;
}

/* ========================= */
/* RESPONSIVE – NO STACKING */
/* ========================= */

/* Large screens – unchanged */
@media (min-width: 1921px) {
    .fundraiser-wrapper {
        max-width: 1240px;
        padding: 0 20px;
    }
}

/* 1440px */
@media (min-width: 1444px) and (max-width: 1920px) {
    .fundraiser-wrapper {
        max-width: 1240px;
        padding: 0 20px;
    }
}

/* Laptop */
@media (min-width: 1024px) and (max-width: 1443px) {
    .fundraiser-wrapper {
        max-width: 1240px;
        padding: 0 20px;
    }

    .fundraiser-grid {
        gap: 30px;
    }
}

/* Tablet & Mobile – KEEP SIDE BY SIDE */
/* @media (max-width: 991px) {
    .fundraiser-grid {
        gap: 25px;
    }
} */
/* ========================= */
/* MOBILE FIX – STEPS LAYOUT */
/* ========================= */

@media (max-width: 991px) {

  /* Stack video & content */
  .fundraiser-grid {
    grid-template-columns: 1fr;
    gap: 30px;
  }

  /* Center video */
  .video-frame { max-width: 500px; margin: 0 auto; }

  /* Content full width */
  .fundraiser-content {
    width: 100%;
  }

  /* Steps list spacing */
  .steps-list {
    gap: 20px;
  }

  /* Step item layout */
  .step-item {
    align-items: flex-start;
    padding: 14px 12px;
  }

  /* Hide caret on mobile */
  .caret {
    display: none;
  }

  /* Step circle size */
  .step-circle {
    width: 36px;
    height: 36px;
    font-size: 14px;
  }

  /* Text alignment */
  .step-item h5 {
    font-size: 16px;
    line-height: 1.3;
  }

  .step-item p {
    font-size: 14px;
    line-height: 1.5;
  }
}

/* SMALL MOBILE */
@media (max-width: 576px) {

   .video-frame { max-width: 500px; margin: 0 auto; }

  .step-item {
    gap: 12px;
  }

  .step-item h5 {
    font-size: 16px;
    line-height: 1.3;
  }

  .step-item p {
    font-size: 14px;
    line-height: 1.5;
  }
}


@media (max-width: 767px) {
  .fundraiser-steps-section {
    padding: 40px 0;
  }
  
  .fundraiser-wrapper {
    padding: 0 15px;
  }
  
  .section-title {
    font-size: 24px;
    padding: 0 15px;
  }
  
  .underline {
    padding: 0 15px;
    margin: 10px auto 30px;
  }
}



  </style>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const video = document.getElementById('stepVideo');
    const videoSource = video.querySelector('source');
    const stepItems = document.querySelectorAll('.step-item');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const playPauseIcon = playPauseBtn.querySelector('i');
    const progressBar = document.getElementById('progressBar');

    const baseUrl = "assets/video/";
    const videoSources = {
      1: baseUrl + 'Help Website 1.mp4',
      2: baseUrl + 'Help Website 2.mp4',
      3: baseUrl + 'Help Website 3.mp4'
    };

    let currentStep = 1;
    const totalSteps = 3;

    function updateProgressBar() {
      if (!video.paused && !video.ended && video.duration) {
        const progress = (video.currentTime / video.duration) * 100;
        progressBar.style.width = `${progress}%`;
      }
      requestAnimationFrame(updateProgressBar);
    }

    function updateStep(step) {
      currentStep = step;

      stepItems.forEach(item => {
        item.classList.remove('active');
      });

      const activeItem = document.querySelector(`.step-item[data-step="${step}"]`);
      if (activeItem) {
        activeItem.classList.add('active');
      }

      video.pause();
      videoSource.src = videoSources[step];
      progressBar.style.width = '0%';
      video.load();

      video.onloadedmetadata = () => {
        video.play().catch(err => console.error("Autoplay failed:", err));
        playPauseIcon.className = 'bi bi-pause-fill';
      };
    }

    requestAnimationFrame(updateProgressBar);

    video.addEventListener('ended', () => {
      const nextStep = currentStep >= totalSteps ? 1 : currentStep + 1;
      updateStep(nextStep);
    });

    playPauseBtn.addEventListener('click', () => {
      if (video.paused) {
        video.play();
        playPauseIcon.className = 'bi bi-pause-fill';
      } else {
        video.pause();
        playPauseIcon.className = 'bi bi-play-fill';
      }
    });

    stepItems.forEach(item => {
      item.addEventListener('click', () => {
        const step = parseInt(item.dataset.step);
        updateStep(step);
      });
    });

    updateStep(currentStep);
  </script>


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
<!-- <div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true" style="padding-left: 10px;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body" style="padding-left: 30px; padding-right: 30px;">


        <!-- Donation Form --
        <form id="donationForm" method="POST" autocomplete="off" 
              action="<?= base_url('kanavuhelp/processDonation') ?>" 
              onsubmit="return validateForm()">

          <input type="hidden" name="cause_id" id="cause_id">
          <input type="hidden" name="user_id" id="user_id">

          <!-- Hand Icon --
          <div class="text-center mb-3">
            <img src="<?= base_url('assets/img/handwithheart.png') ?>" width="20%">
          </div>
          <div class="note-box mb-3">
            <p class="mb-0">
              <strong style="font-size:13px;">Note:</strong> <span style="font-size:14px;">All contributions will go directly to</span> <strong style="font-size:14px;">The Kanavu Trust.</strong>
            </p>
          </div>
          <!-- Payment Method Dropdown --
          <div class="mb-3">
              <label class="form-label fw-bold">Select Payment Method</label>
              <select class="form-select" id="paymentMethod" onchange="togglePaymentOptions()">
                  <option value="upi" selected>UPI ID</option>
                  <option value="scan">Scan QR</option>
                  <option value="bank">Account Details</option>
              </select>
          </div>

          <!-- Scan QR --
          <div id="scanSection" class="text-center mb-3" style="display:none;">
              <img src="<?= base_url('assets/img/hdfc_qr_scranner.jpeg') ?>" width="50%">
          </div>

          <!-- UPI Section --
          <div id="upiSection" class="text-center mb-3" style="display:block;">
            <h6 class="fw-bold mb-2">UPI ID</h6>

            <p class="mb-0" style="font-size:16px;">
                <span id="upiText">vyapar.175502705184@hdfcbank</span>

                <i class="bi bi-copy ms-2 copy-icon"
                   data-copy="upiText"
                   data-bs-toggle="tooltip"
                   title="Copy UPI ID"
                   style="cursor:pointer;font-size:14px;"></i>
            </p>
          </div>

          <!-- Bank Section --
          <div id="bankSection" class="border rounded p-3 mb-3" style="display:none;">
            <h6 class="fw-bold text-center mb-3">Bank Details</h6>

            <p class="mb-1" style="font-size:16px;">
              <strong>Account Name:</strong> 
              <span id="accName">The Kanavu Trust</span>
              <i class="bi bi-copy ms-2 copy-icon"
                 data-copy="accName"
                 data-bs-toggle="tooltip"
                 title="Copy Account Name"
                 style="cursor:pointer;font-size:14px;"></i>
            </p>

            <p class="mb-1" style="font-size:16px;">
              <strong>Account Number:</strong>
              <span id="accNumber">50200111484578</span>
              <i class="bi bi-copy ms-2 copy-icon"
                 data-copy="accNumber"
                 data-bs-toggle="tooltip"
                 title="Copy Account Number"
                 style="cursor:pointer;font-size:14px;"></i>
            </p>

            <p class="mb-1" style="font-size:16px;">
              <strong>IFSC Code:</strong> 
              <span id="ifscCode">HDFC0008251</span>
              <i class="bi bi-copy ms-2 copy-icon"
                 data-copy="ifscCode"
                 data-bs-toggle="tooltip"
                 title="Copy IFSC Code"
                 style="cursor:pointer;font-size:14px;"></i>
            </p>
          </div>

          <!-- Title --
          <div class="text-center mt-2 mb-3">
            <h5 class="modal-title text-danger fw-bold">Make a Secure Donation</h5>
          </div>

          <!-- Currency + Amount --
          <div class="row mb-3">
              <div class="col-6">
                  <select class="form-control py-2" name="currency_type" id="currency" required>
                      <option value="" disabled selected>Select Currency</option>
                      <option>INR</option>
                      <option>USD</option>
                  </select>
              </div>

              <div class="col-6">
                  <input type="number" name="amount" class="form-control py-2" id="amount"
                        placeholder="Enter amount*" required>
                  <p id="error5" class="text-danger small"></p>
              </div>
          </div>


          <!-- Transaction ID --
          <div class="mb-3">
            <label class="form-label">Transaction ID</label>
            <input type="text" name="transactionid" class="form-control" id="transactionid"
                   placeholder="Enter UPI Transaction ID*" required>
            <p id="error4" class="text-danger small"></p>
          </div>

          <!-- Phone --
          <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="tel" name="phoneno" class="form-control" id="phone" maxlength="10"
                   placeholder="Enter your phone number*" required>
            <p id="error3" class="text-danger small"></p>
          </div>

          <!-- Email --
          <div class="mb-3">
            <label class="form-label">Email ID</label>
            <input type="email" name="email" class="form-control" id="email"
                   placeholder="Enter your EmailID*" required>
            <p id="error7" class="text-danger small"></p>
          </div>

          <!-- Name --
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" maxlength="40"
                   placeholder="Enter Your Name*" required>
            <p id="error6" class="text-danger small"></p>
          </div>

          <!-- City --
          <div class="mb-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control" id="donorcity" maxlength="40"
                   placeholder="Enter Your City*" required>
            <p id="error8" class="text-danger small"></p>
          </div>

          <!-- Confirm Button --
          <div class="d-flex justify-content-center">
            <button id="donatenowbtn" type="submit" class="btn btn-danger fw-bold w-50 rounded-3">
              Confirm Payment ₹
            </button>
          </div>

        </form>

        <p class="text-center small mt-2">
          By continuing, you agree to our 
          <a href="<?= base_url('/terms_of_use') ?>">Terms of Service</a> & 
          <a href="<?= base_url('/privacy_policy') ?>">Privacy Policy</a>
        </p>

      </div>
    </div>
  </div>
</div> -->

<div class="modal fade" id="donationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
            
            <div class="modal-header border-0 bg-danger text-white p-4">
                <div>
                    <h5 class="fw-bold mb-0" id="donationModalTitle">Support Our Cause</h5>
                    <small class="opacity-75">Follow 3 simple steps to complete your donation</small>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body p-4 bg-light">
                <form id="donationForm" method="POST" action="<?= base_url('kanavuhelp/processDonation') ?>" onsubmit="return validateForm()">
                    
                    <input type="hidden" name="cause_id" id="cause_id">
                    <input type="hidden" name="user_id" id="user_id">

                    <div class="card border-0 shadow-sm mb-3" style="border-radius: 12px;">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-danger rounded-circle me-2 d-flex align-items-center justify-content-center" style="width:24px; height:24px;">1</span>
                                <h6 class="fw-bold mb-0 text-dark">Make Your donation</h6>
                            </div>
                            
                            <div class="row g-3 align-items-center">
                                <div class="col-7">
                                    <label class="text-muted small d-block mb-1">UPI ID</label>
                                    <div class="d-flex align-items-center bg-white p-2 border rounded">
                                        <span class="text-truncate small fw-bold" id="upiText">vyapar.175502705184@hdfcbank</span>
                                        <i class="bi bi-copy ms-auto text-primary cursor-pointer copy-icon" data-copy="upiText" title="Copy UPI"></i>
                                    </div>
                                </div>
                                <div class="col-1 text-muted small fw-bold text-center">OR</div>
                                <div class="col-4 text-center">
                                    <img src="<?= base_url('assets/img/hdfc_qr_scranner.jpeg') ?>" class="img-fluid rounded border shadow-sm" style="max-height: 280px;" alt="QR Code">
                                    <small class="d-block text-muted mt-1" style="font-size: 10px;">Scan to Pay</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm mb-3" style="border-radius: 12px;">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-danger rounded-circle me-2 d-flex align-items-center justify-content-center" style="width:24px; height:24px;">2</span>
                                <h6 class="fw-bold mb-0 text-dark">Donation Details</h6>
                            </div>
                            <div class="row gx-4">
                                <div class="col-md-6" >
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0">₹</span>
                                        <input type="number" name="amount" class="form-control border-start-0 ps-0" placeholder="Donated Amount" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="transactionid" class="form-control" placeholder="Transaction ID" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm mb-4" style="border-radius: 12px;">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-danger rounded-circle me-2 d-flex align-items-center justify-content-center" style="width:24px; height:24px;">3</span>
                                <h6 class="fw-bold mb-0 text-dark">Personal Details</h6>
                            </div>
                            <div class="row g-2">
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control form-control-sd" placeholder="Full Name *" required>
                                </div>
                                <div class="col-6">
                                    <input type="tel" name="phoneno" class="form-control form-control-sd" placeholder="Phone Number*" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="city" class="form-control form-control-sd" placeholder="City*" required>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control form-control-sd" placeholder="Email (Optional)">
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger btn-lg w-100 fw-bold py-3 shadow" style="border-radius: 12px; letter-spacing: 1px;">
                        Submit
                    </button>
                    
                    <div class="text-center mt-3">
                        <small class="text-muted">Funds go directly to <strong>The Kanavu Trust</strong></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT -->
<script>
  // Toggle payment sections
  function togglePaymentOptions() {
      let option = document.getElementById("paymentMethod").value;

      document.getElementById("upiSection").style.display = "none";
      document.getElementById("scanSection").style.display = "none";
      document.getElementById("bankSection").style.display = "none";

      if (option === "upi") document.getElementById("upiSection").style.display = "block";
      if (option === "scan") document.getElementById("scanSection").style.display = "block";
      if (option === "bank") document.getElementById("bankSection").style.display = "block";
  }

  // UNIVERSAL COPY FUNCTION
  function copyField(icon) {
      let id = icon.getAttribute("data-copy");
      let text = document.getElementById(id).innerText;

      navigator.clipboard.writeText(text);

      let tooltip = bootstrap.Tooltip.getInstance(icon);

      // Change icon + tooltip to "Copied!"
      icon.classList.remove("bi-copy");
      icon.classList.add("bi-check2-circle", "text-success");

      tooltip.setContent({ ".tooltip-inner": "Copied!" });

      // Reset back after 1.5 sec
      setTimeout(() => {
          icon.classList.remove("bi-check2-circle", "text-success");
          icon.classList.add("bi-copy");

          // RESTORE ORIGINAL TOOLTIP TEXT
          let original = icon.getAttribute("data-original-title");
          tooltip._config.title = original;
          tooltip.setContent({ ".tooltip-inner": original });
          tooltip.update();
      }, 1500);
  }
  // Apply copy events
  document.addEventListener("DOMContentLoaded", function () {

      document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
          let originalTitle = el.getAttribute("title");

          // Store original title in custom attribute
          el.setAttribute("data-original-title", originalTitle);

          // Activate tooltip
          new bootstrap.Tooltip(el);
      });

      // Enable copy click
      document.querySelectorAll(".copy-icon").forEach(icon => {
          icon.addEventListener("click", function () {
              copyField(this);
          });
      });
  });

  // Reset modal
  document.getElementById("donationModal").addEventListener("shown.bs.modal", () => {
      document.getElementById("paymentMethod").value = "upi";
      togglePaymentOptions();
  });
</script>




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

  // $.ajax({
  //     type:"get",
  //     url:"kanavuhelp/getHeader",
  //     success:(result)=>{
  //          document.getElementById("header").innerHTML = result;
  //          let entry = "<?=$this->session->userdata("entry")?>" ? "<?=$this->session->userdata("entry")?>" : 0;
  //          console.log(entry);
  //          if(entry > 0){
  //          document.getElementById("kanavuhomepage").classList.add("text-danger","fw-bold");
  //          }
  //     },
  //     error:(error)=>{
  //          document.getElementById("header").innerHTML = "";
  //     }
  //   }); 

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
        if (currentUrl.includes('/kanavuhome#how-it-works-section')) {
            navLinks.forEach(l => l.classList.remove('active'));
            document.getElementById('kanavuhomepage').classList.add('active');
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


  function openDonationModal(isRunForCause) {
    // Update modal title based on is_runforcause
    const modalTitle = document.getElementById('donationModalTitle');
    if (modalTitle) {
      modalTitle.textContent = isRunForCause === 'yes' ? 'Support for Our Run' : 'Support Our Cause';
    }
    
    // Show the modal using Bootstrap's modal method
    var donationModal = new bootstrap.Modal(document.getElementById('donationModal'));
    donationModal.show();
  }

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
const isPhoneNumberValid = (value) => /^\d{10}$/.test(value);
const isTransactionIdValid = (value) => /^[1-9]\d{11}$/.test(value);
/* const isNameValid = (value) => /^[a-zA-Z]{3,}\s*$/.test(value); */
const isNameValid = (value) => /^[a-zA-Z\s.]+$/.test(value) && value.trim().length >= 3;

const isEmailValid = (value) => /^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(value);

// Attach real-time validation for each field
window.onload = () => {
 // validateField('currency', 'error5', isCurrencySelected, 'Select a currency.', 'change');
  validateField('amount', 'error8', isAmountValid, 'Amount must be greater than 0.');
  validateField('name', 'error6', isNameValid, 'Enter Valid Name');
 validateField('email', 'error7', isEmailValid, 'Enter a valid Email ID.');
  validateField('phone', 'error3', isPhoneNumberValid, 'Phone number must have 10 digits.');
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
  if (!isEmailValid(document.getElementById('email').value)) {
    document.getElementById('error7').innerText = 'Enter a valid Email ID.';
    isValid = false;
  } 
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
    if (el.classList.contains('counted')) return; // Prevent multiple runs

    const target = +el.getAttribute('data-target');
    const prefix = el.getAttribute('data-prefix') || '';
    const suffix = el.getAttribute('data-suffix') || '';
    const duration = 2000;
    const startTime = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const value = Math.floor(progress * target);
      el.textContent = prefix + value.toLocaleString('en-IN') + suffix;

      if (progress < 1) {
        requestAnimationFrame(update);
      }
    }

    el.classList.add('counted'); // Mark as done
    requestAnimationFrame(update);
  }

  document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.count-up');

    // ✅ Run once immediately on page load
    counters.forEach(counter => animateCounter(counter));

    // ✅ Run when section becomes visible (on scroll)
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));

    // ✅ Run when hovered (only once)
    // counters.forEach(counter => {
    //   counter.addEventListener('mouseenter', () => animateCounter(counter));
    // });
  });

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
    el.textContent = prefix + value.toLocaleString('en-IN') + suffix;
    if (progress < 1) {
      requestAnimationFrame(update);
    }
  }

  requestAnimationFrame(update);
}

// Run counter animation once on page load
document.addEventListener('DOMContentLoaded', () => {
  const counters = document.querySelectorAll('.count-up');
  counters.forEach(counter => animateCounter(counter));
});
</script>



  <!-- Bootstrap JS and dependencies (Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

