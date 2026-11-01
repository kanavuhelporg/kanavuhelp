<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Fundraiser Enquiry - Kanavu Help</title>

  <!-- G4 (google analytics) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-JF0Q147F1Y"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-JF0Q147F1Y');
  </script>

  <link href="<?= base_url('assets/img/kanavulogoo.jpg') ?>" rel="icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;600;700;800&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <style>
    :root {
      --primary-red: #ed3136;
      --primary-dark: #c82328;
      --bg-soft: #fff7f7;
      --text-dark: #1e293b;
      --text-muted: #64748b;
      --border-color: #e2e8f0;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Sen', sans-serif;
      color: var(--text-dark);
      background-color: #ffffff;
      margin: 0;
      padding-top: 86px;
      overflow-x: hidden;
    }

    /* Navbar styling */
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
      color: var(--primary-red) !important;
      font-weight: 700;
    }



    /* Form Container Card */
    .form-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 20px;
      padding: 36px 32px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .form-card h2 {
      font-size: 1.65rem;
      font-weight: 800;
      color: #0f172a;
      margin-bottom: 24px;
    }

    .col-form-label {
      font-weight: 700;
      font-size: 14px;
      color: #334155;
    }

    .form-control,
    .form-select {
      border: 1.5px solid #cbd5e1;
      border-radius: 10px;
      padding: 10px 14px;
      font-size: 14.5px;
      color: #1e293b;
      font-family: inherit;
      transition: all 0.2s;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: var(--primary-red);
      box-shadow: 0 0 0 3px rgba(237, 49, 54, 0.15);
      outline: none;
    }

    .custom-dropdown-wrapper {
      position: relative;
    }

    .custom-dropdown-icon {
      position: absolute;
      right: 14px;
      top: 50%;
      transform: translateY(-50%);
      pointer-events: none;
      color: #64748b;
      font-size: 13px;
    }

    .btn-submit-enquiry {
      background-color: var(--primary-red);
      color: #ffffff;
      font-size: 16px;
      font-weight: 800;
      padding: 12px 48px;
      border-radius: 50px;
      border: none;
      transition: all 0.3s;
      box-shadow: 0 6px 18px rgba(237, 49, 54, 0.3);
      cursor: pointer;
    }

    .btn-submit-enquiry:hover {
      background-color: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 8px 22px rgba(237, 49, 54, 0.4);
      color: #ffffff;
    }

    .btn-submit-enquiry:disabled {
      background-color: #94a3b8;
      cursor: not-allowed;
      transform: none;
      box-shadow: none;
    }

    .error-msg {
      font-size: 12px;
      color: #dc2626;
      margin-top: 4px;
      display: none;
    }

    .error-msg.visible {
      display: block;
    }

    /* Left Banner text */
    .left-banner h3 {
      font-size: 1.9rem;
      font-weight: 800;
      letter-spacing: 0.5px;
      color: #0f172a;
    }

    .left-banner h6 {
      font-size: 1rem;
      font-style: italic;
      color: #64748b;
      max-width: 440px;
      margin: 0 auto 20px;
      line-height: 1.5;
    }

    .left-banner img {
      max-width: 82%;
      height: auto;
      border-radius: 50%;
      box-shadow: 0 10px 28px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease;
    }

    .left-banner img:hover {
      transform: scale(1.02);
    }

    @media (max-width: 991px) {
      .left-banner {
        margin-bottom: 30px;
      }

      .form-card {
        padding: 26px 20px;
      }
    }
  </style>
</head>

