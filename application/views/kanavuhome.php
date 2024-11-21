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
      background-color: #e9ecef;
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

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="<?= base_url('assets/img/1.svg') ?>" class="d-block w-100" alt="Image 1">
        <div class="imgtext1 mt-5 pt-5">
          <p>THE <strong>WORLD'S <br>PLATFORM</strong> FOR <br>
            <span>HELP</span>
          </p>
          <div class="imgtext11">
            <ul>
              <li style="font-weight: bold;margin-left">"Empowering Lives, Defeating diseases & disasters"</li>
              <li>Join Us in the Fight & Healing.</li><br>
              <li>
                <a href="<?= base_url('/individual') ?>">
                  <button type="button" class="btn border rounded-pill px-4 py-2 shadow-sm" style="background-color: red; color: white; border: none;">
                    Start a Fundraiser
                  </button>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/2.svg') ?>" class="d-block w-100" alt="Image 2">
        <div class="imgtext2 mt-5 pt-5">
          <p>WE ARE ON A MISSION TO <br>
            <span>HELP THE WORLD</span>
          </p>
          <div class="imgtext22">
            <ul>
              <li style="font-weight: bold;">"Empowering Lives, Defeating diseases & disasters"</li>
              <li>Join Us in the Fight & Healing.</li><br>
              <li>
                <a href="<?= base_url('/individual') ?>">
                  <button type="button" class="btn border rounded-pill px-4 py-2 shadow-sm" style="background-color: red; color: white; border: none;">
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
  <div class="container-xxl mt-5">
    <div class="h4 text-center">BE THE REASON OF<span style="color:#EB2D32"> SOMEONE SMILES</span></div>
    <div style="display: flex; justify-content: center;">
      <img class="img-fluid heart" src="assets/img/underline.svg" alt="no image">
    </div>
    <div class="p text-center">We try our best to help helpless people,<br>Donate to charity causes around the world.</div>
  </div><br>

  <div id="fundraiserCarousel" class="carousel slide mt-5 fundraiser-carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php if (!empty($fundraisers)): ?>
        <?php
        $chunked_fundraisers = array_chunk($fundraisers, 3); // Group fundraisers into sets of 3
        foreach ($chunked_fundraisers as $index => $fundraiser_group): ?>
          <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
            <div class="container">
              <div class="row">
                <?php foreach ($fundraiser_group as $fundraiser): ?>
                  <?php
                  $image_url = !empty($fundraiser->cover_image)
                    ? base_url('assets/individualform_img/') . htmlspecialchars($fundraiser->cover_image, ENT_QUOTES)
                    : base_url('assets/images/no-image-available.png');
                  ?>
                  <div class="col-12 col-md-4 d-flex justify-content-center">
                    <a href="<?= base_url('helpus/' . $fundraiser->id) ?>" style="text-decoration:none;color:black">
                      <div class="card h-100 fixed-card">
                        <div class="fixed-card-img" style="background-image: url('<?= $image_url ?>');"></div>
                        <div class="card-body d-flex flex-column">
                          <p class="card-title"><?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?></p>
                          <div class="d-flex justify-content-between align-items-center">
                            <p class="card-text text-muted mb-0">by <?= htmlspecialchars($fundraiser->name, ENT_QUOTES) ?></p>
                            <button type="button" class="btn card_button text-muted ms-auto"><?= htmlspecialchars($fundraiser->category, ENT_QUOTES) ?></button>
                          </div>
                          <p class="card-text"><strong>₹ <?= number_format($fundraiser->raised_amount) ?> raised out of ₹ <?= number_format($fundraiser->amount) ?></strong></p>
                          <div class="progress mb-2">
                            <?php
                            $progress_percentage = ($fundraiser->raised_amount / $fundraiser->amount) * 100;
                            ?>
                            <div class="progress-bar" style="width: <?= $progress_percentage ?>%;" role="progressbar" aria-valuenow="<?= $progress_percentage ?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>

                          <div class="d-flex align-items-center mt-auto">
                            <?php if ($fundraiser->days_left > 0 && (!$fundraiser->hide_donation_button)) : ?>
                              <a href="#" class="btn donate_btn no-hover" onclick="setCauseId(<?= $fundraiser->id ?>)" data-bs-toggle="modal">Donate Now</a>
                              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <i class="bi bi-share ms-2" style="color:red " onclick="shareCause('<?= base_url('helpus/' . $fundraiser->id) ?>', '<?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>')"></i>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p><strong>
            <center>No fundraisers available at the moment.</center>
          </strong></p>
      <?php endif; ?>
    </div>

    <button class="carousel-control-prev" type="button" style="color:black" data-bs-target="#fundraiserCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#fundraiserCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <script>
    function setCauseId(causeId) {
      document.getElementById('cause_id').value = causeId;
    }

    function shareCause(url, title) {
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

        // Create share URLs
        const whatsappUrl = `https://api.whatsapp.com/send?text=${encodedTitle}%20${encodedUrl}`;
        const facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodedUrl}`;
        const instagramUrl = `https://www.instagram.com/?url=${encodedUrl}`;

        // Display the share options to the user (you can use a modal or a dropdown)
        const shareOptions = `
            <div>
                <a href="${whatsappUrl}" target="_blank">Share on WhatsApp</a><br>
                <a href="${facebookUrl}" target="_blank">Share on Facebook</a><br>
                <a href="${instagramUrl}" target="_blank">Share on Instagram</a>
            </div>
        `;

        // You can append this HTML to a modal or any container you have for sharing options
        document.body.insertAdjacentHTML('beforeend', shareOptions);
      }
    }
  </script>

  <div class="position-relative" id="how-it-works-section">
    <div class="container-xxl ">
      <div class="h4 worktext" style="text-align:center;">HOW IT WORKS (START A FUNDRAISER IN <span
          style="color:#EB2D32"> THREE SIMPLE STEPS)</span></div>
      <div style="display: flex; justify-content: center;">
        <img class="img-fluid heart" src="assets/img/underline.svg" alt="no image">
      </div>
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

  <section class="stats-section py-5">
    <div class="container">
      <div class="row text-center">
        <!-- Fund Raised Column -->
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/money-bag.svg') ?>" alt="Icon" class="mb-3">
            <h2>30M</h2>
            <p>Total fund raised</p>
          </div>
        </div>
        <!-- Successful Events Column -->
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/calendar.svg') ?>" alt="Icon" class="mb-3">
            <h2>250+</h2>
            <p>Successful events</p>
          </div>
        </div>
        <!-- Volunteers Column -->
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/hand.svg') ?>" alt="Icon" class="mb-3">
            <h2>550+</h2>
            <p>Worldwide volunteers</p>
          </div>
        </div>
        <!-- Donors Column -->
        <div class="col-12 col-md-3">
          <div class="stat-box">
            <img src="<?= base_url('assets/img/volunter.svg') ?>" alt="Icon" class="mb-3">
            <h2>500+</h2>
            <p>Our donors</p>
          </div>
        </div>
      </div>
    </div>
  </section>
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
              <!-- <p>Your contribution has the potential <br> to make a greater difference.</p> -->
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
            <!-- <div class="form-group ms-4">
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name*" style="width:92%;" required>
    
      <p id="error1" style="color:red"></p>
    </div> -->

            <!-- Email -->
            <!-- <div class="form-group ms-4">
      <input type="email" name="emailid" class="form-control" id="email" placeholder="Enter your email*" style="width:92%;" required>
      <p id="error2" style="color:red"></p>
    </div> -->

            <!-- Phone Number -->
            <div class="form-group ms-4">
              <input type="tel" name="phoneno" class="form-control" id="phone" placeholder="Enter your phone number*" style="width:92%;" required>
              <p id="error3" style="color:red"></p>
            </div>

            <!-- Transaction ID -->
            <div class="form-group ms-4">
              <input type="text" name="transactionid" class="form-control" id="transactionid" placeholder="Enter UPI Transaction Id*" style="width:92%;" required>
              <p id="error4" style="color:red"></p>
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
          <p>Thanks for donating us.Please wait for admin verification </p>
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
    donationModal.addEventListener('hidden.bs.modal', function(event) {
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
    document.getElementById('donationForm').onsubmit = function(event) {

      event.preventDefault(); // Prevent default form submission

      // document.getElementById("error1").innerHTML="";
      // document.getElementById("error2").innerHTML="";
      document.getElementById("error3").innerHTML = "";
      document.getElementById("error4").innerHTML = "";
      // Validate Name (minimum 3 characters)
      // const name = document.getElementById('name').value.trim();
      // const nameRegex = /^[A-Za-z]+$/;

      // if (name.length < 3) {
      // document.getElementById("error1").innerHTML = "Name must be at least 3 characters long.";
      // return false;
      // } else if (!nameRegex.test(name)) {
      // document.getElementById("error1").innerHTML = "Name must contain only alphabetic characters.";
      // return false;
      // } else {
      // document.getElementById("error1").innerHTML = ""; // Clear error if input is valid

      // }


      // // Validate Email
      // const email = document.getElementById('email').value.trim();
      // const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      // if (!emailPattern.test(email)) {
      //     document.getElementById("error2").innerHTML ="Please enter a valid email address.";
      //     return false;
      // }
      // else{
      // document.getElementById("error2").innerHTML ="";
      // }
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
        document.getElementById("error3").innerHTML = "Please enter a valid 10-digit phone number starting with 6, 7, 8, or 9.";
        return false;
      } else {
        document.getElementById("error3").innerHTML = "";
      }

      // Check if the transaction ID already exists message is present on page load

      // Validate transaction ID format
      const transactionId = document.getElementById('transactionid').value.trim();
      const transactionPattern = /^\d{12}$/;
      if (!transactionPattern.test(transactionId)) {
        document.getElementById("error4").innerHTML = "Transaction ID must be exactly 12 digits.";
        return false;
      }




      // Clear any previous error message
      error4.innerHTML = "";

      // Collect form data
      const formData = new FormData(this);

      // Send AJAX request
      fetch('/kanavuhelp/processDonation', { // Make sure to use the correct path
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.status === 'error') {
            // Display error message in the error4 element
            error4.innerHTML = data.message;
          } else if (data.status === 'success') {
            var donationModalElement = document.getElementById('donationModal');
            var donationModal = bootstrap.Modal.getOrCreateInstance(donationModalElement);

            // Check if the modal is visible before hiding it
            if (donationModalElement.classList.contains('show')) {
              donationModal.hide();
            }
            // Redirect to success page if donation is successful
            var loginModal = new bootstrap.Modal(document.getElementById('donationSuccess'));
            loginModal.show();

            // Redirect to login page with return URL on OK button click
            document.getElementById('donationRedirectBtn').addEventListener('click', function() {

              window.location.href = data.redirect;
              // Redirect to the login page with the returnUrl parameter

            });

          }
        })
        .catch(error => {
          error4.innerHTML = "An unexpected error occurred. Please try again.";
        });
    };
  </script>

  <!-- Bootstrap JS and dependencies (Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>