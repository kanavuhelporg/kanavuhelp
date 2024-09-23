<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>donate</title>
    <style>
        body {
      font-family: 'sen', sans-serif;
      overflow-x:hidden;
      left:0;
      right:0;
      bottom:0;
    }
    .social-icons img{
    width:20px;
    height:20px;
    margin-left: 10px;

}
.btn {
      color: #EB2D32!important;
      font-weight: bolder !important;
      border-radius: 50px !important;
      border:1px solid  #EB2D32 ;
    }
    .btn:hover {
      background-color: #EB2D32 !important;
      color: white !important;
    }
    .btn-1 {
      margin-left: 200px !important;
      background-color: #EB2D32 !important;
      color: white !important;
      width:100px;
      height:45px;
    }
    .btn-2{
      height:45px;
      width:150px;
    }
    .social-share-bar {
    position: absolute;
    left: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 999;
    display: none;
    bottom:30;
    border-radius:10px;
}

.social-share-bar.show {
    display: block;
}

.social-share-icon {
    display: inline-block; /* Display icons horizontally */
    margin-right: 10px; /* Add some spacing between icons */
}
.arrow {
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #ccc;
    
}
.donate-btn button{
      border:1px solid red;
      background-color: white;
    }
/* CSS for the modal */
.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    /* overflow-y: auto; */
    background-color: rgba(0,0,0,0.5);
  }
  
  /* CSS for the modal content */
  .modal-content {
    background-color: #FFFFFF;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
    max-width: 600px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    height:83%;
  }

  /* Close button style */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
  .modal-content p{
    color:black;
    text-align:center;
    font-size:18px;
  }
  .money-form {
    display: flex;
    align-items: center;
    margin:10px;
    
}
  
.form {
  width: 400px;
  margin: 0 auto;
}

.input-group {
  display: flex;
  margin-bottom: 15px;
  margin:10px;
}

.input-group select,
.input-group input {
  flex: 1;
  margin-right: 10px;
  border:2px solid #E9E3E3;
  padding: 10px;
  border-radius:10px;
}

.input-group input:last-child {
  margin-right: 0;
}
.input-group1 input{
  border:2px solid #E9E3E3;
  padding: 10px;
  width:380px;
  margin-bottom:15px;
  margin:10px;
  border-radius:10px;
}

center button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #E01A2B;
  border: none;
  cursor: pointer;
  margin-top:10px;
  border-radius:10px;
}

button:hover {
  background-color: #E9E3E3;
}
.donatefor{
  border:1px solid #E01A2B;
  color:#E01A2B;
  background-color:#fff;
}
.donatefor:hover{
  background-color:#E01A2B;
  color:white;
}   

      </style>
