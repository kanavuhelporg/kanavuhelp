<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
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

     .donate_btn {
      border: 1px solid rgba(224, 26, 43, 1);
      /* color: rgba(224, 26, 43, 1); */
      border-radius: 25px;
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

  .typingquotes h1 {
  width:50%;  
  color: #fff;
  font-family: monospace;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: wrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em;
  text-align:center; /* Adjust as needed */
 /*  animation: 
    typing 3.5s steps(30, end),
    blink-caret .5s step-end infinite; */
}

/* The typing effect */
/* @keyframes typing {
  from { width: 0 }
  to { width: 100% }
} */

/* The typewriter cursor effect */
/* @keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: transparent }
}   */ 

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
            <li class="nav-item"><a id="aboutuspage" class="nav-link" href="<?= base_url('/abouts') ?>">About us</a></li>
            <li class="nav-item">
              <a id="individualpage" class="nav-link" href="<?= base_url('/individual') ?>">Start a Fundraiser</a>
            </li>
            <li class="nav-item">
              <a id="donatepage" class="nav-link mx-lg-2" href="<?= base_url('/donate') ?>">Donate</a>
            </li>
            <li class="nav-item">
              <a id="kanavuhomepage" class="nav-link mx-lg-2" href="<?= base_url('/kanavuhome#how-it-works-section') ?>">How it Works</a>
            </li>
            <!-- <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blogs</a>
                    </li> -->
            <li class="nav-item">
              <a id="contactuspage" class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
            </li>
          </ul>
          <div class="d-flex align-items-center ms-auto">
  <?php if ($this->session->userdata('Kanavu_userId')): ?>
    <div class="d-flex align-items-center">

      <div class="dropdown" id="userProfile">
        <div class="d-flex align-items-center" role="button" data-bs-toggle="dropdown">
          <img src="<?= base_url('/assets/img/Ellipse 12.png') ?>" alt="Profile Image"
            style="width: 30px; height: 30px; border-radius: 50%;">
          <span class="ms-2"><?= $this->session->userdata('Kanavu_userName');?></span>
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
    
  <?php else: echo ""; ?>
   <!--  <a href="<?= base_url('/login') ?>" class="login-button me-2">Login</a> -->
  <?php endif; ?>
</div>
        </div>
      </div>
    </div>
    
  </nav>
  <div class="donate_img mt-5 pt-4 position-relative">
  <img src="<?= base_url('assets/img/myfundraiser_ptrst.jpg') ?>" style="width: 100%; height: 400px;">
  <div id="typeeffectcontainer" style="width:50%;position:absolute;top:25%;left:25%;" class="d-flex flex-column justify-content-center">
    <span id="typingquotes" class="text-center h1"></span>
    <p class="text-center">"Every act of generosity has the potential to change a life. Through collective effort and unwavering support, we can turn aspirations into achievements."</p>
  </div>
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
          
      <div class="card mb-3">
            <!-- Use img-fluid and custom inline styles for width and height -->
            <img style="min-width:250px;max-width:500px;height:400px;" src="<?= base_url('assets/individualform_img/') . htmlspecialchars($cause->cover_image, ENT_QUOTES) ?>" class="p-2" alt="...">

            <div class="card-body">

              <div class="card_text d-flex justify-content-between">

                <p class="card-title"><b><?= $cause->cause_heading ?></b></p>

                <p class="text-muted"><?= $cause->days_left > 0 ? $cause->days_left . ' days left' : 'Expired' ?></p>

              </div>

              <!-- Flex container to align "Rs.2000" and "Created by Dinesh Kumar" -->
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text text-muted">Created for <br> <?= $cause->name ?></p>
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
  <footer class="footer mt-auto py-3">
        <div class="container">
            <h5 style="text-align:center">kanavu.help</h5>
            <!-- <span class="text-muted">Your footer content goes here.</span> -->
            <div class="footer1">
              <a class="footer-lable lable" href="<?= base_url('/contactus') ?>">Contact</a>
              <a class="footer-lable lable" href="<?= base_url('/terms_of_use') ?>">Terms of Use</a>
              <a class="footer-lable lable" href="<?= base_url('/privacy_policy') ?>">Privacy Policy</a>
            </div>
        </div>

        <div class="social-icons d-flex justify-content-center text-center">
            <a href="https://www.facebook.com/" target="_blank">
                <img src="<?php echo base_url('/assets/img/facebook-f.svg'); ?>" alt="Facebook Logo">
            </a>
            <a href="https://twitter.com/" target="_blank">
                <img src="<?php echo base_url('/assets/img/twitter.svg'); ?>" alt="Twitter Logo">
            </a>
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/" target="_blank">
                <img src="<?php echo base_url('/assets/img/linkedin-in.svg'); ?>" alt="LinkedIn Logo">
            </a>
        </div>
        <div class="text-center my-3">
            <img src="<?php echo base_url('/assets/img/footer-secured-card 1.svg'); ?>" alt="no image" class="img-fluid mx-auto d-block" style="width: 200px; display: block;">
        </div>

        <p class="text-center" style="font-size:15px;">copyright 2024 @ kanavu.help. All Rights Reserved.</p>
    </footer>

  </div>
<!------------------------footer-end--------------->

<!---------------loggin-modal---------------------->
<?php if($this->session->flashdata("logged_in")) :?>
  <script>
      window.onload = function() {
        let myModal = new bootstrap.Modal(document.getElementById("loggin"), {
          backdrop: 'static',
          keyboard: false
        });
        myModal.show();
      };
    </script>

<div id="loggin" class="modal fade show">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <span class="h5 text-danger">Welcome ! <span class="text-success"><?=$this->session->userdata("userName");?></span></span> 
              <button data-bs-dismiss="modal" class="btn btn-close"></button>              
           </div>
           <div class="modal-body">
              <p class="text-muted">Your verification process is underway. We will notify you once it is successfully completed.</p>
           </div>
           <div class="p-3">
           <button style="width:fit-content;" data-bs-dismiss="modal" class="btn btn-danger">Ok</button>
           </div>
        </div>
    </div>
</div>
<?php endif; ?>


<!---------------login-modal-end---------------------->

<!---------------updated-modal---------------------->
<?php if($this->session->flashdata("updatedindividualform")) :?>
  <script>
      window.onload = function() {
        let myModal = new bootstrap.Modal(document.getElementById("updated"), {
          backdrop: 'static',
          keyboard: false
        });
        myModal.show();
      };
    </script>

<div id="updated" class="modal fade show">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <span class="h5 text-danger">Success ! <span class="text-success"><?=$this->session->userdata("userName");?></span></span> 
              <button data-bs-dismiss="modal" class="btn btn-close"></button>              
           </div>
           <div class="modal-body">
              <p class="text-muted">Update form successfully submitted. We will inform you after verification is complete.</p>
           </div>
           <div class="p-3">
           <button style="width:fit-content;" data-bs-dismiss="modal" class="btn btn-danger">Ok</button>
           </div>
        </div>
    </div>
</div>
<?php endif; ?>


<!---------------updated-modal-end---------------------->
<script>

    var i = 0;
    var txt = 'Together, we have the power to make a balance.';
    var speed = 100;

    typeWriter();

    function typeWriter(){  
    if (i < txt.length) {
    document.getElementById("typingquotes").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
    }
   }

</script>

  <!-- Bootstrap JS and dependencies (Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
