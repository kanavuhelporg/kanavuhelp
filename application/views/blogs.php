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
    .donate-btn button{
      border:1px solid red;
      background-color: white;
    }
    .shadow-md {
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Adjust the shadow properties as needed */
    border-radius:20px;
    margin-bottom:30px;
}
      </style>
</head>
<body class="overflow-x-hidden">
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="<?= base_url('/kanavuhelp') ?>">
            <img class="logo" src="<?php echo base_url('/assets/img/kanavu_help.png');?>" alt="Kanavu Help">
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" >
            <div class="group inline-block relative mr-5">
                <a href="#" class="hover:text-gray-900 ml-5">Fundraise for</a>
                <div class="opacity-0 group-hover:opacity-100 absolute z-10 bg-white border rounded-md p-2">
                    <!-- Dropdown content goes here -->
                    <a href="<?= base_url('kanavuhelp/individual') ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Individual</a>
                    <a href="<?= base_url('kanavuhelp/charity') ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Charities</a>
                    <!-- Add more dropdown options as needed -->
                </div>
            </div>
            <a href="<?= base_url('kanavuhelp/donate') ?>" class="mr-10 hover:text-gray-900"> Donate</a>
            <a href="<?= base_url('kanavuhelp/myhelps') ?>"  class="mr-10 hover:text-gray-900">My helps</a>
            <a href="http://localhost/kanavuhelp/#demo1" class="mr-10 hover:text-gray-900">How it works</a>
            <a href="<?= base_url('kanavuhelp/contactus') ?>" class="mr-10 hover:text-gray-900" style="color:#E01A2B">Blogs</a>
            <a href="<?= base_url('kanavuhelp/contactus') ?>" class="hover:text-gray-900">Contact us</a>
        </nav>
        <a href="<?= base_url('kanavuhelp/login') ?>"><button type="button" class="btn btn-1 border">Login</button></a>
        <a href="<?= base_url('kanavuhelp/individual') ?>"><button type="button" class="btn btn-2 border">Start a Kanavu</button></a>
        </div>
         <div class="container-fluid mx-auto mt-5">
            <img src="<?php echo base_url('/assets/img/blogs.png');?>" alt="No Image" class="w-full h-auto">
        </div>
        <!-- <div class="container mx-auto text-center mt-8">
            <img src="http://localhost/kanavuhelp/assets/img/handwithheart.png" alt="No Image" class="h-auto inline-block">
        </div>
        <div class="mx-auto text-center mt-3"><p><strong>"Fundraising is the gentle art of teaching the joy of giving"</strong></p></div>
        <div class="mx-auto text-center mt-8">
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 md:mt-0">All</button>
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 md:mt-0">Medical</button>
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mr-3 md:mt-0">Crisis</button>
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 md:mt-0">Education</button>
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-4 mr-3 md:mt-0">Emergency</button>
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-4 mr-3 md:mt-0">Events</button>
    </div> -->
    <section class="text-gray-600 body-font" >
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap">
            <div class="shadow-md p-4 md:w-1/4" id="container1" style="margin-left:130px;">
              <div class="h-full rounded-lg overflow-hiddens" >
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/blog1 1.png');?>" alt="blog">
                <div class="flex justify-between items-center mt-4 ml-6 mr-14">
                  <img  src="<?php echo base_url('/assets/img/calendar.svg');?>" alt="blog" style="width:20px;">April 11, 2024
                  <img  src="<?php echo base_url('/assets/img/user-regular.svg');?>" alt="blog" style="margin-left:40px">By Admin
                </div>
                <div class="p-6">
                  <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>Donate for nutrition less poor people in Local</strong></h1>
                  <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1" style="color:grey;">Lorem ipsum dolor sit amet, consectetur adipiscing</h1>
                  <div class="mt-4  donate-btn" >
                  <button onclick="toggleDetails('detailsSection1')" class="inline-flex items-center bg-gray-200 text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-white-200 rounded-full text-base mt-8 mr-10 md:mt-0">Read More</button>
                </div>                  
                </div>
              </div>
            </div>
            <!-- <div class="flex flex-wrap"> -->
              <div class=" shadow-md p-4 md:w-1/4"  id="container2" style="margin-left:50px;">
                <div class="h-full rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/blog2 1.png');?>" alt="blog">
                  <div class="flex justify-between items-center mt-4 ml-6 mr-14">
                  <img  src="<?php echo base_url('/assets/img/calendar.svg');?>" alt="blog" style="width:20px;">April 11, 2024
                  <img  src="<?php echo base_url('/assets/img/user-regular.svg');?>" alt="blog" style="margin-left:40px">By Admin
                    </div>
                  <div class="p-6">
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>Charity meetup in Berline next year
                    </strong></h1>
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1" style="color:grey;">Lorem ipsum dolor sit amet, consectetur adipiscing</h1>
                    <div class="mt-4 donate-btn">
                    <button onclick="toggleDetails('detailsSection2')" class="inline-flex items-center bg-gray-200 text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0">Read More</button>
                  </div>                  
                  </div>
                </div>
              </div>
              <div class="shadow-md p-4 md:w-1/4" id="container3" style="margin-left:50px;">
                <div class="h-full rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/blog3 1.png');?>" alt="blog">
                  <div class="flex justify-between items-center mt-4 ml-6 mr-14">
                  <img  src="<?php echo base_url('/assets/img/calendar.svg');?>" alt="blog" style="width:20px;">April 11, 2024
                  <img  src="<?php echo base_url('/assets/img/user-regular.svg');?>" alt="blog" style="margin-left:40px">By Admin
                    </div>
                  <div class="p-6">
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>Donate for nutrition less poor people in Local</strong></h1>
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1" style="color:grey;">Lorem ipsum dolor sit amet, consectetur adipiscing</h1>
                    <div class="mt-4 donate-btn">
                    <button onclick="toggleDetails('detailsSection3')" class="inline-flex items-center bg-gray-200  text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0">Read More</button>
                  </div>                  
                  </div>
                </div>
              </div>
              <div class="shadow-md p-4 md:w-1/4" id="container4" style="margin-left:130px;">
                <div class="h-full rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/blog4 1.png');?>" alt="blog">
                  <div class="flex justify-between items-center mt-4 ml-6 mr-14">
                  <img  src="<?php echo base_url('/assets/img/calendar.svg');?>" alt="blog" style="width:20px;">April 11, 2024
                  <img  src="<?php echo base_url('/assets/img/user-regular.svg');?>" alt="blog" style="margin-left:40px">By Admin
                    </div>
                  <div class="p-6">
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>Treatment for every helpless children
                    </strong></h1>
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1" style="color:grey;">Lorem ipsum dolor sit amet, consectetur adipiscing</h1>
                    <div class="mt-4 donate-btn">
                    <button onclick="toggleDetails('detailsSection4')" class="inline-flex items-center bg-gray-200 text-red-500 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0">Read More</button>
                  </div>                  
                  </div>
                </div>
              </div>
              <!-- <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                  <div class="p-6">
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>cancer treatment for a girl child in maharastra</strong></h1>
                    <div class="d-flex"><h2 class="title-font text-md font-medium text-gray-300 mb-3">By kailashwaran
                    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 ml-8 md:mt-0">Medical</button></h2></div>
                    <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                    <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                      <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                    </div>
                    <div class="mt-4">
                    <button class="inline-flex items-center  bg-gray-200 text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0">Donate Now</button>
                    <a href="#" class="inline-flex items-center border-0 py-1 px-3 ml-17 md:mt-0 transition-transform transform hover:scale-110">
                      <img src="http://localhost/kanavuhelp/assets/img/share-2.svg" alt="Share Button" class="h-6">
                  </a>
                  </div>                  
                  </div>
                </div>
              </div> -->
        </div></div>
        <div id="detailsSection1" class="container px-0 py-0 mx-auto" style="display: none;margin-left:40px;margin-bottom:350px;margin-top:1px;">
    <!-- Details for Container 1 -->
    <img src="<?php echo base_url('/assets/img/blog1 1.png');?>" alt="blog" width="700" height="700" >
    <div class="flex items-center mt-4">
        <img src="<?php echo base_url('/assets/img/calendar.svg');?>" alt="blog" style="width:20px; margin-right: 5px;">April 11, 2024
        <img src="<?php echo base_url('/assets/img/user-regular.svg');?>" alt="blog" style="margin-left:5px;">By Admin
    </div><br>
    <div class="p-0">
        <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>cancer treatment for a girl child in maharastra</strong></h1>
        <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1" style="color:grey;">Lorem ipsum dolor sit amet, consectetur adipiscing</h1>
    </div>       
