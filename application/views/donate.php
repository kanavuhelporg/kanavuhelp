<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

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
    .donate_btn {
    margin-right: 10px; /* Custom margin between button and icon */
}

.bi-share {
    font-size: 1.3rem; /* Adjust the size of the share icon */
    cursor: pointer;
    color: #E01A2B;
    margin-left: auto; /* Pushes the share icon to the far right in its flex container */
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
        margin-left: 2%;
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
    </style>
    </head>
<body>
<nav class="navbar navbar-expand-lg bg-white py-4 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="<?=base_url('')?>">
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
                        <a class="nav-link mx-lg-2" href="<?= base_url('/donate') ?>" style="color: rgba(235, 45, 50, 1)">Donate</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link mx-lg-2" href="<?= base_url('/myhelps') ?>" >My Helps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/kanavuhome#how-it-works-section') ?>">How it Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>" >Contact Us</a>
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
                        <li><a class="dropdown-item" href="<?= base_url('/logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                      </ul>
                    </div>
                  </div>
                  <?php else: ?>
                  <a href="<?= base_url('/login') ?>" class="login-button me-2">Login</a>
                  <?php endif; ?>
                </div>
        
      </div>
    </div>
  </nav>
  <div class="donate_img mt-5 pt-4">
    <img src="<?=base_url('assets/img/Frame 21.png')?>" width="100%">
  </div>
  <div class="handwithheart_img text-center">
    <img src="<?= base_url('assets/img/handwithheart.png') ?>" alt="handwithheart_img" class="handwithheart_img mt-5 ">
    <p class="mt-3 "><b>"Fundraising is the gentle art of teaching the joy of giving."</b></p>

  </div>
  <!-- <div class="mx-auto text-center mt-8">
    <div class="category-buttons"> -->
  <!-- "All" button -->
    <!-- <button
      class="filter-btn active inline-flex items-center border-2 border-gray-400 text-gray-400 py-1 px-3 focus:outline-none rounded-full text-base mt-4 mr-3 md:mt-0 donatefor"
      data-filter="all">All</button>

    <?php if (!empty($category)): ?>
      <?php foreach ($category as $cat): ?>
          <button
              class="filter-btn inline-flex items-center border-2 border-gray-400 text-gray-400 py-1 px-3 focus:outline-none rounded-full text-base mt-4 mr-3 md:mt-0 donatefor"
              data-filter="<?= htmlspecialchars($cat->name, ENT_QUOTES) ?>"><?= htmlspecialchars($cat->name, ENT_QUOTES) ?></button>
      <?php endforeach; ?>
    <?php else: ?>
      <p>No categories available at the moment.</p>
    <?php endif; ?>
  </div> -->
  <!-- <h1>Select a Category</h1>
    <button onclick="location.href='<?php echo site_url('data/fetch/medical'); ?>'">Medical</button>
    <button onclick="location.href='<?php echo site_url('data/fetch/education'); ?>'">Education</button>
    <button onclick="location.href='<?php echo site_url('data/fetch/crisis'); ?>'">Crisis</button>
    <button onclick="location.href='<?php echo site_url('data/fetch/agriculture'); ?>'">Agriculture</button> -->

<!-- Fundraiser Cards with Fixed Size -->
<div class="container mt-5">
  <div class="row">
    <?php if (!empty($fundraisers)): ?>
        <?php foreach ($fundraisers as $fundraiser): ?>
            <div class="col-12 col-md-4 mb-4 d-flex card-container" data-category="<?= htmlspecialchars($fundraiser->category, ENT_QUOTES) ?>">
            <a href="<?= base_url('helpus/' . $fundraiser->id) ?>" style="text-decoration:none;color:black">
                <div class="card h-100 w-100 fixed-card">
                    <img src="<?= base_url('assets/individualform_img/') . htmlspecialchars($fundraiser->cover_image, ENT_QUOTES) ?>" width="80%" height="200px" class="card-img-top fixed-card-img" alt="no image">
                    
                    <div class="card-body d-flex flex-column">
                        <p class="card-title"><?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?></p>

                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-text text-muted mb-0">for <?= htmlspecialchars($fundraiser->name, ENT_QUOTES) ?></p>
                            <button type="button" class="btn card_button text-muted ms-auto"><?= htmlspecialchars($fundraiser->category, ENT_QUOTES) ?></button>
                        </div>
                        
                        <p class="card-text"><strong>₹ <?= number_format($fundraiser->raised_amount) ?> raised out of ₹ <?= number_format($fundraiser->amount) ?></strong></p>
                        <div class="progress mb-2">
            <?php
              // Calculate progress percentage
              $progress_percentage = ($fundraiser->raised_amount / $fundraiser->amount) * 100;
              ?>
              <div class="progress-bar" style="width: <?= $progress_percentage ?>%;" role="progressbar" aria-valuenow="<?= $progress_percentage ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                        
                        <div class="d-flex align-items-center mt-auto">
                        <?php if ($fundraiser->days_left > 0 &&(!$fundraiser->hide_donation_button)) :?>
        <!-- Donate Button -->
        <a href="#" class="btn donate_btn" data-toggle="modal" data-target="#donationModal" onclick="setCauseId(<?= $fundraiser->id ?>)">Donate Now</a>
        <i class="bi bi-share ms-2"></i>
        <?php endif; ?>
            
                           
                        </div>
                    </div>
                </div>
            </a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No fundraisers available at the moment.</p>
    <?php endif; ?>
  </div>
</div>
<script>
function setCauseId(causeId) {
  document.getElementById('cause_id').value = causeId;
}
</script>

<?php if ($this->session->flashdata('error')) : ?>
    <div class="alert alert-danger">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

<script>
  $(document).ready(function () {
    $('.filter-btn').click(function () {
      var category = $(this).data('filter');

      $.ajax({
        url: "<?= site_url('DonateController/filterCategory') ?>",
        type: "POST",
        data: { category: category },
        dataType: "json",
        success: function (response) {
          $('#donationList').empty(); // Clear current content
          if (response.length > 0) {
            $.each(response, function (index, donation) {
              // Append each donation item to the donation list
              $('#donationList').append(
                '<div class="donation-card">' +
                '<h4>' + donation.title + '</h4>' +
                '<p>' + donation.description + '</p>' +
                '</div>'
              );
            });
          } else {
            $('#donationList').append('<p>No donations available for this category.</p>');
          }
        },
        error: function () {
          alert("Error fetching data. Please try again.");
        }
      });
    });
  });
</script>


<div class="footer">
      <footer class="footer mt-auto py-3">
        <div class="container">
          <h5 class="text-center">Kanavu.help</h5>
          <div class="row text-center">
            <div class="col-12">
              <div class="footer1">
                <a class="footer-lable lable" href="<?= base_url('/abouts') ?>">About</a>
                <a class="footer-lable lable" href="<?= base_url('/contactus') ?>">Contact</a>
                <a class="footer-lable lable" href="#">Terms of Use</a>
                <a class="footer-lable lable" href="#">Privacy Policy</a>
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
  <!-- Other HTML code, like the card section -->

<!-- Donation Modal -->
<!-- Donate Button -->

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

    <div class="text-center mt-2">
      <h5 class="modal-title" id="donationModalLabel">Make a Secure Donation</h5>
      <p>Your contribution has the potential <br> to make a greater difference.</p>
    </div>

    <!-- Currency and Amount -->
    <div class="form-group d-flex justify-content-center" style="border-radius:20px;">
      <select class="form-control" name="currency_type" id="currency" style="width:35%;" required>
        <option>INR</option>
        <option>USD</option>
      </select>

      <input type="number" name="amount" class="form-control ms-5" id="amount" placeholder="Enter amount*" style="width:40%;" required>
    </div>

    <!-- Name -->
    <div cladss="form-group ms-4">
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name*" style="width:92%;" required>
    </div>

    <!-- Email -->
    <div class="form-group ms-4">
      <input type="email" name="emailid" class="form-control" id="email" placeholder="Enter your email*" style="width:92%;" required>
    </div>

    <!-- Phone Number -->
    <div class="form-group ms-4">
      <input type="tel" name="phoneno" class="form-control" id="phone" placeholder="Enter your phone number*" style="width:92%;" required>
    </div>

    <!-- Transaction ID -->
    <div class="form-group ms-4">
      <input type="text" name="transactionid" class="form-control" id="transactionid" placeholder="Enter The Transaction Id*" style="width:92%;" required>
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

<script>
  // Simulate user login status (from backend or session)
  var isLoggedIn = <?= json_encode($is_logged_in); ?>; // Backend should set this

  // Handle Donate button click using event delegation
  document.querySelector('.container').addEventListener('click', function(event) {
    if (event.target.classList.contains('donate_btn')) {
      event.preventDefault(); // Prevent default link behavior

      if (!isLoggedIn) {
        // Ask for confirmation before redirecting to the login page
        var confirmRedirect = alert("You need to login to donate. Do you want to proceed to the login page?");
        
        
          // Redirect to login page if user clicks "OK"
          window.location.href = "<?= base_url('/login') ?>"; // Replace with your actual login URL
        
      } else {
        // Show the donation modal if logged in
        var donationModal = new bootstrap.Modal(document.getElementById('donationModal'));
        donationModal.show();
      }
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
function validateForm() {
    // Validate Name (minimum 3 characters)
    const name = document.getElementById('name').value.trim();
    if (name.length < 3) {
        alert("Name must be at least 3 characters long.");
        return false;
    }

    // Validate Email
    const email = document.getElementById('email').value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Validate Amount (decimal)
    const amount = document.getElementById('amount').value.trim();
    if (isNaN(amount) || parseFloat(amount) <= 0) {
        alert("Please enter a valid amount in decimal format.");
        return false;
    }

    // Validate Phone Number (10 digits, starts with 6, 7, 8, or 9)
    const phone = document.getElementById('phone').value.trim();
    const phonePattern = /^[6-9]\d{9}$/;
    if (!phonePattern.test(phone)) {
        alert("Please enter a valid 10-digit phone number starting with 6, 7, 8, or 9.");
        return false;
    }

    // Validate Transaction ID (12 digits)
    const transactionId = document.getElementById('transactionid').value.trim();
    const transactionPattern = /^\d{12}$/;
    if (!transactionPattern.test(transactionId)) {
        alert("Transaction ID must be exactly 12 digits.");
        return false;
    }

    return true; // If all validations pass
}
</script>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
    </html>
    