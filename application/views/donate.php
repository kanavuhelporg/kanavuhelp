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
  <link href="<?php echo base_url(); ?>assets/img/kanavulogoo.jpg" rel="icon" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
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
    .nav-link {
      color: black !important;
      /* font-weight: bold; */
    }
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
    .bg-red-modal {
      background-color: grey;
      color: white;
    }
    .imgtext1 strong,
    .imgtext2 strong {
      font-weight: bolder;
    }
    .bi-share {
      font-size: 1.3rem;
      cursor: pointer;
      color: #E01A2B;
      margin-left: auto;
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
      border-width: 2px;
    }
    .filter-btn.active {
      border-color: #EB2D32;
      color: #EB2D32;
    }
    .filter-btn:not(.active) {
      border-color: #A9A9A9;
      color: #A9A9A9;
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
      width: 356px;
      height: 480px;
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
    .category-not-active {
      border: 1px solid #9FA6B2;
      color: #9FA6B2;
      background-color: white !important;
    }
    .active-category {
      border: 1px solid #d9534f;
      color: #d9534f;
      background-color: white !important;
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
      .card {
        margin-left: 2%;
      }
      /* donate image below nav bar */
      .donate_img {
        width: 100%;
        position: relative;
      }
      .donate_img img {
        width: 100%;
        height: 300px;
        object-fit: cover;
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
    .card_button {
      border: 1px solid gray !important;
      background: none;
      box-shadow: none;
    }
    .card_button:hover {
      border: 1px solid gray !important;
      box-shadow: none;
      background: none;
    }
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
      padding: (1rem) var(1rem);
    }
    .navbar-toggler {
      padding: .25rem .75rem;
      font-size: 1.25rem;
      line-height: 1;
      background-color: transparent;
      border: 1px solid #4f373766;
      border-radius: .25rem;
      transition: box-shadow .15s ease-in-out;
    }
    .img-placeholder {
      background-color: white;
      display: block;
      width: 100%;
      height: 230px;
      object-fit: cover;
    }
    .img-placeholder:not([src]) {
      background: url('path/to/placeholder-image.jpg') center center/cover no-repeat;
    }
    .btn-outline-secondary:hover {
      background-color: white;
      border-color: #d9534f;
      color: #d9534f !important;
    }
    @media (max-width: 768px) {
      #userProfile .dropdown-menu {
        right: 0 !important;
        left: auto !important;
        min-width: 150px;
      }
      #userProfile img {
        width: 25px;
        height: 25px;
      }
      #userProfile .dropdown-item {
        text-align: center;
      }
      .category-buttons {
        flex-direction: column;
      }
    }
    @media (min-width: 769px) and (max-width: 989px) {
      .card {
        width: 400px;
        height: 466px;
        box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.2);
      }
    }
    .custom-dropdown {
      position: relative;
      display: inline-block;
      width: 45%;
    }
    .custom-dropdown select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
    }
    .custom-dropdown::after {
      content: '▼';
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      pointer-events: none;
      font-size: 14px;
      color: #666;
    }
    /* Card Styling */
    .card-container {
      transition: transform 0.2s;
    }
    .card-container:hover {
      transform: translateY(-5px);
    }
    .card {
      width: 100%;
      max-width: 356px;
      height: 480px;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15), 0 8px 30px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }
    .card:hover {
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2), 0 10px 40px rgba(0, 0, 0, 0.15);
    }
    .card-img-top {
      width: 100%;
      height: 230px;
      object-fit: cover;
    }
    .card-body {
      padding: 15px;
    }
    .card-title {
      font-size: 18px;
      font-weight: bold;
    }
    .card-text {
      font-size: 14px;
    }
    .progress {
      height: 10px;
      border-radius: 5px;
    }
    .progress-bar {
      background-color: #EB2D32;
    }
    .btn.bg-danger {
      border-radius: 25px;
      font-size: 14px;
      padding: 5px 15px;
    }
    /* Single Row for Supporters and Created by */
    .supporters-section,
    .created-by-section {
      display: flex;
      align-items: center;
    }
    .supporters-section {
      flex: 12;
      min-width: 0;
      overflow: hidden;
    }
    .created-by-section {
      flex: 10;
      justify-content: flex-end;
      min-width: 0;
    }
    .supporters-section p,
    .created-by-section p {
      font-size: 14px;
      color: black;
    }
    .supporters-section p {
      display: flex;
      align-items: center;
      white-space: normal;
    }
    .supporters-section .supporter-count {
      font-weight: bold;
      font-size: 16px;
      color: black;
      margin-right: 4px;
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
    .amount-text {
      margin-top: 5px;
      font-size: 14px;
      line-height: 1.5;
      color: #333;
    }
    .amount-text strong {
      font-weight: 600;
    }
    /* Mobile Responsiveness */
    @media (max-width: 767px) {
      .supporters-section p,
      .created-by-section p {
        font-size: 12px;
      }
      .supporters-section i,
      .created-by-section i {
        font-size: 14px;
      }
      .created-by-section .rounded-circle {
        width: 20px;
        height: 20px;
      }
      .created-by-section .bi-person-fill {
        font-size: 14px;
      }
      .truncate-text {
        max-width: 80px;
      }
      .supporters-section .truncate-text {
        max-width: 50px;
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
    .fixed-card-img {
      height: 230px;
      object-fit: cover;
    }
    /* FIX CARD GRID – Same Height Everywhere */
    .card-container {
        display: flex;
    }

    /* Card should fill available height */
    .fixed-card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    /* Make All Images the Same Height */
    .fixed-card-img,
    .card-img-top {
        width: 100%;
        height: 230px !important;
        object-fit: cover;
        object-position: center;
    }

    /* Card Body flex fix */
    .card-body {
        display: flex;
        flex-direction: column;
    }

    /* Push Donate + Share to Bottom */
    .mt-auto {
        margin-top: auto;
    }

    /* VERY IMPORTANT – remove fixed width + height
      Let Bootstrap grid calculate width */
    .card {
        width: 100% !important;
        height: auto !important;
        max-width: 100% !important;
        border-radius: 15px;
    }

    /* Keep shadow only */
    .card {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }
  </style>
  <?php foreach ($fundraisers as $fundraiser): ?>
    <?php if (!empty($fundraiser->cover_image)): ?>
      <link rel="preload" href="<?= base_url('assets/individualform_img/' . htmlspecialchars($fundraiser->cover_image, ENT_QUOTES)) ?>" as="image">
    <?php endif; ?>
  <?php endforeach; ?>
</head>
<body>
  <!-- <nav id="header" class="navbar navbar-expand-lg bg-white py-4 fixed-top">
  </nav> -->
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
                            <a id="aboutuspage" class="nav-link mx-lg-2 " href="<?= base_url('/abouts') ?>">About us</a>
                        </li>
                        <li class="nav-item">
                            <a id="individualpage" class="nav-link mx-lg-2" href="<?= base_url('/individual') ?>">Start a Fundraiser</a>
                        </li>
                        <li class="nav-item">
                            <a id="donatepage" class="nav-link mx-lg-2 active" href="<?= base_url('/donate') ?>">Donate</a>
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
  <div class="donate_img mt-5 pt-4">
    <!-- Donation banner image would go here -->
  </div>
  <div class="handwithheart_img text-center">
    <img src="<?= base_url('assets/img/handwithheart.png') ?>" alt="handwithheart_img" class="handwithheart_img mt-5 ">
    <p class="mt-3 "><b>"Fundraising is the gentle art of teaching the joy of giving."</b></p>
  </div>
  <h1 class="text-center">Select a Category</h1>
  <div class="d-flex justify-content-center pb-3">
    <div style="row-gap:10px;display:flex;justify-content:space-evenly;" class="category-buttons col-md-5">
      <button class="rounded-pill bg-white px-3 py-1 px-4 focus-change active-category" id="all-category" onclick="filterCauseswithcategory('All', 0)">All</button>
      <button class="rounded-pill bg-white px-3 py-1 focus-change category-not-active" onclick="filterCauseswithcategory('Medical', 1)">Medical</button>
      <button class="rounded-pill bg-white px-3 py-1 focus-change category-not-active" onclick="filterCauseswithcategory('Education', 2)">Education</button>
      <button class="rounded-pill bg-white px-3 py-1 px-4 focus-change category-not-active" onclick="filterCauseswithcategory('Crisis', 3)">Crisis</button>
      <button class="rounded-pill bg-white px-3 py-1 focus-change category-not-active" onclick="filterCauseswithcategory('Agriculture', 4)">Agriculture</button>
    </div>
  </div>
  <!-- Fundraiser Cards with Fixed Size -->
  <div class="container pt-4">
    <div class="row g-3" id="fundraiserCards"></div>
  </div>

  <div id="footer" class=" mt-5">
    <!-- Footer content will be loaded here -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    
    let currentIndex = 3; // Already shown 3 cards
    $.ajax({
      type: "get",
      url: "kanavuhelp/getHeader",
      success: (result) => {
        document.getElementById("header").innerHTML = result;
        let entry = "<?= $this->session->userdata("entry") ?>" ? "<?= $this->session->userdata("entry") ?>" : 0;
        console.log(entry);
        if (entry > 0) {
          document.getElementById("donatepage").classList.add("text-danger", "fw-bold");
        }
      },
      error: (error) => {
        document.getElementById("header").innerHTML = "";
      }
    });
    $.ajax({
      type: "get",
      url: "kanavuhelp/getFooter",
      success: (result) => {
        document.getElementById("footer").innerHTML = result;
      },
      error: (error) => {
        document.getElementById("footer").innerHTML = "";
      }
    });
    // Ensure fundraiser goal status is checked when the page loads
// document.addEventListener('DOMContentLoaded', function () {

//   // Only target cards inside the main container
//   const fundraiserCards = document.querySelectorAll('#fundraiserCards .card-container');

//   fundraiserCards.forEach(function (card) {
//     const fundraiserId = card.id.split('-')[2];

//     fetch(`/check_goal_status/${fundraiserId}`)
//       .then(response => response.json())
//       .then(data => {
//         if (data.goal_reached) {

//           const donateButton = card.querySelector('.donate_btn');
//           if (donateButton) {
//             donateButton.textContent = "Complete Fundraiser";
//             donateButton.disabled = true;
//           }

//           const badge = card.querySelector('.badge');
//           if (badge) {
//             badge.textContent = "Completed";
//           }

//         }
//       });
//   });

// });

    window.currentCategory = 'All';
    window.currentIndex = 0;
    // Function to filter causes and highlight the selected category
    // function filterCauseswithcategory(category, index) {
    // // Step 1: Update the visual focus (highlight the selected button)
    // changeFocus(index);
    // // Step 2: Make the AJAX request to filter causes
    // $.ajax({
    // type: "post",
    // url: "donations/filterCauses",
    // data: { category: category },
    // success: (result) => {
    // allFundraisers = <?= json_encode($this->session->userdata("fundraisers")) ?>;
    // currentIndex = 3;
    // document.getElementById("fundraiserCards").innerHTML = result;
    // },
    // error: (error) => {
    // console.log(error);
    // document.getElementById("fundraiserCards").innerHTML = "Error fetching causes.";
    // }
    // });
    // }
//     function filterCauseswithcategory(category, index) {
//     changeFocus(index);
//     window.currentCategory = category;
//     window.currentIndex = index;

//     $.ajax({
//         type: "POST",
//         url: "donations/filterCauses",
//         data: { 
//             category: category,
//             t: new Date().getTime()  // Cache buster
//         },
//         cache: false,
//         success: function(result) {
//             $("#fundraiserCards").html(result);
//         },
//         error: function() {
//             $("#fundraiserCards").html("<p class='text-center text-danger'>Error fetching causes.</p>");
//         }
//     });
// }
// function filterCauseswithcategory(category, index) {
//     changeFocus(index);
//     window.currentCategory = category;
//     window.currentIndex = index;

//     $.ajax({
//         type: "POST",
//         url: "donations/filterCauses",
//         data: { 
//             category: category,
//             t: new Date().getTime()
//         },
//         cache: false,
//         success: function(result) {
//             $("#fundraiserCards").html(result);
//         },
//         error: function() {
//             $("#fundraiserCards").html("<p class='text-center text-danger'>Error fetching causes.</p>");
//         }
//     });
// }

    // Function to handle button highlighting
    function changeFocus(index) {
      const buttons = document.querySelectorAll(".focus-change");
      buttons.forEach((button, i) => {
        if (i === index) {
          // Highlight the selected button
          button.classList.remove("category-not-active");
          button.classList.add("active-category");
        } else {
          // Reset other buttons to default state
          button.classList.remove("active-category");
          button.classList.add("category-not-active");
        }
      });
    }
    function openDonationModal() {
      // Show the modal using Bootstrap's modal method
      var donationModal = new bootstrap.Modal(document.getElementById('donationModal'));
      donationModal.show();
    }
    function setCauseId(causeId) {
      document.getElementById('cause_id').value = causeId;
    }
    function shareCause(url, title, imgurl) {
      console.log(url);
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
    // Simulate user login status (from backend or session)
    var isLoggedIn = <?= json_encode($is_logged_in); ?>; // Backend should set this
    // Handle Donate button click using event delegation
    document.querySelector('.container').addEventListener('click', function (event) {
      if (event.target.classList.contains('donate_btn')) {
        event.preventDefault(); // Prevent default link behavior
        // Show the donation modal
        var donationModal = new bootstrap.Modal(document.getElementById('donationModal'));
        donationModal.show();
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
  <!-- Donation Modal -->
  <div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Donation Form -->
          <form id="donationForm" method="POST" autocomplete="off" action="<?= base_url('kanavuhelp/processDonation') ?>"
            onsubmit="return validateForm()">
            <!-- Hidden fields to store cause ID and user ID -->
            <input type="hidden" name="cause_id" id="cause_id" value="">
            <input type="hidden" name="user_id" id="user_id" value="">
            <!-- Donation Form Fields -->
            <div class="text-center mb-3">
              <img src="<?= base_url('assets/img/handwithheart.png') ?>" alt="handwithheart_img" width="20%">
            </div>
            <div class="text-center mb-3">
              <img src="<?= base_url('assets/img/hdfc_qr_scranner.jpeg') ?>" alt="HDFC QR Code" width="50%">
            </div>
            <div class="text-center mt-2">
              <h5 class="modal-title text-danger fw-bold" id="donationModalLabel">Make a Secure Donation</h5>
            </div>
            <div class="text-center mt-2 mb-3">
            <h5 class="modal-title fs-bold">
                UPI ID: 
                <span id="upiText">vyapar.175502705184@hdfcbank</span>
                <i class="bi bi-clipboard ms-2" style="cursor:pointer;" onclick="copyUPI()"></i>
            </h5>
        </div>
            <!-- Amount -->
            <div class="mb-3">
              <label for="amount" class="form-label">Enter Amount</label>
              <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter amount*" required>
              <p id="error5" class="text-danger small mt-1"></p>
            </div>
            <!-- Transaction ID -->
            <div class="mb-3">
              <label for="transactionid" class="form-label">Transaction ID</label>
              <input type="text" name="transactionid" class="form-control" id="transactionid"
                placeholder="Enter UPI Transaction ID*" required>
              <p id="error4" class="text-danger small mt-1"></p>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Enter Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email*" required>
              <p id="error9" class="text-danger small mt-1"></p>
            </div>
            <!-- Phone Number -->
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" name="phoneno" class="form-control" id="phone" maxlength="10"
                placeholder="Enter your phone number*" required>
              <p id="error3" class="text-danger small mt-1"></p>
            </div>
            <!-- Name -->
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="name" maxlength="40" placeholder="Enter Your Name*"
                required>
              <p id="error6" class="text-danger small mt-1"></p>
            </div>
            <!-- City -->
            <div class="mb-3">
              <label for="donorcity" class="form-label">City</label>
              <input type="text" name="city" class="form-control" id="donorcity" maxlength="40"
                placeholder="Enter Your City*" required>
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
          <p class="text-center small mt-2">
            By continuing, you agree to our
            <a href="<?= base_url('/terms_of_use') ?>" target="_blank">Terms of Service</a> &
            <a href="<?= base_url('/privacy_policy') ?>" target="_blank">Privacy Policy</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Donation Success Modal -->
  <div class="modal fade" id="donationSuccess" tabindex="-1" aria-labelledby="donationSuccessLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-red-modal">
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
<script>
  // Simulate user login status (from backend or session)
  var isLoggedIn = <?= json_encode($is_logged_in); ?>; // Backend should set this
  // Handle Donate button click using event delegation
  document.querySelector('.container').addEventListener('click', function(event) {
    if (event.target.classList.contains('donate_btn')) {
      event.preventDefault(); // Prevent default link behavior
    /* if (!isLoggedIn) {
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
  function validateField(fieldId, errorId, validationFn, errorMessage) {
    const field = document.getElementById(fieldId);
    const errorElement = document.getElementById(errorId);
    field.addEventListener('input', () => {
      if(field.value=='')
    {
      errorElement.textContent='Please enter value';
    }
     else if (!validationFn(field.value)) {
        errorElement.textContent = errorMessage;
      } else {
        errorElement.innerHTML = "";// Clear error if validation passes
        if(field.name == "phone") {
          errorElement.innerHTML = `<span class="text-success">Fetching Donor</span> <div style="width:15px;height:15px;" class="spinner-grow text-success" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div style="width:15px;height:15px;" class="spinner-grow text-success" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div style="width:15px;height:15px;" class="spinner-grow text-success" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                    </div>`;
          fetchDonordata(field.value)
        }
      }
    });
  }
   function fetchDonordata($phone) {
    let phoneid = phone.trim();
    $.ajax({
      type:"post",
      url:"donors/fetchDonordata",
      data:{"phone":phoneid},
      success:(result)=>{
        console.log(result)
        let fetchingtimeout = "";
        if(result.trim() == "notexist") {
           document.getElementById("name").value = "";
           document.getElementById("name").removeAttribute("readonly");
           document.getElementById("donorcity").value = "";
           document.getElementById("donorcity").removeAttribute("readonly");
           document.getElementById("phone").value = "";
           document.getElementById("phone").removeAttribute("readonly");
          
           fetchingtimeout = setTimeout(()=>{
            document.getElementById("error7").innerHTML = "";
           },2000);
        }
        else{
          let existdonor = JSON.parse(result);
           document.getElementById("user_id").value = existdonor.id;
           document.getElementById("error7").innerHTML = "";
           document.getElementById("name").value = existdonor.name;
           document.getElementById("name").setAttribute("readonly","readonly");
           document.getElementById("donorcity").value = existdonor.location;
           document.getElementById("donorcity").setAttribute("readonly","readonly");
           document.getElementById("phone").value = existdonor.mobileNumber;
           document.getElementById("phone").setAttribute("readonly","readonly");
           clearTimeout(fetchingtimeout);
        }
      },
      error:(error)=>{
        console.log(error)
           document.getElementById("header").innerHTML = "";
      }
    });
  }
  // Validation functions
  //const isCurrencySelected = (value) => value !== '';
  const isAmountValid = (value) => parseFloat(value) > 0 && !isNaN(value); // Ensure value is greater than 0
  const isPhoneNumberValid = (value) => /^[0-9]\d{9}$/.test(value);
  const isTransactionIdValid = (value) => /^([A-Za-z0-9]{12,})+$/.test(value);
 /* const isName = (value) => /^([A-Za-z\s]{3,})+$/.test(value); */
 const isName = (value) => /^[a-zA-Z\s.]+$/.test(value) && value.trim().length >= 3;
  const isCity = (value) => /^([A-Za-z0-9_()\s]{3,})+$/.test(value);
  const isEmail = (value) => value.match(/^([A-Za-z0-9._-])+\@([a-z])+\.([a-z])+$/);
  // Attach real-time validation for each field
  window.onload = () => {
    validateField('currency', 'error5', isCurrencySelected, 'Please select a currency.');
    validateField('amount', 'error5', isAmountValid, 'Amount must be greater than 0.');
    validateField('name', 'error6', isName, 'Enter Valid Name');
   // validateField('email', 'error7', isEmail, 'Enter Valid EmailID');
    validateField('donorcity', 'error8', isCity, 'Enter Valid City');
    validateField('email', 'error9', isEmail, 'Enter Valid EmailID');
    validateField('phone', 'error3', isPhoneNumberValid, 'Phone number must start with 6, 7, 8, or 9 and be exactly 10 digits.');
    validateField('transactionid', 'error4', isTransactionIdValid, 'Enter Valid UPI Trasaction Id');
  };
  // Final validation and form submission
  document.getElementById('donationForm').onsubmit = function (event) {
    event.preventDefault(); // Prevent form submission for manual handling
    // Clear all error messages
    document.getElementById('error5').innerText = '';
    document.getElementById('error3').innerText = '';
    document.getElementById('error4').innerText = '';
    document.getElementById('error6').innerText = '';
   //document.getElementById('error7').innerText = '';
    document.getElementById('error8').innerText = '';
      document.getElementById('error9').innerText = '';
    let isValid = true;
    // Perform final validation
  /* if (!isCurrencySelected(document.getElementById('currency').value)) {
      document.getElementById('error5').innerText = 'Please select a currency.';
      isValid = false;
    } */
  if(document.getElementById('amount').value!==''){
    if (!isAmountValid(document.getElementById('amount').value) ) {
      document.getElementById('error5').innerText = 'Amount must be greater than 0.';
      isValid = false;
    }
  }
  if(!isName(document.getElementById('name').value))
  {
    document.getElementById('error6').innerText = 'Enter Valid Name';
    isValid = false;
  }
  if(!isCity(document.getElementById('donorcity').value))
  {
    document.getElementById('error8').innerText = 'Enter Valid City Name';
    isValid = false;
  }
    /* if(!isEmail(document.getElementById('email').value))
      {
        document.getElementById('error7').innerText = 'Enter Valid EmailID';
        isValid = false;
      }
    */
    if(!isEmail(document.getElementById('email').value))
        {
          document.getElementById('error9').innerText = 'Enter Valid EmailID';
          isValid = false;
        }
    if (!isPhoneNumberValid(document.getElementById('phone').value)) {
      document.getElementById('error3').innerText = 'Please Enter Correct Phone number';
      isValid = false;
    }
    if (!isTransactionIdValid(document.getElementById('transactionid').value)) {
      document.getElementById('error4').innerText = 'Transaction ID must be exactly 12 characters long.';
      isValid = false;
    }
    if (!isValid) {
      return; // Stop submission if validation fails
    }
    // Prepare Form Data
    const formData = new FormData(this);
    // AJAX Request to Server
    fetch('/kanavuhelp/processDonation', {
      method: 'POST',
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === 'error') {
          document.getElementById('error4').innerText = data.message; // Show server error
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
        }
      })
      .catch(() => {
        document.getElementById('error4').innerText = 'An unexpected error occurred. Please try again.';
      });
  };
</script>
<script>

    // ✔ LOAD All category on page load
    document.addEventListener('DOMContentLoaded', function () {
        filterCauseswithcategory('All', 0);
    });


    // ✔ FIXED: Filter category
    function filterCauseswithcategory(category, index) {
        changeFocus(index);

        $.ajax({
            type: "POST",
            url: "donations/filterCauses",
            data: { category: category, t: new Date().getTime() },
            cache: false,
            success: function (result) {

                // Insert the new cards
                $("#fundraiserCards").html(result);

                // After cards load → check goal status
                checkGoalStatusForLoadedCards();
            },
            error: function () {
                $("#fundraiserCards").html("<p class='text-center text-danger'>Error fetching causes.</p>");
            }
        });
    }


    // ✔ FIXED: Highlight selected category
    function changeFocus(index) {
        const buttons = document.querySelectorAll(".focus-change");
        buttons.forEach((button, i) => {
            if (i === index) {
                button.classList.remove("category-not-active");
                button.classList.add("active-category");
            } else {
                button.classList.remove("active-category");
                button.classList.add("category-not-active");
            }
        });
    }


    // ✔ FIXED: After AJAX → run goal check ONLY for loaded cards
    function checkGoalStatusForLoadedCards() {

        const fundraiserCards = document.querySelectorAll('#fundraiserCards .card-container');
 
        fundraiserCards.forEach(function (card) {

            const fundraiserId = card.id.split('-')[2];

            fetch(`/check_goal_status/${fundraiserId}`)
                .then(response => response.json())
                .then(data => { 

                    if (data.goal_reached) {

                        // Replace donate button
                        const donateBtn = card.querySelector(".donate_btn");
                        if (donateBtn) {
                            donateBtn.textContent = "Completed";
                            donateBtn.disabled = true;
                        }

                        // Update badge if exists
                        const badge = card.querySelector(".badge");
                        if (badge) {
                            badge.textContent = "Completed";
                        }
                    }
                });
        });

    }


    // ✔ Open donation modal
    function openDonationModal() {
        var donationModal = new bootstrap.Modal(document.getElementById('donationModal'));
        donationModal.show();
    }

    function setCauseId(causeId) {
        document.getElementById('cause_id').value = causeId;
    }

</script>

<script>
document.getElementById('donationRedirectBtn').addEventListener('click', function () {
  var successModal = bootstrap.Modal.getInstance(document.getElementById('donationSuccess'));
  successModal.hide();
  filterCauseswithcategory(window.currentCategory, window.currentIndex);
});
</script>
<form id="redirectToLoginForm" method="POST" action="<?= base_url('login') ?>">
    <input type="hidden" name="returnUrl" id="returnUrl" value="">
</form>
<script>
  function redirectToLogin() {
    // Get the current URL
    var currentUrl = window.location.href;
   
    // Encode the current URL
    var encodedUrl = encodeURIComponent(currentUrl);
    // Set the hidden input value to the encoded current URL
    document.getElementById('returnUrl').value = encodedUrl;
    // Submit the form to the login page
    document.getElementById('redirectToLoginForm').submit();
  }
</script>
<script>
    $('#donationModal').on('hidden.bs.modal', function () {
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    });
</script>
<script>
  function copyUPI() {
      let upi = document.getElementById("upiText").innerText;

      navigator.clipboard.writeText(upi).then(() => {
          alert("UPI ID Copied: " + upi);
      });
  }
</script>
</body>
</html>