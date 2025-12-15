<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>
    body {
        font-family: 'sen', sans-serif;
    }

    .footer {
        width: 100%;
        left: 0;
        right: 0;
        background-color: #ed3136;
        color: #f0f0f0;
        padding: 30px 0;
        height: auto; /* ✅ allows footer to expand naturally */
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
        margin-left: 20px; /* Fixed typo: 20x to 20px */
    }

    .footimg {
        margin-left: 520px;
        padding: 20px;
    }

    .social-icons img {
        width: 20px;
        height: 20px;
        margin-left: 10px;
    }

    .footer1 a {
        color: white;
        text-decoration: none;
    }

    .social-icons {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .social-icons a {
        margin: 0 10px;
    }

    .text-center img {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    @media (min-width: 993px) {
        .img-fluid {
            margin-top: 50px;
            width: 100%;
            height: 100%;
        }
    }

    @media (min-width: 769px) and (max-width: 992px) {
        .img-fluid {
            margin-top: 50px;
            width: 100%;
            height: 100%;
        }

        .img1 {
            display: none;
        }

        .footimg {
            margin-left: 30%;
        }
    }

    @media (min-width: 577px) and (max-width: 768px) {
        .img-fluid {
            margin-top: 40px;
            width: 100%;
            height: 100%;
        }

        .footimg {
            padding: 0px;
            height: 12%;
        }

        .img1 {
            display: none;
        }

        .footimg {
            margin-left: 16%;
        }
    }

    @media(max-width:576px) {
        .logo {
            margin-left: 10px;
        }

        .btn-1,
        .btn-2 {
            display: inline-block;
            margin-right: 10px;
        }

        .img-fluid {
            margin-top: 95px;
            width: 100%;
            height: 100%;
        }

        .footimg {
            padding: 0px;
            height: 8%;
        }

        .mm {
            margin-top: 10px;
            width: 100%;
        }

        .box,
        .box1 {
            margin-top: 10px;
        }

        .img1 {
            display: none;
        }
    }

    h1 {
        text-align: center;
    }

    p {
        margin: 0;
        font-size: 20px;
    }

    #multi-step-form-container {
        margin-top: 1rem;
    }

    .text-center {
        text-align: center;
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .pl-0 {
        padding-left: 0;
    }
</style>

<footer class="footer text-white py-4 mt-auto" style="background-color: #ed3136;">
    <div class="container text-center">
        <h5>kanavu.help</h5>

        <div class="footer-links my-3">
            <a class="footer-lable border-end pe-3 me-3 text-white text-decoration-none" href="<?= base_url('/contactus') ?>">Contact</a>
            <a class="footer-lable border-end pe-3 me-3 text-white text-decoration-none" 
                href="<?= base_url('/terms_of_use') ?>" 
                target="_blank" 
                rel="noopener noreferrer">
                Terms of Use
            </a>
            <a class="footer-lable text-white text-decoration-none" 
                href="<?= base_url('/privacy_policy') ?>" 
                target="_blank" 
                rel="noopener noreferrer">
                Privacy Policy
            </a>
        </div>

        <div class="social-icons d-flex justify-content-center mb-3">
            <a href="https://www.facebook.com/profile.php?id=61574165466676" target="_blank" class="mx-2 text-white">
                <i class="fab fa-facebook-f me-3" style="font-size:24px"></i>
            </a>
            <a href="https://www.instagram.com/kanavu.help/" target="_blank" class="mx-2 text-white">
                <i class='fab fa-instagram me-3' style='font-size:24px'></i>
            </a>
            <a href="https://www.youtube.com/channel/UCA3Za4BS9L1CwPkuhqm260w" target="_blank" class="mx-2 text-white">
                <i class='fab fa-youtube me-3' style='font-size:24px'></i>
            </a>
        </div>
        
        <div class="text-center my-3">
            <img src="<?= base_url('/assets/img/footer-secured-card 1.svg'); ?>" alt="Secure Payment" class="img-fluid" style="max-width:300px;">
        </div>

        <p class="text-center" style="font-size:15px;">
            Copyright <?= date('Y'); ?> @ kanavu.help. All Rights Reserved.
        </p>
    </div>
</footer>

<!-- ✅ Fixed JavaScript for year display with debugging -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const currentYearElement = document.getElementById("currentYear");
    if (currentYearElement) {
        currentYearElement.textContent = new Date().getFullYear();
        console.log("Year set to: " + new Date().getFullYear()); // Debug log
    } else {
        console.log("Element with ID 'currentYear' not found."); // Debug log
    }
});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>