</head>
<body class="overflow-x-hidden">
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="<?= base_url('/kanavuhelp') ?>">
            <img class="logo" src="<?php echo base_url('/assets/img/kanavu_help.png');?>" alt="Kanavu Help">
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center"style="color:black;">
            <div class="group inline-block relative mr-5" >
                <a href="#" class="hover:text-gray-900 ml-5">Fundraise for</a>
                <div class="opacity-0 group-hover:opacity-100 absolute z-10 bg-white border rounded-md p-2">
                    <!-- Dropdown content goes here -->
                    <a  href="<?= base_url('kanavuhelp/individual') ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Individual</a>
                    <a  href="<?= base_url('kanavuhelp/charity') ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Charities</a>
                    <!-- Add more dropdown options as needed -->
                </div>
            </div>
            <a href="<?= base_url('kanavuhelp/donate') ?>" class="mr-10 hover:text-gray-900 " style="color:#E01A2B"> Donate</a>
            <a href="<?= base_url('kanavuhelp/myhelps') ?>"  class="mr-10 hover:text-gray-900">My helps</a>
            <a href="http://localhost/kanavuhelp/#demo1" class="mr-10 hover:text-gray-900">How it works</a>
            <a href="<?= base_url('kanavuhelp/blogs') ?>" class="mr-10 hover:text-gray-900">Blogs</a>
            <a href="<?= base_url('kanavuhelp/contactus') ?>" class="hover:text-gray-900">Contact us</a>
        </nav>
        <a href="<?= base_url('kanavuhelp/login') ?>"><button type="button" class="btn btn-1 border">Login</button></a>
        <a href="<?= base_url('kanavuhelp/individual') ?>"><button type="button" class="btn btn-2 border">Start a Kanavu</button></a>

        </div></header>
        <div class="container-fluid mx-auto mt-5">
            <img src="<?php echo base_url('/assets/img/donate.png');?>" alt="No Image" class="w-full h-auto">
        </div>
        <div class="container mx-auto text-center mt-8">
            <img src="<?php echo base_url('/assets/img/handwithheart.png');?>" alt="No Image" class="h-auto inline-block">
        </div>
        <div class="mx-auto text-center mt-3"><p><strong>"Fundraising is the gentle art of teaching the joy of giving"</strong></p></div>
        <div class="mx-auto text-center mt-8 ">
        <button class=" filter-btn inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 md:mt-0 donatefor"  data-filter="all">All</button>
        <button class=" filter-btn inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 md:mt-0 donatefor" data-filter="medical">Medical</button>
        <button class=" filter-btn inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mr-3 md:mt-0 donatefor" data-filter="crisis">Crisis</button>
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 md:mt-0 donatefor">Education</button>
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-4 mr-3 md:mt-0 donatefor">Emergency</button>
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-4 mr-3 md:mt-0 donatefor">Events</button>
    </div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap" id="projects">
            <div class="p-4 md:w-1/3" data-category="medical">
              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/cancer_treatment.png');?>" alt="blog">
                <div class="p-6">
                  <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>cancer treatment for a girl child maharastra</strong></h1>
                  <div class="d-flex"><h2 class="title-font text-md font-medium text-gray-300 mb-3">By kailashwaran
                  <button class=" inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 ml-8 md:mt-0">Medical</button></h2></div>                  <!-- <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p> -->                 
                  <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                  <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                    <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                  </div>
                  <div class="mt-4 donate-btn">
                  <button id="openModalBtn1" class="inline-flex items-center bg-gray-200 text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0 donatefor">Donate Now</button>
                  <div id="myModal1" class="modal">
    <!-- Modal content -->
                 <div class="modal-content" >
                    <span class="close">&times;</span>
                    <div class="container mx-auto text-center mt-4" style="margin-top:0px;">
                      <img src="<?php echo base_url('/assets/img/handwithheart.png');?>" alt="No Image" class="h-auto inline-block" style="width:100px;height:100px;">
                    </div>
                    <p><b>MAKE A SECURE DONATION</b></p>
                    <p style="font-size:12px;"><b>Your contribution has the potential to <br>
                    make a greater difference.</b></p><br>
                    <form action="#" method="post" class="form">
                   <div class="input-group">
                   <select name="currency" id="currency" >
                   <option value="INR">INR</option>
                   <!-- Add more currency options if needed -->
                   </select>
                   <input type="number" name="amount" id="amount" placeholder="Amount" required style="margin-left:10px;">
                   </div>
                   <div class="input-group1">
                   <input type="text" name="name" id="name" placeholder="Name" required>
                   <input type="email" name="email" id="email" placeholder="Email" required>
                   <input type="tel" name="phone" id="phone" placeholder="Phone" required>
                   </div>
                   <center><button type="button">Continue to pay Rs.</button></center>
                   </form><br>
                   <p style="font-size:12px;">By continuing, you agree to our <b>Terms of Service & Privacy Policy</b></p>

                  </div>
                </div>
           
                      <a href="#" class="inline-flex items-center border-0 py-1 px-3 ml-17 md:mt-0 transition-transform transform hover:scale-110" onclick="toggleShareBar(event,'social-share-bar-1')">
                       <img src="<?php echo base_url('/assets/img/share-2.svg');?>" alt="Share Button" class="h-6">
                    </a>
                    <div id="social-share-bar-1" class="social-share-bar" style="margin-left:165px;margin-top:-100px;">
                    <a href="whatsapp://send?text=Check%20out%20this%20link:%20http://example.com" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 7.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://example.com" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 5.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=http://example.com&text=Check%20out%20this%20link" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 4.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-twitter"></i>
                    </a>
                    <a href="mailto:?subject=Check%20out%20this%20link&body=Check%20out%20this%20link:%20http://example.com" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 8.png');?>" alt="Share Button" class="h-6">
                       <i class="fas fa-envelope"></i>
                    </a>
                    <div class="arrow"></div>
                    </div>
                </div>                  
                </div>
              </div>
            </div>
            <!-- <div class="flex flex-wrap"> -->
              <div class="p-4 md:w-1/3" data-category="crisis">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/urban-flood-mitigation.png');?>" alt="blog">
                  <div class="p-6">
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>Flood-affected house near the Poyang Lake</strong></h1>
              
                  
                    <div class="d-flex"><h2 class="title-font text-md font-medium text-gray-300 mb-3">By kailashwaran
                    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 ml-8 md:mt-0  sm:ml-2">Medical</button></h2></div>
                    <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                    <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                      <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                    </div>
                    <div class="mt-4 donate-btn">
                    <button id="openModalBtn2" class="inline-flex items-center bg-gray-200 text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0 donatefor">Donate Now</button>
                  <div id="myModal2" class="modal">
    <!-- Modal content -->
                 <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="container mx-auto text-center mt-4" style="margin-top:0px;">
                      <img src="<?php echo base_url('/assets/img/handwithheart.png');?>" alt="No Image" class="h-auto inline-block" style="width:100px;height:100px;">
                    </div>
                    <p><b>MAKE A SECURE DONATION</b></p>
                    <p style="font-size:12px;"><b>Your contribution has the potential to <br>
                    make a greater difference.</b></p><br>
                    <form action="#" method="post" class="form">
                   <div class="input-group">
                   <select name="currency" id="currency" >
                   <option value="INR">INR</option>
                   <!-- Add more currency options if needed -->
                   </select>
                   <input type="number" name="amount" id="amount" placeholder="Amount" required style="margin-left:10px;">
                   </div>
                   <div class="input-group1">
                   <input type="text" name="name" id="name" placeholder="Name" required>
                   <input type="email" name="email" id="email" placeholder="Email" required>
                   <input type="tel" name="phone" id="phone" placeholder="Phone" required>
                   </div>
                   <center><button type="button">Continue to pay Rs.</button></center>
                   </form><br>
                   <p style="font-size:12px;">By continuing, you agree to our <b>Terms of Service & Privacy Policy</b></p>

                  </div>
                </div>                
                     <a href="#" class="inline-flex items-center border-0 py-1 px-3 ml-17 md:mt-0 transition-transform transform hover:scale-110" onclick="toggleShareBar(event,'social-share-bar-2')">
                       <img src="<?php echo base_url('/assets/img/share-2.svg');?>" alt="Share Button" class="h-6">
                    </a>
                    <div id="social-share-bar-2" class="social-share-bar" style="margin-left:660px;margin-top:-100px;">
                    <a href="whatsapp://send?text=Check%20out%20this%20link:%20http://example.com" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 7.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://example.com" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 5.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=http://example.com&text=Check%20out%20this%20link" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 4.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-twitter"></i>
                    </a>
                    <a href="mailto:?subject=Check%20out%20this%20link&body=Check%20out%20this%20link:%20http://example.com" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 8.png');?>" alt="Share Button" class="h-6">
                       <i class="fas fa-envelope"></i>
                    </a>
                    <div class="arrow"></div>
                    </div>
                  </div>                  
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/3" data-category="medical">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/patient-with-cancer.png');?>" alt="blog">
                  <div class="p-6">
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>Cancer Treatment for a Girl in Gujarat</strong></h1>
                    <div class="d-flex"><h2 class="title-font text-md font-medium text-gray-300 mb-3">By kailashwaran
                    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 ml-8 md:mt-0">Medical</button></h2></div>
                    <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                    <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                      <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                    </div>
                    <div class="mt-4 donate-btn">
                    <button id="openModalBtn3" class="inline-flex items-center bg-gray-200 text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0 donatefor">Donate Now</button>
                  <div id="myModal3" class="modal">
    <!-- Modal content -->
                 <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="container mx-auto text-center mt-4" style="margin-top:0px;">
                      <img src="<?php echo base_url('/assets/img/handwithheart.png');?>" alt="No Image" class="h-auto inline-block" style="width:100px;height:100px;">
                    </div>
                    <p><b>MAKE A SECURE DONATION</b></p>
                    <p style="font-size:12px;"><b>Your contribution has the potential to <br>
                    make a greater difference.</b></p><br>
                    <form action="#" method="post" class="form">
                   <div class="input-group">
                   <select name="currency" id="currency" >
                   <option value="INR">INR</option>
                   <!-- Add more currency options if needed -->
                   </select>
                   <input type="number" name="amount" id="amount" placeholder="Amount" required style="margin-left:10px;">
                   </div>
                   <div class="input-group1">
                   <input type="text" name="name" id="name" placeholder="Name" required>
                   <input type="email" name="email" id="email" placeholder="Email" required>
                   <input type="tel" name="phone" id="phone" placeholder="Phone" required>
                   </div>
                   <center><button type="button">Continue to pay Rs.</button></center>
                   </form><br>
                   <p style="font-size:12px;">By continuing, you agree to our <b>Terms of Service & Privacy Policy</b></p>

                  </div>
                </div>           
                     <a href="#" class="inline-flex items-center border-0 py-1 px-3 ml-17 md:mt-0 transition-transform transform hover:scale-110" onclick="toggleShareBar(event,'social-share-bar-3')">
                       <img src="<?php echo base_url('/assets/img/share-2.svg');?>" alt="Share Button" class="h-6">
                    </a>
                    <div id="social-share-bar-3" class="social-share-bar" style="margin-left:1152px;margin-top:-100px;">
                    <a href="whatsapp://send?text=Check%20out%20this%20link:%20http://example.com" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 7.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://example.com" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 5.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=http://example.com&text=Check%20out%20this%20link" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 4.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-twitter"></i>
                    </a>
                    <a href="mailto:?subject=Check%20out%20this%20link&body=Check%20out%20this%20link:%20http://example.com" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 8.png');?>" alt="Share Button" class="h-6">
                       <i class="fas fa-envelope"></i>
                    </a>
                    <div class="arrow"></div>
                    </div>
                  </div>                  
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/3" data-category="crisis">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/salem_storm.png');?>" alt="blog">
                  <div class="p-6">
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>Storm affected region in southern parts of Salem</strong></h1>
                    <div class="d-flex"><h2 class="title-font text-md font-medium text-gray-300 mb-3">By kailashwaran
                    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 ml-8 md:mt-0">Medical</button></h2></div>
                    <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                    <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                      <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                    </div>
                    <div class="mt-4 donate-btn">
                    <button id="openModalBtn4" class="inline-flex items-center bg-gray-200 text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0 donatefor">Donate Now</button>
                  <div id="myModal4" class="modal">
    <!-- Modal content -->
                 <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="container mx-auto text-center mt-4" style="margin-top:0px;">
                      <img src="<?php echo base_url('/assets/img/handwithheart.png');?>" alt="No Image" class="h-auto inline-block" style="width:100px;height:100px;">
                    </div>
                    <p><b>MAKE A SECURE DONATION</b></p>
                    <p style="font-size:12px;"><b>Your contribution has the potential to <br>
                    make a greater difference.</b></p><br>
                    <form action="#" method="post" class="form">
                   <div class="input-group">
                   <select name="currency" id="currency" >
                   <option value="INR">INR</option>
                   <!-- Add more currency options if needed -->
                   </select>
                   <input type="number" name="amount" id="amount" placeholder="Amount" required style="margin-left:10px;">
                   </div>
                   <div class="input-group1">
                   <input type="text" name="name" id="name" placeholder="Name" required>
                   <input type="email" name="email" id="email" placeholder="Email" required>
                   <input type="tel" name="phone" id="phone" placeholder="Phone" required>
                   </div>
                   <center><button type="button">Continue to pay Rs.</button></center>
                   </form><br>
                   <p style="font-size:12px;">By continuing, you agree to our <b>Terms of Service & Privacy Policy</b></p>

                  </div>
                </div>                    
                     <a href="#" class="inline-flex items-center border-0 py-1 px-3 ml-17 md:mt-0 transition-transform transform hover:scale-110" onclick="toggleShareBar(event,'social-share-bar-4')">
                       <img src="<?php echo base_url('/assets/img/share-2.svg');?>" alt="Share Button" class="h-6">
                    </a>
                    <div id="social-share-bar-4" class="social-share-bar" style="margin-left:165px;margin-top:-100px;">
                    <a href="whatsapp://send?text=Check%20out%20this%20link:%20http://example.com" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 7.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://example.com" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 5.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=http://example.com&text=Check%20out%20this%20link" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 4.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-twitter"></i>
                    </a>
                    <a href="mailto:?subject=Check%20out%20this%20link&body=Check%20out%20this%20link:%20http://example.com" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 8.png');?>" alt="Share Button" class="h-6">
                       <i class="fas fa-envelope"></i>
                    </a>
                    <div class="arrow"></div>
                    </div>
                  </div>                  
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/tribal_people.png');?>" alt="blog">
                  <div class="p-6">
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>Help the tribal people in the village near Tripura</strong></h1>
                    <div class="d-flex"><h2 class="title-font text-md font-medium text-gray-300 mb-3">By kailashwaran
                    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 ml-8 md:mt-0">Medical</button></h2></div>
                    <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                    <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                      <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                    </div>
                    <div class="mt-4 donate-btn">
                    <button id="openModalBtn5" class="inline-flex items-center bg-gray-200 text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0 donatefor">Donate Now</button>
                  <div id="myModal5" class="modal">
    <!-- Modal content -->
                 <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="container mx-auto text-center mt-4" style="margin-top:0px;">
                      <img src="<?php echo base_url('/assets/img/handwithheart.png');?>" alt="No Image" class="h-auto inline-block" style="width:100px;height:100px;">
                    </div>
                    <p><b>MAKE A SECURE DONATION</b></p>
                    <p style="font-size:12px;"><b>Your contribution has the potential to <br>
                    make a greater difference.</b></p><br>
                    <form action="#" method="post" class="form">
                   <div class="input-group">
                   <select name="currency" id="currency" >
                   <option value="INR">INR</option>
                   <!-- Add more currency options if needed -->
                   </select>
                   <input type="number" name="amount" id="amount" placeholder="Amount" required style="margin-left:10px;">
                   </div>
                   <div class="input-group1">
                   <input type="text" name="name" id="name" placeholder="Name" required>
                   <input type="email" name="email" id="email" placeholder="Email" required>
                   <input type="tel" name="phone" id="phone" placeholder="Phone" required>
                   </div>
                   <center><button type="button">Continue to pay Rs.</button></center>
                   </form><br>
                   <p style="font-size:12px;">By continuing, you agree to our <b>Terms of Service & Privacy Policy</b></p>

                  </div>
                </div>

                    <a href="#" class="inline-flex items-center border-0 py-1 px-3 ml-17 md:mt-0 transition-transform transform hover:scale-110" onclick="toggleShareBar(event,'social-share-bar-5')">
                       <img src="<?php echo base_url('/assets/img/share-2.svg');?>" alt="Share Button" class="h-6">
                    </a>
                    <div id="social-share-bar-5" class="social-share-bar" style="margin-left:660px;margin-top:-100px;">
                    <a href="whatsapp://send?text=Check%20out%20this%20link:%20http://example.com" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 7.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://example.com" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 5.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=http://example.com&text=Check%20out%20this%20link" target="_blank" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 4.png');?>" alt="Share Button" class="h-6">
                       <i class="fab fa-twitter"></i>
                    </a>
                    <a href="mailto:?subject=Check%20out%20this%20link&body=Check%20out%20this%20link:%20http://example.com" class="social-share-icon">
                    <img src="<?php echo base_url('/assets/img/Group 8.png');?>" alt="Share Button" class="h-6">
                       <i class="fas fa-envelope"></i>
                    </a>
                    <div class="arrow"></div>
                    </div>
                  </div>                  
                  </div>
                </div>
              </div>
        </div></div>
      </section>
      <script>
        
      function openModal(modalId) {
  var modal = document.getElementById(modalId);
  modal.style.display = "block";
}

