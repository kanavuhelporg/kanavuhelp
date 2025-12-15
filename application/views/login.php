<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>assets/img/kanavulogoo.jpg" rel="icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Login Page</title>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JF0Q147F1Y"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-JF0Q147F1Y');
    </script>

    <style>
        * {
            font-family: 'Sen', sans-serif;
        }

        body {
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .login-container {
            min-height: 100vh;
        }

        .left-section {
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right-section {
            background-color: #FEF2F2;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
        }

        .login-title {
            color: #ed3136;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .form-label {
            color: #718096;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-control {
            border: 1px solid #E2E8F0;
            border-radius: 8px;
            padding: 12px 15px;
            margin-bottom: 20px;
        }

        .form-control:focus {
            border-color: #ed3136;
            box-shadow: 0 0 0 0.2rem rgba(237, 49, 54, 0.1);
        }

        .btn-get-otp {
            background-color: #ed3136;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 25px;
            font-weight: 500;
        }

        .btn-get-otp:hover {
            background-color: #ed3136;
            color: white;
        }

        .btn-signin {
            background-color: #ed3136;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-weight: 500;
            margin-top: 10px;
        }

        .btn-signin:hover {
            background-color: #ed3136;
            color: white;
        }

        .otp-indicator {
            color: #ed3136;
            font-weight: 500;
        }

        .quotes-section {
            margin-top: 50px;
        }

        .section-title {
            color: #718096;
            font-weight: bold;
            margin-bottom: 25px;
            text-align: center;
        }

        .quote-card {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border-left: 4px solid #ed3136;
        }

        .quote-text {
            color: #ed3136;
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 8px;
        }

        .quote-author {
            color: #ed3136;
            font-weight: 500;
        }

        .right-content {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .right-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 20px;
        }

        .divider {
            height: 1px;
            background-color: #E2E8F0;
            margin: 30px 0;
        }

        /* Footer Styles */
        .footer {
            background-color: #ed3136;
            color: #f0f0f0;
            padding: 30px 0;
            margin-top: 50px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            padding: 0 15px;
        }

        .footer-links a:not(:last-child) {
            border-right: 2px solid white;
        }

        .social-icons a {
            margin: 0 10px;
            color: white;
        }

        .text-center img {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .right-section {
                display: none;
            }
            .left-section {
                padding: 40px 20px;
            }
        }

        @media (max-width: 576px) {
            .footer-links a {
                display: block;
                padding: 5px 0;
                border-right: none !important;
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

<nav id="header" class="navbar navbar-expand-lg bg-white py-4">
    <!-- Header will be loaded via AJAX -->
</nav>

<div class="container-fluid">
    <?php 
        if(!empty($mailstatus)){
            echo "<div class='alert alert-danger'>
                        OTP sent failed. Please try again. 
                    </div>";
        }
        $this->session->unset_userdata("mailstatus");
    ?>
     
    <div class="row login-container">
        <!-- Left side form column -->
        <div class="col-md-6 left-section">
            <h2 class="login-title">Sign In</h2>
            
            <form id="loginform" onsubmit="return loginValidate()" name="login" method="post"
                action="<?= base_url('kanavuhelp/userLogin') ?>">
                <div class="mb-3">
                    <label for="loginemail" class="form-label">Email</label>
                    <input type="email" value="<?php if(isset($_SESSION["userEmail"])){echo $_SESSION["userEmail"];}?>" 
                           class="form-control" id="loginemail" name="loginemail" placeholder="Enter your email">
                    <div id="mailerr" class="text-danger mt-2"></div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <button id="otpbtn" type="submit" name="getotp" class="btn btn-get-otp">Get OTP</button>
                    <div id="indicateotp" style="display:none;" class="ms-3">
                        <div id="emailalert" class="d-flex align-items-center otp-indicator"> 
                            <span>Please wait OTP is sent to your email</span>
                            <div class="spinner-border spinner-border-sm text-danger ms-2"></div>
                        </div>   
                    </div>
                </div>
                
                <div id="otpsubmit" style="display:none;">
                    <div class="mb-3">
                        <input type="hidden" name="returnUrl" value="<?= isset($_GET['returnUrl']) ? $_GET['returnUrl'] : '' ?>">
                        <label for="loginotp" class="form-label">Enter OTP</label>
                        <input type="text" class="form-control" id="loginotp" maxlength="4" name="loginotp" placeholder="Enter OTP">
                        <div id="otperr" class="text-danger mt-2"></div>
                    </div>
              
                    <button id="loginsubmit" type="submit" name="save" class="btn btn-signin">Sign in</button>
                </div>
            </form>

            <div class="divider"></div>

            <div class="quotes-section">
                <h5 class="section-title">Together, we can make a difference!</h5>

                <div class="quote-card">
                    <p class="quote-text">"Be the change you wish to see in the world."</p>
                    <p class="quote-author">– Mahatma Gandhi</p>
                </div>

                <div class="quote-card">
                    <p class="quote-text">"The only way to do great work is to love what you do."</p>
                    <p class="quote-author">– Steve Jobs</p>
                </div>
            </div>
        </div>

        <!-- Right side content column -->
        <div class="col-md-6 right-section d-none d-md-block">
            <div class="right-content">
                <img src="<?= base_url('/assets/img/admin_login.png'); ?>" 
                     alt="People helping each other" class="right-image">
            </div>
        </div>
    </div>
</div>

<!-- ==================== FOOTER START ==================== -->
<footer class="footer bg-danger text-white py-4 mt-2">
    <div class="container text-center">
        <h5>kanavu.help</h5>

        <div class="footer-links my-3">
            <a class="footer-lable text-white text-decoration-none" href="<?= base_url('/contactus') ?>">Contact</a>
            <a class="footer-lable text-white text-decoration-none" 
                href="<?= base_url('/terms_of_use') ?>" 
                target="_blank" 
                rel="noopener noreferrer">
                Terms of Use
            </a>
            <a class="footer-lable text-white text-decoration-none" 
                href="<?= base_url('/privacy_policy') ?>" 
                target="_blank" 
                rel="noopener noreferrer">
                Privacy Policy
            </a>
        </div>

        <div class="social-icons d-flex justify-content-center mb-3">
            <a href="https://www.facebook.com/profile.php?id=61574165466676" target="_blank" class="mx-2 text-white">
                <i class="fab fa-facebook-f me-3" style="font-size:24px"></i>
            </a>
            <a href="https://www.instagram.com/kanavu.help/" target="_blank" class="mx-2 text-white">
                <i class='fab fa-instagram me-3' style='font-size:24px'></i>
            </a>
            <a href="https://www.youtube.com/channel/UCA3Za4BS9L1CwPkuhqm260w" target="_blank" class="mx-2 text-white">
                <i class='fab fa-youtube me-3' style='font-size:24px'></i>
            </a>
        </div>
        
        <div class="text-center my-3">
            <img src="<?= base_url('/assets/img/footer-secured-card 1.svg'); ?>" alt="Secure Payment" class="img-fluid" style="max-width:300px;">
        </div>

        <p class="text-center copyright-year" style="font-size:15px;">
            Copyright <span id="currentYear"></span> @ kanavu.help. All Rights Reserved.
        </p>
    </div>
</footer>
<!-- ==================== FOOTER END ==================== -->

<!---------------------otp-section------------------------->
<?php if ($this->session->flashdata('otp_sent')): ?>
<script>
   document.getElementById("otpbtn").setAttribute("type","button"); 
   document.getElementById("indicateotp").style.display = "block";
   document.getElementById("otpsubmit").style.display = "block";
   document.getElementById("loginform").setAttribute("action","<?=base_url('kanavuhelp/userLogin')?>");
   setTimeout(()=>{
    document.getElementById("emailalert").innerHTML = "Please check your email inbox";
   },10000)
</script>
<?php endif; ?>

<!----------------------not-registered-modal------------------------------>

<?php if($this->session->flashdata("not_registered_user")): ?>  
<script>
  window.onload = function() {
    var myModal = new bootstrap.Modal(document.getElementById("newuser"), {
      backdrop: 'static',
      keyboard: false
    });
    myModal.show();
  };
</script>

<div id="newuser" class="modal bg-transparent fade">
    <div class="modal-dialog rounded modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <span class="text-danger h4 fw-bolder">This Email Id is not registered yet.</span>
                <button data-bs-dismiss="modal" class="btn btn-close"></button>
            </div>
            <div class="modal-body">
                <p class="fs-5 text-secondary">Interested in joining GetFundraiser?</p>
                <p style="color:black;" class="d-inline fs-5">
                    <span>Want to start your own fundraising campaign? GetFundraiser makes it easy! Click 
                    <a class="text-danger h4 fw-bold" href="<?= base_url('/individual') ?>">here</a> to create your campaign today.</span>
                </p>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<script>
    let otpstatus = false;
    let emailstatus = true;

    // Load Header
    $.ajax({
        type:"get",
        url:"kanavuhelp/getHeader",
        success:(result)=>{
            document.getElementById("header").innerHTML = result;
            const signinLink = document.getElementById("signinpage");
            if (signinLink) signinLink.classList.add("text-danger");
        },
        error:() => {
            document.getElementById("header").innerHTML = "";
        }
    }); 

    // Dynamic Year in Footer
    document.addEventListener("DOMContentLoaded", function() {
        const yearElement = document.getElementById("currentYear");
        if (yearElement) {
            yearElement.textContent = new Date().getFullYear();
        }
    });

    function loginValidate(){
        var email = document.login.loginemail.value.trim();
        var otp = document.login.loginotp ? document.login.loginotp.value.trim() : "";
        let errorbox = document.getElementById("otperr");
        let sendotp = "<?php echo $this->session->userdata('generated_otp'); ?>";
        
        // Validate email
        if (email === "") {
            document.getElementById("mailerr").innerHTML = "Email must be filled out";
            return false;
        } else if (!/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(email)) {
            document.getElementById("mailerr").innerHTML = "You have entered an invalid email address";
            return false;
        } else {
            document.getElementById("mailerr").innerHTML = "";
        }
        
        if(document.getElementById("otpsubmit").style.display === "block"){
            if (otp === "") {
                document.getElementById("otperr").innerHTML = "OTP must be filled out";
                return false;
            } 
            else if(otp !== sendotp){
                errorbox.innerHTML = "<small style='color:red;'>OTP is Incorrect</small>";
                return false;
            }
            else{
                document.getElementById("otperr").innerHTML = "";
            }
        }

        return true;
    }
</script> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>