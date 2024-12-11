<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <style>
    body {
      font-family: 'Sen', sans-serif;
    }

    /* carousel */
    .carousel-item {
      height: 100vh;
    }

    .active {
      background-color: #f87171;
      /* For example, a darker red background */
      color: white;
      /* White text for contrast */
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

    @media (min-width:768px) and (max-width:990px) {
      .card {
        width: auto;
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
    }

    #myDonationsButton,
    #myFundraisersButton {
      transition: none;
      color: #dc3545;
      /* Red color */
      background-color: #ffffff;
      /* White background */
      border-color: #dc3545;
      /* Red border */
    }

    #myDonationsButton:hover,
    #myFundraisersButton:hover {
      color: #dc3545;
      /* Keep red color on hover */
      background-color: #ffffff;
      /* Keep white background on hover */
      border-color: #dc3545;
      /* Keep red border on hover */
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
  <nav id="header" class="navbar navbar-expand-lg bg-white py-4 fixed-top">
    
  </nav>
  <div class="donate_img mt-5 pt-4">
  <img src="<?= base_url('assets/img/myhelps.jpg') ?>" style="width: 100%; height: 400px;">
  </div>
  <!-- <div class="handwithheart_img text-center">
    <img src="<?= base_url('assets/img/handwithheart.png') ?>" alt="handwithheart_img" class="handwithheart_img mt-5 ">
    <p class="mt-3 "><b>"Fundraising is the gentle art of teaching the joy of giving."</b></p>

  </div> -->
 <!-- <div class="mx-auto text-center mt-8 md:ml-20">
    <button id="myDonationsButton"
      class="btn btn-outline-danger text-red-500 bg-white border-red-500 rounded-pill px-4 py-2 mt-4 md:mt-0 mr-2">My Donations</button>
    <button id="myFundraisersButton"
      class="btn btn-outline-danger text-red-500 bg-white border-red-500 rounded-pill px-4 py-2 mt-4 md:mt-0">My Fundraisers</button>
  </div>-->
 <!--  <script>
    // Adding click event to navigate to 'My Fundraisers' page
    document.getElementById("myDonationsButton").addEventListener("click", function() {
      window.location.href = "<?php echo base_url('myhelps'); ?>"; // Correctly quoted and lowercase path
    });
  </script> -->


  <?php if (!empty($fundraisers)) : ?>
    <?php foreach ($fundraisers as $cause) : ?>

      <div class="container d-flex justify-content-center mt-5">
        
      <a href="<?=base_url('helpus/' .str_replace(' ','-', $cause->name).'-'. $cause->id ) ?>" style="text-decoration:none;color:black;">
          
      <div style="width:500px;" class="card mb-3">
            <!-- Use img-fluid and custom inline styles for width and height -->
            <img src="<?= base_url('assets/individualform_img/') . htmlspecialchars($cause->cover_image, ENT_QUOTES) ?>" class="w-100 p-2" alt="...">

            <div class="card-body">

              <div class="card_text d-flex justify-content-between">

                <p class="card-title"><b><?= $cause->cause_heading ?></b></p>

                <p class="text-muted"> <?= $cause->days_left > 0 ? $cause->days_left . ' days left' : 'Expired' ?></p>

              </div>

              <!-- Flex container to align "Rs.2000" and "Created by Dinesh Kumar" -->
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text text-muted">Created by <br> <?= $cause->name ?></p>
                <!--<p class="ms-4"><b> Your Donation₹ <?= number_format($cause->donated_amount) ?></b></p>-->
              </div>

              <p><b> <?php echo ($cause->verified == 0) ? '<span class="badge bg-danger">verification pending</span>' : ' <span class="badge bg-success">verified</span>'; ?></b></p>

              <p class="card-text">
                <strong>End Date:</strong> <?= htmlspecialchars($cause->end_date) ?><br>

              </p>

              <!--<div class="progress mb-2">
                        <div class="progress-bar" role="progressbar" style="width: <?= ($cause->amount_raised / $cause->goal_amount) * 100 ?>%;" aria-valuenow="<?= ($cause->amount_raised / $cause->goal_amount) * 100 ?>" aria-valuemin="0" aria-valuemax="100">
                        </div>-->
            </div>
          </div>
          </a>
      </div>
      
    <?php endforeach; ?>
  <?php else : ?>
    <p>
      <center>No causes found for your account.</center>
    </p>
  <?php endif; ?>
  </div>

<!-------------------------footer------------------>
  <div id="footer">
    
  </div>
<!------------------------footer-end--------------->

<!---------------loggin-modal---------------------->
<?php if($this->session->flashdata("logged_in")) :?>
  <script>
      // Automatically trigger the OTP modal when the page loads
      window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById("loggin"), {
          backdrop: 'static',
          keyboard: false
        });
        myModal.show();
      };
    </script>

<div id="loggin" class="modal fade show" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <span class="h5 text-danger">Welcome ! <span class="text-success"><?=$this->session->userdata("userName");?></span></span> 
              <button data-bs-dismiss="modal" class="btn btn-close"></button>              
           </div>
           <div class="modal-body">
              <p class="text-muted">We will inform you after verification is complete.</p>
           </div>
           <div class="px-2">
           <button style="width:fit-content;" data-bs-dismiss="modal" class="btn btn-danger">Ok</button>
           </div>
        </div>
    </div>
</div>
<?php endif; ?>


<!---------------login-modal-end---------------------->
<script>
  $.ajax({
      type:"get",
      url:"kanavuhelp/getHeader",
      success:(result)=>{
           document.getElementById("header").innerHTML = result;
           document.getElementById("myfrpage").classList.add("text-danger");
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
</script>

  <!-- Bootstrap JS and dependencies (Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>