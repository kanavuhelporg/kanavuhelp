<!DOCTYPE html>
<html lang="en">

<head>
<meta property="og:title" content="<?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>">
    <meta property="og:description" content="Check out this cause: <?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>">
    <meta property="og:image" content="<?= base_url('assets/individualform_img/') . htmlspecialchars($fundraiser->cover_image, ENT_QUOTES) ?>">
    <meta property="og:url" content="<?= base_url('helpus/' . $fundraiser->id) ?>">
    <meta property="og:type" content="website">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
  <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: 'Sen', sans-serif;
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
  #navbarscroll {
    margin-top: 17px;
    margin-bottom: 10px;
    margin-left: 70px;
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
    .bi-share {
    font-size: 1.3rem; /* Adjust the size of the share icon */
   transform:translateX(130px);
    cursor: pointer;
    color:#E01A2B;
       /* Optional: Make it clickable */
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
    .bg-red-modal {
  background-color: grey;
  color: white; /* Adjust the text color if needed for better contrast */
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
      <a class="navbar-brand me-auto" href="<?=base_url('')?>" >
        <img src="<?= base_url('assets/img/Kanavu_help.png') ?>" alt="Kanavu_help">
      </a>

      <button class="navbar-toggler"style="color:#EB2D32" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <span class="navbar-toggler-icon" style="color:#EB2D32"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">
            <img src="<?= base_url('assets/img/Kanavu_help.png') ?>" alt="Kanavu_help">
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" style="color:#EB2D32"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item dropdown">
               <a class="nav-link mx-lg-2" href="<?= base_url('/individual') ?>">Start A Fundraiser</a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/donate') ?>" style="color:rgba(235, 45, 50, 1)">Donate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/myFundraisers') ?>">My Fundraiser</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/kanavuhome#how-it-works-section'); ?>">How it works</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blogs</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
            </li>
          </ul><br>
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
  

  
  
 
    <!-- Fundraiser Banner Image -->
    <div class="donate_img mt-5 pt-4">
    <img src="<?=base_url('assets/img/Frame 21.png')?>" width="100%">
  </div>
    <div class="container mt-5 pt-4">
    <!-- Cause Heading and Main Content -->
    <div class="row mt-4">
        <div class="col-md-8">
            <!-- Cause Heading -->
            <h1><?= htmlspecialchars($fundraiser->cause_heading) ?></h1>
            
            <!-- Fundraiser Image -->
            <img src="<?= base_url('assets/individualform_img/') . $fundraiser->cover_image ?>" width="80%" height="300px" alt="no image" class="img-fluid mb-3">
            
            <!-- Cause Description -->
            <p><?= htmlspecialchars($fundraiser->cause_description) ?></p>
            
            <!-- Share Fundraiser Button -->
            <button class="btn " style="color:#E01A2B;border-radius:30px;border-color:#E01A2B" 
            onclick="shareCause('<?= base_url('helpus/' . $fundraiser->name) . '?id=' . $fundraiser->id ?>', 
                       '<?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>', 
                       '<?= htmlspecialchars($fundraiser->cause_description, ENT_QUOTES) ?>', 
                       '<?= base_url('assets/individualform_img/') . htmlspecialchars($fundraiser->cover_image, ENT_QUOTES) ?>')">
            <i class="bi bi-share ms-2" ></i> &nbsp;Share this fundraiser
            </button>
            <br>
        </div>

        <!-- Right Sidebar -->
        <div class="col-md-4">
            <!-- Amount Raised and Goal -->
            <h4>
    <strong>
        ₹ <?= number_format(min($fundraiser->raised_amount, $fundraiser->amount)) ?> raised out of ₹ <?= number_format($fundraiser->amount) ?>
    </strong>
