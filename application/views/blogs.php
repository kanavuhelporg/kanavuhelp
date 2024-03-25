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
      </style>
</head>
<body class="overflow-x-hidden">
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="<?= base_url('/kanavuhelp') ?>">
            <img class="logo" src="<?php echo base_url('/assets/img/kanavu_help.png');?>" alt="Kanavu Help">
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
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
            <a href="<?= base_url('kanavuhelp/contactus') ?>" class="mr-10 hover:text-gray-900">Blogs</a>
            <a href="<?= base_url('kanavuhelp/contactus') ?>" class="hover:text-gray-900">Contact us</a>
        </nav>
        <a href="<?= base_url('kanavuhelp/login') ?>">
          <button class="inline-flex items-center bg-red-500 text-white border-0 m-1 py-1 px-3 focus:outline-none hover:bg-white-200 rounded-full text-base mt-4  md:mt-0">Login</button></a>
        <a href="<?= base_url('kanavuhelp/individual') ?>">  
            <button class="inline-flex items-center bg-gray-100 text-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-4  md:mt-0">Start a Kanavu
          </button></a>
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
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap">
            <div class="p-4 md:w-1/3">
              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/cancer_treatment.png');?>" alt="blog">
                <div class="p-6">
                  <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>cancer treatment for a girl child in maharastra</strong></h1>
                  <div class="d-flex"><h2 class="title-font text-md font-medium text-gray-300 mb-3">By kailashwaran
                  <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 ml-8 md:mt-0">Medical</button></h2></div>                  <!-- <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p> -->                 
                  <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                  <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                    <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                  </div>
                  <div class="mt-4">
                  <button class="inline-flex items-center bg-gray-200 text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-white-200 rounded-full text-base mt-8 mr-10 md:mt-0">Donate Now</button>
                  <a href="#" class="inline-flex items-center border-0 py-1 px-3 ml-17 md:mt-0 transition-transform transform hover:scale-110">
                    <img src="<?php echo base_url('/assets/img/share-2.svg');?>" alt="Share Button" class="h-6">
                </a>
                </div>                  
                </div>
              </div>
            </div>
            <!-- <div class="flex flex-wrap"> -->
              <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/cancer_treatment.png');?>" alt="blog">
                  <div class="p-6">
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>cancer treatment for a girl child in maharastra</strong></h1>
              
                  
                    <div class="d-flex"><h2 class="title-font text-md font-medium text-gray-300 mb-3">By kailashwaran
                    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 ml-8 md:mt-0  sm:ml-2">Medical</button></h2></div>
                    <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                    <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                      <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                    </div>
                    <div class="mt-4">
                    <button class="inline-flex items-center bg-gray-200 text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0">Donate Now</button>
                    <a href="#" class="inline-flex items-center border-0 py-1 px-3 ml-17 md:mt-0 transition-transform transform hover:scale-110">
                      <img src="<?php echo base_url('/assets/img/share-2.svg');?>" alt="Share Button" class="h-6">
                  </a>
                  </div>                  
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/cancer_treatment.png');?>" alt="blog">
                  <div class="p-6">
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>cancer treatment for a girl child in maharastra</strong></h1>
                    <div class="d-flex"><h2 class="title-font text-md font-medium text-gray-300 mb-3">By kailashwaran
                    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 ml-8 md:mt-0">Medical</button></h2></div>
                    <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                    <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                      <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                    </div>
                    <div class="mt-4">
                    <button class="inline-flex items-center bg-gray-200  text-red-600 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0">Donate Now</button>
                    <a href="#" class="inline-flex items-center border-0 py-1 px-3 ml-17 md:mt-0 transition-transform transform hover:scale-110">
                      <img src="<?php echo base_url('/assets/img/share-2.svg');?>" alt="Share Button" class="h-6">
                  </a>
                  </div>                  
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="<?php echo base_url('/assets/img/cancer_treatment.png');?>" alt="blog">
                  <div class="p-6">
                    <h1 class="tracking-widest text-md title-font font-medium text-gray-900 mb-1"><strong>cancer treatment for a girl child in maharastra</strong></h1>
                    <div class="d-flex"><h2 class="title-font text-md font-medium text-gray-300 mb-3">By kailashwaran
                    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base p-4 mt-4 mr-3 ml-8 md:mt-0">Medical</button></h2></div>
                    <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
                    <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                      <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
                    </div>
                    <div class="mt-4">
                    <button class="inline-flex items-center bg-gray-200 text-red-500 border-0 py-2 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-8 mr-10 md:mt-0">Donate Now</button>
                    <a href="#" class="inline-flex items-center border-0 py-1 px-3 ml-17 md:mt-0 transition-transform transform hover:scale-110">
                      <img src="<?php echo base_url('/assets/img/share-2.svg');?>" alt="Share Button" class="h-6">
                  </a>
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
      </section>
      <div class="footer">
        <footer class="footer mt-auto h-256 w-full bg-red-600 py-3 text-white">
            <div class="container mx-auto">
                <h5 class="text-center">localhost</h5>
                <div class="flex justify-center p-3 ml-4">
                    <a href="<?= base_url('kanavuhelp/abouts') ?>" class="footer-lable lable ml-5">About</a>
                    <a href="#" class="footer-lable lable ml-5">Contact</a>
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