<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>fundraisefor</title>
      <link rel="stylesheet" href="style.css" />
      <!-- <link href="bootstrap.min.css" rel="stylesheet" />
         <script src="bootstrap.bundle.min.js"></script> -->
      <!-- Bootrap for the demo page -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!--wizard-->
      <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
   </head>
   <style>
      body {
      font-family: 'sen', sans-serif;
      overflow-x:hidden;
      left:0;
      right:0;
      bottom:0;
    }
 .logo {
      margin-left: 65px;
      font-weight: bolder;
      font-size: x-large;
    }
  #navbarscroll{
        margin-top:17px;
        margin-bottom:10px;
        margin-left:70px;
  }
  .btn {
      color: #EB2D32!important;
      font-weight: bolder !important;
      border-radius: 50px !important;
    }
    .btn:hover {
      background-color: #EB2D32 !important;
      color: white !important;
    }
    .btn-1 {
      margin-left: 26px !important;
      background-color: #EB2D32 !important;
      color: white !important;
    }
    .dropdown-toggle {
      font-size: 18px;
      color: black;
    }
    .navbar-brand {
      font-size: 16px;
    }
    .nav-item a{
      color:black !important;
    }
    .dropdown-toggle:hover,
    .navbar:hover,
    .navbar-brand:hover,
    .dropdown-item:hover {
      color: #EB2D32;
    }
    .footer {
      height: 250px;
      width: 100%;
      left:0;
      right:0;
      background-color: #EB2D32;
      margin-top: 88px;
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
      margin-left: 420px;
      padding: 20px;
    }
    .social-icons img {
      width: 20px;
      height: 20px;
      margin-left: 10px;
    }

    .sw-theme-arrows > .nav .nav-link::before,.sw-theme-arrows > .nav .nav-link::after
{
    display: none!important;
}
.sw > .nav .default > .num
{
    background: #EB2D32 !important;
    color:black!important;
}
.sw-theme-arrows > .nav .nav-link.done
{
    background: none!important;
    color: black!important;
}
.sw-theme-arrows > .nav .nav-link
{
    height: unset!important;
  padding: 10px!important;
  margin: 0px!important;
}
.sw-theme-arrows > .nav .nav-link p
{
    margin-bottom: 0px!important;
    font-weight: 600!important;
    color: black!important;

}
.sw > .nav .done > .num
{
    background: #f62a30!important;
    color: white!important;
}
.sw > .nav .nav-link > .num
{
    font-size:20px!important;
    font-weight: 500!important;
  height: 50px!important;
  width: 50px!important;
  margin: 20px auto!important;
  display: flex!important;
  align-items: center!important;
  justify-content: center!important;
  border-radius: 50%!important;
  padding: 0px!important;
  float: unset!important;
}
.sw-theme-arrows > .nav .nav-link.active
{
    background: none!important;
}
.sw > .nav .nav-link.active > .num
{
    font-size:20px!important;
    font-weight: 500!important;
  height: 50px!important;
  width: 50px!important;
  margin: 20px auto!important;
  display: flex!important;
  align-items: center!important;
  justify-content: center!important;
  border-radius: 50%!important;
  padding: 0px!important;
  float: unset!important;
}
.sw > .nav .active > .num
{
    background: #f62a30!important;
    color: white!important;
}
.sw-theme-arrows > .nav .nav-link.default
{
    background: none!important;
    color: black!important;
}
.hr-line
{
   height: 0px!important;
  border-bottom: 2px dotted black!important;
  position: relative!important;
  top: 58px!important;
  width: 500px!important;
  margin: 0 auto!important;
}
.sw > .progress > .progress-bar
{
    background: #f62a30!important; 
}
.sw .toolbar > .sw-btn
{
    background: none!important;
    border:1px solid #f62a30!important;
    border-radius: 100px!important;
    width: 100px;
    color: #f62a30!important;
    font-size: 18px!important;
}
.sw .toolbar > .sw-btn-next
{
    background: #f62a30!important;
    color: white!important;
}

@media (min-width: 993px) {
   .img-fluid {
      margin-top:50px;   
      width: 100%;
      height:100%;
    }
   }
