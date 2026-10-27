<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Cause Submitted Successfully - Kanavu Help</title>

  <link href="<?= base_url('assets/img/kanavulogoo.jpg') ?>" rel="icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;600;700;800&amp;display=swap" rel="stylesheet">

  <style>
    * { box-sizing: border-box; }
    body {
      font-family: 'Sen', sans-serif;
      background: linear-gradient(135deg, #f0fdf4 0%, #f8faff 50%, #fff5f5 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      margin: 0; padding: 0;
    }
    .navbar { background: #ffffff; box-shadow: 0 2px 10px rgba(0,0,0,0.05); z-index: 1030; }
    .navbar-brand img { height: 60px; width: auto; }
    .success-section {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 100px 16px 60px;
    }
    .success-card {
      background: #ffffff;
      border-radius: 24px;
      box-shadow: 0 16px 48px rgba(0,0,0,0.08);
      border: 1px solid #bbf7d0;
      padding: 48px 40px;
      max-width: 640px;
      width: 100%;
      text-align: center;
      animation: fadeSlideUp 0.4s ease both;
    }
    @keyframes fadeSlideUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .icon-circle {
      width: 90px; height: 90px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 42px;
      margin: 0 auto 20px;
      background: #dcfce7;
      color: #16a34a;
    }
    .badge-pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 6px 16px;
      border-radius: 50px;
      font-size: 13px;
      font-weight: 700;
      background: #dcfce7;
      color: #16a34a;
      margin-bottom: 14px;
    }
    h1 { font-size: 1.9rem; font-weight: 800; color: #166534; margin-bottom: 10px; }
    .subtitle { font-size: 1.02rem; color: #64748b; margin-bottom: 24px; line-height: 1.6; }
    .info-box {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 14px;
      padding: 18px 20px;
      text-align: left;
      margin-bottom: 24px;
    }
    .info-row {
      display: flex;
      justify-content: space-between;
      padding: 6px 0;
      border-bottom: 1px solid #f1f5f9;
      font-size: 13.5px;
    }
    .info-row:last-child { border-bottom: none; }
    .info-label { font-weight: 700; color: #475569; }
    .info-val { font-weight: 600; color: #0f172a; }
    .steps-list {
      text-align: left;
      background: #f0fdf4;
      border: 1px dashed #86efac;
      border-radius: 12px;
      padding: 16px 20px;
      margin-bottom: 24px;
    }
    .steps-list h6 { font-size: 14px; font-weight: 800; color: #166534; margin-bottom: 10px; }
    .step-item { display: flex; align-items: flex-start; gap: 10px; font-size: 13px; color: #334155; margin-bottom: 8px; }
    .step-item:last-child { margin-bottom: 0; }
    .step-bullet {
      background: #16a34a;
      color: #fff;
      width: 18px; height: 18px; min-width: 18px;
      border-radius: 50%;
      font-size: 10.5px;
      display: inline-flex; align-items: center; justify-content: center;
      margin-top: 1px; font-weight: 700;
    }
    .btn-home {
      background: #ed3136;
      color: #fff;
      font-weight: 700;
      font-size: 15px;
      padding: 12px 32px;
      border-radius: 50px;
      border: none;
      text-decoration: none;
      display: inline-block;
      transition: all 0.3s;
      box-shadow: 0 4px 14px rgba(237,49,54,0.25);
    }
    .btn-home:hover { background: #c82328; color: #fff; transform: translateY(-2px); }
    footer { background: #ed3136; color: #fff; padding: 24px 0; margin-top: auto; }
    @media (max-width: 576px) {
      .success-card { padding: 32px 20px; }
      h1 { font-size: 1.5rem; }
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
        <a href="<?= base_url('/contactus') ?>" class="text-decoration-none fw-semibold" style="color:#1a202c;font-size:15px;">Contact Us</a>
      </div>
    </div>
  </nav>

  <div class="success-section">
    <div class="success-card">
      <div class="icon-circle"><i class="fas fa-check-circle"></i></div>
      <span class="badge-pill"><i class="fas fa-shield-check"></i> Form Submitted Successfully</span>
      <h1>Cause Submitted for Review!</h1>
      <p class="subtitle">Thank you for submitting your verified cause details. Your campaign information has been securely recorded.</p>

      <div class="info-box">
        <div class="info-row">
          <span class="info-label">Cause Title</span>
          <span class="info-val"><?= htmlspecialchars($cause->cause_heading ?? 'Fundraiser Campaign') ?></span>
        </div>
        <div class="info-row">
          <span class="info-label">Category</span>
          <span class="info-val"><?= htmlspecialchars($cause->category ?? 'General') ?></span>
        </div>
        <div class="info-row">
          <span class="info-label">Target Goal</span>
          <span class="info-val">&#8377;<?= number_format((float)($cause->amount ?? 0), 2) ?></span>
        </div>
        <div class="info-row">
          <span class="info-label">Verification Status</span>
          <span class="info-val text-warning"><i class="fas fa-clock me-1"></i>Under Verification</span>
        </div>
      </div>

      <div class="steps-list">
        <h6><i class="fas fa-list-check me-2"></i>What Happens Next?</h6>
        <div class="step-item">
          <span class="step-bullet">1</span>
          <span>Our verification team checks all submitted supporting documents and contact references within 24-48 hours.</span>
        </div>
        <div class="step-item">
          <span class="step-bullet">2</span>
          <span>Once verified by Admin, your fundraiser campaign is published live on the Kanavu Help website.</span>
        </div>
        <div class="step-item">
          <span class="step-bullet">3</span>
          <span>Donations can be accepted online with 0% platform fee, directly benefiting the beneficiary.</span>
        </div>
      </div>

      <div>
        <a href="<?= base_url('') ?>" class="btn-home"><i class="fas fa-home me-2"></i>Return to Home</a>
      </div>
    </div>
  </div>

  <footer>
    <div class="container text-center">
      <p class="mb-0 fw-semibold">&copy; <?= date('Y'); ?> Kanavu Help (The Kanavu Trust). All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
