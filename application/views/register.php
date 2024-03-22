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
   </style>


</head>
<body>  
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-6 logi1">
        <div style="margin-top:10px"><img src="<?php echo base_url('/assets/img/kanavu_help.png');?>" alt="noimage" ></div>
        <br>
            <h2 style="margin-bottom:30px;">Register</h2>
            <!-- <p>Don't have an Account?<span style="color:red; text-decoration:underline;margin-left:10px;">Create Now</span></p> -->
            <form name="register" onsubmit="return registerValidate()" method="post" action="<?= base_url('kanavuhelp/submit1') ?>" > 

        <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="exampleInputName">
                <div id="nameerr" class="text-danger"></div>
            </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-Mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" >
            <div id="mailerr" class="text-danger"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1">
            <div id="passworderr" class="text-danger"></div>
          </div>
        <button type="submit" class="btn btnsignin"> Sign Up</button>
        </div>
    <div class="col-sm-6">
            <img src="<?php echo base_url('/assets/img/right.svg');?>" alt="no image">
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
    if (name === "") {
        var namesms = "Name must be filled out";
        document.getElementById("nameerr").innerHTML = namesms;
        return false;
    } else {
        document.getElementById("nameerr").innerHTML = "";
    }

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

    // Validate password
    if (password === "") {
        var passwordsms = "Password must be filled out";
        document.getElementById("passworderr").innerHTML = passwordsms;
        return false;
    } else if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/.test(password)) {
        document.getElementById("passworderr").innerHTML = "Password does not match the criteria";
        return false;
    } else {
        document.getElementById("passworderr").innerHTML = "";
    }

    return true;// Submit the form if all validations pass
}
</script>
    </body>
    </html>