</h4>
            <div class="progress mb-2">
            <?php
              // Calculate progress percentage
              $progress_percentage = ($fundraiser->raised_amount / $fundraiser->amount) * 100;
              ?>
              <div class="progress-bar" style="width: <?= $progress_percentage ?>%;" role="progressbar" aria-valuenow="<?= $progress_percentage ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <!-- Supporters and Days Left -->
            <p><strong><?= isset($fundraiser->supporters_count) ? htmlspecialchars($fundraiser->supporters_count) : '0' ?></strong> Supporters
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><?= isset($fundraiser->days_left) ? htmlspecialchars($fundraiser->days_left) : '0' ?></strong></p>
           <?php if ($fundraiser->days_left >= 0&&(!$fundraiser->hide_donation_button)): ?>
        <!-- Donate Button -->
        <a href="#" class="btn donate_btn no-hover"  onclick="setCauseId(<?= $fundraiser->id ?>)">Donate Now</a>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')) : ?>
    <div class="alert alert-danger">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>
            
            <!-- Payment Options 
            <p class="mt-2">or pay with &nbsp;&nbsp;
                <img src="<?= base_url('assets/img/gpay.png') ?>"  width= "10%"alt="Google Pay">
               &nbsp; <img src="<?= base_url('assets/img/phonepay.jpg') ?>"  width=" 10%" alt="PhonePe" class="ms-2">
            </p>-->

           <!-- Top Donors Section -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card p-3" style="background-color: #fff0f0; border-radius: 10px; border: none; width: 100%; max-width: 600px; margin: 0 auto;">
                <h5 style="font-weight: bold;">Our Donors</h5>
                <ul class="list-group" style="list-style-type: none; padding: 0;">
               
                <ul id="donor-list">
    <?php if (!empty($fundraiser->topdonars)): ?>
        <?php foreach ($fundraiser->topdonars as $donor): ?>
            <li class="donor-item d-flex align-items-center justify-content-between" style="padding: 10px 0; display: none;">
                <div class="d-flex align-items-center">
                    <div style="width: 40px; height: 40px; border-radius: 50%; background-color: #dcdcdc; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                        <?= substr($donor->name, 0, 1); ?>
                    </div>
                    <span style="margin-left: 10px;"><?= htmlspecialchars($donor->name); ?></span>
                </div>
                <span style="font-weight: bold;">Rs.<?= number_format($donor->amount); ?></span>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <li class="no-donors-message" style="padding: 10px 0; font-style: italic; color: #888;list-style:none">
            No donors available for this cause.
        </li>
    <?php endif; ?>
</ul>

<script>
    // Prepare a JavaScript array of donors, or an empty array if no donors are available
    const donors = [
        <?php if (!empty($fundraiser->topdonars)): ?>
            <?php foreach ($fundraiser->topdonars as $donor): ?>
                {
                    name: "<?= htmlspecialchars($donor->name); ?>",
                    initial: "<?= substr($donor->name, 0, 1); ?>",
                    amount: <?= $donor->amount; ?>
                },
            <?php endforeach; ?>
        <?php endif; ?>
    ];
</script>

                    </div>
                    <!-- Toggle Links
                    <li class="text-center" id="show-more" style="padding: 10px 0;">
                        <a href="javascript:void(0);" style="color: red; text-decoration: none;" onclick="toggleDonors(true)">Show more <span>&#x25BC;</span></a>
                    </li>
                    <li class="text-center" id="show-less" style="padding: 10px 0; display: none;">
                        <a href="javascript:void(0);" style="color: red; text-decoration: none;" onclick="toggleDonors(false)">Show less <span>&#x25B2;</span></a>
                    </li> -->

                </ul>
            </div>
        </div>
    </div>
