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

    <title>myhelps</title>
    <style>
        /* .body{
            overflow-x: hidden;
        } */
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

        .shadow-md {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* Adjust the shadow properties as needed */
            border-radius: 20px;
        }

        .data {
            border: 1px solid #E01A2B;
            color: #E01A2B;
            background-color: #fff;
        }

        .data:hover {
            background-color: #E01A2B;
            color: white;
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
                <img class="logo" src="<?=base_url('assets/img/Kanavu_help.png')?>" alt="Kanavu Help">
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center"
                style="color:black;">
                <div class="group inline-block relative mr-5">
                    <a href="#" class="hover:text-gray-900 ml-5 flex items-center" id="fundraise-toggle">Fundraise for
                        <i class="fas fa-chevron-down ml-2"></i></a>
                    <div class="hidden absolute z-10 bg-white border rounded-md p-2" id="fundraise-dropdown">
                        <!-- Dropdown content goes here -->
                        <a href="<?= base_url('/individual') ?>"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Individual</a>
                        <a href="<?= base_url('/charity') ?>"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Charities</a>
                    </div>
                </div>
                <a href="<?= base_url('/donate') ?>" class="mr-10 hover:text-gray-900">Donate</a>
                <a href="<?= base_url('/myhelps') ?>" class="mr-10 hover:text-gray-900" style="color:#E01A2B">My
                    helps</a>
                <a href="http://localhost/kanavuhelp/#demo1" class="mr-10 hover:text-gray-900">How it works</a>
                <a href="<?= base_url('/blogs') ?>" class="mr-10 hover:text-gray-900">Blogs</a>
                <a href="<?= base_url('/contactus') ?>" class="hover:text-gray-900">Contact us</a>
            </nav>
            <a href="<?= base_url('/login') ?>"><button type="button"
                    class="btn btn-1 border login_btn">Login</button></a>
            <a href="<?= base_url('/individual') ?>"><button type="button" class="btn btn-2 border register_btn">Start a
                    Kanavu</button></a>
        </div>
    </header>
    <div class="container-fluid">
        <img src="<?php echo base_url('/assets/img/myhelps.png'); ?>" alt="No Image" class="w-full h-auto">
    </div>
    <div class="mx-auto text-center mt-8 md:ml-20 ">
        <button id="myDonationsButton"
            class="inline-flex items-center bg-gray-100 border-red-500 py-2 px-6 text-red-500 focus:outline-none hover:text-red-200 rounded-full text-base p-4 mt-4 md:mt-0 mr-2 data">My
            Donations</button>
        <button id="myFundraisersButton"
            class="inline-flex items-center bg-gray-100 border-red-500 py-2 px-6 focus:outline-none hover:text-red-200 rounded-full text-base p-4 mt-4 md:mt-0 data">My
            Fundraisers</button>
    </div>
    <div class="container mx-auto md:w-2/3 flex justify-between mt-8 md:mt-20" id="helpStatusContainer">
        <h3 class="text-lg font-bold ml-20  mb-2 md:mr-4 md:mb-0">Help Status and details</h3>
        <h4 class="text-lg font-bold mr-40 md:mr-40 mb-2 md:ml-4">You Contributed</h4>
    </div>

    <div class="container w-full md:w-3/5 border shadow-md flex flex-col md:flex-row mt-10 mb-10 mx-auto  p-4 "
        id="myDonationsContainer1">
        <div class="w-full md:w-1/3 rounded-lg p-6">
            <img src="<?php echo base_url('/assets/img/storm.png'); ?>" alt="Image" class="w-48 h-48"
                style="border-radius:10px;">
        </div>
        <div class="w-full md:w-2/3 ml-0 md:ml-4  rounded-lg p-6">
            <h2 class="text-base mb-2">Storm affected region in southern parts of Salem</h2>
            <p class="text-gray-700">Created By</p>
            <p class="text-gray-700">Dhineshkumar</p>
            <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
            <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0"
                aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
            </div>
        </div>
        <div class="w-full md:w-1/3 ml-0 md:ml-4  rounded-lg p-6 text-center md:text-left">
            <h2 class="text-xl font-bold mb-2 mt-4 md:mt-10">RS.2000</h2>
        </div>
    </div>

    <div class="container w-full md:w-3/5 border shadow-md flex flex-col md:flex-row mt-10 mb-10 mx-auto  p-4 "
        id="myDonationsContainer2">
        <div class="w-full md:w-1/3 rounded-lg p-6">
            <img src="<?php echo base_url('/assets/img/storm.png'); ?>" alt="Image" class="w-48 h-48"
                style="border-radius:10px;">
        </div>
        <div class="w-full md:w-2/3 ml-0 md:ml-4 rounded-lg p-6">
            <h2 class="text-base mb-2">Storm affected region in southern parts of Salem</h2>
            <p class="text-gray-700">Created By</p>
            <p class="text-gray-700">Dhineshkumar</p>
            <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
            <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0"
                aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
            </div>
        </div>
        <div class="w-full md:w-1/3 ml-0 md:ml-4 rounded-lg p-6 text-center md:text-left">
            <h2 class="text-xl font-bold mb-2 mt-4 md:mt-10">RS.2000</h2>
        </div>
    </div>
    <div class=" fundraiser container w-full md:w-3/5 border shadow-md flex flex-col md:flex-row mt-10 mb-10 mx-auto  p-4 hidden"
        id="myFundraisersContainer1">
        <div class="w-full md:w-1/3 rounded-lg p-6">
            <img src="<?php echo base_url('/assets/img/storm.png'); ?>" alt="Image" class="w-48 h-48"
                style="border-radius:10px;">
        </div>
        <div class="w-full md:w-2/3 ml-0 md:ml-4  rounded-lg p-6">
            <h2 class="text-base mb-2">Storm affected region in southern parts of Salem</h2>
            <p class="text-gray-700">Created By</p>
            <p class="text-gray-700">Dhineshkumar</p>
            <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
            <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0"
                aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
            </div>
        </div>
        <div class="w-full md:w-1/3 ml-0 md:ml-4  rounded-lg p-6 text-center md:text-left">
            <?php
            // Assuming $endDate is the end date of the fundraiser
            $endDate = "2024-04-30"; // Example end date (YYYY-MM-DD format)
            ?>
            <?php
            // Calculate remaining days
            $remainingDays = ceil((strtotime($endDate) - time()) / (60 * 60 * 24));
            ?>
            <h2 class=" mb-2 mt-4 md:mt-10" style="color:grey;"><?php echo $remainingDays; ?> days left</h2>
        </div>
    </div>

    <div class="container w-full md:w-3/5 border shadow-md flex flex-col md:flex-row mt-10 mb-10 mx-auto  p-4 hidden"
        id="myFundraisersContainer2">
        <div class="w-full md:w-1/3 rounded-lg p-6">
            <img src="<?php echo base_url('/assets/img/storm.png'); ?>" alt="Image" class="w-48 h-48"
                style="border-radius:10px;">
        </div>
        <div class="w-full md:w-2/3 ml-0 md:ml-4 rounded-lg p-6">
            <h2 class="text-base mb-2">Storm affected region in southern parts of Salem</h2>
            <p class="text-gray-700">Created By</p>
            <p class="text-gray-700">Dhineshkumar</p>
            <p><span class="text-gray-300">$20000</span> Raised out of <span class="text-gray-300">$30000000</span></p>
            <div role="progressbar" aria-label="Example -1px high" aria-valuenow="50" aria-valuemin="0"
                aria-valuemax="100" style="height: 8px" class="relative bg-gray-300 rounded mt-3">
                <div class="absolute left-0 top-0 bg-blue-600 h-full rounded" style="width: 26%"></div>
            </div>
        </div>
        <div class="w-full md:w-1/3 ml-0 md:ml-4 rounded-lg p-6 text-center md:text-left">
            <?php
            // Assuming $endDate is the end date of the fundraiser
            $endDate = "2024-04-22"; // Example end date (YYYY-MM-DD format)
            ?>
            <?php
            // Calculate remaining days
            $remainingDays = ceil((strtotime($endDate) - time()) / (60 * 60 * 24));
            ?>
            <h2 class=" mb-2 mt-4 md:mt-10" style="color:grey;"><?php echo $remainingDays; ?> days left</h2>
        </div>
    </div>
    <script>
        // Get references to the buttons and containers
        const myDonationsButton = document.querySelector("#myDonationsButton");
        const myFundraisersButton = document.querySelector("#myFundraisersButton");
        const myDonationsContainer1 = document.querySelector("#myDonationsContainer1");
        const myDonationsContainer2 = document.querySelector("#myDonationsContainer2");
        const myFundraisersContainer1 = document.querySelector("#myFundraisersContainer1");
        const myFundraisersContainer2 = document.querySelector("#myFundraisersContainer2");
        const helpStatusContainer = document.querySelector("#helpStatusContainer");
        // Add click event listeners to the buttons
        myDonationsButton.addEventListener("click", () => {
            // Show My Donations containers and hide My Fundraisers containers
            myDonationsContainer1.classList.remove("hidden");
            myDonationsContainer2.classList.remove("hidden");
            myFundraisersContainer1.classList.add("hidden");
            myFundraisersContainer2.classList.add("hidden");
            helpStatusContainer.classList.remove("hidden");
        });

        myFundraisersButton.addEventListener("click", () => {
            // Show My Fundraisers containers and hide My Donations containers
            myFundraisersContainer1.classList.remove("hidden");
            myFundraisersContainer2.classList.remove("hidden");
            myDonationsContainer1.classList.add("hidden");
            myDonationsContainer2.classList.add("hidden");
            helpStatusContainer.classList.add("hidden");
        });
    </script>

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
                    <img src="<?php echo base_url('/assets/img/facebook-f.svg'); ?>" alt="Facebook Logo"
                        class="w-6 h-6 mr-2">
                </a>
                <a href="https://twitter.com/" target="_blank">
                    <img src="<?php echo base_url('/assets/img/twitter.svg'); ?>" alt="Twitter Logo"
                        class="w-6 h-6 mr-2">
                </a>
                <a href="https://www.linkedin.com/" target="_blank">
                    <img src="<?php echo base_url('/assets/img/linkedin-in.svg'); ?>" alt="LinkedIn Logo"
                        class="w-6 h-6">
                </a>
            </div>
            <img src="<?php echo base_url('/assets/img/footer-secured-card 1.svg'); ?>" alt="no image"
                class="footimg mx-auto mt-4">
            <p class="text-center p-2">Copyright 2024 @ localhost. All Rights Reserved.</p>
        </footer>
    </div>
    <script>
        document.getElementById("fundraise-toggle").addEventListener("click", function (event) {
            event.preventDefault();
            var dropdown = document.getElementById("fundraise-dropdown");
            dropdown.classList.toggle("hidden");
        });
    </script>
</body>

</html>