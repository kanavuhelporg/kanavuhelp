<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login Page</title>
    <style>
        * {
            /* overflow: hidden; */
            background-color: #FEF2F2;
            font-family: 'Sen', sans-serif;
        }

        .logi1 {
            margin-top: 30px;
            padding: 40px;
        }

        /* .btnsignin {
            width: 100%;
            border-radius: 10px;
            color: white;
            background-color: #EB2D32;
        } */
        .btnsignin {
    width: fit-content;
    border-radius: 10px;
    color: white;
    background-color: #EB2D32;
    border: none; /* Ensures no border is applied */
    transition: none; /* Removes any transition effect */
}

.btnsignin:hover {
    background-color: #EB2D32; /* Keep the button color the same on hover */
    color: white; /* Keep text color the same */
    border: none; /* Ensure no border on hover */
}

.btnotp {
    width: fit-content;
    border-radius: 10px;
    color: white;
    background-color: #EB2D32;
    border: none; /* Ensures no border is applied */
    transition: none; /* Removes any transition effect */
}

.btnotp:hover {
    background-color: #EB2D32; /* Keep the button color the same on hover */
    color: white; /* Keep text color the same */
    border: none; /* Ensure no border on hover */
}

        .atag {
            text-decoration: underline;
            color: #EB2D32;
        }

        /* .btnsignin a:hover {
            color: black;
        } */

        form label {
            color: #718096;
        }

        .right-image {
            width: 100%;
            height: 120vh; /* Set image height to fill the viewport height */
            object-fit: cover; /* Ensure the image covers the entire area while maintaining aspect ratio */
        }

        .social-icons img {
            width: 40px;
            height: 40px;
            margin-left: 10px;
        }
        .logo{
          margin-top:10px;
          margin-left:50px;
        }
        .login-form{
          margin-left:50px;margin-right:50px;

        }
        
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Left side form column -->
            <div class="col-md-6 logi1">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="<?= base_url('/') ?>">
                    <img class="logo" src="<?= base_url('/assets/img/Kanavu_help.png') ?>" alt="Kanavu Help"
                        style="">
                </a>
                <br><br><br>
                <h2 style="margin-left:50px;">Sign in</h2>
                <!-- <p style="margin-left:50px;">Don't have an Account? <a href="<?= base_url('/register') ?>"><span
                            style="color:red; text-decoration:underline;margin-left:10px;"> Create Now</span></a></p> -->
                <form id="loginform" onsubmit="return loginValidate()" name="login" method="post"
                    action="<?= base_url('kanavuhelp/userLogin') ?>" style="" class="login-form">
                    <div class="mb-3">
                            
                        <label for="exampleInputEmail1" class="form-label">email</label>
                        <input type="email" value="<?php if(isset($_SESSION["userEmail"])){echo $_SESSION["userEmail"];}?>" class="form-control" id="loginemail" name="loginemail">
                        <div id="mailerr" class="text-danger"></div>
                    </div>

                    <div class="mb-3 d-flex align-items-center">
                    <div>    
                    <button id="otpbtn" type="submit" name="getotp" class="btn border btnotp">Get OTP</button>
                    </div>
                    &nbsp;&nbsp;
                    <div id="indicateotp" style="display:none;">
                    <div id="emailalert" class="d-flex align-items-center"> 
                    <span>Please wait OTP is sent to your email</span>&nbsp;&nbsp;<div class="spinner-border text-danger"></div>
                    </div>   
                    </div>

                    </div>
                    
                    <div id="otpsubmit" style="display:none;">
                    <div class="mb-3">
                        <input type="hidden" name="returnUrl" value="<?= isset($_GET['returnUrl']) ? $_GET['returnUrl'] : '' ?>">
                        <label for="exampleInputPassword1" class="form-label">Enter OTP</label>
                        <input onkeyup="verifyOtp(this)" type="text" class="form-control" id="loginotp" maxlength="4" name="loginotp">
                        <div id="otperr" class="text-danger"></div>
                    </div>
                  
                    <button id="loginsubmit" type="submit" name="save" class="btn border btnsignin">Sign in</button>
                    </div>
                   <!--  <p style="margin-top:10px;text-align:center;font-size:15px;"><strong>--------------OR-------------</strong></p>
                    <div class="social-icons" style="text-align:center;">
    <p>Continue with
    <button type="button" style="border:none; padding:10px 20px; margin:5px; cursor:pointer;">
            <img src="<?= base_url('/assets/img/icons8-google 1.png') ?>" alt="Google" style="width:40px; height:40px; vertical-align:middle; margin-right:8px;">
        </button>
    </p>
    <a href="https://facebook.com" target="_blank">
        <button type="button" style="border:none; padding:10px 20px; margin:5px; cursor:pointer;">
            <img src="<?= base_url('/assets/img/vector.png') ?>" alt="Facebook" style="width:40px; height:40px; vertical-align:middle; margin-right:8px;">
        </button>
    </a> 
        
