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
    <!-- <link rel="stylesheet" href="loginstyle.css"> -->
    <title>Login Page</title>
    <style>
      *{
    overflow: hidden;
}
.logi1{
    margin-top:30px;
    padding: 40px;
}
.btnsignin{
    width:100%;
    border-radius: 10px;
    color:white;
    background-color: #EB2D32;
}
.atag{
    text-decoration: underline;
    color:#EB2D32;
}
.btnsignin a:hover{
    color:black;
}
</style>
</head>
<body>  
  
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-6 logi1">
        <div style="margin-top:10px"><img src="assets/img/Kanavu_help.png" alt="noimage" ></div>
        <br>
            <h2>Sign in</h2>
            <p>Don't have an Account? <a href="<?= base_url('Welcome/register') ?>"><span style="color:red; text-decoration:underline;margin-left:10px;"> Create Now</span></a></p>
            <form method="post" action="<?= base_url('Welcome/submit') ?>"> 
            
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">password</label>
            <input type="password" class="form-control" id="exampleInputpassword1" name="exampleInputpassword1" >
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me <a href="#" class="atag" style="margin-left:340px;">Forgot password</a></label>
          </div>
          <!-- <p class="forgot-password">Forgot Password</p>  -->
          <button type="submit" name="save" class="btn border btnsignin" >Sign in </button> 
          <p style="margin-top:10px;text-align:center;font-size:15px;"><strong>--------------OR-------------</strong></p>
            <!-- <p style="margin-top:10px;text-align:center;font-size:15px;"><strong><span style="display:inline-block; width:50%;"><hr></span>OR<span style="display:inline-block; width:50%;"><hr></span></strong></p>  -->
  <div class="social-icons" style="text-align:center;">continue with 
    <img src="assets/img/fbk.svg" alt="noimage" style="width:40px;height:40px;margin-left:10px;"></img>
    <img src="assets/img/googlelogo.png" alt="noimage" style="margin-left:10px;"></img>
   </div>   
        </div>
    <div class="col-sm-6">    
            <img src="assets/img/right.svg" alt="no image">
        </div>
        </div>
        </div>
</form>
    </body>
    </html>