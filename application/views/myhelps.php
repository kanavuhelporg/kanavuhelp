<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>
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
    .active {
  background-color: #f87171; /* For example, a darker red background */
  color: white; /* White text for contrast */
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
/* Start a kanavu button */
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
/* button above cards */
    .data {
      border: 1px solid #E01A2B;
      color: #E01A2B;
      background-color: #fff;
      border-radius: 20px;
    }

    .data:hover {
      background-color: #E01A2B;
      color: white;
    }
/* card section */
    .card {
      border: none;
      flex-direction: row;
      width: 873px;
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
      margin: 20px;
      width: 152px;
      height: 167px;
    }

    .card-title {
      width: 250px;
    }
/* progress bar in the card */
    .progress {
      width: 286px;
    }
.amount{
  margin-right:15%;
}

@media (min-width:768px) and (max-width:990px) {
  .card{
    width:auto;
  }
}
    @media (max-width: 767px) {
/* img below nav bar */
      .donate_img {
        width: 100%;
        /* Ensure the parent container takes full width */
        position: relative;
      }

      .donate_img img {
        width: 100%;
        height: 300px;
        /* Maintain aspect ratio */
        object-fit: cover;
        /* Ensures the image fills its container */
      }
      .contri_text{
        display:none;
      }
/* card section */
      .card {
        flex-direction: column;
        width: auto;
      }

      .card-img-top {
        margin: 20px;
        width: auto;
        height: 167px;
      }
      .amount{
        margin-right:0px;
      }
    }
    #myDonationsButton, #myFundraisersButton {
    transition: none;
    color: #dc3545; /* Red color */
    background-color: #ffffff; /* White background */
    border-color: #dc3545; /* Red border */
  }

  #myDonationsButton:hover, #myFundraisersButton:hover {
    color: #dc3545; /* Keep red color on hover */
    background-color: #ffffff; /* Keep white background on hover */
    border-color: #dc3545; /* Keep red border on hover */
  }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white py-4 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="<?= base_url('') ?>">
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
                        <a class="nav-link mx-lg-2" href="<?= base_url('/myhelps') ?>" style="color: rgba(235, 45, 50, 1)">My Helps</a>
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
    </div>
  </nav>
  <!-- Login Required Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>You need to log in to view your helps.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="loginRedirectBtn">Login</button>
      </div>
    </div>
  </div>
</div>
<script>
  // Check login status from PHP
  var isLoggedIn = <?= json_encode($is_logged_in); ?>;

  // If the user is not logged in, show the login modal
  if (!isLoggedIn) {
    var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
    loginModal.show();

    // Redirect to login page when "Login" button is clicked
    document.getElementById('loginRedirectBtn').addEventListener('click', function() {
      var currentUrl = window.location.href;
      window.location.href = "<?= base_url('/login') ?>?returnUrl=" + encodeURIComponent(currentUrl);
    });
  }
</script>
  <div class="donate_img mt-5 pt-4">
    <img src="<?= base_url('assets/img/myhelps.png') ?>" width="100%">
  </div>
  <!-- <div class="handwithheart_img text-center">
    <img src="<?= base_url('assets/img/handwithheart.png') ?>" alt="handwithheart_img" class="handwithheart_img mt-5 ">
    <p class="mt-3 "><b>"Fundraising is the gentle art of teaching the joy of giving."</b></p>

  </div> -->
  <div class="mx-auto text-center mt-8 md:ml-20">
  <button id="myDonationsButton"
    class="btn btn-outline-danger text-red-500 bg-white border-red-500 rounded-pill px-4 py-2 mt-4 md:mt-0 mr-2">My Donations</button>
  <button id="myFundraisersButton"
    class="btn btn-outline-danger text-red-500 bg-white border-red-500 rounded-pill px-4 py-2 mt-4 md:mt-0">My Fundraisers</button>
</div>


<script>
  // Adding click event to navigate to 'My Fundraisers' page
  document.getElementById("myFundraisersButton").addEventListener("click", function() {
    window.location.href = "<?php echo base_url('myFundraisers'); ?>"; // Correctly quoted and lowercase path
  });
