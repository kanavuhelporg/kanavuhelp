<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sen:wght@400&display=swap"> -->
    <!-- <link rel="stylesheet" href="6xK0dSxYI9_dkN18-vZKK2EISCq5H47KlD9q78A"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="loginstyle.css">
    <title>Login Page</title>
<style>
   .btnsignin{
    background-color: #EB2D32;
    color:white;
   }  
   body{
    background-color:#FEF2F2;
    font-family: 'sen', sans-serif;
   }
   form label{
    color:#718096;
   }
   .right-image {
            width: 100%;
            height: 100vh; /* Set image height to fill the viewport height */
            object-fit: cover; /* Ensure the image covers the entire area while maintaining aspect ratio */
        }

        .social-icons img {
            width: 40px;
            height: 40px;
            margin-left: 10px;
        }
        .logo{
            margin-top:100px;
            margin-left:50px;
        }
   </style>


</head>
<body>  
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-6 logi1">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="<?= base_url('/kanavuhome') ?>" >
            <img class="logo" src="<?php echo base_url('/assets/img/kanavu_help.png');?>" alt="Kanavu Help"style="">
          </a><br><br>
            <h2 style="margin-bottom:30px;margin-left:50px;">Register</h2>
            <!-- <p>Don't have an Account?<span style="color:red; text-decoration:underline;margin-left:10px;">Create Now</span></p> -->
            <form name="register" onsubmit="return registerValidate()" method="post" action="<?= base_url('kanavuhelp/registeration') ?>" style="margin-left:50px;margin-right:50px;"  > 

        <div class="mb-3" >
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="exampleInputName">
                <div id="nameerr" class="text-danger"></div>
            </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-Mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" >
            <div id="mailerr" class="text-danger"></div>
          </div>
          <?php if ($this->session->flashdata('error')): ?>
    <script>alert("<?= $this->session->flashdata('error'); ?>");</script>
<?php endif; ?>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1">
            <div id="passworderr" class="text-danger"></div>
          </div>
        <button type="submit" class="btn btnsignin"> Sign Up</button>
        </div>
            <!-- Right side image column -->
            <div class="col-md-6 d-none d-md-block">
                <img src="<?php echo base_url('/assets/img/right.svg'); ?>" alt="Right image" class="right-image">
            </div>
        </div>
        </div>
</form>
<script>
function registerValidate() {
    var name = document.register.exampleInputName.value.trim(); // Trim the input value
    var email = document.register.exampleInputEmail1.value.trim(); // Trim the input value
    var password = document.register.exampleInputPassword1.value.trim(); // Trim the input value


    // Validate name
    if (name.length < 3) {
        document.getElementById("nameerr").innerHTML = "Name must be at least 3 characters long";
        return false;
    }  else {
        document.getElementById("nameerr").innerHTML = "";
    }

    // Validate email
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        document.getElementById("mailerr").innerHTML = "You have entered an invalid email address";
        return false;
    } else {
        document.getElementById("mailerr").innerHTML = "";
    }

    // Validate password
    var passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%?&]).{5,10}$/;
    
    if (!passwordPattern.test(password)) {
        document.getElementById("passworderr").innerHTML = "Password must be 5-10 characters long, with at least one letter, one digit, and one special character";
        return false;
    } 
    else {
        document.getElementById("passworderr").innerHTML = "";
    }

    return true;// Submit the form if all validations pass
}
</script>
    </body>
    </html>