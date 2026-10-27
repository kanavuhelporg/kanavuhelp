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
    * { box-sizing: border-box; }
    body {
      font-family: 'Sen', sans-serif;
      background: #f8fafc;
      color: #1e293b;
      margin: 0; padding: 0;
    }
    .navbar { background: #ffffff; box-shadow: 0 2px 10px rgba(0,0,0,0.05); z-index: 1030; }
    .navbar-brand img { height: 58px; width: auto; }
    .page-header {
      background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
      color: #ffffff;
      padding: 100px 16px 40px;
      text-align: center;
      position: relative;
    }
    .page-header h1 { font-size: 2rem; font-weight: 800; margin-bottom: 8px; }
    .page-header p { font-size: 1rem; color: #cbd5e1; max-width: 680px; margin: 0 auto; }
    .verified-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(22, 163, 74, 0.2);
      border: 1px solid #16a34a;
      color: #86efac;
      padding: 6px 16px;
      border-radius: 50px;
      font-size: 13px;
      font-weight: 700;
      margin-bottom: 14px;
    }
    .form-wrapper {
      max-width: 960px;
      margin: -25px auto 60px;
      padding: 0 16px;
      position: relative;
      z-index: 10;
    }
    .form-card {
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 12px 36px rgba(0,0,0,0.06);
      border: 1px solid #e2e8f0;
      overflow: hidden;
    }
    .section-card {
      padding: 32px 36px;
      border-bottom: 1px solid #f1f5f9;
    }
    .section-card:last-child { border-bottom: none; }
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
    .form-label {
      font-weight: 700;
      font-size: 13.5px;
      color: #334155;
      margin-bottom: 6px;
    }
    .form-label .required { color: #dc2626; margin-left: 2px; }
    .form-control, .form-select {
      border: 1.5px solid #cbd5e1;
      border-radius: 10px;
      padding: 10px 14px;
      font-size: 14px;
      font-family: inherit;
      transition: all 0.2s;
    }
    .form-control:focus, .form-select:focus {
      border-color: #ed3136;
      box-shadow: 0 0 0 3px rgba(237,49,54,0.15);
      outline: none;
    }
    .form-control[readonly] {
      background-color: #f8fafc;
      color: #475569;
      cursor: not-allowed;
    }
    .autofill-tag {
      display: inline-block;
      background: #eff6ff;
      color: #2563eb;
      font-size: 10.5px;
      font-weight: 700;
      padding: 2px 7px;
      border-radius: 4px;
      margin-left: 6px;
      vertical-align: middle;
      text-transform: uppercase;
      letter-spacing: 0.3px;
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
    .declaration-item:last-child { margin-bottom: 0; }
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
      box-shadow: 0 6px 20px rgba(237,49,54,0.3);
      cursor: pointer;
    }
    .btn-submit-cause:hover {
      background: #c82328;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(237,49,54,0.4);
    }
    .btn-submit-cause:disabled {
      background: #94a3b8;
      cursor: not-allowed;
      transform: none;
      box-shadow: none;
    }
    footer { background: #ed3136; color: #ffffff; padding: 28px 0; }
    @media (max-width: 768px) {
      .section-card { padding: 24px 18px; }
      .submit-bar { padding: 20px 18px; }
      .radio-card-grid { grid-template-columns: 1fr; }
      .page-header h1 { font-size: 1.6rem; }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg py-2 fixed-top">
    <div class="container-fluid px-lg-4">
      <a class="navbar-brand me-auto" href="<?= base_url('') ?>">
        <img src="<?= base_url('assets/img/KSV LOGO (14).png') ?>" alt="Kanavu Help Logo">
      </a>
      <div class="d-flex align-items-center gap-3 ms-auto">
        <a href="<?= base_url('') ?>" class="text-decoration-none fw-semibold" style="color:#1a202c;font-size:15px;">Home</a>
        <a href="<?= base_url('/contactus') ?>" class="text-decoration-none fw-semibold" style="color:#1a202c;font-size:15px;">Contact Support</a>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="verified-pill">
        <i class="fas fa-certificate"></i>
        <span>Admin Approved Enquiry • Ref #FE-<?= htmlspecialchars($enquiry->id) ?></span>
      </div>
      <h1>Cause Verification &amp; Creation Form</h1>
      <p>Please complete this official verification form to set up and launch your verified fundraiser campaign on Kanavu Help.</p>
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

      <form id="causeCreationForm" method="POST" action="<?= base_url('submit_approved_cause') ?>" enctype="multipart/form-data">
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
              <label class="form-label">Full Name <span class="required">*</span><span class="autofill-tag">Auto-filled</span></label>
              <input type="text" name="requester_name" class="form-control" value="<?= htmlspecialchars($enquiry->fullname) ?>" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Mobile / WhatsApp Number <span class="required">*</span><span class="autofill-tag">Auto-filled</span></label>
              <input type="tel" name="requester_phone" class="form-control" value="<?= htmlspecialchars($enquiry->phone) ?>" maxlength="15" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Email Address <span class="required">*</span><span class="autofill-tag">Auto-filled</span></label>
              <input type="email" name="requester_email" class="form-control" value="<?= htmlspecialchars($enquiry->email) ?>" readonly required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Location (Village / Town – District) <span class="required">*</span><span class="autofill-tag">Auto-filled</span></label>
              <input type="text" name="requester_location" class="form-control" value="<?= htmlspecialchars($enquiry->location) ?>" required>
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
                    <input type="radio" name="beneficiary_relation" value="<?= htmlspecialchars($r) ?>" <?= $checked ?> required>
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
              <label class="form-label">Beneficiary Name <span class="required">*</span><span class="autofill-tag">Auto-filled</span></label>
              <input type="text" name="beneficiary_name" class="form-control" value="<?= htmlspecialchars($enquiry->beneficiary_name ?? $enquiry->fullname) ?>" required>
            </div>

            <div class="col-md-3">
              <label class="form-label">Age <span class="required">*</span><span class="autofill-tag">Auto-filled</span></label>
              <input type="number" name="beneficiary_age" class="form-control" min="0" max="120" value="<?= htmlspecialchars($enquiry->beneficiary_age ?? '') ?>" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Occupation / Class <span class="required">*</span></label>
              <input type="text" name="beneficiary_occupation" class="form-control" placeholder="e.g. Student / Daily wage / None" required>
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
              <input type="number" name="family_members_count" class="form-control" min="1" max="50" placeholder="e.g. 4" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Number of Earning Members <span class="required">*</span></label>
              <input type="number" name="earning_members_count" class="form-control" min="0" max="20" placeholder="e.g. 1" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Approx Monthly Family Income (&#8377;) <span class="required">*</span></label>
              <input type="number" name="monthly_family_income" class="form-control" min="0" step="100" placeholder="e.g. 15000" required>
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
              <textarea name="financial_commitments" class="form-control" rows="2" placeholder="Example: Rent &#8377;3,000, medical expenses &#8377;2,500, education loans, etc."></textarea>
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
              <label class="form-label">Type of Cause <span class="required">*</span><span class="autofill-tag">Auto-filled</span></label>
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
              <label class="form-label">Cause Title / Campaign Heading <span class="required">*</span><span class="autofill-tag">Auto-filled</span></label>
              <input type="text" name="cause_heading" class="form-control" value="<?= htmlspecialchars($enquiry->cause_title ?? '') ?>" minlength="4" maxlength="150" required>
            </div>

            <div class="col-12">
              <label class="form-label">What Happened? (Situation Explanation) <span class="required">*</span><span class="autofill-tag">Auto-filled</span></label>
              <textarea name="cause_description" class="form-control" rows="4" placeholder="Briefly explain the situation, when it happened, and why help is needed." required><?= htmlspecialchars($enquiry->cause_description ?? '') ?></textarea>
            </div>

            <div class="col-12">
              <label class="form-label">What Support Is Required? (Exact Usage) <span class="required">*</span></label>
              <textarea name="support_required" class="form-control" rows="3" placeholder="Please mention exactly what the support will be used for (e.g., ICU charges, college tuition fee semester 1, surgery costs, food grains, wheelchair, etc.)." required></textarea>
            </div>

            <div class="col-md-4">
              <label class="form-label">Total Amount Required (&#8377;) <span class="required">*</span><span class="autofill-tag">Auto-filled</span></label>
              <input type="number" id="totalAmount" name="amount" class="form-control" min="500" step="100" value="<?= htmlspecialchars($enquiry->target_amount ?? '') ?>" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Amount Already Received (&#8377;)</label>
              <input type="number" id="amountReceived" name="amount_already_received" class="form-control" min="0" step="100" value="0">
            </div>

            <div class="col-md-4">
              <label class="form-label">Amount Still Required (&#8377;) <span class="required">*</span></label>
              <input type="number" id="amountStillRequired" name="amount_still_required" class="form-control" readonly required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Campaign End Date <span class="required">*</span></label>
              <input type="date" name="end_date" class="form-control" min="<?= date('Y-m-d', strtotime('+1 day')) ?>" value="<?= date('Y-m-d', strtotime('+30 days')) ?>" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Cause YouTube / Video Link <span class="required">*</span></label>
              <input type="url" name="cause_video_link" class="form-control" placeholder="https://www.youtube.com/watch?v=..." required>
              <small class="text-muted">Enter a valid YouTube video link telling your story or explaining the cause.</small>
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
              <input type="file" name="cover_image" class="form-control" accept="image/jpeg,image/png,image/jpg" required>
              <small class="text-muted">Formats: JPG, PNG. Displayed prominently on your fundraiser card.</small>
            </div>

            <div class="col-md-6">
              <label class="form-label">Supporting Document 1 (Primary Proof) <span class="required">*</span></label>
              <input type="file" name="document_one" class="form-control" accept="image/jpeg,image/png,image/jpg,application/pdf" required>
              <small class="text-muted">Hospital estimate, medical summary, school fee structure, or death certificate.</small>
            </div>

            <div class="col-md-6">
              <label class="form-label">Supporting Document 2 (Optional)</label>
              <input type="file" name="document_two" class="form-control" accept="image/jpeg,image/png,image/jpg,application/pdf">
            </div>

            <div class="col-md-6">
              <label class="form-label">Supporting Document 3 (Optional)</label>
              <input type="file" name="document_three" class="form-control" accept="image/jpeg,image/png,image/jpg,application/pdf">
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
              <input type="text" name="verifier_name" class="form-control" placeholder="Name of Doctor, Principal, Ward Member, NGO Official" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Relationship / Designation <span class="required">*</span></label>
              <input type="text" name="verifier_relation" class="form-control" placeholder="e.g. Treating Doctor / School Headmaster / Village Leader" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Verification Contact Number <span class="required">*</span></label>
              <input type="tel" name="verifier_phone" class="form-control" placeholder="10-digit phone number" maxlength="15" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Hospital / School / Organisation Name</label>
              <input type="text" name="verifier_organization" class="form-control" placeholder="If applicable (e.g. Government Hospital, Chennai)">
            </div>

            <div class="col-12">
              <label class="form-label">How Did You Come to Know About This Cause? <span class="required">*</span></label>
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
              <label for="decl1">I confirm that the information provided in this form is true and accurate to the best of my knowledge.</label>
            </div>

            <div class="declaration-item">
              <input type="checkbox" id="decl2" name="declaration_2" value="1" required>
              <label for="decl2">I understand that Kanavu.Help may contact the beneficiary, family members, hospitals, schools, organisations, or other references mentioned in this form to verify the cause.</label>
            </div>

            <div class="declaration-item">
              <input type="checkbox" id="decl3" name="declaration_3" value="1" required>
              <label for="decl3">I agree to provide additional information or documents if required for verification.</label>
            </div>

            <div class="declaration-item">
              <input type="checkbox" id="decl4" name="declaration_4" value="1" required>
              <label for="decl4">I understand that submitting this form does not guarantee financial or other support from Kanavu.Help.</label>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-md-4">
              <label class="form-label">Applicant Name <span class="required">*</span><span class="autofill-tag">Auto-filled</span></label>
              <input type="text" name="applicant_name" class="form-control" value="<?= htmlspecialchars($enquiry->fullname) ?>" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Date <span class="required">*</span><span class="autofill-tag">Today</span></label>
              <input type="date" name="declaration_date" class="form-control" value="<?= date('Y-m-d') ?>" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Digital Signature / Consent Confirmation <span class="required">*</span></label>
              <input type="text" name="applicant_signature" class="form-control" placeholder="Type your Full Name to sign" required>
            </div>
          </div>
        </div>

        <!-- ==============================================
             SUBMISSION ACTION BAR
             ============================================== -->
        <div class="submit-bar">
          <p class="text-muted mb-3" style="font-size: 13.5px;">
            <i class="fas fa-lock text-success me-1"></i>
            This is a secure, one-time link. Upon submission, this token will be finalized and your cause will be sent to the Kanavu Help verification desk.
          </p>
          <button type="submit" id="submitBtn" class="btn-submit-cause">
            <i class="fas fa-paper-plane me-2"></i>Submit Cause for Verification
          </button>
        </div>

      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container text-center">
      <p class="mb-0 fw-semibold">&copy; <?= date('Y'); ?> Kanavu Help (The Kanavu Trust). All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Radio Card visual toggle
    document.querySelectorAll('.radio-card input[type="radio"]').forEach(function(radio) {
      radio.addEventListener('change', function() {
        var groupName = this.getAttribute('name');
        document.querySelectorAll('.radio-card input[name="' + groupName + '"]').forEach(function(r) {
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

    // Form submit validation & button state
    document.getElementById('causeCreationForm').addEventListener('submit', function(e) {
      var btn = document.getElementById('submitBtn');
      btn.disabled = true;
      btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Submitting Cause...';
    });
  </script>
</body>
</html>