<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg py-3 fixed-top">
    <div class="container-fluid px-lg-4">
      <a class="navbar-brand me-auto" href="<?= base_url('') ?>">
        <img src="<?= base_url('assets/img/KSV LOGO (14).png') ?>" alt="Kanavu Help Logo">
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar">
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
            <li class="nav-item" style="display: none;">
              <a class="nav-link" href="<?= base_url('/individual') ?>">Start a Fundraiser</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/donate') ?>">Donate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url('/fundraiser-enquiry') ?>">Fundraiser Enquiry</a>
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
            <?php endif; ?>
          </ul>
          <div class="d-flex align-items-center ms-auto">
            <?php if ($this->session->userdata('Kanavu_userId')): ?>
              <div class="dropdown">
                <div class="d-flex align-items-center" role="button" data-bs-toggle="dropdown">
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

  <!-- Main Content Container -->
  <main class="container py-4 my-2">

    <!-- Flash Notifications -->
    <?php if ($this->session->flashdata('enquiry_success')): ?>
      <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4 shadow-sm" role="alert">
        <i class="fas fa-check-circle me-2 fs-5"></i>
        <strong>Enquiry Submitted!</strong> <?= $this->session->flashdata('enquiry_success'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('enquiry_error')): ?>
      <div class="alert alert-danger alert-dismissible fade show rounded-3 mb-4 shadow-sm" role="alert">
        <i class="fas fa-exclamation-triangle me-2 fs-5"></i>
        <strong>Error:</strong> <?= $this->session->flashdata('enquiry_error'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <div class="row align-items-center justify-content-center">

      <!-- LEFT COLUMN: Image & Header (matching reference design) -->
      <div class="col-12 col-lg-6 d-flex justify-content-center text-center left-banner">
        <div>
          <h3 class="mt-2 mb-2"><strong>START YOUR FUNDRAISER</strong></h3>
          <h6>"We make a living by what we get, but we make a life by what we give"</h6>
          <img src="<?= base_url('/assets/img/startyourfund_1.jpeg'); ?>" alt="Start Your Fundraiser" class="img-fluid">
        </div>
      </div>

      <!-- RIGHT COLUMN: 6 Inputs Card Form -->
      <div class="col-12 col-lg-6">
        <div class="form-card">

          <h2>Basic Details</h2>

          <form id="fundraiserEnquiryForm" method="post" action="<?= base_url('submit_fundraiser_enquiry') ?>"
            novalidate>

            <!-- 1. Your Name (MANDATORY) -->
            <div class="row mb-3 align-items-center">
              <label for="fullname" class="col-sm-4 col-form-label">
                Your Name:<span class="text-danger">*</span>
              </label>
              <div class="col-sm-8">
                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name"
                  minlength="3" maxlength="100" required>
                <div id="fullname-error" class="error-msg">Please enter a valid name (letters only, no pure numbers or
                  special characters).</div>
              </div>
            </div>

            <!-- 2. Beneficiary Name (Optional) -->
            <div class="row mb-3 align-items-center">
              <label for="beneficiary_name" class="col-sm-4 col-form-label">
                Beneficiary Name:
              </label>
              <div class="col-sm-8">
                <input type="text" id="beneficiary_name" name="beneficiary_name" class="form-control"
                  placeholder="Beneficiary Name" maxlength="100">
                <div id="beneficiary_name-error" class="error-msg">Please enter a valid beneficiary name (letters only,
                  no pure numbers or special characters).</div>
              </div>
            </div>

            <!-- 3. Category (Optional) -->
            <div class="row mb-3 align-items-center">
              <label for="cause_category" class="col-sm-4 col-form-label">
                Category:
              </label>
              <div class="col-sm-8">
                <div class="custom-dropdown-wrapper">
                  <select name="cause_category" id="cause_category" class="form-select">
                    <option value="">Select Category</option>
                    <?php
                    $cats = !empty($categories) ? $categories : (!empty($result) ? $result : []);
                    if (!empty($cats)):
                      foreach ($cats as $cat):
                        $catName = is_array($cat) ? ($cat['name'] ?? '') : ($cat->name ?? '');
                        if (!empty($catName)):
                          ?>
                          <option value="<?= htmlspecialchars($catName); ?>"><?= htmlspecialchars($catName); ?></option>
                          <?php
                        endif;
                      endforeach;
                    endif;
                    ?>
                    <option value="Medical">Medical Treatment</option>
                    <option value="Education">Education</option>
                    <option value="Crisis / Emergency">Crisis / Emergency</option>
                    <option value="Memorial">Memorial</option>
                    <option value="Other">Other</option>
                  </select>
                  <i class="fas fa-chevron-down custom-dropdown-icon"></i>
                </div>
              </div>
            </div>

            <!-- 4. Phone Number (MANDATORY) -->
            <div class="row mb-3 align-items-center">
              <label for="Phonenumber" class="col-sm-4 col-form-label">
                Phone Number:<span class="text-danger">*</span>
              </label>
              <div class="col-sm-8">
                <input type="tel" id="Phonenumber" name="Phonenumber" class="form-control"
                  placeholder="10-digit Mobile Number" maxlength="10"
                  oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10);" required>
                <div id="Phonenumber-error" class="error-msg">Please enter a valid 10-digit mobile number starting with
                  6, 7, 8, or 9.</div>
              </div>
            </div>

            <!-- 5. Email ID (Optional) -->
            <div class="row mb-3 align-items-center">
              <label for="emailId" class="col-sm-4 col-form-label">
                Email ID:
              </label>
              <div class="col-sm-8">
                <input type="email" id="emailId" name="emailId" class="form-control" placeholder="Email ID">
                <div id="emailId-error" class="error-msg">Please enter a valid email address.</div>
              </div>
            </div>

            <!-- 6. Location (Optional) -->
            <div class="row mb-4 align-items-center">
              <label for="location" class="col-sm-4 col-form-label">
                Location:
              </label>
              <div class="col-sm-8">
                <input type="text" id="location" name="location" class="form-control"
                  placeholder="Location / Town / District" maxlength="100">
                <div id="location-error" class="error-msg">Please enter a valid location (letters required, no pure
                  numbers or special characters).</div>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4 pt-2">
              <button type="submit" id="submitBtn" class="btn-submit-enquiry">
                Submit
              </button>
            </div>

          </form>

        </div>
      </div>

    </div>
  </main>

  <!-- Footer Section -->
  <footer style="background-color: #ed3136; color: #ffffff; padding: 40px 0 20px; margin-top: 50px;">
    <div class="container text-center">
      <p class="mb-2 fw-semibold">&copy; <?= date('Y'); ?> Kanavu Help (The Kanavu Trust). All rights reserved.</p>
      <div class="d-flex justify-content-center gap-3 mt-3 flex-wrap">
        <a href="<?= base_url('/abouts') ?>" class="text-white text-decoration-none">About Us</a>
        <span class="text-white-50">|</span>
        <a href="<?= base_url('/fundraiser-enquiry') ?>" class="text-white text-decoration-none">Fundraiser Enquiry</a>
        <span class="text-white-50">|</span>
        <a href="<?= base_url('/contactus') ?>" class="text-white text-decoration-none">Contact Us</a>
        <span class="text-white-50">|</span>
        <a href="<?= base_url('/terms_of_use') ?>" class="text-white text-decoration-none">Terms of Use</a>
        <span class="text-white-50">|</span>
        <a href="<?= base_url('/privacy_policy') ?>" class="text-white text-decoration-none">Privacy Policy</a>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Client-side Validation JS -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form = document.getElementById('fundraiserEnquiryForm');

      function isValidName(val) {
        val = (val || '').trim();
        if (val.length < 2) return false;
        // Allow English & Tamil fonts (\u0B80-\u0BFF), spaces, dots, hyphens (no pure numbers or special symbols)
        if (!/^[a-zA-Z\u0B80-\u0BFF\s.'-]+$/.test(val)) return false;
        var letters = val.match(/[a-zA-Z\u0B80-\u0BFF]/g);
        return letters && letters.length >= 2;
      }

      function isValidLocation(val) {
        val = (val || '').trim();
        if (!val) return true;
        if (/^\d+$/.test(val)) return false; // not pure numeric
        if (!/^[a-zA-Z0-9\u0B80-\u0BFF\s,./'-]+$/.test(val)) return false;
        var letters = val.match(/[a-zA-Z\u0B80-\u0BFF]/g);
        return letters && letters.length >= 2;
      }

      function isValidEmail(val) {
        val = (val || '').trim();
        if (!val) return true; // optional
        return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(val);
      }

      function isValidPhone(val) {
        val = (val || '').trim().replace(/\D/g, '');
        if (!/^[6-9]\d{9}$/.test(val)) return false;
        if (/^(\d)\1{9}$/.test(val)) return false;
        return true;
      }

      function showError(id, show) {
        const errorEl = document.getElementById(id + '-error');
        const inputEl = document.getElementById(id);
        if (errorEl) {
          if (show) errorEl.classList.add('visible');
          else errorEl.classList.remove('visible');
        }
        if (inputEl) {
          if (show) inputEl.classList.add('is-invalid');
          else inputEl.classList.remove('is-invalid');
        }
      }

      // Realtime clear on input
      ['fullname', 'beneficiary_name', 'Phonenumber', 'emailId', 'location'].forEach(function (id) {
        const el = document.getElementById(id);
        if (el) {
          el.addEventListener('input', function () {
            showError(id, false);
          });
        }
      });

      form.addEventListener('submit', function (e) {
        let isValid = true;
        let firstInvalidField = null;

        // 1. Fullname (Mandatory - letters only, min 2 letters, no pure numeric or special chars)
        const nameVal = document.getElementById('fullname').value.trim();
        if (!isValidName(nameVal)) {
          showError('fullname', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('fullname');
        } else {
          showError('fullname', false);
        }

        // 2. Beneficiary Name (Optional - letters only if filled)
        const bNameVal = document.getElementById('beneficiary_name').value.trim();
        if (bNameVal !== '' && !isValidName(bNameVal)) {
          showError('beneficiary_name', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('beneficiary_name');
        } else {
          showError('beneficiary_name', false);
        }

        // 3. Phonenumber (Mandatory - 10 digits)
        const phoneVal = document.getElementById('Phonenumber').value.trim();
        if (!isValidPhone(phoneVal)) {
          showError('Phonenumber', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('Phonenumber');
        } else {
          showError('Phonenumber', false);
        }

        // 4. Email (Optional - valid format if entered)
        const emailVal = document.getElementById('emailId').value.trim();
        if (emailVal !== '' && !isValidEmail(emailVal)) {
          showError('emailId', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('emailId');
        } else {
          showError('emailId', false);
        }

        // 5. Location (Optional - letters required, not pure numbers or special chars)
        const locVal = document.getElementById('location').value.trim();
        if (locVal !== '' && !isValidLocation(locVal)) {
          showError('location', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('location');
        } else {
          showError('location', false);
        }

        if (!isValid) {
          e.preventDefault();
          if (firstInvalidField) {
            firstInvalidField.scrollIntoView({ behavior: 'smooth', block: 'center' });
            firstInvalidField.focus();
          }
        } else {
          // Disable button to prevent double submit
          const btn = document.getElementById('submitBtn');
          btn.disabled = true;
          btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Submitting...';
        }
      });
    });
  </script>
</body>

</html>