</div>
            </div>
            <script>
    document.addEventListener('DOMContentLoaded', function() {
        const donorList = document.getElementById('donor-list');
        const displayLimit = 3; // Number of donors to display at a time

        // Function to render donors
        function renderDonors(donorsToRender) {
            donorList.innerHTML = ''; // Clear current list

            donorsToRender.forEach(donor => {
                const donorItem = document.createElement('li');
                donorItem.className = 'd-flex align-items-center justify-content-between';
                donorItem.style.padding = '10px 0';
                
                donorItem.innerHTML = `
                    <div class="d-flex align-items-center">
                        <div style="width: 40px; height: 40px; border-radius: 50%; background-color: #dcdcdc; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                            ${donor.initial}
                        </div>
                        <span style="margin-left: 10px;">${donor.name}</span>
                    </div>
                    <span style="font-weight: bold;">Rs.${donor.amount.toLocaleString()}</span>
                `;
                donorList.appendChild(donorItem);
            });
        }

        // Check if donors array is empty
        if (donors.length === 0) {
            const noDonorsMessage = document.createElement('li');
            noDonorsMessage.className = 'no-donors-message';
            noDonorsMessage.style.padding = '10px 0';
            noDonorsMessage.style.fontStyle = 'italic';
            noDonorsMessage.style.color = '#888';
           
            return; // Stop further execution
        }

        if (donors.length < 4) {
            // Directly display all donors if length is less than 4
            renderDonors(donors);
        } else {
            // Rotate donors if length is 4 or more
            let displayedDonors = [];

            function selectRandomDonors() {
                const randomIndexes = [];
                while (randomIndexes.length < displayLimit) {
                    const randomIndex = Math.floor(Math.random() * donors.length);
                    if (!randomIndexes.includes(randomIndex)) {
                        randomIndexes.push(randomIndex);
                    }
                }
                displayedDonors = randomIndexes.map(index => donors[index]);
            }

            // Initial render
            selectRandomDonors();
            renderDonors(displayedDonors);

            // Rotate donors every few seconds
            setInterval(() => {
                selectRandomDonors();
                renderDonors(displayedDonors);
            }, 2000); // Rotate every 2 seconds
        }
    });




