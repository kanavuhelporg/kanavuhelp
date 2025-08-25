
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

.carousel-indicators {
  bottom: 10px;
}
.carousel-indicators [data-bs-target] {
  width: 30px;
  height: 4px;
  background-color: #A9A9A9;
  border-radius: 2px;
  opacity: 0.5;
  transition: opacity 0.3s, background-color 0.3s;
}
.carousel-indicators .active {
  background-color: #ED3136;
  opacity: 1;
}
@media (max-width: 768px) {
  .carousel-indicators [data-bs-target] {
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
      background-color: #ED3136;
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
      background-color: #ED3136;
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
    }
  </style>
</head>

<body>
  <nav id="header" class="navbar navbar-expand-lg bg-light py-4 fixed-top">
    
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
    <div class="row g-3" id="fundraiserCards">
        <?php if (!empty($fundraisers)): ?>
            <?php 
            // Helper to calculate progress
            function getProgressPercentage($fundraiser) {
                if ($fundraiser->amount == 0) return 0;
                return min(($fundraiser->raised_amount / $fundraiser->amount) * 100, 100);
            }

            // Sort fundraisers by percentage (ascending)
            usort($fundraisers, function($a, $b) {
                return getProgressPercentage($a) <=> getProgressPercentage($b);
            });

            foreach ($fundraisers as $fundraiser): 
                $is_goal_reached = $fundraiser->raised_amount >= $fundraiser->amount;

                // Image path fix (case-sensitive safe)
                $image_path = FCPATH . 'assets/individualform_img/' . $fundraiser->cover_image;
                if (!empty($fundraiser->cover_image) && is_file($image_path)) {
                    $imageSrc = base_url('assets/individualform_img/' . rawurlencode($fundraiser->cover_image));
                } else {
                    $imageSrc = base_url('assets/img/funddonate.jpg');
                }

                $progress_percentage = getProgressPercentage($fundraiser);
            ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 d-flex card-container">
                <div class="card h-100 w-100 d-flex flex-column shadow-sm" style="border-radius: 15px;">
                    
                    <!-- Cover Image (clickable, responsive) -->
                    <a href="<?= base_url('helpus/' . str_replace(' ', '-', $fundraiser->name) . '-' . $fundraiser->id) ?>">
                        <img src="<?= $imageSrc ?>" 
                             alt="<?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>"
                             class="card-img-top"
                             style="border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover; aspect-ratio: 4/3;">
                    </a>

                    <div class="card-body d-flex flex-column p-3">
                        
                        <!-- Title -->
                        <div class="flex-grow-1 mb-3">
                            <a href="<?= base_url('helpus/' . str_replace(' ', '-', $fundraiser->name) . '-' . $fundraiser->id) ?>" 
                               class="text-dark text-decoration-none">
                                <h5 class="card-title text-truncate" style="min-height: 60px;">
                                    <?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>
                                </h5>
                            </a>
                        </div>

                        <!-- Supporters & Creator -->
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="text-muted small d-flex align-items-center">
                                <img src="<?= base_url('assets/img/user-icon.png') ?>" alt="Supporter Icon" width="16" height="16" class="me-1">
                                <?= intval($fundraiser->supporters_count) ?> Supporter<?= $fundraiser->supporters_count > 1 ? 's' : '' ?>
                            </div>
                            <div class="text-muted small text-truncate" style="max-width: 50%;">
                                By <?= htmlspecialchars($fundraiser->created_by, ENT_QUOTES) ?>
                            </div>
                        </div>

                        <!-- Raised Amount & Progress Bar -->
                        <div class="mt-2">
                            <p class="card-text mb-1 small">
                                <strong>
                                    ₹<?= number_format(min($fundraiser->raised_amount, $fundraiser->amount)) ?> / ₹<?= number_format($fundraiser->amount) ?>
                                </strong>
                            </p>
                            <div class="progress" style="height: 8px; background-color: #f8d7da;">
                                <div class="progress-bar bg-danger" 
                                     style="width: <?= $progress_percentage ?>%;" 
                                     role="progressbar" 
                                     aria-valuenow="<?= $progress_percentage ?>" 
                                     aria-valuemin="0" 
                                     aria-valuemax="100">
                                </div>
                            </div>
                        </div>

                        <!-- Donate / Completed + Share -->
                        <div class="d-flex align-items-center mt-3 justify-content-between">
                            <?php if ($is_goal_reached): ?>
                                <span class="badge bg-success">Completed</span>
                            <?php else: ?>
                                <button type="button" class="btn bg-danger text-white btn-sm donate_btn" 
                                        onclick="setCauseId(<?= $fundraiser->id ?>); openDonationModal();">
                                    Donate
                                </button>
                            <?php endif; ?>

                            <!-- Share Icon -->
                            <div class="d-flex align-items-center text-danger" style="cursor: pointer;"
                                 onclick="shareCause(
                                     '<?= base_url('helpus/' . str_replace(' ', '-', $fundraiser->name) . '-' . $fundraiser->id) ?>',
                                     '<?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>',
                                     '<?= $imageSrc ?>'
                                 )">
                                <i class="bi bi-share fs-6"></i>
                                <span class="fs-6 ms-1">Share</span>
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
.card-container {
    display: flex;
}
.card {
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
.card-img-top {
    width: 100%;
    max-height: 200px;
    object-fit: cover;
}
.card-title {
    font-size: 1.1rem;
    line-height: 1.4;
}
@media (max-width: 767px) {
    .card-img-top {
        max-height: 180px;
    }
    .card-title {
        font-size: 1rem;
        min-height: 50px;
    }
    .card-body {
        padding: 1rem !important;
    }
    .btn-sm {
        padding: 0.4rem 0.8rem;
        font-size: 0.8rem;
    }
}
@media (max-width: 576px) {
    .card-img-top {
        max-height: 160px;
    }
    .card-title {
        font-size: 0.9rem;
        min-height: 40px;
    }
}
</style>
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
  <div class="container py-4">
    <h2 class="text-center mb-3">
      START A FUNDRAISER IN <span style="color:#ED3136">THREE SIMPLE STEPS</span>
    </h2>
    <div class="text-center mb-4">
      <img src="underline.svg" width="150" alt="underline">
    </div>

    <div class="row flex-column flex-lg-row align-items-start">
      <!-- Video Column -->
      <div class="col-12 col-lg-6 order-1 order-lg-1">
        <div class="video-box">
          <div class="raise_video">
            <video id="stepVideo" muted autoplay playsinline class="video-small">
              <source src="<?php echo base_url('assets/video/Help Website 1.mp4'); ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <div class="progress-bar-container">
              <div class="progress-bar" id="progressBar"></div>
            </div>
          </div>
          <!-- Play/Pause Button -->
          <div id="playPauseBtn" class="play-pause-btn">
            <i class="bi bi-pause-fill"></i>
          </div>
        </div>
      </div>

      <!-- Steps Column -->
      <div class="col-12 col-lg-6 order-2 order-lg-2">
        <ul class="list-unstyled mt-3 mt-lg-0">
          <li class="step-item mb-1" data-step="1">
            <div class="d-flex align-items-start">
              <div class="icon-wrapper text-danger fs-4 me-2">
                <i class="bi bi-caret-left-fill"></i> <!-- target this -->
              </div>
              <div class="step-circle me-3" style="border-radius: 50% !important;">1</div>
              <div>
                <h5 class="mb-1"><strong>Use our tools to create your fundraiser</strong></h5>
                <p class="mb-0">With our easy-to-use tools, you can set up your fundraiser in just minutes. Whether it’s for a personal cause, community project, or charitable initiative, our platform gives you everything you need to share your story, connect with supporters, and start raising funds right away.</p>
              </div>
            </div>
          </li>

          <li class="step-item mb-1" data-step="2">
            <div class="d-flex align-items-start">
              <div class="icon-wrapper text-danger fs-4 me-2">
                <i class="bi bi-caret-left-fill"></i>
              </div>
              <div class="step-circle me-3">2</div>
              <div>
                <h5 class="mb-1"><strong>Reach donors by sharing</strong></h5>
                <p class="mb-0">Spread the word about your fundraiser with just a click. Share your campaign across social media, email, and messaging apps to reach more donors, inspire support, and grow your impact faster.</p>
              </div>
            </div>
          </li>
          <li class="step-item" data-step="3">
            <div class="d-flex align-items-start">
              <div class="icon-wrapper text-danger fs-4 me-2">
                <i class="bi bi-caret-left-fill"></i>
              </div>
              <div class="step-circle me-3">3</div>
              <div>
                <h5 class="mb-1"><strong>Securely receive funds</strong></h5>
                <p class="mb-0">Receive donations safely and without hassle. Our secure payment system ensures that every contribution goes directly to your fundraiser, giving you and your supporters peace of mind throughout the process.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ✅ CSS -->
  <style>
    
    .video-box {
      position: relative;
      max-width: 100%;
    }
    
   .video-small {
      width: 100%;
      max-height: 750px;
      height: auto;
      object-fit: cover;
      border-radius: 8px;
    }

    .raise_video {
      position: relative;
    }

    video {
      border-radius: 8px;
    }

    .progress-bar-container {
      width: 100%;
      height: 5px;
      background-color: #e0e0e0;
      position: absolute;
      bottom: 0;
      left: 0;
      border-bottom-left-radius: 8px;
      border-bottom-right-radius: 8px;
      overflow: hidden;
    }

    .progress-bar {
      height: 100%;
      background-color: #ED3136;
      width: 0;
      transition: width 0.1s linear;
    }

    .play-pause-btn {
      position: absolute;
      bottom: 15px;
      right: 15px;
      background: rgba(0, 0, 0, 0.5);
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    .step-item {
      cursor: pointer;
      transition: all 0.3s ease;
      padding: 12px 16px;
      border-radius: 8px;
      position: relative;
    }

    .step-item:hover {
      background-color: #f8f9fa;
    }

    .step-circle {
      width: 40px !important;
      height: 40px !important;
      min-width: 40px !important;
      min-height: 40px !important;
      border-radius: 50% !important;
      border: 2px solid #fbd9d3;
      color: #ED3136;
      background-color: transparent;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      transition: all 0.3s ease;
      font-size: 16px;
    }

    .step-item.active .step-circle {
      background-color: #ED3136;
      color: #fff;
      
    }

    .step-item:hover .step-circle {
      background-color: #fceaea;
      color: #ED3136;
      border: 2px solid #ED3136;
    }

    .step-item h5 {
      transition: color 0.3s ease;
    }

    .step-item:hover h5,
    .step-item.active h5 {
      color: #ED3136;
    }

    /* ✅ Fix: Show caret icon only on active or hover */
    .step-item .bi-caret-left-fill {
      visibility: hidden;
      opacity: 0;
      transition: visibility 0.3s ease, opacity 0.3s ease;
    }

    .step-item.active .bi-caret-left-fill,
    .step-item:hover .bi-caret-left-fill {
      visibility: visible;
      opacity: 1;
    }
    /* Hide the icon by default */
    .step-item .icon-wrapper {
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    /* Show icon on hover or active step */
    .step-item:hover .icon-wrapper,
    .step-item.active .icon-wrapper {
      opacity: 1;
      visibility: visible;
    }

    @media (max-width: 991px) {
      .video-box {
        max-width: 100%;
        margin: 0 auto;
      }

      .row {
        flex-direction: column !important;
      }
      .step-circle {
        /* prevent flex from stretching width/height */
        width: 40px !important;
        height: 40px !important;
        min-width: 40px !important;
        min-height: 40px !important;
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

