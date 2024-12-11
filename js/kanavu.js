document.getElementById("header").innerHTML = `<div class="container-fluid">
      <a class="navbar-brand me-auto" href="<?= base_url('') ?>">
        <img src="<?= base_url('assets/img/Kanavu_help.png') ?>" alt="Kanavu_help">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">
            <img src="<?= base_url('assets/img/Kanavu_help.png') ?>" alt="Kanavu_help">
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a id="individualpage" class="nav-link" href="<?= base_url('/individual') ?>">Start a Fundraiser</a>
            </li>
            <li class="nav-item">
              <a id="donatepage" class="nav-link mx-lg-2" href="<?= base_url('/donate') ?>">Donate</a>
            </li>
            <li class="nav-item">
            <a id="myfrpage" class="nav-link mx-lg-2" href="<?= base_url('/myFundraisers') ?>">My Fundraiser</a>
            </li>
            <li class="nav-item">
              <a id="kanavuhomepage" class="nav-link mx-lg-2" href="<?= base_url('/kanavuhome#how-it-works-section') ?>">How it Works</a>
            </li>
            <!-- <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="<?= base_url('/blogs') ?>">Blogs</a>
                    </li> -->
            <li class="nav-item">
              <a id="contactuspage" class="nav-link mx-lg-2" href="<?= base_url('/contactus') ?>">Contact Us</a>
            </li>
          </ul>
          <div class="d-flex align-items-center ms-auto">
  <?php if ($this->session->userdata('userId')): ?>
    <div class="d-flex align-items-center">

      <div class="dropdown" id="userProfile">
        <div class="d-flex align-items-center" role="button" data-bs-toggle="dropdown">
          <img src="<?= base_url('/assets/img/Ellipse 12.png') ?>" alt="Profile Image"
            style="width: 30px; height: 30px; border-radius: 50%;">
          <span class="ms-2"><?= $this->session->userdata('userName') ?></span>
        </div>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="<?= base_url('/logout') ?>">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
    
  <?php else: echo ""; ?>
   <!--  <a href="<?= base_url('/login') ?>" class="login-button me-2">Login</a> -->
  <?php endif; ?>
</div>
        </div>
      </div>
    </div>`;

document.getElementById("footer").innerHTML = `<footer class="footer mt-auto py-3">
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
`;    