// Function to close the modal
function closeModal(modalId) {
  var modal = document.getElementById(modalId);
  modal.style.display = "none";
}

// Event listeners for opening and closing modals
document.getElementById("openModalBtn1").addEventListener("click", function() {
  openModal("myModal1");
});

document.getElementById("openModalBtn2").addEventListener("click", function() {
  openModal("myModal2");
});
document.getElementById("openModalBtn3").addEventListener("click", function() {
  openModal("myModal3");
});
document.getElementById("openModalBtn4").addEventListener("click", function() {
  openModal("myModal4");
});
document.getElementById("openModalBtn5").addEventListener("click", function() {
  openModal("myModal5");
});

document.querySelectorAll(".close").forEach(function(closeBtn) {
  closeBtn.addEventListener("click", function() {
    var modalId = closeBtn.closest('.modal').id;
    closeModal(modalId);
  });
});
window.addEventListener("click", function(event) {
  document.querySelectorAll(".modal").forEach(function(modal) {
    if (event.target == modal) {
      closeModal(modal.id);
    }
  });
});
    function toggleShareBar(event,id) {
        event.preventDefault(); // Prevent the default behavior of the anchor tag
        var shareBar = document.getElementById(id);
        shareBar.classList.toggle('show');
    }

    document.addEventListener('DOMContentLoaded', function() {
      const filterButtons = document.querySelectorAll('.filter-btn');
      const projects = document.getElementById('projects').children;

      filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
          const category = this.getAttribute('data-filter');
          for (let i = 0; i < projects.length; i++) {
            const project = projects[i];
            const projectCategory = project.getAttribute('data-category');
            if (category === 'all' || projectCategory === category) {
              project.style.display = 'block';
            } else {
              project.style.display = 'none';
            }
          }
        });
      });
    });

