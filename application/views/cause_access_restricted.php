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
    * { box-sizing: border-box; }
    body {
      font-family: 'Sen', sans-serif;
      background: linear-gradient(135deg, #fff5f5 0%, #f8faff 50%, #f0fff4 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      margin: 0; padding: 0;
    }
    .navbar { background: #ffffff; box-shadow: 0 2px 10px rgba(0,0,0,0.05); z-index: 1030; }
    .navbar-brand img { height: 60px; width: auto; }
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
      box-shadow: 0 18px 50px rgba(0,0,0,0.08);
      border: 1px solid #fee2e2;
      padding: 48px 40px;
      max-width: 620px;
      width: 100%;
      text-align: center;
      animation: fadeSlideUp 0.4s ease both;
    }
    @keyframes fadeSlideUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
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
    .status-icon.invalid { background: #fee2e2; color: #dc2626; }
    .status-icon.used    { background: #e0f2fe; color: #0284c7; }
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
    .badge-invalid { background: #fee2e2; color: #dc2626; }
    .badge-used    { background: #e0f2fe; color: #0284c7; }
    h1 { font-size: 1.85rem; font-weight: 800; color: #1e293b; margin-bottom: 12px; }
    .desc { font-size: 1.02rem; color: #64748b; line-height: 1.6; margin-bottom: 28px; }
    .steps-box {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 14px;
      padding: 20px 22px;
      text-align: left;
      margin-bottom: 28px;
    }
    .steps-box h6 { font-size: 14px; font-weight: 800; color: #0f172a; margin-bottom: 14px; text-transform: uppercase; letter-spacing: 0.5px; }
    .step-line { display: flex; align-items: flex-start; gap: 12px; font-size: 13.5px; color: #475569; margin-bottom: 10px; }
    .step-line:last-child { margin-bottom: 0; }
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
      box-shadow: 0 4px 14px rgba(237,49,54,0.3);
    }
    .btn-enquiry:hover { background: #c82328; color: #ffffff; transform: translateY(-2px); }
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
    .btn-home:hover { background: #f1f5f9; color: #0f172a; }
    footer { background: #ed3136; color: #ffffff; padding: 24px 0; margin-top: auto; }
    @media (max-width: 576px) {
      .restricted-card { padding: 32px 20px; }
      h1 { font-size: 1.5rem; }
      .btn-home { margin-left: 0; margin-top: 10px; }
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
        <a href="<?= base_url('/fundraiser-enquiry') ?>" class="text-decoration-none fw-semibold text-danger" style="font-size:15px;">Fundraiser Enquiry</a>
        <a href="<?= base_url('/contactus') ?>" class="text-decoration-none fw-semibold" style="color:#1a202c;font-size:15px;">Contact Us</a>
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
          Our verification team is reviewing your details. Once verified, your fundraiser will be made live on the platform. If you have questions, please contact our support team.
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
          <a href="<?= base_url('/fundraiser-enquiry') ?>" class="btn-enquiry"><i class="fas fa-file-pen me-2"></i>Submit Fundraiser Enquiry</a>
          <a href="<?= base_url('') ?>" class="btn-home"><i class="fas fa-arrow-left me-1"></i>Back to Home</a>
        </div>
      <?php endif; ?>

    </div>
  </div>

  <footer>
    <div class="container text-center">
      <p class="mb-0 fw-semibold">&copy; <?= date('Y'); ?> Kanavu Help (The Kanavu Trust). All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
