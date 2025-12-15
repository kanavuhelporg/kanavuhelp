<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu_help</title>
  <link href="<?php echo base_url(); ?>assets/img/kanavulogoo.jpg" rel="icon" />
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
    .nav-link {
      color: black !important;
      /* font-weight: bold; */
    }
    .nav-link.active {
      color: #E01A2B !important;
      font-weight: bold;
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
.navbar-brand img {
    transition: transform 0.3s ease-in-out;
}

.navbar-brand img:hover {
    transform: scale(1.08); /* Slight zoom-in */
}

  </style>
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
                                <a id="signinpage" class="nav-link mx-lg-2 active" href="<?= base_url('/login') ?>">View Dashboard</a>
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
  <div class="donate_img mt-5 pt-4 position-relative">
  <img src="<?= base_url('assets/img/myfundraiser_ptrst.jpg') ?>" style="width: 100%; height: 400px;">
  <div id="typeeffectcontainer" style="width:50%;position:absolute;top:25%;left:25%;" class="d-flex flex-column justify-content-center">
    <span id="typingquotes" class="text-center h1"></span>
    <p class="text-center">"Every act of kindness holds the power to transform lives. Together, through dedication and support, we can turn dreams into realities.
    "</p>
  </div>
  </div>
 
  <div class="container-fluid d-flex justify-content-center py-4"> 
  <div class="row col-md-6 justify-content-between">
  <div class="col-md-3"><a style="text-decoration:none;" href="<?=base_url("/profile_view")?>" class="h3 fw-bold">Profile</a></div>
  <div class="col-md-3"><a style="text-decoration:none;" href="<?=base_url("/myhelps")?>" class="h3 fw-bold">Donations</a></div>
  <div class="col-md-3"><a style="text-decoration:none;" href="<?=base_url("/myFundraisers")?>" class="h3 fw-bold">Fundraising</a></div>
  </div>
  </div>

<!-------------------------footer------------------>
  <div id="footer">
    
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
  $.ajax({
      type:"get",
      url:"kanavuhelp/getHeader",
      success:(result)=>{
           document.getElementById("header").innerHTML = result;
           let entry = "<?=$this->session->userdata("entry")?>" ? "<?=$this->session->userdata("entry")?>" : 0;
           console.log(entry);
           if(entry > 0){
           document.getElementById("myfrpage").classList.add("text-danger");
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

   /* document.getElementById("typeeffectcontainer").innerHTML += `<p class="text-center">"Every act of generosity has the potential to change a life. Through collective effort and unwavering support, we can turn aspirations into achievements."</p>`; */
</script>

  <!-- Bootstrap JS and dependencies (Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
