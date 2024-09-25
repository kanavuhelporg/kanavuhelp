<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>contactus</title>
  <style>
    body {
      font-family: 'sen', sans-serif;
      overflow-x: hidden;
      left: 0;
      right: 0;
      bottom: 0;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      /* Ensures the header is on top of other elements */
      background-color: white;
      /* You can adjust this as needed */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      /* Optional: Add shadow for visual effect */
    }

    body {
      padding-top: 100px;
      /* Adjust this to account for the height of your header */
    }

    .container-fluid {
      margin-top: -15px;
    }

    .btn {
      color: #EB2D32 !important;
      font-weight: bolder !important;
      border-radius: 50px !important;
      border: 1px solid #EB2D32;
    }

    .btn:hover {
      background-color: #EB2D32 !important;
      color: white !important;
    }

    .btn-1 {
      margin-left: 200px !important;
      background-color: #EB2D32 !important;
      color: white !important;
      width: 100px;
      height: 45px;
    }

    .btn-2 {
      height: 45px;
      width: 150px;
    }

    .hidden {
      display: none;
    }

    .login_btn {
      margin-right: 20px;
    }
  </style>
</head>

<body class="overflow-x-hidden">
  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"
        href="<?= base_url('/kanavuhome') ?>">
        <img class="logo" src="<?php echo base_url('/assets/img/kanavu_help.png'); ?>" alt="Kanavu Help">
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" style="color:black;">
        <div class="group inline-block relative mr-5">
          <a href="#" class="hover:text-gray-900 ml-5 flex items-center" id="fundraise-toggle">Fundraise for <i
              class="fas fa-chevron-down ml-2"></i></a>
          <div class="hidden absolute z-10 bg-white border rounded-md p-2" id="fundraise-dropdown">
            <!-- Dropdown content goes here -->
            <a href="<?= base_url('/individual') ?>"
              class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Individual</a>
            <a href="<?= base_url('/charity') ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Charities</a>
          </div>
        </div>
        <a href="<?= base_url('/donate') ?>" class="mr-10 hover:text-gray-900">Donate</a>
        <a href="<?= base_url('/myhelps') ?>" class="mr-10 hover:text-gray-900">My helps</a>
        <a href="http://localhost/kanavuhelp/#demo1" class="mr-10 hover:text-gray-900">How it works</a>
        <a href="<?= base_url('/blogs') ?>" class="mr-10 hover:text-gray-900">Blogs</a>
        <a href="<?= base_url('/contactus') ?>" class="hover:text-gray-900" style="color:#E01A2B">Contact
          us</a>
      </nav>
      <a href="<?= base_url('/login') ?>"><button type="button" class="btn btn-1 border login_btn">Login</button></a>
      <a href="<?= base_url('/individual') ?>"><button type="button" class="btn btn-2 border register_btn">Start a
          Kanavu</button></a>
    </div>
  </header>

  <div class="container-fluid">
    <img src="<?php echo base_url('/assets/img/contactus.png'); ?>" alt="No Image" class="w-full h-auto">
  </div>

  <div class="flex flex-col md:flex-row mt-10 justify-center">
    <div class="w-full md:w-80 lg:w-96 xl:w-1/4 m-4 p-4 border rounded-lg">
      <div class="flex mb-2 justify-center">
        <img src="<?php echo base_url('/assets/img/location.png'); ?>" alt="Image 1" class="h-auto rounded-md">
      </div>
      <div>
        <p class="text-gray-700 text-center text-sm md:text-base lg:text-lg xl:text-xl"><strong>The Kanavu Statup
            Village</strong></p>
        <p class="text-gray-700 text-center text-sm md:text-base lg:text-lg xl:text-xl"><strong>Annamalaikottai,
            Sivagiri</strong></p>
      </div>
    </div>
    <div class="w-full md:w-80 lg:w-96 xl:w-1/4 m-4 p-4 border rounded-lg">
      <div class="flex mb-2 justify-center">
        <img src="<?php echo base_url('/assets/img/call.png'); ?>" alt="Image 2" class="h-auto rounded-md">
      </div>
      <div>
        <p class="text-gray-700 text-center text-xs md:text-sm lg:text-base xl:text-lg"><strong>+91 9379248387</strong>
        </p>
      </div>
    </div>
    <div class="w-full md:w-80 lg:w-96 xl:w-1/4 m-4 p-4 border rounded-lg">
      <div class="flex mb-2 justify-center">
        <img src="<?php echo base_url('/assets/img/email.png'); ?>" alt="Image 3" class="h-auto rounded-md">
      </div>
      <div>
        <p class="text-gray-700 text-center text-xs md:text-sm lg:text-base xl:text-lg">
          <strong>karthi.easwaramoorthy@gmail.com</strong>
        </p>
      </div>
    </div>
  </div>


  <section class="text-gray-600 body-font">
    <div class="container px-5 py-6 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/7 md:w-1/2 sm:w-1/1 xsm:w-1/1  bg-gray-100 rounded-lg p-8 flex flex-col mx-auto mt-10">
        <h2 class="text-gray-900 text-lg font-medium title-font mb-5 text-center"><strong>GET IN TOUCH WITH US</strong>
        </h2>
        <div class="flex justify-center">
          <img class=" max-w-screen-md" src="<?php echo base_url('/assets/img/underline.svg'); ?>" alt="no image">
        </div>
        <h4 class="text-base text-black-500 text-center mt-3"><strong>Submit your inquiry, and we'll respond to you as
            soon as possible!</strong></h4>
        <div class="relative mb-4 mt-5">
          <form name="contactus" id="myForm" onsubmit="return contact_us()" method="post"
            action="<?= base_url('kanavuhelp/contact_us') ?>">
            <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
            <input type="text" id="full-name" name="full-name"
              class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
              required>
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
          <input type="email" id="email" name="email"
            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            required>
        </div>
        <div class="relative mb-4">
          <label for="phone" class="leading-7 text-sm text-gray-600">Phone Number</label>
          <input type="phone" id="phone" name="phone" pattern="[0-9]{10}" maxlength="10"
            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            required>
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
          <textarea id="message" name="message"
            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            required></textarea>
        </div>
        <button type="submit"
          class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send a
          Message</button>
      </div>
      </form>

    </div>
  </section>



  <div class="footer">
    <footer class="footer mt-auto h-256 w-full bg-red-600 py-3 text-white">
      <div class="container mx-auto">
        <h5 class="text-center">localhost</h5>
        <div class="flex justify-center p-3 ml-4">
          <a href="<?= base_url('/abouts') ?>" class="footer-lable lable ml-5">About</a>
          <a href="<?= base_url('/contactus') ?>" class="footer-lable lable ml-5">Contact</a>
          <a href="#" class="footer-lable lable ml-5">Terms of Use</a>
          <a href="#" class="footer-lable lable ml-5">Privacy Policy</a>
        </div>
      </div>
      <div class="social-icons flex justify-center text-center mt-4">
        <a href="https://www.facebook.com/" target="_blank">
          <img src="<?php echo base_url('/assets/img/facebook-f.svg'); ?>" alt="Facebook Logo" class="w-6 h-6 mr-2">
        </a>
        <a href="https://twitter.com/" target="_blank">
          <img src="<?php echo base_url('/assets/img/twitter.svg'); ?>" alt="Twitter Logo" class="w-6 h-6 mr-2">
        </a>
        <a href="https://www.linkedin.com/" target="_blank">
          <img src="<?php echo base_url('/assets/img/linkedin-in.svg'); ?>" alt="LinkedIn Logo" class="w-6 h-6">
        </a>
      </div>
      <img src="<?php echo base_url('/assets/img/footer-secured-card 1.svg'); ?>" alt="no image"
        class="footimg mx-auto mt-4">
      <p class="text-center p-2">Copyright 2024 @ localhost. All Rights Reserved.</p>
    </footer>
  </div>


  </header>
  <script>
    function contact_us() {
      var full-name = document.contactus.full - name.value.trim(); // Trim the input value
      var email = document.contactus.email.value.trim(); // Trim the input value
      var phone = document.contactus.phone.value.trim(); // Trim the input value
      var message = document.contactus.message.value.trim(); // Trim the input value

    }
  </script>
  <script>
    document.getElementById("fundraise-toggle").addEventListener("click", function (event) {
      event.preventDefault();
      var dropdown = document.getElementById("fundraise-dropdown");
      dropdown.classList.toggle("hidden");
    });
  </script>
</body>

</html>