</script>

      <div class="footer">
        <footer class="footer mt-auto h-256 w-full bg-red-600 py-3 text-white">
            <div class="container mx-auto">
                <h5 class="text-center">localhost</h5>
                <div class="flex justify-center p-3 ml-4">
                    <a href="<?= base_url('kanavuhelp/abouts') ?>" class="footer-lable lable ml-5">About</a>
                    <a href="<?= base_url('kanavuhelp/contactus') ?>" class="footer-lable lable ml-5">Contact</a>
                    <a href="#" class="footer-lable lable ml-5">Terms of Use</a>
                    <a href="#" class="footer-lable lable ml-5">Privacy Policy</a>
                </div>
            </div>
            <div class="social-icons flex justify-center text-center mt-4">
                <a href="https://www.facebook.com/" target="_blank">
                    <img src="<?php echo base_url('/assets/img/facebook-f.svg');?>" alt="Facebook Logo" >
                </a>
                <a href="https://twitter.com/" target="_blank">
                    <img src="<?php echo base_url('/assets/img/twitter.svg');?>" alt="Twitter Logo">
                </a>
                <a href="https://www.linkedin.com/" target="_blank">
                    <img src="<?php echo base_url('/assets/img/linkedin-in.svg');?>" alt="LinkedIn Logo">
                </a>
            </div>
            <img src="<?php echo base_url('/assets/img/footer-secured-card 1.svg');?>" alt="no image" class="footimg mx-auto mt-4">
            <p class="text-center p-2">Copyright 2024 @ localhost. All Rights Reserved.</p>
        </footer>
    </div>
    
    
    </header>




</body>
</html>