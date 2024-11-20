<style>
  body {
    font-family: 'sen', sans-serif;
  }

  .footer {
    height: 250px;
    width: 100%;
    left: 0;
    right: 0;
    background-color: #EB2D32;
    /* margin-top: 88px; */
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
    margin-left: 520px;
    padding: 20px;
  }

  .social-icons img {
    width: 20px;
    height: 20px;
    margin-left: 10px;

  } */
  /* .footer {
    background-color: #d32f2f;
    color: white;
    
} */

/* .footer h5 {
    margin-bottom: 15px;
    text-align: center;
} */

/* .footer1 {
    text-align: center;
    margin-bottom: 10px;
} */

.footer1 a {
    color: white;
    /* margin: 0 7px; */
    text-decoration: none;
}

/* .footer1 a:hover {
    text-decoration: underline;
} */

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

/* .footer p {
    margin-bottom: 0; 
    font-size: 14px;
} */

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

    /* .footing {
      margin-left: 50%;
      padding: 0px;
      height:12%;
    } */
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

    /* .footer {
      height: 250px;
      width: 100%;
      left:0;
      right:0;
      margin-top:15%;
      color: #f0f0f0;
    } */
    /* .footing {
      margin-left: 15%;
      padding: 0px;
      height:8%;
    } */
    .mm {
      margin-top: 10px;
      width: 100%;
    }

    .box,
    .box1 {
      margin-top: 10px;

    }

    /* .ff{
   margin-top:200px;
} */
    .img1 {
      display: none;
    }

    /* .tab-content{
   margin-top:400px;
} */

    /* .sw > .nav .nav-link {
    width: 100%;
    margin: 5px 0; 
    text-align: center;
  } */
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

  /* button {
    padding: 0.7rem 1.5rem;
    border: 1px solid E01A2B;
    background-color: E01A2B;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
   
} */
  
</style>
<div class="footer">
<footer class="footer mt-auto py-3">
  <div class="container">
    <h5 style="text-align:center">kanavu.help</h5>
    <!-- <span class="text-muted">Your footer content goes here.</span> -->
    <div class="footer1">
      <a class="footer-lable lable" href="<?= base_url('/abouts') ?>">About</a>
      <a class="footer-lable lable" href="<?= base_url('/contactus') ?>">Contact</a>
      <a class="footer-lable lable" href="#">Terms of Use</a>
      <a class="footer-lable" href="#">Privacy Policy</a>
    </div>
  </div>

  <div class="social-icons d-flex justify-content-center text-center">
    <a href="https://www.facebook.com/" target="_blank">
      <img src="<?php echo base_url('/assets/img/facebook-f.svg'); ?>" alt="Facebook Logo">
    </a>
    <a href="https://twitter.com/" target="_blank">
      <img src="<?php echo base_url('/assets/img/twitter.svg'); ?>" alt="Twitter Logo">
    </a>
    <!-- LinkedIn -->
    <a href="https://www.linkedin.com/" target="_blank">
      <img src="<?php echo base_url('/assets/img/linkedin-in.svg'); ?>" alt="LinkedIn Logo">
    </a>
  </div>
  <div class="text-center my-3">
    <img src="<?php echo base_url('/assets/img/footer-secured-card 1.svg'); ?>" alt="no image" class="img-fluid mx-auto d-block" style="width: 200px; display: block;">
  </div>

  <p class="text-center" style="font-size:15px;">copyright 2024 @ kanavu.help. All Rights Reserved.</p>
</footer>
</div>