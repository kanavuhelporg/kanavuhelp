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
      --text-dark: #2d3748;
      --text-muted: #718096;
      --border-color: #e2e8f0;
    }

    body {
      font-family: 'Sen', sans-serif;
      color: var(--text-dark);
      background-color: #fbfbfd;
      margin: 0;
      padding-top: 76px;
      overflow-x: hidden;
    }

    * {
      box-sizing: border-box;
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

    /* Hero Section (Compact) */
    .enquiry-hero {
      background: linear-gradient(135deg, #ffffff 0%, #fff1f1 50%, #ffe8e8 100%);
      padding: 20px 0 16px;
      position: relative;
      border-bottom: 1px solid #fed7d7;
    }

    .enquiry-badge {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      background: #fee2e2;
      color: var(--primary-red);
      padding: 3px 10px;
      border-radius: 50px;
      font-size: 11px;
      font-weight: 700;
      margin-bottom: 6px;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    .enquiry-hero h1 {
      font-size: 1.6rem;
      font-weight: 800;
      color: #1a202c;
      margin-bottom: 6px;
    }

    .enquiry-hero p {
      font-size: 0.92rem;
      color: var(--text-muted);
      max-width: 640px;
      line-height: 1.45;
      margin: 0 auto;
    }

    .trust-highlights {
      display: flex;
      justify-content: center;
      gap: 10px;
      flex-wrap: wrap;
      margin-top: 12px;
    }

    .trust-item {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: rgba(255, 255, 255, 0.9);
      border: 1px solid #ffd5d5;
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
      color: #4a5568;
    }

    .trust-item i {
      color: var(--primary-red);
      font-size: 11px;
    }

    /* Form Card */
    .form-wrapper {
      margin-top: 18px;
      margin-bottom: 45px;
    }

    .enquiry-card {
      background: #ffffff;
      border-radius: 16px;
      border: 1px solid var(--border-color);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
      padding: 30px 35px;
    }

    .section-title {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 1.25rem;
      font-weight: 700;
      color: #1a202c;
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 2px solid #edf2f7;
    }

    .section-step {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 32px;
      height: 32px;
      background: var(--primary-red);
      color: white;
      border-radius: 50%;
      font-size: 14px;
      font-weight: 700;
    }

    .form-label {
      font-weight: 600;
      font-size: 14.5px;
      color: #2d3748;
      margin-bottom: 6px;
    }

    .form-control,
    .form-select {
      border: 1.5px solid #cbd5e1;
      border-radius: 10px;
      padding: 10px 14px;
      font-size: 15px;
      color: #1e293b;
      transition: all 0.2s ease;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: var(--primary-red);
      box-shadow: 0 0 0 3px rgba(237, 49, 54, 0.15);
      outline: none;
    }

    .input-group-text {
      background-color: #f8fafc;
      border: 1.5px solid #cbd5e1;
      border-right: none;
      border-radius: 10px 0 0 10px;
      color: #64748b;
    }

    .input-group .form-control {
      border-left: none;
      border-radius: 0 10px 10px 0;
    }

    .input-group .form-control:focus {
      border-color: var(--primary-red);
    }

    .error-msg {
      color: #dc2626;
      font-size: 13px;
      margin-top: 4px;
      display: none;
      font-weight: 500;
    }

    .error-msg.visible {
      display: block;
    }

    .is-invalid-input {
      border-color: #dc2626 !important;
      background-color: #fffaf0;
    }

    .char-counter {
      font-size: 12.5px;
      color: var(--text-muted);
      text-align: right;
      margin-top: 4px;
    }

    /* Process Flow Banner */
    .flow-banner {
      background: #eff6ff;
      border: 1.5px dashed #93c5fd;
      border-radius: 12px;
      padding: 16px 20px;
      margin: 30px 0;
      display: flex;
      align-items: flex-start;
      gap: 14px;
    }

    .flow-banner i {
      font-size: 24px;
      color: #2563eb;
      margin-top: 2px;
    }

    .flow-banner h6 {
      font-weight: 700;
      color: #1e40af;
      margin-bottom: 4px;
    }

    .flow-banner p {
      font-size: 13.5px;
      color: #3b82f6;
      margin: 0;
      line-height: 1.5;
    }

    /* Submit Button */
    .btn-submit {
      background: var(--primary-red);
      color: #ffffff;
      font-weight: 700;
      font-size: 17px;
      padding: 14px 40px;
      border-radius: 50px;
      border: none;
      transition: all 0.3s ease;
      box-shadow: 0 6px 20px rgba(237, 49, 54, 0.3);
    }

    .btn-submit:hover {
      background: var(--primary-dark);
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(237, 49, 54, 0.4);
    }

    /* Success / Flash Banner */
    .alert-custom-success {
      background: #ecfdf5;
      border: 1px solid #a7f3d0;
      color: #065f46;
      border-radius: 12px;
      padding: 16px 20px;
      margin-bottom: 25px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .alert-custom-error {
      background: #fef2f2;
      border: 1px solid #fecaca;
      color: #991b1b;
      border-radius: 12px;
      padding: 16px 20px;
      margin-bottom: 25px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    @media (max-width: 768px) {
      .enquiry-card {
        padding: 24px 18px;
      }

      .enquiry-hero h1 {
        font-size: 1.9rem;
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

  <!-- Hero Section -->
  <section class="enquiry-hero text-center">
    <div class="container">
      <span class="enquiry-badge">
        <i class="fas fa-hand-holding-heart"></i> Get Started
      </span>
      <h1>Fundraiser Enquiry</h1>
      <p>
        Have a medical emergency, educational need, or urgent social cause? Share your requirement below.
        Our team will review, approve, and guide you through creating your fundraiser.
      </p>

      <div class="trust-highlights">
        <div class="trust-item"><i class="fas fa-shield-alt"></i> 100% Free Consultation</div>
        <div class="trust-item"><i class="fas fa-check-circle"></i> Admin Verification & Approval</div>
        <div class="trust-item"><i class="fas fa-bolt"></i> Fast Response Within 24 Hours</div>
      </div>
    </div>
  </section>

  <!-- Form Container -->
  <main class="container form-wrapper">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-9">

        <!-- Flash Notifications -->
        <?php if ($this->session->flashdata('enquiry_success')): ?>
          <div class="alert-custom-success">
            <i class="fas fa-check-circle fs-4"></i>
            <div>
              <div class="fw-bold">Enquiry Submitted Successfully!</div>
              <div class="small fw-normal"><?= $this->session->flashdata('enquiry_success'); ?></div>
            </div>
          </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('enquiry_error')): ?>
          <div class="alert-custom-error">
            <i class="fas fa-exclamation-triangle fs-4"></i>
            <div>
              <div class="fw-bold">Submission Failed</div>
              <div class="small fw-normal"><?= $this->session->flashdata('enquiry_error'); ?></div>
            </div>
          </div>
        <?php endif; ?>

        <div class="enquiry-card">
          <form id="fundraiserEnquiryForm" method="post" action="<?= base_url('submit_fundraiser_enquiry') ?>"
            novalidate>

            <!-- SECTION 1: Cause & Beneficiary Information -->
            <div class="section-title">
              <span class="section-step">1</span>
              <span>Cause & Beneficiary Details</span>
            </div>

            <div class="row g-3 mb-4">
              <!-- Cause Category -->
              <div class="col-12 col-md-6">
                <label for="cause_category" class="form-label">Cause Category <span class="text-danger">*</span></label>
                <select class="form-select" name="cause_category" id="cause_category" required>
                  <option value="">-- Select Cause Category --</option>
                  <?php if (!empty($categories)): ?>
                    <?php foreach ($categories as $cat): ?>
                      <option value="<?= htmlspecialchars($cat['name']); ?>"><?= htmlspecialchars($cat['name']); ?></option>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  <option value="Medical">Medical Treatment / Surgery</option>
                  <option value="Education">Education & School/College Fees</option>
                  <option value="Crisis / Emergency">Crisis / Emergency Relief</option>
                  <option value="Agriculture">Agriculture & Farmer Support</option>
                  <option value="Elderly / Orphan Care">Elderly & Child Welfare</option>
                  <option value="Animal Welfare">Animal Welfare</option>
                  <option value="Other">Other Cause</option>
                </select>
                <div id="cause_category-error" class="error-msg">Please select a cause category.</div>
              </div>

              <!-- Beneficiary Relationship -->
              <div class="col-12 col-md-6">
                <label for="beneficiary_relation" class="form-label">Who is this Fundraiser For? <span
                    class="text-danger">*</span></label>
                <select class="form-select" name="beneficiary_relation" id="beneficiary_relation" required>
                  <option value="">-- Select Relationship --</option>
                  <option value="Myself">Myself</option>
                  <option value="Parent (Father/Mother)">Parent (Father / Mother)</option>
                  <option value="Child (Son/Daughter)">Child (Son / Daughter)</option>
                  <option value="Spouse">Spouse (Husband / Wife)</option>
                  <option value="Sibling (Brother/Sister)">Sibling (Brother / Sister)</option>
                  <option value="Relative / Friend">Relative / Friend</option>
                  <option value="Community / NGO">Community / Group / NGO</option>
                </select>
                <div id="beneficiary_relation-error" class="error-msg">Please specify who the fundraiser is for.</div>
              </div>

              <!-- Beneficiary Name -->
              <div class="col-12 col-md-4">
                <label for="beneficiary_name" class="form-label">Beneficiary Name <span
                    class="text-danger">*</span></label>
                <input type="text" class="form-control" name="beneficiary_name" id="beneficiary_name"
                  placeholder="Name of patient / person in need" required minlength="2">
                <div id="beneficiary_name-error" class="error-msg">Please enter the beneficiary name.</div>
              </div>

              <!-- Beneficiary Age -->
              <div class="col-12 col-md-4">
                <label for="beneficiary_age" class="form-label">Beneficiary Age</label>
                <input type="number" class="form-control" name="beneficiary_age" id="beneficiary_age"
                  placeholder="Age in years (e.g. 28)" min="0" max="120">
                <div id="beneficiary_age-error" class="error-msg">Please enter a valid age.</div>
              </div>

              <!-- Location / City -->
              <div class="col-12 col-md-4">
                <label for="location" class="form-label">Location (City, State) <span
                    class="text-danger">*</span></label>
                <input type="text" class="form-control" name="location" id="location"
                  placeholder="e.g. Chennai, Tamil Nadu" required>
                <div id="location-error" class="error-msg">Please provide the location/city.</div>
              </div>
            </div>


            <!-- SECTION 2: Cause Creator Details -->
            <div class="section-title">
              <span class="section-step">2</span>
              <span>Cause Creator Details</span>
            </div>

            <div class="row g-3 mb-4">
              <!-- Full Name -->
              <div class="col-12 col-md-4">
                <label for="fullname" class="form-label">Creator Full Name <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <input type="text" class="form-control" name="fullname" id="fullname"
                    placeholder="Enter your full name" required minlength="3" maxlength="100">
                </div>
                <div id="fullname-error" class="error-msg">Please enter your full name (minimum 3 characters).</div>
              </div>

              <!-- Email ID -->
              <div class="col-12 col-md-4">
                <label for="emailId" class="form-label">Creator Email Address <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  <input type="email" class="form-control" name="emailId" id="emailId" placeholder="name@example.com"
                    required>
                </div>
                <div id="emailId-error" class="error-msg">Please enter a valid email address.</div>
              </div>

              <!-- Phone Number -->
              <div class="col-12 col-md-4">
                <label for="Phonenumber" class="form-label">Creator Contact Number <span
                    class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text">+91</span>
                  <input type="tel" class="form-control" name="Phonenumber" id="Phonenumber"
                    placeholder="10-digit mobile number" maxlength="10"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);" required>
                </div>
                <div id="Phonenumber-error" class="error-msg">Please enter a valid 10-digit mobile number.</div>
              </div>
            </div>


            <!-- SECTION 3: Goal & Need Description -->
            <div class="section-title">
              <span class="section-step">3</span>
              <span>Requirement & Cause Story</span>
            </div>

            <div class="row g-3 mb-4">
              <!-- Estimated Target Amount -->
              <div class="col-12 col-md-6">
                <label for="target_amount" class="form-label">Estimated Amount Needed (&#8377;) <span
                    class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text">&#8377;</span>
                  <input type="number" class="form-control" name="target_amount" id="target_amount"
                    placeholder="e.g. 250000" min="1000" max="100000000" required>
                </div>
                <div id="target_amount-error" class="error-msg">Please enter an estimated amount (minimum &#8377;1,000).
                </div>
              </div>

              <!-- Urgency Level -->
              <div class="col-12 col-md-6">
                <label for="urgency_level" class="form-label">Urgency Level <span class="text-danger">*</span></label>
                <select class="form-select" name="urgency_level" id="urgency_level" required>
                  <option value="">-- How urgent is the requirement? --</option>
                  <option value="Immediate (Within 24-48 Hours)">Immediate (Within 24-48 Hours)</option>
                  <option value="Urgent (Within 1-2 Weeks)">Urgent (Within 1-2 Weeks)</option>
                  <option value="Within 1 Month">Within 1 Month</option>
                  <option value="Planning Ahead">Planning Ahead</option>
                </select>
                <div id="urgency_level-error" class="error-msg">Please specify the urgency.</div>
              </div>

              <!-- Cause Title -->
              <div class="col-12">
                <label for="cause_title" class="form-label">Cause Title / Short Headline <span
                    class="text-danger">*</span></label>
                <input type="text" class="form-control" name="cause_title" id="cause_title"
                  placeholder="e.g. Need urgent financial help for my father's heart surgery" required minlength="10"
                  maxlength="200">
                <div id="cause_title-error" class="error-msg">Please enter a short headline (minimum 10 characters).
                </div>
              </div>

              <!-- Cause Description -->
              <div class="col-12">
                <label for="cause_description" class="form-label">Detailed Story / Reason for Help <span
                    class="text-danger">*</span></label>
                <textarea class="form-control" name="cause_description" id="cause_description" rows="5"
                  placeholder="Explain the situation in detail: current medical condition or educational difficulty, hospital/college name, current financial standing, and why community help is requested..."
                  required minlength="30" maxlength="2000"></textarea>
                <div class="d-flex justify-content-between align-items-center">
                  <div id="cause_description-error" class="error-msg">Please explain the situation in at least 30
                    characters.</div>
                  <div id="charCounter" class="char-counter ms-auto">0 / 2000 characters</div>
                </div>
              </div>
            </div>

            <!-- Workflow Notice Banner -->
            <div class="flow-banner">
              <i class="fas fa-info-circle"></i>
              <div>
                <h6>What Happens Next?</h6>
                <p>
                  After submitting your enquiry, it will be reviewed and <strong>approved by our admin team</strong>.
                  Once approved, our team will coordinate with you to launch your public fundraiser campaign on Kanavu
                  Help.
                </p>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4">
              <button type="submit" id="submitBtn" class="btn btn-submit">
                <i class="fas fa-paper-plane me-2"></i> Submit Fundraiser Enquiry
              </button>
            </div>

          </form>
        </div>

      </div>
    </div>
  </main>

  <!-- Footer Section -->
  <footer style="background-color: #ed3136; color: #ffffff; padding: 40px 0 20px; margin-top: 40px;">
    <div class="container text-center">
      <p class="mb-2 fw-semibold">&copy; <?= date('Y'); ?> Kanavu Help (The Kanavu Trust). All rights reserved.</p>
      <div class="d-flex justify-content-center gap-3 mt-3">
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
      const descInput = document.getElementById('cause_description');
      const counter = document.getElementById('charCounter');

      // Live character counter for description
      if (descInput && counter) {
        descInput.addEventListener('input', function () {
          counter.textContent = `${this.value.length} / 2000 characters`;
        });
      }

      function showError(id, show) {
        const errEl = document.getElementById(id + '-error');
        const inputEl = document.getElementById(id);
        if (errEl) {
          if (show) {
            errEl.classList.add('visible');
            if (inputEl) inputEl.classList.add('is-invalid-input');
          } else {
            errEl.classList.remove('visible');
            if (inputEl) inputEl.classList.remove('is-invalid-input');
          }
        }
      }

      // Live input clearing of errors
      ['fullname', 'emailId', 'Phonenumber', 'cause_category', 'beneficiary_relation', 'beneficiary_name', 'location', 'target_amount', 'urgency_level', 'cause_title', 'cause_description'].forEach(fieldId => {
        const el = document.getElementById(fieldId);
        if (el) {
          el.addEventListener('input', () => showError(fieldId, false));
          el.addEventListener('change', () => showError(fieldId, false));
        }
      });

      form.addEventListener('submit', function (e) {
        let isValid = true;
        let firstInvalidField = null;

        // 1. Full Name
        const fullname = document.getElementById('fullname').value.trim();
        if (fullname.length < 3) {
          showError('fullname', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('fullname');
        }

        // 2. Email
        const email = document.getElementById('emailId').value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          showError('emailId', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('emailId');
        }

        // 3. Phone
        const phone = document.getElementById('Phonenumber').value.trim();
        if (phone.length !== 10 || !/^\d{10}$/.test(phone)) {
          showError('Phonenumber', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('Phonenumber');
        }

        // 4. Cause Category
        const cat = document.getElementById('cause_category').value.trim();
        if (!cat) {
          showError('cause_category', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('cause_category');
        }

        // 5. Beneficiary Relation
        const relation = document.getElementById('beneficiary_relation').value.trim();
        if (!relation) {
          showError('beneficiary_relation', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('beneficiary_relation');
        }

        // 6. Beneficiary Name
        const bName = document.getElementById('beneficiary_name').value.trim();
        if (bName.length < 2) {
          showError('beneficiary_name', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('beneficiary_name');
        }

        // 7. Location
        const loc = document.getElementById('location').value.trim();
        if (!loc) {
          showError('location', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('location');
        }

        // 8. Target Amount
        const amount = parseFloat(document.getElementById('target_amount').value);
        if (isNaN(amount) || amount < 1000) {
          showError('target_amount', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('target_amount');
        }

        // 9. Urgency
        const urgency = document.getElementById('urgency_level').value.trim();
        if (!urgency) {
          showError('urgency_level', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('urgency_level');
        }

        // 10. Cause Title
        const title = document.getElementById('cause_title').value.trim();
        if (title.length < 10) {
          showError('cause_title', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('cause_title');
        }

        // 11. Cause Description
        const desc = document.getElementById('cause_description').value.trim();
        if (desc.length < 30) {
          showError('cause_description', true);
          isValid = false;
          if (!firstInvalidField) firstInvalidField = document.getElementById('cause_description');
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
          btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Submitting Enquiry...';
        }
      });
    });
  </script>
</body>

</html>