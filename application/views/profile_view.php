<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="<?php echo base_url(); ?>assets/img/kanavulogoo.jpg" rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
.navbar-brand img {
    transition: transform 0.3s ease-in-out;
}

.navbar-brand img:hover {
    transform: scale(1.08); /* Slight zoom-in */
}

    </style>
</head>
<body>

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
                            <a id="donatepage" class="nav-link mx-lg-2 " href="<?= base_url('/donate') ?>">Donate</a>
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

    <div class="container mt-5 pb-3">
        <h2>Profile Page</h2>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
        <div>
        <h3>Welcome, <?= htmlspecialchars($user['name']) ?></h3>
        
        <div class="card">
        <img src="<?= base_url('/assets/img/images.jpeg') ?>" style="height:300px;" alt="Profile Image">

            <div class="card-body">
            
                <table class="container-fluid table-borderless fs-4">
                                                                                                                      
                  <tr><th>Email </th><td>:</td><td><?= htmlspecialchars($user['email']); ?></td></tr>
                  <tr><th>Location </th><td>:</td><td><?= htmlspecialchars($user['location']); ?></td></tr>
                  <tr><th>Age </th><td>:</td><td><?= htmlspecialchars($user['age']); ?></td></tr>
                  <tr><th>Mobile No</th><td>:</td><td><?= htmlspecialchars($user['mobileNumber']); ?></td></tr>
                  <tr><td colspan="2"><a href="#" onclick="setUpdatedetails('<?=$user['id']?>','<?=$user['name']?>','<?=$user['email']?>','<?=$user['age']?>','<?=$user['location']?>','<?=$user['mobileNumber']?>')" data-bs-toggle="modal" data-bs-target="#updateprofile" class="btn btn-warning fw-bold">Edit Profile</a></td></tr>
                </table>
            </div>
            </div>
        </div>

       <!--  <a href="<?= base_url('kanavuhelp/logout'); ?>" class="btn btn-danger mt-3">Logout</a> -->
    </div>

    <!-------------------------footer------------------>
  <div id="footer">
    
    </div>
  <!------------------------footer-end--------------->


  <!----------------------update-profile---------------->
    <div id="updateprofile" class="modal">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
              <h4 class="text-danger">Update Profile</h4>  
              <button class="btn btn-close" data-bs-backdrop="static" data-bs-keyboard="false" data-bs-dismiss="modal"></button>
             </div>
             <div class="modal-body">
             <form id="causeStep1" name="causeStep1" method="post" action="<?= base_url('profile/updateUser') ?>" enctype="multipart/form-data">
                
                  <h2>Basic Details</h2>
                  <input type="text" hidden id="userId" name="userId" class="form-control my-2" placeholder="Name of beneficiary" required>
                  <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Name<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" id="name" name="name" class="form-control my-2" placeholder="Name of beneficiary" required>
                      <span id="name-error" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Mail Id:<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="email" id="email" name="email" class="form-control my-2" placeholder="Mail Id*" readonly required>
                      <span id="email-error" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="age" class="col-sm-4 col-form-label">Age of beneficiary:<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="number" id="age" name="age" class="form-control my-2" placeholder="Age of beneficiary" required>
                      <span id="age-error" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="location" class="col-sm-4 col-form-label">Location:<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" id="location" name="location" class="form-control my-2" placeholder="Location" required>
                      <span id="location-error" class="text-danger"></span>
                    </div>
                  </div>
                 
                  <div class="form-group row">
                    <label for="phone" class="col-sm-4 col-form-label">Phone Number:<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="tel" id="phone" name="phone" class="form-control my-2" placeholder="Phone Number*" required>
                      <span id="phone-error" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="text-center mt-3">
                    <button type="submit" id="continueToStep2" class="btn btn-danger no-hover">Update</button>
                  </div>
                </form>

             </div>
           </div>
         </div>
    </div>
  <!----------------------update-profile-end------------>

  <!----------------------update-status----------------->

    
       <script>
            let updatemodal = new bootstrap.Modal(document.getElementById("updateprofilestatus"),{
            backdrop:"static",
            keyboard:false
           });
           updatemodal.show();
           document.getElementById("updatestatus").innerHTML = "<?php $_SESSION['updatestatus'];?>";
           
       </script>
       <!-- <?php $this->session->unset_userdata("updatestatus");?> -->
       <div id="updateprofilestatus" class="modal fade">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
              <h4 class="text-danger">Update status</h4>  
              <button class="btn btn-close" data-bs-backdrop="static" data-bs-keyboard="false" data-bs-dismiss="modal"></button>
             </div>
             <div id="updatestatus" class="modal-body">
               
             </div>
           </div>
         </div>
    </div>
    

    
  <!----------------------update-status-end------------->

</body>
<script>
    

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

    function setUpdatedetails(id,name,email,age,location,mobileno) {
       console.log(id,name,email,age,location,mobileno)
       document.getElementById("userId").value = id;
       document.getElementById("name").value = name;
       document.getElementById("email").value = email;
       document.getElementById("age").value = age;
       document.getElementById("location").value = location;
       document.getElementById("phone").value = mobileno;
    }
</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
