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

        .btnsignin {
            width: 100%;
            border-radius: 10px;
            color: white;
            background-color: #EB2D32;
        }

        .atag {
            text-decoration: underline;
            color: #EB2D32;
        }

        .btnsignin a:hover {
            color: black;
        }

        form label {
            color: #718096;
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
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="<?= base_url('/kanavuhelp') ?>">
                    <img class="logo" src="<?= base_url('/assets/img/kanavu_help.png') ?>" alt="Kanavu Help"
                        style="">
                </a>
                <br><br><br>
                <h2 style="margin-left:50px;">Sign in</h2>
                <p style="margin-left:50px;">Don't have an Account? <a href="<?= base_url('kanavuhelp/register') ?>"><span
                            style="color:red; text-decoration:underline;margin-left:10px;"> Create Now</span></a></p>
                <form name="login" onsubmit="return loginValidate()" method="post"
                    action="<?= base_url('kanavuhelp/userLogin') ?>" style="" class="login-form">
                    <div class="mb-3">
                    <input type="hidden" name="returnUrl" value="<?= isset($_GET['returnUrl']) ? $_GET['returnUrl'] : '' ?>">
    
                        <label for="exampleInputEmail1" class="form-label">email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1">
                        <div id="mailerr" class="text-danger"></div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">password</label>
                        <input type="password" class="form-control" id="exampleInputpassword1" name="exampleInputpassword1">
                        <div id="passworderr" class="text-danger"></div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me <a href="#" class="atag"
                                style="margin-left:25px;">Forgot password?</a></label>
                    </div>
                    <button type="submit" name="save" class="btn border btnsignin">Sign in</button>
                    <p style="margin-top:10px;text-align:center;font-size:15px;"><strong>--------------OR-------------</strong></p>
                    <div class="social-icons" style="text-align:center;">continue with
                        <img src="<?= base_url('/assets/img/vector.png') ?>" alt="noimage">
                        <img src="<?= base_url('/assets/img/icons8-google 1.png') ?>" alt="noimage">
                    </div>
                </form>
            </div>

            <!-- Right side image column -->
            <div class="col-md-6 d-none d-md-block">
                <img src="<?= base_url('/assets/img/right.svg') ?>" alt="Right image" class="right-image">
            </div>
        </div>
    </div>

    <!-- <script>
        function loginValidate() {
            var email = document.login.exampleInputEmail1.value.trim(); // Trim the input value
            var password = document.login.exampleInputpassword1.value.trim(); // Trim the input value

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

            return true; // Submit the form if all validations pass
        }
    </script> -->
</body>

</html>
