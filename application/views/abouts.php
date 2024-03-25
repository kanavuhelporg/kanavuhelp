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
p{
    margin-top:100px;
    font-size:22px;
    text-align:center;
    padding-bottom:0px;
    
}
.about p{
    padding-top: 0px;
    font-size:17px;
}
center img{
    height: 350px;
    width: 400px;
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
                    <a  href="<?= base_url('kanavuhelp/individual') ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Individual</a>
                    <a  href="<?= base_url('kanavuhelp/charity') ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Charities</a>
                    <!-- Add more dropdown options as needed -->
                </div>
            </div>
            <a href="<?= base_url('kanavuhelp/donate') ?>" class="mr-10 hover:text-gray-900"> Donate</a>
            <a href="<?= base_url('kanavuhelp/myhelps') ?>"  class="mr-10 hover:text-gray-900">My helps</a>
            <a href="http://localhost/kanavuhelp/#demo1" class="mr-10 hover:text-gray-900">How it works</a>
            <a href="<?= base_url('kanavuhelp/blogs') ?>" class="mr-10 hover:text-gray-900">Blogs</a>
            <a href="<?= base_url('kanavuhelp/contactus') ?>" class="hover:text-gray-900">Contact us</a>
        </nav>
        <a href="<?= base_url('kanavuhelp/login') ?>">
          <button class="inline-flex items-center bg-red-500 text-white border-0 m-1 py-1 px-3 focus:outline-none hover:bg-white-200 rounded-full text-base mt-4  md:mt-0">Login</button></a>
        <a href="<?= base_url('kanavuhelp/individual') ?>">  
            <button class="inline-flex items-center bg-gray-100 text-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded-full text-base mt-4  md:mt-0">Start a Kanavu
          </button></a>
        </div>
    </header>
    
    
    <p><strong>"Mission to make a"<img src="<?php echo base_url('/assets/img/Emoji.png');?>" style="display:inline;"></strong></p><br>
    <div class="flex justify-center">
        <img class=" max-w-screen-md" src="<?php echo base_url('/assets/img/underline.svg');?>" alt="no image">
    </div>
    <div class="about">
    <p style="margin-top:40px;">At Kanavu.help, we are driven by a passionate<br> 
    commitment to make a positive impact in the lives of<br>
    those in need. We believe in the power of collective action<br>
    and are committed to creating a better, more<br>
    compassionate world for everyone.</p></div><br>

    <center><img src="<?php echo base_url('/assets/img/Group 102.svg');?>"></center>

    
    <div class="footer">
        <footer class="footer mt-auto h-256 w-full bg-red-600 py-3 text-white">
            <div class="container mx-auto">
                <h5 class="text-center">localhost</h5>
                <div class="flex justify-center p-3 ml-4">
                    <a href="#" class="footer-lable lable ml-5">About</a>
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
            <p class="text-center p-2" style="margin-top:0px;font-size:16px;">Copyright 2024 @ localhost. All Rights Reserved.</p>
        </footer>
    </div>

