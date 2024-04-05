<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>myhelps</title>
    <style>
        /* .body{
            overflow-x: hidden;
        } */
        body {
      font-family: 'sen', sans-serif;
      overflow-x:hidden;
      left:0;
      right:0;
      bottom:0;
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
    </style>
</head>
<body class="overflow-x-hidden">
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="<?= base_url('/kanavuhelp') ?>">
            <img class="logo" src="<?php echo base_url('/assets/img/kanavu_help.png');?>" alt="Kanavu Help">
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" style="color:black;">
            <div class="group inline-block relative mr-5">
                <a href="#" class="hover:text-gray-900 ml-5">Fundraise for</a>
                <div class="opacity-0 group-hover:opacity-100 absolute z-10 bg-white border rounded-md p-2">
                    <!-- Dropdown content goes here -->
                    <a  href="<?= base_url('kanavuhelp/individual') ?>"class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Individual</a>
                    <a  href="<?= base_url('kanavuhelp/charity') ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Charities</a>
                    <!-- Add more dropdown options as needed -->
                </div>
                
            </div>
            <a href="<?= base_url('kanavuhelp/donate') ?>"  class="mr-10 hover:text-gray-900">Donate</a>
            <a href="<?= base_url('kanavuhelp/myhelps') ?>" class="mr-10 hover:text-gray-900"style="color:#E01A2B">My helps</a>
            <a href="http://localhost/kanavuhelp/#demo1" class="mr-10 hover:text-gray-900">How it works</a>
            <a href="<?= base_url('kanavuhelp/blogs') ?>" class="mr-10 hover:text-gray-900">Blogs</a>
            <a href="<?= base_url('kanavuhelp/contactus') ?>" class="hover:text-gray-900">Contact us</a>
        </nav>
        <a href="<?= base_url('kanavuhelp/login') ?>"><button type="button" class="btn btn-1 border">Login</button></a>
        <a href="<?= base_url('kanavuhelp/individual') ?>"><button type="button" class="btn btn-2 border">Start a Kanavu</button></a>

        </div>
         
    </header>

        <div class="container-fluid mx-auto mt-5">
            <img src="<?php echo base_url('/assets/img/myhelps.png');?>" alt="No Image" class="w-full h-auto">
        </div>
        <div class="mx-auto text-center mt-8 md:ml-20 md:ml-40">
    <button class="inline-flex items-center bg-gray-100 border-red-500 py-2 px-6 text-red-500 focus:outline-none hover:text-red-200 rounded-full text-base p-4 mt-4 md:mt-0 mr-2">My Donations</button>
    <button class="inline-flex items-center bg-gray-100 border-red-500 py-2 px-6 focus:outline-none hover:text-red-200 rounded-full text-base p-4 mt-4 md:mt-0">My Fundraisers</button>
</div>
<div class="container w-full flex justify-between ml-0 md:ml-20 mt-8 md:mt-20">
    <h4 class="text-lg font-bold ml-0 md:ml-20 mb-2 md:mr-4 md:mb-0">Help Status and details</h4>
    <!-- <h4 class="text-lg font-bold mr30 md:mr-20 mb-2 md:ml-4">You Contributed</h4> -->
</div>     
        <div class="container w-full md:w-4/5 border shadow-md flex flex-col md:flex-row mt-10 mb-10 mx-auto md:ml-40 p-4">
            <div class="w-full md:w-1/3 border rounded-lg p-6">
                <img src="<?php echo base_url('/assets/img/storm.png');?>" alt="Image" class="w-full h-auto rounded-full">
            </div>
            <div class="w-full md:w-1/3 ml-0 md:ml-4 border rounded-lg p-6">
                <h2 class="text-base mb-2">Storm affected region in southern parts of Salem</h2>
                <p class="text-gray-700">Created By</p>
                <p class="text-gray-700">Dhineshkumar</p>
                <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                    <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                </div>
            </div>
            <div class="w-full md:w-1/3 ml-0 md:ml-4 border rounded-lg p-6 text-center md:text-left">
                <h2 class="text-xl font-bold mb-2 mt-4 md:mt-10">RS.2000</h2>
            </div>
        </div>
        
        <div class="container w-full md:w-4/5 border rounded-lg shadow-md flex flex-col md:flex-row mt-10 mb-10 mx-auto md:ml-40 p-4">
            <div class="w-full md:w-1/3 border rounded-lg p-6">
                <img src="<?php echo base_url('/assets/img/storm.png');?>" alt="Image" class="w-full h-auto rounded-full">
            </div>
            <div class="w-full md:w-1/3 ml-0 md:ml-4 border rounded-lg p-6">
                <h2 class="text-base mb-2">Storm affected region in southern parts of Salem</h2>
                <p class="text-gray-700">Created By</p>
                <p class="text-gray-700">Dhineshkumar</p>
                <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                    <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                </div>
            </div>
            <div class="w-full md:w-1/3 ml-0 md:ml-4 border rounded-lg p-6 text-center md:text-left">
                <h2 class="text-xl font-bold mb-2 mt-4 md:mt-10">RS.2000</h2>
            </div>
        </div>
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
                    <img src="<?php echo base_url('/assets/img/facebook-f.svg');?>" alt="Facebook Logo" class="w-6 h-6 mr-2">
                </a>
                <a href="https://twitter.com/" target="_blank">
                    <img src="<?php echo base_url('/assets/img/twitter.svg');?>" alt="Twitter Logo" class="w-6 h-6 mr-2">
                </a>
                <a href="https://www.linkedin.com/" target="_blank">
                    <img src="<?php echo base_url('/assets/img/linkedin-in.svg');?>" alt="LinkedIn Logo" class="w-6 h-6">
                </a>
            </div>
            <img src="<?php echo base_url('/assets/img/footer-secured-card 1.svg');?>" alt="no image" class="footimg mx-auto mt-4">
            <p class="text-center p-2">Copyright 2024 @ localhost. All Rights Reserved.</p>
        </footer>
    </div>
    
   




</body>
</html>