</div>

<div id="detailsSection2" class="container px-0 py-0 mx-auto" style="display: none;margin-left:40px;margin-bottom:350px;margin-top:1px;">
    <!-- Details for Container 1 -->
    <img src="<?php echo base_url('/assets/img/blog2 1.png');?>" alt="blog" width="700" height="700" >
    <div class="flex items-center mt-4">
        <img src="<?php echo base_url('/assets/img/calendar.svg');?>" alt="blog" style="width:20px; margin-right: 5px;">April 11, 2024
        <img src="<?php echo base_url('/assets/img/user-regular.svg');?>" alt="blog" style="margin-left:5px;">By Admin
    </div><br>
    <div class="p-0">
        <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>cancer treatment for a girl child in maharastra</strong></h1>
        <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1" style="color:grey;">Lorem ipsum dolor sit amet, consectetur adipiscing</h1>
    </div>       
</div>
<div id="detailsSection3" class="container px-0 py-0 mx-auto" style="display: none;margin-left:40px;margin-bottom:350px;margin-top:1px;">
    <!-- Details for Container 1 -->
    <img src="<?php echo base_url('/assets/img/blog3 1.png.png');?>" alt="blog" width="700" height="700" >
    <div class="flex items-center mt-4">
        <img src="<?php echo base_url('/assets/img/calendar.svg');?>" alt="blog" style="width:20px; margin-right: 5px;">April 11, 2024
        <img src="<?php echo base_url('/assets/img/user-regular.svg');?>" alt="blog" style="margin-left:5px;">By Admin
    </div><br>
    <div class="p-0">
        <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>cancer treatment for a girl child in maharastra</strong></h1>
        <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1" style="color:grey;">Lorem ipsum dolor sit amet, consectetur adipiscing</h1>
    </div>       