function toggleDonors(showMore) {
    const additionalDonors = document.getElementById('additional-donors');
    const showMoreLink = document.getElementById('show-more');
    const showLessLink = document.getElementById('show-less');

    if (showMore) {
        additionalDonors.style.display = 'block';
        showMoreLink.style.display = 'none';
        showLessLink.style.display = 'block';
    } else {
        additionalDonors.style.display = 'none';
        showMoreLink.style.display = 'block';
        showLessLink.style.display = 'none';
    }
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
</script>
    <div class="row mt-4" >
    <!-- Created by Section -->
    <div class="col-md-3 col-sm-12justify-content-start d-flex  mb-3 mb-md-0" >
        <div class="border rounded p-2" style="border: 1px solid #E0E1E3; width: 80%; max-width: 250px; ">
            <p style="margin: 0;">Created by</p>
            <strong style="font-size: 14px;"><?= htmlspecialchars($fundraiser->username) ?></strong>
        </div>
    </div>

    <!-- Beneficiary Section -->
    <div class="col-md-3 justify-content-start col-sm-12 d-flex ">
        <div class="border rounded p-2" style="border: 1px solid #E0E1E3; width: 80%; max-width: 250px;">
            <p style="margin: 0;">This fundraiser will benefit</p>
            <strong style="font-size: 14px;"><?= htmlspecialchars($fundraiser->name) ?></strong>
            <p style="margin: 0;">from</p>
        </div>
    </div>
</div>

    <!-- Disclaimer Section -->
    <p class="text-muted" style="width:70%">
      <br>
        Content Disclaimer: The views and opinions expressed on the campaign page are those of the campaigner or donors. They do not reflect or represent the company’s views and opinions.
    </p>
</div>
            </div>
            <script>
function setCauseId(causeId) {
  document.getElementById('cause_id').value = causeId;
}
</script>
  <div class="footer">
      <footer class="footer mt-auto py-3">
        <div class="container">
          <h5 class="text-center">Kanavu.help</h5>
          <div class="row text-center">
            <div class="col-12">
              <div class="footer1">
                <a class="footer-lable lable" href="<?= base_url('/abouts') ?>"style="text-decoration:none;color:white">About</a>
                <a class="footer-lable lable" href="<?= base_url('/contactus') ?>" style="text-decoration:none;color:white">Contact</a>
                <a class="footer-lable lable" href="<?= base_url('/terms_of_use') ?>" style="text-decoration:none; color:white">Terms of Use</a>
                <a class="footer-lable lable" href="<?= base_url('/privacy_policy') ?>" style="text-decoration:none;color:white">Privacy Policy</a>
              </div>
            </div>
          </div>
        </div>
        <div class="social-icons d-flex justify-content-center text-center my-2">
          <a href="https://www.facebook.com/" target="_blank" class="mx-2">
            <img src="<?= base_url('assets/img/facebook-f.svg')?>" alt="Facebook Logo" class="img-fluid" style="max-width: 30px;">
          </a>
          <a href="https://twitter.com/" target="_blank" class="mx-2">
            <img src="<?= base_url('assets/img/twitter.svg')?>" alt="Twitter Logo" class="img-fluid" style="max-width: 30px;">
          </a>
          <a href="https://www.linkedin.com/" target="_blank" class="mx-2">
            <img src="<?= base_url('assets/img/linkedin-in.svg')?>" alt="LinkedIn Logo" class="img-fluid" style="max-width: 30px;">
          </a>
        </div>
        <img src="<?= base_url('assets/img/footer-secured-card 1.svg')?>" alt="Secure Card" class="footimg img-fluid mx-auto d-block"
          style="max-width: 200px;">
        <p class="text-center ">copyright 2024 @ Kanavu.help. All Rights Reserved.</p>
      </footer>
    </div>

      <!-- Bootstrap JS and dependencies (Popper.js) -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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
<!-- Donation Modal -->
<div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Donation Form -->
          <form id="donationForm" method="POST" action="<?= base_url('kanavuhelp/processDonation') ?>" onsubmit="return validateForm()">
  <!-- Hidden fields to store cause ID and user ID -->
  <input type="hidden" name="cause_id" id="cause_id" value="">
  <input type="hidden" name="user_id" id="user_id" value="<?= $is_logged_in ? $this->session->userdata('userId') : ''; ?>">

  <!-- Donation Form Fields -->
  <div class="text-center">
    <img src="<?= base_url('assets/img/handwithheart.png') ?>" alt="handwithheart_img" width="20%" style="margin-top: -20px;">
  </div>
  <div class="text-center">
    <img src="<?= base_url('assets/img/HDFC QRCode.jpg') ?>" alt="handwithheart_img" width="50%" style="margin-top: -20px;">
  </div>

  <div class="text-center mt-2">
    <h5 class="modal-title" id="donationModalLabel">Make a Secure Donation</h5>
  </div>

  <!-- Currency and Amount -->
  <div class="form-group d-flex justify-content-center" style="border-radius:20px;">
    <label for="currency" class="visually-hidden">Currency Type</label>
    <select class="form-control" name="currency_type" id="currency" style="width:45%;" required>
      <option value="" disabled selected>Select Currency</option>
      <option>INR</option>
      <option>USD</option>
    </select>
    <div style="width: 42%; margin-left: 2%;">
      <label for="amount" class="visually-hidden">Amount</label>
      <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter amount*" required>
      <p id="error5" style="color: red; margin: 5px 0 0; font-size: 0.9em;"></p>
    </div>
  </div>

  <!-- Phone Number -->
  <div class="form-group ms-4">
  <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" maxlength="40" placeholder="Enter Your Name*" style="width:95%;" required>
    <p id="error6" style="color:red; margin-top: 5px;"></p>
    </div>
  <div class="form-group ms-4">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="tel" name="phoneno" class="form-control" id="phone" maxlength="10" placeholder="Enter your phone number*" style="width:95%;" required>
    <p id="error3" style="color:red; margin-top: 5px;"></p>
  </div>
  <div class="form-group ms-4">
    <label for="phone" class="form-label">Email ID</label>
    <input type="text" name="email" class="form-control" id="email"  placeholder="Enter your EmailID*" style="width:95%;" required>
    <p id="error7" style="color:red; margin-top: 5px;"></p>
  </div>
  

  <!-- Transaction ID -->
  <div class="form-group ms-4">
    <label for="transactionid" class="form-label">Transaction ID</label>
    <input type="text" name="transactionid" class="form-control" id="transactionid" maxlength="12" placeholder="Enter UPI Transaction ID*" style="width:95%;" required>
    <p id="error4" style="color:red; margin-top: 5px;"></p>
  </div>

  <!-- Continue Button -->
  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-danger" style="width:50%; border-radius:10px; background-color:white; color:red;">
      Continue to Pay ₹
    </button>
  </div>
</form>

          <!-- Terms and Privacy Policy -->
          <p class="text-center small mt-2">By continuing, you agree to our <a href="#">Terms of Service</a> & <a href="#">Privacy Policy</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="donationSuccess" tabindex="-1" aria-labelledby="donationSuccessLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
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

  // Handle Donate button click
  document.querySelectorAll('.donate_btn').forEach(button => {
    button.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default link behavior

    /*  if (!isLoggedIn) {
        // Show login modal if not logged in
        const baseUrl = "<?= base_url('/login') ?>"; 
        var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        loginModal.show();

        // Redirect to login page with return URL on OK button click
        document.getElementById('loginRedirectBtn').addEventListener('click', function() {
          var currentUrl = window.location.href;
          window.location.href = `${baseUrl}?returnUrl=${encodeURIComponent(currentUrl)}`;
        });
      } else {*/
        // Show the donation modal if logged in
        var donationModal = new bootstrap.Modal(document.getElementById('donationModal'));
        donationModal.show();
     // }
    });
  });

  // Handle donation modal close event to ensure page is accessible
  var donationModalElement = document.getElementById('donationModal');
  donationModalElement.addEventListener('hidden.bs.modal', function () {
    // Ensure body is not still marked as modal-open
    document.body.classList.remove('modal-open');
    
    // Remove any lingering modal backdrop
    var modalBackdrop = document.querySelector('.modal-backdrop');
    if (modalBackdrop) {
      modalBackdrop.remove();
    }

    // Reset form fields when the modal is closed
    donationModalElement.querySelector('form').reset();
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
      errorElement.textContent = "please enter value";
    }
     else  if (!validationFn(field.value)) {
        errorElement.textContent = errorMessage;
      } else {
        errorElement.textContent = ''; // Clear error if validation passes
      }
    });
  }

  // Validation functions
  const isCurrencySelected = (value) => value !== '';
  const isAmountValid = (value) => parseFloat(value) > 0 && !isNaN(value); // Ensure value is greater than 0
  const isPhoneNumberValid = (value) => /^[6-9]\d{9}$/.test(value);
  const isTransactionIdValid = (value) => /^[1-9]\d{11}/.test(value);
  const isName = (value) => /^[a-zA-Z]{3,}\s*/.test(value);
  const isEmail =(value)=> /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
  // Attach real-time validation for each field
  window.onload = () => {
    validateField('currency', 'error5', isCurrencySelected, 'Please select a currency.');
    validateField('amount', 'error5', isAmountValid, 'Amount must be greater than 0.');
    validateField('name', 'error6', isName, 'Enter Valid Name');
    validateField('email', 'error7', isEmail, 'Enter Valid EmailID');
    
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
    document.getElementById('error7').innerText = '';
    let isValid = true;

    // Perform final validation
    if (!isCurrencySelected(document.getElementById('currency').value)) {
      document.getElementById('error5').innerText = 'Please select a currency.';
      isValid = false;
    }
 if(document.getElementById('amount').value!==''){
    if (!isAmountValid(document.getElementById('amount').value)  ) {
      document.getElementById('error5').innerText = 'Amount must be greater than 0.';
      isValid = false;
    }
  }
  if(!isName(document.getElementById('name').value))
  {
    document.getElementById('error6').innerText = 'Enter Valid Name';
    isValid = false;
  }
  if(!isEmail(document.getElementById('email').value))
  {
    document.getElementById('error7').innerText = 'Enter Valid EmailID';
    isValid = false;
  }
    if (!isPhoneNumberValid(document.getElementById('phone').value)) {
      document.getElementById('error3').innerText = 'Phone number must start with 6, 7, 8, or 9 and be exactly 10 digits.';
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
    </html>
    

