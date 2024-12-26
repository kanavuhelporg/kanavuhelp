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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
    .bg-red-modal {
     background-color: grey;
     color: white; /* Adjust the text color if needed for better contrast */
     }
    .imgtext1 strong,
    .imgtext2 strong {
      font-weight: bolder;
    }
    /* .donate_btn {
    margin-right: 10px; 
} */

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
      width: 356px;
      height:480px;
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
      /* color: rgba(224, 26, 43, 1); */
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
    border: 1px solid gray !important; /* No border on hover */
    box-shadow: none; /* Prevent any shadow on hover */
    background: none; /* Ensure background doesn't change */
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
    background-color: white; /* Placeholder background color */
    display: block;
    width: 100%; /* Ensures the space is consistent */
    height: 230px; /* Matches the image height */
    object-fit: cover; /* Maintains the aspect ratio */
}
.img-placeholder:not([src]) {
    background: url('path/to/placeholder-image.jpg') center center/cover no-repeat;
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
@media (min-width: 769px) and (max-width: 989px)
  {
    .card {
      width: 400px;
      height:466px;
      /* Make the card width responsive */
      box-shadow: 0 3px 16px 3px rgba(0, 0, 0, 0.2);
     
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

    </style>
    </head>
<body>
<nav id="header" class="navbar navbar-expand-lg bg-white py-4 fixed-top">
    
</nav>
  <div class="donate_img mt-5 pt-4">
  <picture>
  <source media="(max-width:768px)" srcset="<?=base_url('assets/img/formobilethree.png')?>">
  <img src="<?=base_url('assets/img/donate_one.png')?>" width="100%">
  </picture>
    
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
<div class="container pt-4">
  <div class="row" id="fundraiserCards">
    <?php if (!empty($fundraisers)): ?>
        <?php 
        // Show only first 3 fundraisers initially
        $displayedFundraisers = array_slice($fundraisers, 0, 3);
        foreach ($displayedFundraisers as $fundraiser): 
            // Set a fixed dummy image if the cover image is empty or does not exist
            $imageSrc = !empty($fundraiser->cover_image) && file_exists('assets/individualform_img/' . $fundraiser->cover_image) 
                        ? base_url('assets/individualform_img/' . htmlspecialchars($fundraiser->cover_image, ENT_QUOTES)) 
                        : base_url('assets/img/funddonate.jpg'); // Dummy image path
        ?>
            <div class="col-12 col-lg-4 col-md-6 mb-4 d-flex card-container" data-category="<?= htmlspecialchars($fundraiser->category, ENT_QUOTES) ?>">
                <a href="<?= base_url('helpus/'.str_replace(' ','-',$fundraiser->name).'-'. $fundraiser->id) ?>" style="text-decoration:none;color:black">
                    <div class="card h-100 fixed-card">
                        <img src="<?= $imageSrc ?>" 
                            width="316px" height="230px" 
                            class="card-img-top fixed-card-img p-2 img-placeholder">
                        <div class="card-body d-flex flex-column">
                            <p class="card-title"><?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text text-muted mb-0">for <?= htmlspecialchars($fundraiser->name, ENT_QUOTES) ?></p>
                                <button type="button" class="btn card_button text-muted ms-auto" style="border: none; background: none; box-shadow: none;"><?= htmlspecialchars($fundraiser->category, ENT_QUOTES) ?></button>
                            </div>
                            <p class="card-text">
                                <strong>
                                    ₹ <?= number_format(min($fundraiser->raised_amount, $fundraiser->amount)) ?> raised out of ₹ <?= number_format($fundraiser->amount) ?>
                                </strong>
                            </p>
                            <div class="progress mb-2">
                                <?php
                                $progress_percentage = ($fundraiser->raised_amount / $fundraiser->amount) * 100;
                                ?>
                                <div class="progress-bar" style="width: <?= $progress_percentage ?>%;" role="progressbar" aria-valuenow="<?= $progress_percentage ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center mt-auto">
                                <?php if ($fundraiser->days_left >= 0 && (!$fundraiser->hide_donation_button)) : ?>
                                    <a href="#" class="btn donate_btn no-hover" onclick="setCauseId(<?= $fundraiser->id ?>)">Donate Now</a>
                                    <i class="bi bi-share ms-2" 
                                    onclick="shareCause('<?= base_url('helpus/' . str_replace(' ','-',$fundraiser->name)) . '-' . $fundraiser->id ?>', 
                                                       '<?= htmlspecialchars($fundraiser->cause_heading, ENT_QUOTES) ?>', 
                                                       '<?= base_url('assets/individualform_img/') . htmlspecialchars($fundraiser->cover_image, ENT_QUOTES) ?>')">
                                    </i>
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

  <!-- See More Button -->
  <?php if (count($fundraisers) > 3): ?>
    <div class="text-center mt-3">
        <button id="seeMoreBtn" class="btn" style="background-color: white; border: 1px solid black; color: red; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" onclick="loadMoreFundraisers()">See More Causes</button>
    </div>
  <?php endif; ?>

</div><br><br>
<!----------------footer----------------------->
<div id="footer">
      
</div>
<!----------------footer-end------------------->
<script>
let allFundraisers = <?= json_encode($fundraisers) ?>;
let currentIndex = 3; // Already shown 3 cards


$.ajax({
      type:"get",
      url:"kanavuhelp/getHeader",
      success:(result)=>{
           document.getElementById("header").innerHTML = result;
           let entry = "<?=$this->session->userdata("entry")?>" ? "<?=$this->session->userdata("entry")?>" : 0;
           console.log(entry);
           if(entry > 0){
           document.getElementById("donatepage").classList.add("text-danger");
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
</script>
<script>
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

</script>

<?php if ($this->session->flashdata('error')) : ?>
    <div class="alert alert-danger">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

<!--<script>
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
</script>-->



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
  <div class="text-center">
    <img src="<?= base_url('assets/img/HDFC QRCode.jpg') ?>" alt="handwithheart_img" width="50%" style="margin-top: -20px;">
  </div>

  <div class="text-center mt-2">
    <h5 class="modal-title text-danger py-1 fw-bold" id="donationModalLabel">Make a Secure Donation</h5>
  </div>

  <!-- Currency and Amount -->
  <div class="form-group d-flex justify-content-center" style="border-radius:20px;">
    <label for="currency" class="visually-hidden">Currency Type</label>
    <div class="custom-dropdown">
  <select class="form-control" name="currency_type" id="currency" required>
    <option value="" disabled selected>Select Currency</option>
    <option>INR</option>
    <option>USD</option>
  </select>
</div>
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
    <input type="email" name="email" class="form-control" id="email"  placeholder="Enter your EmailID*" style="width:95%;" required>
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
    <button id="donatenowbtn" type="submit" class="btn btn-danger fw-bold" style="width:50%; border-radius:10px; background-color:white; color:red;">
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
        errorElement.textContent = ''; // Clear error if validation passes
      }
    });
  }

  // Validation functions
  const isCurrencySelected = (value) => value !== '';
  const isAmountValid = (value) => parseFloat(value) > 0 && !isNaN(value); // Ensure value is greater than 0
  const isPhoneNumberValid = (value) => /^[6-9]\d{9}$/.test(value);
  const isTransactionIdValid = (value) => /^[1-9]\d{11}/.test(value);
  const isName = (value) => /^([A-Za-z\s]{3,})+$/.test(value);
  const isEmail = (value) => value.match(/^([A-Za-z0-9._-])+\@([a-z])+\.([a-z])+$/);
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
    </html>
    