@media (min-width: 769px) and (max-width: 992px) {
   .img-fluid {
      margin-top:50px;   
      width: 100%;
      height:100%;
    }
    .hr-line{
   /* display:none; */
   width:300px!important;
}
.img1{
  display:none;
}
.footimg {
      margin-left: 20%;
      padding: 0px;
      height:12%;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
   .img-fluid {
      margin-top:40px;   
      width: 100%;
      height:100%;
    }
    .footimg {
      margin-left: 20%;
      padding: 0px;
      height:12%;
    }
    .img1{
  display:none;
}
.hr-line{
   display:none;
}
}

@media(max-width:576px) {
   .logo{
     margin-left:10px;
     }
     .btn-1, .btn-2 {
    display: inline-block;
    margin-right: 10px;
    }
    .img-fluid {
      margin-top:95px;   
      width: 100%;
      height:100%;
    }
    .footer {
      height: 250px;
      width: 100%;
      left:0;
      right:0;
      margin-top:15%;
      color: #f0f0f0;
    }
    .footimg {
      margin-left: 15%;
      padding: 0px;
      height:8%;
    }
    .mm{
      margin-top:10px;
      width:100%;
    }
    .box, .box1{
      margin-top:10px;

    }
.img1{
  display:none;
}
.hr-line{
   display:none;
   /* width:100px; */
}
.hr-line ul li{
   display:flex;
}
/* .sw > .nav .nav-link {
    width: 100%;
    margin: 5px 0; 
    text-align: center;
  } */
}

   </style>
   <body>
      <nav class="navbar  navbar-expand-lg bg-light fixed-top">
         <div class="container-fluid">
             <a class="navbar-brand" href="<?= base_url('/kanavuhelp') ?>">
                 <img class="logo" src="<?php echo base_url('/assets/img/kanavu_help.png');?>" alt="Kanavu Help">
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarscroll" aria-controls="navbarscroll" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             
             <div class="collapse navbar-collapse" id="navbarscroll">
             <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-nav-scroll text-center text-lg-start"> -->
             <ul class="navbar-nav mb-2 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                     <li class="nav-item dropdown px-3">
                         <a class="nav-item  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">Fundraise for</a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="<?= base_url('kanavuhelp/individual#step-1') ?>">Individuals</a></li>
                             <li><a class="dropdown-item" href="<?= base_url('kanavuhelp/charity#step-1') ?>">Charities</a></li>
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a class="navbar-brand p-5 p-md-1" href="<?= base_url('kanavuhelp/donate') ?>">Donate</a>
                     </li>
                     <li class="nav-item">
                         <a class="navbar-brand p-3 p-md-1" href="<?= base_url('kanavuhelp/myhelps') ?>">My Helps</a>
                     </li>
                     <li class="nav-item">
                         <a class="navbar-brand p-3 p-md-1" href="<?= base_url('kanavuhelp/#demo1') ?>"">How it works</a>
                     </li>
                     <li class="nav-item">
                         <a class="navbar-brand p-3 p-md-1" href="<?= base_url('kanavuhelp/blogs') ?>">Blogs</a>
                     </li>
                     <li class="nav-item">
                         <a class="navbar-brand p-3 p-md-1" href="<?= base_url('kanavuhelp/contactus') ?>">Contact us</a>
                     </li>
                 </ul>
             </div>
     </div>
     <div class="container navbar-link  justify-content-sm-start bttn">
                       <!-- <ul class="navbar-nav d-md-flex flex-row justify-content-end"> -->
                         <!-- <li class="nav-item"> -->
                             <a href="<?= base_url('kanavuhelp/login') ?>"><button type="button" class="btn btn-1 border">Login</button></a>
                         <!-- </li> -->
                         <!-- <li class="nav-item"> -->
                         <a href="<?=base_url('kanavuhelp/individual')?>">
                             <button type="button" class="btn btn-2 border">Start a Kanavu</button></a>
                         <!-- </li> -->
                         <!-- </ul> -->
                     </div>
     </nav>
     <!-- <div class="container-fluid mx-auto mt-8 md:mt-20 lg:mt-32">
    <img src="http://kanavu.help/kanavuhelp/assets/img/sthelp.png" alt="No Image" class="w-full h-auto">
</div> -->
<div class="container-fluid mt-5 mt-md-4 mt-lg-5">
    <img src="<?php echo base_url('/assets/img/sthelp.png');?>" alt="No Image" class="img-fluid">
</div>
      <div class="container box" style="top:100px">
         <div class="row box1" style="margin-top:100px;">
            <div class="col-md-4 text-start mm text-center">
               <!-- <img src="Mask-Group-241.png" alt="" style="position: absolute; top: 0px; left: -60px;"> -->
               <h3 class="mt-10" style="margin-top: 20px;"><strong>START YOUR HELP</strong></h3>
               <h6>"We make a living by what we get,but we make a life by what we give"</h6>
               <img src="<?php echo base_url('/assets/img/btfly.png');?>" alt="no img" class="w-full h-auto img1" style="position: absolute; top: 250px; left: 30px; margin-top:320px;margin-left:30px;">
               <!-- <img src="http://kanavu.help/kanavuhelp/assets/img/btfly.png" alt="no img" class="w-full h-auto img1"> -->

            </div>
            <div class="col-md-8 ff">
               <div id="smartwizard" dir="rtl-">
                  <div class="hr-line"></div>
                  <ul class="nav nav-progress flex-wrap">
                     <li class="nav-item">
                        <a class="nav-link" href="#step-1">
                           <div class="num">1</div>
                          <p>Basic Details</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#step-2">
                        <div class="num">2</div>
                       <p>Beneficiary Details</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#step-3">
                        <div class="num">3</div>
                        <p>Cause Details</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="#step-4">
                        <div class="num">4</div>
                        <p>Elaborate Cause Details</p>
                        </a>
                     </li>
                  </ul>
                  <div class="tab-content">
                     <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                        <form id="form-1" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-4">
                                    <label>I am raising fund for</label>
                                 </div>
                                 <div class="col-md-8">
                                    <div>
                                       <select class="form-select" name="form-select" id="validationCustom04" required>
                                          <option selected disabled value="">Choose...</option>
                                          <option>...</option>
                                       </select>
                                       
                                       
                                       <div class="invalid-feedback">
                                          Please select a valid state.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Mail ID" required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Phone Number" required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                           
                          
                        </form>
                     </div>
                     <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                        <form id="form-2" class="row row-cols-1 needs-validation" novalidate>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Age" required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Location" required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Phone Number" required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                              </div>
                           </div>                           
                        </form>
                     </div>
                     <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                        <form id="form-3" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-4">
                                    <label>I am raising fund for</label>
                                 </div>
                                 <div class="col-md-8">
                                    <div>
                                       <select class="form-select" id="validationCustom04" required>
                                          <option selected disabled value="">Choose...</option>
                                          <option>...</option>
                                       </select>
                                       <div class="invalid-feedback">
                                          Please select a valid state.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input type="number" class="form-control" placeholder="Amount" required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input type="date" class="form-control" placeholder="End Date" required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                        </form>
                     </div>
                     <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                        <form id="form-4" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div>
                                       <input type="file" class="form-control" required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <label>Upload cover photo</label>
                                 </div>
                                 
                              </div>
                           </div>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Heading of the cause" required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 my-3">
                              <div class="row">
                                 <div class="col-md-12">
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description about the cause"></textarea>
                                 </div>
                              </div>
                           </div>
                           
                        </form>
                     </div>
                  </div>
                  <div class="progress">
                     <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
               <br/> &nbsp;
               <!-- Confirm Modal -->
               <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="confirmModalLabel">Order Placed</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           Congratulations! Your order is placed.
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-primary" onclick="closeModal()">Ok, close and reset</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootrap for the demo page -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <!-- Include jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <!-- jQuery Slim 3.6  -->
      <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> -->
      <!-- Include SmartWizard JavaScript source -->
      <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          url=window.location.href
          if(url.includes('#step-2')){
            console.log('called')
          }
        })
         const myModal = new bootstrap.Modal(document.getElementById('confirmModal'));
         
         
         function onCancel() { 
           // Reset wizard
           $('#smartwizard').smartWizard("reset");
         
           // Reset form
           document.getElementById("form-1").reset();
           document.getElementById("form-2").reset();
           document.getElementById("form-3").reset();
           document.getElementById("form-4").reset();
         }
         
         function onConfirm() {
          console.log("calle d on confirm")
           let form = document.getElementById('form-4');
           if (form) {
             if (!form.checkValidity()) {
               form.classList.add('was-validated');
               $('#smartwizard').smartWizard("setState", [3], 'error');
               $("#smartwizard").smartWizard('fixHeight');
               return false;
             }            
             myModal.show();
           }
         }
         
         function closeModal() {
           // Reset wizard
           $('#smartwizard').smartWizard("reset");
         
           // Reset form
           document.getElementById("form-1").reset();
           document.getElementById("form-2").reset();
           document.getElementById("form-3").reset();
           document.getElementById("form-4").reset();
         
           myModal.hide();
         }
         
         function showConfirm() {
           const name = $('#first-name').val() + ' ' + $('#last-name').val();
           const products = $('#sel-products').val();
           const shipping = $('#address').val() + ' ' + $('#state').val() + ' ' + $('#zip').val();
           let html = `<h4 class="mb-3-">Customer Details</h4>
                   <hr class="my-2">
                   <div class="row g-3 align-items-center">
                     <div class="col-auto">
                       <label class="col-form-label">Name</label>
                     </div>
                     <div class="col-auto">
                       <span class="form-text-">${name}</span>
                     </div>
                   </div>
         
                   <h4 class="mt-3">Products</h4>
                   <hr class="my-2">
                   <div class="row g-3 align-items-center">
                     <div class="col-auto">
                       <span class="form-text-">${products}</span>
                     </div>
                   </div>
         
                   <h4 class="mt-3">Shipping</h4>
                   <hr class="my-2">
                   <div class="row g-3 align-items-center">
                     <div class="col-auto">
                       <span class="form-text-">${shipping}</span>
                     </div>
                   </div>`;
           $("#order-details").html(html);
           $('#smartwizard').smartWizard("fixHeight"); 
         }
         
         $(function() {
             // Leave step event is used for validating the forms
             $("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIdx, nextStepIdx, stepDirection) {
              console.log("called function" ,currentStepIdx)
                 // Validate only on forward movement  
                 if (stepDirection == 'forward') {
                   let form = document.getElementById('form-' + (currentStepIdx + 1));
                   if (form) {
                     if (!form.checkValidity()) {
                       form.classList.add('was-validated');
                       $('#smartwizard').smartWizard("setState", [currentStepIdx], 'error');
                       $("#smartwizard").smartWizard('fixHeight');
                       return false;
                     }
                     $('#smartwizard').smartWizard("unsetState", [currentStepIdx], 'error');
                   }
                 }
             });
         
             // Step show event
             $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
                 $("#prev-btn").removeClass('disabled').prop('disabled', false);
                 $("#next-btn").removeClass('disabled').prop('disabled', false);
                 if(stepPosition === 'first') {
                     $("#prev-btn").addClass('disabled').prop('disabled', true);
                 } else if(stepPosition === 'last') {
                     $("#next-btn").addClass('disabled').prop('disabled', true);
                 } else {
                     $("#prev-btn").removeClass('disabled').prop('disabled', false);
                     $("#next-btn").removeClass('disabled').prop('disabled', false);
                 }
         
                 // Get step info from Smart Wizard
                 let stepInfo = $('#smartwizard').smartWizard("getStepInfo");
                 $("#sw-current-step").text(stepInfo.currentStep + 1);
                 $("#sw-total-step").text(stepInfo.totalSteps);
         
                 if (stepPosition == 'last') {
                   showConfirm();
                   $("#btnFinish").prop('disabled', false);
                 } else {
                   $("#btnFinish").prop('disabled', true);
                 }
         
                 // Focus first name
                 if (stepIndex == 1) {
                   setTimeout(() => {
                     $('#first-name').focus();
                   }, 0);
                 }
             });
         
             // Smart Wizard
             $('#smartwizard').smartWizard({
                 selected: 0,
                 // autoAdjustHeight: false,
                 theme: 'arrows', // basic, arrows, square, round, dots
                 transition: {
                   animation:'none'
                 },
                 toolbar: {
                   showNextButton: true, // show/hide a Next button
                   showPreviousButton: true, // show/hide a Previous button
                   position: 'bottom', // none/ top/ both bottom
                   
                 },
                 anchor: {
                     enableNavigation: true, // Enable/Disable anchor navigation 
                     enableNavigationAlways: false, // Activates all anchors clickable always
                     enableDoneState: true, // Add done state on visited steps
                     markPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                     unDoneOnBackNavigation: true, // While navigate back, done state will be cleared
                     enableDoneStateNavigation: true // Enable/Disable the done state navigation
                 },
             });
         
             $("#state_selector").on("change", function() {
                 $('#smartwizard').smartWizard("setState", [$('#step_to_style').val()], $(this).val(), !$('#is_reset').prop("checked"));
                 return true;
             });
         
             $("#style_selector").on("change", function() {
                 $('#smartwizard').smartWizard("setStyle", [$('#step_to_style').val()], $(this).val(), !$('#is_reset').prop("checked"));
                 return true;
             });
         
         });
      </script>  
 <div class="footer">
   <footer class="footer mt-auto py-3">
     <div class="container">
       <h5 style="text-align:center">kanavu.help</h5>
       <!-- <span class="text-muted">Your footer content goes here.</span> -->
       <div class="footer1">
         <a class="footer-lable lable" href="<?= base_url('kanavuhelp/abouts') ?>">About</a>
         <a class="footer-lable lable" href="#">Contact</a>
         <a class="footer-lable lable" href="#">Terms of Use</a>
         <a class="footer-lable" href="#">Privacy Policy</a>
       </div>
     </div>
     <div class="social-icons d-flex justify-content-center text-center">
       <a href="https://www.facebook.com/" target="_blank">
         <img src="<?php echo base_url('/assets/img/facebook-f.svg');?>" alt="Facebook Logo">
       </a>
       <a href="https://twitter.com/" target="_blank">
         <img src="<?php echo base_url('/assets/img/twitter.svg');?>" alt="Twitter Logo">
       </a>
       <!-- LinkedIn -->
       <a href="https://www.linkedin.com/" target="_blank">
         <img src="<?php echo base_url('/assets/img/linkedin-in.svg');?>" alt="LinkedIn Logo">
       </a>
     </div>
     <img src="<?php echo base_url('/assets/img/footer-secured-card 1.svg');?>" alt="no image" class="footimg">
     <p class="text-center">copyright 2024 @ kanavu.help. All Rights Reserved.</p>
 </div>
 </footer>


   </body>
</html>
