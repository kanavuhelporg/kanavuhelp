<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url(); ?>assets/img/kanavulogoo.jpg"  rel="icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <title>Admin Page</title>
    <style>
        * {
            background-color: #FEF2F2;
            font-family: 'Sen', sans-serif;
        }

        .logi1 {
            padding: 20px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .login-container {
            margin-top: auto;
            margin-bottom: auto;
        }

        .btnsignin {
            width: 100%;
            border-radius: 10px;
            color: white;
            background-color: #EB2D32;
            border: none;
            transition: none;
            padding: 10px;
        }

        .btnsignin:hover {
            background-color: #EB2D32;
            color: white;
            border: none;
            opacity: 0.9;
        }

        .atag {
            text-decoration: underline;
            color: #EB2D32;
        }

        form label {
            color: #718096;
            font-weight: 500;
        }

        .right-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            /* margin-right: 20px; */
        }

        .social-icons img {
            width: 40px;
            height: 40px;
            margin-left: 10px;
        }

        .logo {
            width: 180px;
            margin-bottom: 30px;
        }

        .login-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
            color: #718096;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #E2E8F0;
        }

        .divider::before {
            margin-right: 15px;
        }

        .divider::after {
            margin-left: 15px;
        }

        .password-toggle {
            cursor: pointer;
            background-color: transparent !important;
        }

        @media (max-width: 767.98px) {
            .logi1 {
                padding: 15px;
            }
            
            .logo {
                width: 150px;
                margin-left: 0;
            }
            
            .login-form {
                margin-left: 0;
                margin-right: 0;
            }
            
            h2 {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 575.98px) {
            .logo {
                width: 130px;
            }
            
            .social-icons button {
                padding: 5px 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Left side form column -->
            <div class="col-lg-6 logi1">
                <div class="login-container">
                    <a class="d-flex justify-content-center justify-content-md-start" href="<?= base_url('/kanavuhelp') ?>">
                       <img src="<?= base_url('assets/img/KSV LOGO (14).png') ?>" alt="Kanavu_help" style="height: 70px; width: auto;">
                    </a>
                    
                    <div class="login-form">
                        <h2 class="text-center text-md-start">Sign in</h2>
                        <p class="text-center text-md-start">Don't have an Account?
                            <a href="<?= base_url('kanavuhelp/register') ?>">
                                <span style="color:red; text-decoration:underline;margin-left:10px;">Create Now</span>
                            </a>
                        </p>
                        
                        <form name="login" onsubmit="return loginValidate()" method="post" action="<?= base_url('admin/adminLogin') ?>">
                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1">
                                <div id="mailerr" class="text-danger"></div>
                            </div>

                            <!-- Password Field with Eye Icon -->
                            <div class="mb-3">
                                <label for="exampleInputpassword1" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="exampleInputpassword1" name="exampleInputpassword1">
                                    <button class="btn btn-outline-secondary password-toggle" type="button" id="togglePassword">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                <div id="passworderr" class="text-danger"></div>
                            </div>

                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <a href="#" class="atag">Forgot password?</a>
                            </div>

                            <button type="submit" name="save" class="btn btnsignin">Sign in</button>
                            
                            <div class="divider my-4">
                                <span class="px-2">OR</span>
                            </div>
                            
                            <div class="text-center">
                                <p class="mb-3">Continue with</p>
                                <button type="button" class="btn p-0 border-0 bg-transparent">
                                    <img src="<?= base_url('/assets/img/icons8-google 1.png') ?>" alt="Google" style="width:40px; height:40px;">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right side image column -->
            <div class="col-lg-6 d-none d-lg-block p-0">
                <img src="<?= base_url('/assets/img/admin_login.png') ?>" alt="Right image" class="right-image">
            </div>
        </div>
    </div>

    <script>
        function loginValidate() {
            var email = document.login.exampleInputEmail1.value.trim();
            var password = document.login.exampleInputpassword1.value.trim();
            var isValid = true;

            // Email validation
            if (email === "") {
                document.getElementById("mailerr").innerHTML = "Email must be filled out";
                isValid = false;
            } else if (!/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(email)) {
                document.getElementById("mailerr").innerHTML = "You have entered an invalid email address";
                isValid = false;
            } else {
                document.getElementById("mailerr").innerHTML = "";
            }

            // Password validation
            if (password === "") {
                document.getElementById("passworderr").innerHTML = "Password must be filled out";
                isValid = false;
            } else {
                document.getElementById("passworderr").innerHTML = "";
            }

            return isValid;
        }

        // Password Toggle Script
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('exampleInputpassword1');
            const icon = this.querySelector('i');

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            } else {
                passwordInput.type = "password";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            }
        });

        // Real-time validation for email field
        document.getElementById('exampleInputEmail1').addEventListener('input', function() {
            var email = this.value.trim();
            
            if (email === "") {
                document.getElementById("mailerr").innerHTML = "Email must be filled out";
            } else if (!/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(email)) {
                document.getElementById("mailerr").innerHTML = "You have entered an invalid email address";
            } else {
                document.getElementById("mailerr").innerHTML = "";
            }
        });

        // Real-time validation for password field
        document.getElementById('exampleInputpassword1').addEventListener('input', function() {
            var password = this.value.trim();
            
            if (password === "") {
                document.getElementById("passworderr").innerHTML = "Password must be filled out";
            } else {
                document.getElementById("passworderr").innerHTML = "";
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>