</div> -->

                </form>
            </div>

            <!-- Right side image column -->
            <div class="col-md-6 d-none d-md-block">
                <img src="<?= base_url('/assets/img/login.jpg') ?>" alt="Right image" class="right-image">
            </div>
        </div>
    </div>

    <!---------------------otp-section------------------------->

    <?php if ($this->session->flashdata('otp_sent')): ?>
    <script>
       document.getElementById("otpbtn").setAttribute("type","button"); 
       document.getElementById("indicateotp").style.display = "block";
       document.getElementById("otpsubmit").style.display = "block";
       document.getElementById("loginform").setAttribute("action","<?=base_url('kanavuhelp/userLogin')?>");
       setTimeout(()=>{
        // document.getElementById("indicateotp").style.display = "none";
        document.getElementById("emailalert").innerHTML = "Please check your email inbox";

       },10000)
    </script>
  <?php endif; ?>
  <!---------------------------otp-section-end------------------------------>

<script>
    
    let otpstatus = false;
    let emailstatus = true;
        function loginValidate(){
            var email = document.login.loginemail.value.trim(); // Trim the input value
            var otp = document.login.loginotp.value.trim();// Trim the input value
            let otpsubmit = document.getElementById("otpsubmit"); 
            let errorbox = document.getElementById("otperr");
            let sendotp = "<?php echo $this->session->userdata('generated_otp'); ?>";
            // Validate email
        
            if (email === "") {
                var emailsms = "Email must be filled out";
                document.getElementById("mailerr").innerHTML = emailsms;
                return false;
            } else if (!/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(email)) {
                document.getElementById("mailerr").innerHTML = "You have entered an invalid email address";
                return false;
            } else {
                document.getElementById("mailerr").innerHTML = "";
                
            }
            
            
             if(document.getElementById("otpsubmit").style.display === "block"){
            if (otp === "") {
                var otpsms = "OTP must be filled out";
                document.getElementById("otperr").innerHTML = otpsms;
                return false;
            } 
            else if(otp !== sendotp){
                errorbox.innerHTML = "<small style='color:red;'>OTP is Incorrect</small>";
                return false;
            }
            else{
                document.getElementById("otperr").innerHTML = "";
            }

             // Submit the form if all validations pass
            }

            
            return true;
        
            
        }


        function verifyOtp(inputotp){
           let otp = inputotp.value;
           let errorbox = document.getElementById("otperr");
           let submitbutton = document.getElementById("loginsubmit")
           let sendotp = "<?php echo $this->session->userdata('generated_otp'); ?>";
           let l = otp.length;
           let sendotplength = sendotp.length;
           if(l !== 4){
               errorbox.innerHTML = "";
            //    submitbutton.setAttribute("disabled","disabled");
               otpstatus = false;  
           }
           else if(l >= 4){
            if(otp !== sendotp){
                 errorbox.innerHTML = "<small style='color:red;'>OTP is Incorrect</small>";
                //  submitbutton.setAttribute("disabled","disabled");
                 otpstatus = false;  
               }
               else{
                 let errorbox = document.getElementById("otperr");
                 errorbox.innerHTML = "<small style='color:green;'>OTP is Correct</small>";
                //  submitbutton.removeAttribute("disabled");
                 otpstatus = true;
               }
           }
           console.log(otpstatus)
        }

       
    </script> 
</body>

</html>
  <!-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me <a href="#" class="atag"
                                style="margin-left:25px;">Forgot password?</a></label>
                    </div> -->