</script>


<div class="container mt-5">
    <div class="row">
        <!-- Section Title and Contributions Info -->
        <div class="col-md-6 text-center">
            <h4 class="font-weight-bold">Help Status and Details</h4>
        </div>
        <div class="col-md-4 text-end contri_text">
            <h4 class="font-weight-bold">You Contributed</h4>
        </div>
    </div>
</div>
    <?php if (!empty($causes)) : ?>
        <?php foreach ($causes as $cause) : ?>
          <div class="container d-flex justify-content-center align-items-center mt-5">
          <a href="<?= base_url('/helpus/' . $cause->id) ?>" style="text-decoration:none;color:black">
            <div class="card mb-3">
                <!-- Use img-fluid and custom inline styles for width and height -->
                <img src="<?= base_url('assets/individualform_img/') . htmlspecialchars($cause->cover_image, ENT_QUOTES) ?>" width="80%" height="200px" class="card-img-top img-fluid" alt="...">
                
                <div class="card-body">
                    <div class="card_text d-flex justify-content-between">
                        <p class="card-title"><b><?= $cause->cause_heading?></b></p>
                        <p  ><b>  <?php echo ($cause->status == 0) ? '<span class="badge bg-danger">waiting for admin verification</span>' :' <span class="badge bg-success">verified</span>'; ?></b></p>
                    </div>
                    <!-- Flex container to align "Rs.2000" and "Created by Dinesh Kumar" -->
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text text-muted">Created by <br> <?= $cause->name ?></p>
                        <p class="amount" ><b> ₹ <?= number_format($cause->donated_amount) ?></b></p>
                        
                        <!-- <p class="amount me-4 "><b> ₹ <?= number_format($cause->donated_amount) ?></b></p> -->
                    </div>
                    <!--<p class="card-text"><strong>₹  Total Amount  ₹ <?= number_format($cause->amount) ?></p>-->
                    <!--<div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: <?= ($cause->amount_raised / $cause->goal_amount) * 100 ?>%;" aria-valuenow="<?= ($cause->amount_raised / $cause->goal_amount) * 100 ?>" aria-valuemin="0" aria-valuemax="100">
                        </div>-->
                    </div>
                </div>
        </a>
            </div>
        <?php endforeach; ?>
        
    <?php else : ?>
        <p>No causes found for your account.</p>
    <?php endif; ?>
</div>



  <div class="footer">
    <footer class="footer mt-auto py-3">
      <div class="container">
        <h5 class="text-center">Kanavu.help</h5>
        <div class="row text-center">
          <div class="col-12">
            <div class="footer1">
              <a class="footer-lable lable" href="<?= base_url('kanavuhelp/abouts') ?>">About</a>
              <a class="footer-lable lable" href="<?= base_url('kanavuhelp/contactus') ?>">Contact</a>
              <a class="footer-lable lable" href="#">Terms of Use</a>
              <a class="footer-lable lable" href="#">Privacy Policy</a>
            </div>
          </div>
        </div>
      </div>
      <div class="social-icons d-flex justify-content-center text-center my-2">
        <a href="https://www.facebook.com/" target="_blank" class="mx-2">
          <img src="assets/img/facebook-f.svg" alt="Facebook Logo" class="img-fluid" style="max-width: 30px;">
        </a>
        <a href="https://twitter.com/" target="_blank" class="mx-2">
          <img src="assets/img/twitter.svg" alt="Twitter Logo" class="img-fluid" style="max-width: 30px;">
        </a>
        <a href="https://www.linkedin.com/" target="_blank" class="mx-2">
          <img src="assets/img/linkedin-in.svg" alt="LinkedIn Logo" class="img-fluid" style="max-width: 30px;">
        </a>
      </div>
      <img src="assets/img/footer-secured-card 1.svg" alt="Secure Card" class="footimg img-fluid mx-auto d-block"
        style="max-width: 200px;">
      <p class="text-center ">copyright 2024 @ Kanavu.help. All Rights Reserved.</p>
    </footer>
  </div>

  <!-- Bootstrap JS and dependencies (Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

