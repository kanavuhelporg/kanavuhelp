<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Cause Verification &amp; Creation Form - Kanavu Help</title>

  <link href="<?= base_url('assets/img/kanavulogoo.jpg') ?>" rel="icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;600;700;800&amp;display=swap" rel="stylesheet">

  <style>
    :root {
      --primary-red: #ed3136;
      --primary-dark: #c82328;
      --bg-soft: #fff7f7;
      --text-dark: #2d3748;
      --text-muted: #718096;
      --border-color: #e2e8f0;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Sen', sans-serif;
      background: #f8fafc;
      color: #1e293b;
      margin: 0;
      padding: 0;
      padding-top: 76px;
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
      color: var(--primary-red) !important;
      font-weight: 700;
    }

    /* Page Hero (matches Kanavu Help site theme) */
    .page-hero {
      background: linear-gradient(180deg, #ffffff 0%, #fff5f5 100%);
      padding: 36px 16px 44px;
      text-align: center;
      position: relative;
      border-bottom: 1px solid #fee2e2;
    }

    .page-hero h1 {
      font-size: 2.1rem;
      font-weight: 800;
      color: #1a202c;
      margin-bottom: 8px;
    }

    .page-hero p {
      font-size: 1rem;
      color: #64748b;
      max-width: 680px;
      margin: 0 auto;
      line-height: 1.6;
    }

    .verified-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #dcfce7;
      color: #15803d;
      border: 1px solid #86efac;
      padding: 6px 18px;
      border-radius: 50px;
      font-size: 13px;
      font-weight: 700;
      margin-bottom: 12px;
      box-shadow: 0 2px 6px rgba(22, 163, 74, 0.1);
    }

    .form-wrapper {
      max-width: 960px;
      margin: -24px auto 60px;
      padding: 0 16px;
      position: relative;
      z-index: 10;
    }

    .form-card {
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 12px 36px rgba(0, 0, 0, 0.06);
      border: 1px solid #e2e8f0;
      overflow: hidden;
    }

    .section-card {
      padding: 32px 36px;
      border-bottom: 1px solid #f1f5f9;
    }

    .section-card:last-child {
      border-bottom: none;
    }

    .section-header {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 24px;
      padding-bottom: 14px;
      border-bottom: 2px solid #f8fafc;
    }

    .section-num {
      background: #ed3136;
      color: #ffffff;
      width: 38px;
      height: 38px;
      min-width: 38px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 17px;
    }

    .section-header h3 {
      font-size: 1.25rem;
      font-weight: 800;
      color: #0f172a;
      margin: 0;
    }

    .section-header .subtext {
      font-size: 12.5px;
      color: #64748b;
      margin: 0;
    }

    .declaration-row .form-label {
      min-height: 24px;
      display: flex;
      align-items: center;
      margin-bottom: 6px;
    }

    .form-label {
      font-weight: 700;
      font-size: 13.5px;
      color: #334155;
      margin-bottom: 6px;
    }

    .form-label .required {
      color: #dc2626;
      margin-left: 2px;
    }

    .form-control,
    .form-select {
      border: 1.5px solid #cbd5e1;
      border-radius: 10px;
      padding: 10px 14px;
      font-size: 14px;
      font-family: inherit;
      transition: all 0.2s;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #ed3136;
      box-shadow: 0 0 0 3px rgba(237, 49, 54, 0.15);
      outline: none;
    }

    .form-control[readonly] {
      background-color: #f8fafc;
      color: #475569;
      cursor: not-allowed;
    }



    .radio-card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 10px;
    }

    .radio-card {
      border: 1.5px solid #e2e8f0;
      border-radius: 10px;
      padding: 10px 14px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13.5px;
      font-weight: 600;
      color: #334155;
      transition: all 0.2s;
      background: #ffffff;
    }

    .radio-card:hover {
      border-color: #cbd5e1;
      background: #f8fafc;
    }

    .radio-card input[type="radio"] {
      accent-color: #ed3136;
      cursor: pointer;
    }

    .radio-card.selected {
      border-color: #ed3136;
      background: #fff5f5;
      color: #b91c1c;
    }

    .declaration-box {
      background: #f8fafc;
      border: 1.5px solid #e2e8f0;
      border-radius: 14px;
      padding: 20px 24px;
      margin-bottom: 24px;
    }

    .declaration-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      margin-bottom: 14px;
      font-size: 13.5px;
      color: #334155;
      line-height: 1.5;
    }

    .declaration-item:last-child {
      margin-bottom: 0;
    }

    .declaration-item input[type="checkbox"] {
      width: 19px;
      height: 19px;
      min-width: 19px;
      accent-color: #ed3136;
      margin-top: 2px;
      cursor: pointer;
    }

    .amount-display-box {
      background: #f0fdf4;
      border: 1.5px dashed #86efac;
      border-radius: 12px;
      padding: 14px 18px;
      margin-top: 10px;
    }

    .submit-bar {
      background: #f8fafc;
      padding: 28px 36px;
      text-align: center;
      border-top: 1px solid #e2e8f0;
    }

    .btn-submit-cause {
      background: #ed3136;
      color: #ffffff;
      font-size: 16px;
      font-weight: 800;
      padding: 14px 44px;
      border-radius: 50px;
      border: none;
      transition: all 0.3s;
      box-shadow: 0 6px 20px rgba(237, 49, 54, 0.3);
      cursor: pointer;
    }

    .btn-submit-cause:hover {
      background: #c82328;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(237, 49, 54, 0.4);
    }

    .btn-submit-cause:disabled {
      background: #94a3b8;
      cursor: not-allowed;
      transform: none;
      box-shadow: none;
    }

    footer {
      background: #ed3136;
      color: #ffffff;
      padding: 28px 0;
    }

    @media (max-width: 768px) {
      .section-card {
        padding: 24px 18px;
      }

      .submit-bar {
        padding: 20px 18px;
      }

      .radio-card-grid {
        grid-template-columns: 1fr;
      }

      .page-header h1 {
        font-size: 1.6rem;
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
            <li class="nav-item">
              <a class="nav-link active fw-bold text-danger d-flex align-items-center"
                href="<?= base_url('create-cause/' . htmlspecialchars($token)) ?>">
                <span>Create Cause</span>
                <span class="badge rounded-pill bg-success ms-1"
                  style="font-size: 10px; padding: 2px 6px;">Approved</span>
              </a>
            </li>
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
            <!-- <?php if ($this->session->userdata('Kanavu_userId')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/login') ?>">View Dashboard</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/login') ?>">Sign In</a>
            </li>
            <?php endif; ?> -->
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

  <!-- Page Hero Section -->
  <div class="page-hero">
    <div class="container">
      <div class="verified-pill">
        <i class="fas fa-certificate"></i>
        <?php if (!empty($enquiry->id)): ?>
          <span><i class="fas fa-check-circle me-1"></i> Admin Approved Enquiry &bull; Ref #FE-<?= htmlspecialchars($enquiry->id) ?></span>
        <?php else: ?>
          <span><i class="fas fa-shield-alt me-1"></i> Verified Cause Creation</span>
        <?php endif; ?>
      </div>
      <h1>Cause Verification &amp; Creation Form</h1>
      <p>Please complete this official verification form to set up and launch your verified fundraiser campaign on
        Kanavu Help.</p>
    </div>
  </div>

  <!-- Form Wrapper -->
  <div class="form-wrapper">
    <div class="form-card">

      <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger m-3 mb-0 rounded-3">
          <i class="fas fa-triangle-exclamation me-2"></i><?= htmlspecialchars($this->session->flashdata('error')) ?>
        </div>
      <?php endif; ?>

      <form id="causeCreationForm" method="POST" action="<?= base_url('submit_approved_cause') ?>"
        enctype="multipart/form-data">
        <input type="hidden" name="approval_token" value="<?= htmlspecialchars($token) ?>">
        <input type="hidden" name="enquiry_id" value="<?= htmlspecialchars($enquiry->id) ?>">

        <!-- ==============================================
             SECTION 1: REQUESTER DETAILS
             ============================================== -->
        <div class="section-card">
          <div class="section-header">
            <div class="section-num">1</div>
            <div>
              <h3>Requester Details</h3>
              <p class="subtext">Details of the person requesting support (Applicant)</p>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label" for="requester_name">Full Name <span class="required">*</span></label>
              <input type="text" id="requester_name" name="requester_name" class="form-control"
                value="<?= htmlspecialchars($enquiry->fullname) ?>" required>
              <div class="invalid-feedback-custom" id="requester_name-error">Please enter a valid full name (letters
                only, no pure numbers or special characters).</div>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="requester_phone">Mobile / WhatsApp Number <span
                  class="required">*</span></label>
              <input type="tel" id="requester_phone" name="requester_phone" class="form-control"
                value="<?= htmlspecialchars($enquiry->phone) ?>" maxlength="10"
                oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10);" required>
              <div class="invalid-feedback-custom" id="requester_phone-error">Please enter a valid 10-digit mobile
                number starting with 6, 7, 8, or 9.</div>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="requester_email">Email Address <span class="required">*</span></label>
              <input type="email" id="requester_email" name="requester_email" class="form-control"
                value="<?= htmlspecialchars($enquiry->email) ?>" required>
              <div class="invalid-feedback-custom" id="requester_email-error">Please enter a valid email address.</div>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="requester_location">Location (Village / Town / District) <span
                  class="required">*</span></label>
              <input type="text" id="requester_location" name="requester_location" class="form-control"
                value="<?= htmlspecialchars($enquiry->location) ?>" required>
              <div class="invalid-feedback-custom" id="requester_location-error">Please enter a valid location (letters
                required, cannot be pure numbers or special characters).</div>
            </div>

            <div class="col-12">
              <label class="form-label">Your Relationship with the Beneficiary <span class="required">*</span></label>
              <div class="radio-card-grid">
                <?php
                $relations = ['Self', 'Parent / Family Member', 'Relative', 'Friend', 'Teacher / School', 'NGO / Organisation', 'Other'];
                $saved_rel = $enquiry->beneficiary_relation ?? '';
                foreach ($relations as $r):
                  $checked = (strcasecmp($saved_rel, $r) === 0 || ($saved_rel === 'Self' && $r === 'Self')) ? 'checked' : '';
                  ?>
                  <label class="radio-card <?= $checked ? 'selected' : '' ?>">
                    <input type="radio" name="beneficiary_relation" value="<?= htmlspecialchars($r) ?>" <?= $checked ?>
                      required>
                    <span><?= htmlspecialchars($r) ?></span>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

        <!-- ==============================================
             SECTION 2: BENEFICIARY DETAILS
             ============================================== -->
        <div class="section-card">
          <div class="section-header">
            <div class="section-num">2</div>
            <div>
              <h3>Beneficiary Details</h3>
              <p class="subtext">Details of the person who will directly receive the support</p>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-md-5">
              <label class="form-label" for="beneficiary_name">Beneficiary Name <span class="required">*</span></label>
              <input type="text" id="beneficiary_name" name="beneficiary_name" class="form-control"
                value="<?= htmlspecialchars($enquiry->beneficiary_name ?? $enquiry->fullname) ?>" required>
              <div class="invalid-feedback-custom" id="beneficiary_name-error">Please enter a valid beneficiary name
                (letters only, no pure numbers or special characters).</div>
            </div>

            <div class="col-md-3">
              <label class="form-label">Age <span class="required">*</span></label>
              <input type="number" name="beneficiary_age" class="form-control" min="0" max="120"
                value="<?= htmlspecialchars($enquiry->beneficiary_age ?? '') ?>" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Occupation / Class <span class="required">*</span></label>
              <input type="text" name="beneficiary_occupation" class="form-control"
                placeholder="e.g. Student / Daily wage / None" required>
            </div>
          </div>
        </div>

        <!-- ==============================================
             SECTION 3: FAMILY & FINANCIAL DETAILS
             ============================================== -->
        <div class="section-card">
          <div class="section-header">
            <div class="section-num">3</div>
            <div>
              <h3>Family &amp; Financial Details</h3>
              <p class="subtext">Helps verify genuine financial need and eligibility</p>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-md-4">
              <label class="form-label">Total Number of Family Members <span class="required">*</span></label>
              <input type="number" name="family_members_count" class="form-control" min="1" max="50"
                placeholder="e.g. 4" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Number of Earning Members <span class="required">*</span></label>
              <input type="number" name="earning_members_count" class="form-control" min="0" max="20"
                placeholder="e.g. 1" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Approx Monthly Family Income (&#8377;) <span class="required">*</span></label>
              <input type="number" name="monthly_family_income" class="form-control" min="0" step="100"
                placeholder="e.g. 15000" required>
            </div>

            <div class="col-12">
              <label class="form-label">Main Source of Family Income <span class="required">*</span></label>
              <div class="radio-card-grid">
                <?php
                $income_sources = ['Daily Wage', 'Farming', 'Private Job', 'Government Job', 'Small Business', 'Self-Employment', 'Pension', 'No Regular Income', 'Other'];
                foreach ($income_sources as $src):
                  ?>
                  <label class="radio-card">
                    <input type="radio" name="income_source" value="<?= htmlspecialchars($src) ?>" required>
                    <span><?= htmlspecialchars($src) ?></span>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="col-12">
              <label class="form-label">Major Monthly Financial Commitments</label>
              <textarea name="financial_commitments" class="form-control" rows="2"
                placeholder="Example: Rent &#8377;3,000, medical expenses &#8377;2,500, education loans, etc."></textarea>
            </div>
          </div>
        </div>

        <!-- ==============================================
             SECTION 4: CAUSE DETAILS
             ============================================== -->
        <div class="section-card">
          <div class="section-header">
            <div class="section-num">4</div>
            <div>
              <h3>Cause Details</h3>
              <p class="subtext">Specifics of the situation and the funding support required</p>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-12">
              <label class="form-label">Type of Cause <span class="required">*</span></label>
              <div class="radio-card-grid">
                <?php
                $cause_types = ['Medical', 'Education', 'Accident / Emergency', 'Food / Basic Needs', 'Disability Support', 'Family Support', 'Disaster / Relief', 'Other'];
                $saved_type = $enquiry->cause_category ?? '';
                foreach ($cause_types as $ct):
                  $is_ct_checked = (stripos($saved_type, explode('/', $ct)[0]) !== false || strcasecmp($saved_type, $ct) === 0);
                  ?>
                  <label class="radio-card <?= $is_ct_checked ? 'selected' : '' ?>">
                    <input type="radio" name="cause_category" value="<?= htmlspecialchars($ct) ?>" <?= $is_ct_checked ? 'checked' : '' ?> required>
                    <span><?= htmlspecialchars($ct) ?></span>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="col-12">
              <label class="form-label">Cause Title / Campaign Heading <span class="required">*</span></label>
              <input type="text" name="cause_heading" class="form-control"
                value="<?= htmlspecialchars($enquiry->cause_title ?? '') ?>" minlength="4" maxlength="150" required>
            </div>

            <div class="col-12">
              <label class="form-label">What Happened? (Situation Explanation) <span class="required">*</span></label>
              <textarea name="cause_description" class="form-control" rows="4"
                placeholder="Briefly explain the situation, when it happened, and why help is needed."
                required><?= htmlspecialchars($enquiry->cause_description ?? '') ?></textarea>
            </div>

            <div class="col-12">
              <label class="form-label">What Support Is Required? (Exact Usage) <span class="required">*</span></label>
              <textarea name="support_required" class="form-control" rows="3"
                placeholder="Please mention exactly what the support will be used for (e.g., ICU charges, college tuition fee semester 1, surgery costs, food grains, wheelchair, etc.)."
                required></textarea>
            </div>

            <div class="col-md-4">
              <label class="form-label" for="totalAmount">Total Amount Required (&#8377;) <span class="required">*</span></label>
              <input type="number" id="totalAmount" name="amount" class="form-control" min="1000" max="1000000" step="100"
                value="<?= htmlspecialchars($enquiry->target_amount ?? '') ?>" required>
              <div class="invalid-feedback-custom" id="totalAmount-error">Total amount must be between &#8377;1,000 and &#8377;10,00,000 (10 Lakhs).</div>
              <small class="text-muted">Min: &#8377;1,000 | Max: &#8377;10,00,000 (10 Lakhs)</small>
            </div>

            <div class="col-md-4">
              <label class="form-label">Amount Already Received (&#8377;)</label>
              <input type="number" id="amountReceived" name="amount_already_received" class="form-control" min="0"
                step="100" value="0">
            </div>

            <div class="col-md-4">
              <label class="form-label">Amount Still Required (&#8377;) <span class="required">*</span></label>
              <input type="number" id="amountStillRequired" name="amount_still_required" class="form-control" readonly
                required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Campaign End Date <span class="required">*</span></label>
              <input type="date" name="end_date" class="form-control" min="<?= date('Y-m-d', strtotime('+1 day')) ?>"
                value="<?= date('Y-m-d', strtotime('+30 days')) ?>" required>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="cause_video_link">Cause YouTube Link <span class="required">*</span></label>
              <input type="url" id="cause_video_link" name="cause_video_link" class="form-control"
                placeholder="https://www.youtube.com/watch?v=..." required>
              <div class="invalid-feedback-custom" id="cause_video_link-error">Please enter a valid YouTube video link (e.g. https://www.youtube.com/watch?v=... or https://youtu.be/...).</div>
              <small class="text-muted">Enter a valid YouTube video link telling your story or explaining the
                cause.</small>
            </div>
          </div>
        </div>

        <!-- ==============================================
             SECTION 5: SUPPORTING DOCUMENTS
             ============================================== -->
        <div class="section-card">
          <div class="section-header">
            <div class="section-num">5</div>
            <div>
              <h3>Supporting Documents</h3>
              <p class="subtext">Upload proof such as medical records, bills, fee slips, income certificates, etc.</p>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Cover Image (Featured Campaign Photo) <span class="required">*</span></label>
              <input type="file" name="cover_image" class="form-control" accept="image/jpeg,image/png,image/jpg"
                required>
              <small class="text-muted">Formats: JPG, PNG. Displayed prominently on your fundraiser card.</small>
            </div>

            <div class="col-md-6">
              <label class="form-label">Supporting Document 1 (Primary Proof) <span class="required">*</span></label>
              <input type="file" name="document_one" class="form-control"
                accept="image/jpeg,image/png,image/jpg,application/pdf" required>
              <small class="text-muted">Hospital estimate, medical summary, school fee structure, or any
                documents.</small>
            </div>

            <div class="col-md-6">
              <label class="form-label">Supporting Document 2 (Optional)</label>
              <input type="file" name="document_two" class="form-control"
                accept="image/jpeg,image/png,image/jpg,application/pdf">
            </div>

            <div class="col-md-6">
              <label class="form-label">Supporting Document 3 (Optional)</label>
              <input type="file" name="document_three" class="form-control"
                accept="image/jpeg,image/png,image/jpg,application/pdf">
            </div>
          </div>
        </div>

        <!-- ==============================================
             SECTION 6: VERIFICATION DETAILS
             ============================================== -->
        <div class="section-card">
          <div class="section-header">
            <div class="section-num">6</div>
            <div>
              <h3>Verification Details</h3>
              <p class="subtext">Third-party reference that can independently confirm this situation</p>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Who Can Confirm This Cause? <span class="required">*</span></label>
              <input type="text" name="verifier_name" class="form-control"
                placeholder="Name of Doctor, Principal, Ward Member, NGO Official" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Relationship / Designation <span class="required">*</span></label>
              <input type="text" name="verifier_relation" class="form-control"
                placeholder="e.g. Treating Doctor / School Headmaster / Village Leader" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Verification Contact Number <span class="required">*</span></label>
              <input type="tel" name="verifier_phone" class="form-control" placeholder="10-digit phone number"
                maxlength="15" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Hospital / School / Organisation Name</label>
              <input type="text" name="verifier_organization" class="form-control"
                placeholder="If applicable (e.g. Government Hospital, Chennai)">
            </div>

            <div class="col-12">
              <label class="form-label">How Did You Come to Know About This Cause? <span
                  class="required">*</span></label>
              <div class="radio-card-grid">
                <?php
                $sources = ['Directly from the beneficiary', 'Family / Relative', 'Friend', 'School / Teacher', 'NGO / Organisation', 'Social Media', 'Other'];
                foreach ($sources as $s):
                  ?>
                  <label class="radio-card">
                    <input type="radio" name="source_of_cause" value="<?= htmlspecialchars($s) ?>" required>
                    <span><?= htmlspecialchars($s) ?></span>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

        <!-- ==============================================
             SECTION 7: DECLARATION & CONSENT
             ============================================== -->
        <div class="section-card">
          <div class="section-header">
            <div class="section-num">7</div>
            <div>
              <h3>Declaration &amp; Consent</h3>
              <p class="subtext">Please read and tick each statement to confirm agreement</p>
            </div>
          </div>

          <div class="declaration-box">
            <div class="declaration-item">
              <input type="checkbox" id="decl1" name="declaration_1" value="1" required>
              <label for="decl1">I confirm that the information provided in this form is true and accurate to the best
                of my knowledge.</label>
            </div>

            <div class="declaration-item">
              <input type="checkbox" id="decl2" name="declaration_2" value="1" required>
              <label for="decl2">I understand that Kanavu.Help may contact the beneficiary, family members, hospitals,
                schools, organisations, or other references mentioned in this form to verify the cause.</label>
            </div>

            <div class="declaration-item">
              <input type="checkbox" id="decl3" name="declaration_3" value="1" required>
              <label for="decl3">I agree to provide additional information or documents if required for
                verification.</label>
            </div>

            <div class="declaration-item">
              <input type="checkbox" id="decl4" name="declaration_4" value="1" required>
              <label for="decl4">I understand that submitting this form does not guarantee financial or other support
                from Kanavu.Help.</label>
            </div>
          </div>

          <div class="row g-3 declaration-row">
            <div class="col-md-4">
              <label class="form-label" for="applicant_name">Applicant Name <span class="required">*</span></label>
              <input type="text" id="applicant_name" name="applicant_name" class="form-control"
                value="<?= htmlspecialchars($enquiry->fullname) ?>" required>
              <div class="invalid-feedback-custom" id="applicant_name-error">Please enter a valid name (letters only).
              </div>
            </div>

            <div class="col-md-4">
              <label class="form-label" for="declaration_date">Date <span class="required">*</span></label>
              <input type="date" id="declaration_date" name="declaration_date" class="form-control"
                value="<?= date('Y-m-d') ?>" required>
            </div>

            <div class="col-md-4">
              <label class="form-label" for="applicant_signature">Digital Signature / Consent <span
                  class="required">*</span></label>
              <input type="text" id="applicant_signature" name="applicant_signature" class="form-control"
                placeholder="Type your Full Name to sign" required>
              <div class="invalid-feedback-custom" id="applicant_signature-error">Please type your name to sign (letters
                only).</div>
            </div>
          </div>
        </div>

        <!-- ==============================================
             SUBMISSION ACTION BAR
             ============================================== -->
        <div class="submit-bar">
          <p class="text-muted mb-3" style="font-size: 13.5px;">
            <i class="fas fa-shield-alt text-success me-1"></i>
            This is your verified cause creation link. Upon submission, your cause will be sent to the Kanavu Help
            verification desk.
          </p>
          <button type="submit" id="submitBtn" class="btn-submit-cause">
            <i class="fas fa-paper-plane me-2"></i>Submit Cause for Verification
          </button>
        </div>

      </form>
    </div>
  </div>

  <!-- Site Official Footer -->
  <footer class="footer text-white py-4 mt-5" style="background-color: #ed3136;">
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
  <script>
    // Radio Card visual toggle
    document.querySelectorAll('.radio-card input[type="radio"]').forEach(function (radio) {
      radio.addEventListener('change', function () {
        var groupName = this.getAttribute('name');
        document.querySelectorAll('.radio-card input[name="' + groupName + '"]').forEach(function (r) {
          r.closest('.radio-card').classList.remove('selected');
        });
        if (this.checked) {
          this.closest('.radio-card').classList.add('selected');
        }
      });
    });

    // Dynamic calculation: Amount Still Required
    function calculateAmountStillRequired() {
      var total = parseFloat(document.getElementById('totalAmount').value) || 0;
      var received = parseFloat(document.getElementById('amountReceived').value) || 0;
      var still = Math.max(0, total - received);
      document.getElementById('amountStillRequired').value = still;
    }

    document.getElementById('totalAmount').addEventListener('input', calculateAmountStillRequired);
    document.getElementById('amountReceived').addEventListener('input', calculateAmountStillRequired);
    calculateAmountStillRequired();

    // Validation helpers (English & Tamil text supported)
    function isValidName(val) {
      val = (val || '').trim();
      if (val.length < 2) return false;
      // Allow English letters (a-z, A-Z) and Tamil characters (\u0B80-\u0BFF), spaces, dots, hyphens
      if (!/^[a-zA-Z\u0B80-\u0BFF\s.'-]+$/.test(val)) return false;
      var letters = val.match(/[a-zA-Z\u0B80-\u0BFF]/g);
      return letters && letters.length >= 2;
    }

    function isValidLocation(val) {
      val = (val || '').trim();
      if (!val) return true;
      if (/^\d+$/.test(val)) return false;
      if (!/^[a-zA-Z0-9\u0B80-\u0BFF\s,./'-]+$/.test(val)) return false;
      var letters = val.match(/[a-zA-Z\u0B80-\u0BFF]/g);
      return letters && letters.length >= 2;
    }

    function isValidEmail(val) {
      val = (val || '').trim();
      if (!val) return false;
      return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(val);
    }

    function isValidPhone(val) {
      val = (val || '').trim().replace(/\D/g, '');
      if (!/^[6-9]\d{9}$/.test(val)) return false;
      if (/^(\d)\1{9}$/.test(val)) return false;
      return true;
    }

    function isYouTubeUrl(url) {
      url = (url || '').trim();
      if (!url) return false;
      var ytRegex = /^(https?:\/\/)?((www|m)\.)?(youtube\.com\/(watch\?.*v=|shorts\/|embed\/)|youtu\.be\/)[a-zA-Z0-9_-]{11}(.*)?$/i;
      return ytRegex.test(url);
    }

    function setFieldError(fieldId, isError) {
      var el = document.getElementById(fieldId);
      var err = document.getElementById(fieldId + '-error');
      if (el) {
        if (isError) el.classList.add('is-invalid');
        else el.classList.remove('is-invalid');
      }
      if (err) {
        if (isError) err.classList.add('visible');
        else err.classList.remove('visible');
      }
    }

    // Real-time error clear
    ['requester_name', 'requester_phone', 'requester_email', 'requester_location', 'beneficiary_name', 'totalAmount', 'cause_video_link', 'applicant_name', 'applicant_signature'].forEach(function (id) {
      var el = document.getElementById(id);
      if (el) {
        el.addEventListener('input', function () {
          setFieldError(id, false);
        });
      }
    });

    // Form submit validation & button state
    document.getElementById('causeCreationForm').addEventListener('submit', function (e) {
      var isValid = true;
      var firstInvalidField = null;

      // 1. Requester Name
      var rName = (document.getElementById('requester_name') ? document.getElementById('requester_name').value : '');
      if (!isValidName(rName)) {
        setFieldError('requester_name', true);
        isValid = false;
        if (!firstInvalidField) firstInvalidField = document.getElementById('requester_name');
      } else {
        setFieldError('requester_name', false);
      }

      // 2. Requester Phone
      var rPhone = (document.getElementById('requester_phone') ? document.getElementById('requester_phone').value : '');
      if (!isValidPhone(rPhone)) {
        setFieldError('requester_phone', true);
        isValid = false;
        if (!firstInvalidField) firstInvalidField = document.getElementById('requester_phone');
      } else {
        setFieldError('requester_phone', false);
      }

      // 3. Requester Email
      var rEmail = (document.getElementById('requester_email') ? document.getElementById('requester_email').value : '');
      if (!isValidEmail(rEmail)) {
        setFieldError('requester_email', true);
        isValid = false;
        if (!firstInvalidField) firstInvalidField = document.getElementById('requester_email');
      } else {
        setFieldError('requester_email', false);
      }

      // 4. Requester Location
      var rLoc = (document.getElementById('requester_location') ? document.getElementById('requester_location').value : '');
      if (!isValidLocation(rLoc)) {
        setFieldError('requester_location', true);
        isValid = false;
        if (!firstInvalidField) firstInvalidField = document.getElementById('requester_location');
      } else {
        setFieldError('requester_location', false);
      }

      // 5. Beneficiary Name
      var bName = (document.getElementById('beneficiary_name') ? document.getElementById('beneficiary_name').value : '');
      if (!isValidName(bName)) {
        setFieldError('beneficiary_name', true);
        isValid = false;
        if (!firstInvalidField) firstInvalidField = document.getElementById('beneficiary_name');
      } else {
        setFieldError('beneficiary_name', false);
      }

      // Total Amount (Min 1,000, Max 10,00,000)
      var totalAmt = parseFloat(document.getElementById('totalAmount').value) || 0;
      if (totalAmt < 1000 || totalAmt > 1000000) {
        setFieldError('totalAmount', true);
        isValid = false;
        if (!firstInvalidField) firstInvalidField = document.getElementById('totalAmount');
      } else {
        setFieldError('totalAmount', false);
      }

      // 6. Cause YouTube Link (YouTube URLs only)
      var ytLink = (document.getElementById('cause_video_link') ? document.getElementById('cause_video_link').value : '');
      if (!isYouTubeUrl(ytLink)) {
        setFieldError('cause_video_link', true);
        isValid = false;
        if (!firstInvalidField) firstInvalidField = document.getElementById('cause_video_link');
      } else {
        setFieldError('cause_video_link', false);
      }

      // 6. Applicant Name
      var aName = (document.getElementById('applicant_name') ? document.getElementById('applicant_name').value : '');
      if (!isValidName(aName)) {
        setFieldError('applicant_name', true);
        isValid = false;
        if (!firstInvalidField) firstInvalidField = document.getElementById('applicant_name');
      } else {
        setFieldError('applicant_name', false);
      }

      // 7. Applicant Signature
      var aSig = (document.getElementById('applicant_signature') ? document.getElementById('applicant_signature').value : '');
      if (!isValidName(aSig)) {
        setFieldError('applicant_signature', true);
        isValid = false;
        if (!firstInvalidField) firstInvalidField = document.getElementById('applicant_signature');
      } else {
        setFieldError('applicant_signature', false);
      }

      if (!isValid) {
        e.preventDefault();
        if (firstInvalidField) {
          firstInvalidField.scrollIntoView({ behavior: 'smooth', block: 'center' });
          firstInvalidField.focus();
        }
        return false;
      }

      var btn = document.getElementById('submitBtn');
      btn.disabled = true;
      btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Submitting Cause...';
    });
  </script>
</body>

</html>