</div>
<div id="detailsSection4" class="container px-0 py-0 mx-auto" style="display: none;margin-left:40px;margin-bottom:350px;margin-top:1px;">
    <!-- Details for Container 1 -->
    <img src="<?php echo base_url('/assets/img/blog4 1.png.png');?>" alt="blog" width="700" height="700" >
    <div class="flex items-center mt-4">
        <img src="<?php echo base_url('/assets/img/calendar.svg');?>" alt="blog" style="width:20px; margin-right: 5px;">April 11, 2024
        <img src="<?php echo base_url('/assets/img/user-regular.svg');?>" alt="blog" style="margin-left:5px;">By Admin
    </div><br>
    <div class="p-0">
        <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>cancer treatment for a girl child in maharastra</strong></h1>
        <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1" style="color:grey;">Lorem ipsum dolor sit amet, consectetur adipiscing</h1>
    </div>       
</div>

      </section>
      <script>
    function toggleDetails(detailsId) {
        var detailsSection = document.getElementById(detailsId);
        var containers = document.querySelectorAll('[id^="container"]');

        // Hide all other containers
        containers.forEach(function(container) {
            if (container.id !== detailsId) {
                container.style.display = 'none';
            }
        });

        // Toggle the display property of the clicked container
        if (detailsSection.style.display === 'none' || detailsSection.style.display === '') {
            detailsSection.style.display = 'block';
        } else {
            detailsSection.style.display = 'none';
        }
    }
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
    
    
    </header>




</body>
</html>