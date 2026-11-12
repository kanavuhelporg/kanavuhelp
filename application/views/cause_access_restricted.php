<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?= isset($page_title) ? htmlspecialchars($page_title) : 'Access Restricted - Kanavu Help' ?></title>

  <link href="<?= base_url('assets/img/kanavulogoo.jpg') ?>" rel="icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;600;700;800&amp;display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Sen', sans-serif;
      background: linear-gradient(135deg, #fff5f5 0%, #f8faff 50%, #f0fff4 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      margin: 0;
      padding: 0;
    }

    /* Navbar */
    .navbar {
      background: #ffffff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      z-index: 1030;
      padding-top: 8px !important;
      padding-bottom: 8px !important;
    }

    .navbar-brand img {
      height: 52px;
      width: auto;
    }

    .nav-link {
      color: #1a202c !important;
      font-weight: 500;
      font-size: 15px;
      padding: 6px 14px !important;
      transition: color 0.2s ease;
    }

    .nav-link:hover,
    .nav-link.active {
      color: #ed3136 !important;
      font-weight: 700;
    }

    .hero-section {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 100px 16px 60px;
    }

    .restricted-card {
      background: #ffffff;
      border-radius: 24px;
      box-shadow: 0 18px 50px rgba(0, 0, 0, 0.08);
      border: 1px solid #fee2e2;
      padding: 48px 40px;
      max-width: 620px;
      width: 100%;
      text-align: center;
      animation: fadeSlideUp 0.4s ease both;
    }

    @keyframes fadeSlideUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .status-icon {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 40px;
      margin: 0 auto 20px;
    }

    .status-icon.invalid {
      background: #fee2e2;
      color: #dc2626;
    }

    .status-icon.used {
      background: #e0f2fe;
      color: #0284c7;
    }

    .status-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 6px 16px;
      border-radius: 50px;
      font-size: 13px;
      font-weight: 700;
      margin-bottom: 16px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .badge-invalid {
      background: #fee2e2;
      color: #dc2626;
    }

    .badge-used {
      background: #e0f2fe;
      color: #0284c7;
    }

    h1 {
      font-size: 1.85rem;
      font-weight: 800;
      color: #1e293b;
      margin-bottom: 12px;
    }

    .desc {
      font-size: 1.02rem;
      color: #64748b;
      line-height: 1.6;
      margin-bottom: 28px;
    }

    .steps-box {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 14px;
      padding: 20px 22px;
      text-align: left;
      margin-bottom: 28px;
    }

    .steps-box h6 {
      font-size: 14px;
      font-weight: 800;
      color: #0f172a;
      margin-bottom: 14px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .step-line {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      font-size: 13.5px;
      color: #475569;
      margin-bottom: 10px;
    }

    .step-line:last-child {
      margin-bottom: 0;
    }

    .step-badge {
      background: #ed3136;
      color: #fff;
      width: 22px;
      height: 22px;
      min-width: 22px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      font-weight: 700;
      margin-top: 1px;
    }

    .btn-enquiry {
      background: #ed3136;
      color: #ffffff;
      font-weight: 700;
      font-size: 15px;
      padding: 12px 28px;
      border-radius: 50px;
      border: none;
      text-decoration: none;
      display: inline-block;
      transition: all 0.3s;
      box-shadow: 0 4px 14px rgba(237, 49, 54, 0.3);
    }

    .btn-enquiry:hover {
      background: #c82328;
      color: #ffffff;
      transform: translateY(-2px);
    }

    .btn-home {
      background: transparent;
      color: #475569;
      font-weight: 700;
      font-size: 14px;
      padding: 11px 22px;
      border-radius: 50px;
      border: 1px solid #cbd5e1;
      text-decoration: none;
      display: inline-block;
      transition: all 0.3s;
      margin-left: 10px;
    }

    .btn-home:hover {
      background: #f1f5f9;
      color: #0f172a;
    }

    footer {
      background: #ed3136;
      color: #ffffff;
      padding: 24px 0;
      margin-top: auto;
    }

    @media (max-width: 576px) {
      .restricted-card {
        padding: 32px 20px;
      }

      h1 {
        font-size: 1.5rem;
      }

      .btn-home {
        margin-left: 0;
        margin-top: 10px;
      }
    }
  </style>
</head>

<body>

  <!-- Navigation Bar (Site Official Header) -->
  <nav class="navbar navbar-expand-lg py-3 fixed-top bg-white">
    <div class="container-fluid px-lg-4">
      <a class="navbar-brand me-auto" href="<?= base_url('') ?>">
        <img src="<?= base_url('assets/img/KSV LOGO (14).png') ?>" alt="Kanavu Help Logo"
          style="height: 52px; width: auto;">
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title">
            <a href="<?= base_url('') ?>">
              <img src="<?= base_url('assets/img/KSV LOGO (14).png') ?>" alt="Kanavu Help" style="height: 50px;">
            </a>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('') ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/abouts') ?>">About us</a>
            </li>
            <?php if (!empty($approved_token_nav)): ?>
              <li class="nav-item">
                <a id="individualpage" class="nav-link mx-lg-2 fw-bold text-danger d-flex align-items-center"
                  href="<?= base_url('create-cause/' . $approved_token_nav) ?>">
                  <span>Create Cause</span>
                  <span class="badge rounded-pill bg-success ms-1"
                    style="font-size: 10px; padding: 2px 6px;">Approved</span>
                </a>
              </li>
            <?php endif; ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/donate') ?>">Donate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/fundraiser-enquiry') ?>">Start a Fundraiser</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/blogs') ?>">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/contactus') ?>">Contact Us</a>
            </li>
            <?php if ($this->session->userdata('Kanavu_userId')): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/login') ?>">View Dashboard</a>
              </li>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/login') ?>">Sign In</a>
              </li>
            <?php endif; ?>
          </ul>
          <div class="d-flex align-items-center ms-auto">
            <?php if ($this->session->userdata('Kanavu_userId')): ?>
              <div class="dropdown">
                <div class="d-flex align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?= base_url('/assets/img/Ellipse 12.png') ?>" alt="Profile"
                    style="width: 32px; height: 32px; border-radius: 50%;">
                  <span class="ms-2 fw-semibold"><?= $this->session->userdata('Kanavu_userName'); ?></span>
                </div>
                <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                  <li>
                    <a class="dropdown-item py-2" href="<?= base_url('/logout') ?>">
                      <i class="fas fa-sign-out-alt me-2 text-danger"></i> Logout
                    </a>
                  </li>
                </ul>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="hero-section">
    <div class="restricted-card">

      <?php if (isset($status) && $status === 'used'): ?>
        <div class="status-icon used"><i class="fas fa-circle-check"></i></div>
        <span class="status-badge badge-used"><i class="fas fa-lock"></i> Link Already Used</span>
        <h1>Cause Already Submitted</h1>
        <p class="desc">
          <?= !empty($message) ? htmlspecialchars($message) : 'This unique cause creation link has already been used to submit a fundraiser campaign.' ?>
        </p>
        <p class="text-muted" style="font-size: 13.5px; margin-bottom: 24px;">
          Our verification team is reviewing your details. Once verified, your fundraiser will be made live on the
          platform. If you have questions, please contact our support team.
        </p>
        <div>
          <a href="<?= base_url('') ?>" class="btn-enquiry"><i class="fas fa-home me-2"></i>Go to Home</a>
          <a href="<?= base_url('/contactus') ?>" class="btn-home"><i class="fas fa-headset me-1"></i>Contact Support</a>
        </div>

      <?php else: ?>
        <div class="status-icon invalid"><i class="fas fa-shield-halved"></i></div>
        <span class="status-badge badge-invalid"><i class="fas fa-lock"></i> Approval Required</span>
        <h1>Access Restricted</h1>
        <p class="desc">
          <?= !empty($message) ? htmlspecialchars($message) : 'Cause creation on Kanavu Help is restricted to verified requests approved by our Admin team.' ?>
        </p>

        <div class="steps-box">
          <h6><i class="fas fa-circle-info me-2 text-danger"></i>How to Start a Fundraiser</h6>
          <div class="step-line">
            <span class="step-badge">1</span>
            <span>Submit a quick <strong>Fundraiser Enquiry</strong> with basic details.</span>
          </div>
          <div class="step-line">
            <span class="step-badge">2</span>
            <span>Our team reviews and sends an <strong>Approval Link</strong> to your email.</span>
          </div>
          <div class="step-line">
            <span class="step-badge">3</span>
            <span>Click the email link to open your <strong>pre-filled Cause Creation form</strong>.</span>
          </div>
        </div>

        <div>
          <a href="<?= base_url('/fundraiser-enquiry') ?>" class="btn-enquiry"><i class="fas fa-file-pen me-2"></i>Start a Fundraiser</a>
          <a href="<?= base_url('') ?>" class="btn-home"><i class="fas fa-arrow-left me-1"></i>Back to Home</a>
        </div>
      <?php endif; ?>

    </div>
  </div>

  <!-- Site Official Footer -->
  <footer class="footer text-white py-4 mt-auto" style="background-color: #ed3136;">
    <div class="container text-center">
      <h5 class="fw-bold mb-3" style="letter-spacing: 0.5px;">kanavu.help</h5>

      <div class="footer-links my-3 d-flex justify-content-center flex-wrap gap-3">
        <a class="text-white text-decoration-none border-end pe-3" href="<?= base_url('/contactus') ?>">Contact</a>
        <a class="text-white text-decoration-none border-end pe-3" href="<?= base_url('/abouts') ?>">About Us</a>
        <a class="text-white text-decoration-none border-end pe-3"
          href="<?= base_url('/fundraiser-enquiry') ?>">Start a Fundraiser</a>
        <a class="text-white text-decoration-none border-end pe-3" href="<?= base_url('/terms_of_use') ?>"
          target="_blank" rel="noopener noreferrer">Terms of Use</a>
        <a class="text-white text-decoration-none" href="<?= base_url('/privacy_policy') ?>" target="_blank"
          rel="noopener noreferrer">Privacy Policy</a>
      </div>

      <div class="social-icons d-flex justify-content-center mb-3">
        <a href="https://www.facebook.com/profile.php?id=61574165466676" target="_blank" class="mx-2 text-white"
          aria-label="Facebook">
          <i class="fab fa-facebook-f" style="font-size:22px"></i>
        </a>
        <a href="https://www.instagram.com/kanavu.help/" target="_blank" class="mx-2 text-white" aria-label="Instagram">
          <i class="fab fa-instagram" style="font-size:22px"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCA3Za4BS9L1CwPkuhqm260w" target="_blank" class="mx-2 text-white"
          aria-label="YouTube">
          <i class="fab fa-youtube" style="font-size:22px"></i>
        </a>
      </div>

      <div class="text-center my-3">
        <img src="<?= base_url('/assets/img/footer-secured-card 1.svg'); ?>" alt="Secure Payment" class="img-fluid"
          style="max-width:300px;">
      </div>

      <p class="text-center mb-0" style="font-size:14px; opacity: 0.95;">
        Copyright &copy; <?= date('Y'); ?> @ kanavu.help. All Rights Reserved.
      </p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>