<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Fundraiser Approval Confirmed - Kanavu Help</title>

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
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;600;700;800&amp;display=swap" rel="stylesheet">

  <style>
    * { box-sizing: border-box; }
    body {
      font-family: 'Sen', sans-serif;
      background: linear-gradient(135deg, #f8faff 0%, #f0fff4 50%, #fff8f8 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      margin: 0; padding: 0;
    }
    .navbar { background: #ffffff; box-shadow: 0 2px 10px rgba(0,0,0,0.05); z-index: 1030; }
    .navbar-brand img { height: 60px; width: auto; }
    .confirm-section {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 90px 16px 60px;
    }
    .confirm-card {
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 16px 48px rgba(0,0,0,0.08);
      border: 1px solid #e2e8f0;
      padding: 50px 44px;
      max-width: 640px;
      width: 100%;
      text-align: center;
      animation: fadeSlideUp 0.5s ease both;
    }
    @keyframes fadeSlideUp {
      from { opacity: 0; transform: translateY(24px); }
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
    }
    .icon-circle.success { background: #dcfce7; color: #16a34a; }
    .icon-circle.used    { background: #e0f2fe; color: #0284c7; }
    .icon-circle.invalid { background: #fee2e2; color: #ed3136; }
    .confirm-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 6px 18px;
      border-radius: 50px;
      font-size: 13.5px;
      font-weight: 700;
      margin-bottom: 16px;
      letter-spacing: 0.4px;
    }
    .success-badge { background: #dcfce7; color: #16a34a; }
    .used-badge    { background: #e0f2fe; color: #0284c7; }
    .invalid-badge { background: #fee2e2; color: #ed3136; }
    .confirm-card h1 { font-size: 2rem; font-weight: 800; margin-bottom: 10px; }
    .confirm-card .subtitle { font-size: 1.05rem; color: #718096; margin-bottom: 24px; line-height: 1.6; }
    .detail-block {
      border-radius: 12px;
      padding: 16px 20px;
      margin: 20px 0;
      text-align: left;
    }
    .success-bg { background: #f0fdf4; border-left: 4px solid #16a34a; }
    .used-bg    { background: #f0f9ff; border-left: 4px solid #0284c7; }
    .detail-row {
      display: flex;
      gap: 12px;
      font-size: 14px;
      padding: 5px 0;
      border-bottom: 1px solid rgba(0,0,0,0.05);
      flex-wrap: wrap;
    }
    .detail-row:last-child { border-bottom: none; }
    .detail-label { font-weight: 700; color: #2d3748; min-width: 140px; }
    .detail-value { color: #4a5568; }
    .next-steps {
      background: #fafafa;
      border: 1px dashed #cbd5e1;
      border-radius: 12px;
      padding: 18px 20px;
      text-align: left;
      margin: 20px 0;
    }
    .next-steps h6 { font-weight: 800; color: #1a202c; margin-bottom: 12px; font-size: 15px; }
    .step-item { display: flex; align-items: flex-start; gap: 12px; margin-bottom: 10px; font-size: 14px; color: #4a5568; }
    .step-num {
      background: #ed3136; color: white;
      border-radius: 50%;
      width: 22px; height: 22px; min-width: 22px;
      display: flex; align-items: center; justify-content: center;
      font-size: 12px; font-weight: 700; margin-top: 1px;
    }
    .btn-home {
      background: #ed3136; color: #fff;
      font-weight: 700; font-size: 15px;
      padding: 12px 32px;
      border-radius: 50px; border: none;
      text-decoration: none; display: inline-block;
      transition: all 0.3s;
      box-shadow: 0 6px 18px rgba(237,49,54,0.28);
    }
    .btn-home:hover { background: #c82328; color: #fff; transform: translateY(-2px); }
    .btn-contact {
      background: transparent; color: #ed3136;
      font-weight: 700; font-size: 14px;
      padding: 11px 26px;
      border-radius: 50px; border: 2px solid #ed3136;
      text-decoration: none; display: inline-block;
      transition: all 0.3s; margin-left: 10px;
    }
    .btn-contact:hover { background: #ed3136; color: #fff; }
    footer { background: #ed3136; color: #fff; padding: 28px 0; margin-top: auto; }
    .confetti-wrapper { position: fixed; top:0; left:0; width:100%; height:100%; pointer-events:none; z-index:0; }
    .confetti-piece { position: absolute; width: 10px; height: 10px; opacity: 0; animation: confettiFall linear infinite; }
    @keyframes confettiFall {
      0%  { transform: translateY(-20px) rotate(0deg);   opacity: 1; }
      100%{ transform: translateY(110vh) rotate(720deg); opacity: 0; }
    }
    @media (max-width: 576px) {
      .confirm-card { padding: 32px 18px; }
      .confirm-card h1 { font-size: 1.6rem; }
      .btn-contact { margin-left: 0; margin-top: 10px; }
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
        <a href="<?= base_url('/fundraiser-enquiry') ?>" class="text-decoration-none fw-semibold" style="color:#1a202c;font-size:15px;">Fundraiser Enquiry</a>
        <a href="<?= base_url('/contactus') ?>" class="text-decoration-none fw-semibold" style="color:#1a202c;font-size:15px;">Contact Us</a>
      </div>
    </div>
  </nav>

  <?php if ($status === 'success'): ?>
  <div class="confetti-wrapper" id="confettiWrap"></div>
  <?php endif; ?>

  <div class="confirm-section">
    <div class="confirm-card">

      <?php if ($status === 'success'): ?>

        <div class="icon-circle success"><i class="fas fa-check-double"></i></div>
        <span class="confirm-badge success-badge"><i class="fas fa-circle-check"></i> Approval Confirmed</span>
        <h1 style="color:#15803d;">You're All Set!</h1>
        <p class="subtitle"><?= htmlspecialchars($message) ?></p>

        <div class="detail-block success-bg">
          <div class="detail-row">
            <span class="detail-label"><i class="fas fa-user me-1"></i> Name</span>
            <span class="detail-value"><?= htmlspecialchars($enquiry->fullname) ?></span>
          </div>
          <div class="detail-row">
            <span class="detail-label"><i class="fas fa-envelope me-1"></i> Email</span>
            <span class="detail-value"><?= htmlspecialchars($enquiry->email) ?></span>
          </div>
          <div class="detail-row">
            <span class="detail-label"><i class="fas fa-phone me-1"></i> Contact</span>
            <span class="detail-value">+91 <?= htmlspecialchars($enquiry->phone) ?></span>
          </div>
          <div class="detail-row">
            <span class="detail-label"><i class="fas fa-tag me-1"></i> Category</span>
            <span class="detail-value"><?= htmlspecialchars($enquiry->cause_category) ?></span>
          </div>
          <div class="detail-row">
            <span class="detail-label"><i class="fas fa-heading me-1"></i> Cause Title</span>
            <span class="detail-value"><?= htmlspecialchars($enquiry->cause_title) ?></span>
          </div>
          <?php if (!empty($enquiry->target_amount)): ?>
          <div class="detail-row">
            <span class="detail-label"><i class="fas fa-rupee-sign me-1"></i> Target Amount</span>
            <span class="detail-value">&#8377;<?= number_format((float)$enquiry->target_amount, 2) ?></span>
          </div>
          <?php endif; ?>
        </div>

        <div class="next-steps">
          <h6><i class="fas fa-road me-2 text-danger"></i>What Happens Next?</h6>
          <div class="step-item"><div class="step-num">1</div><div>Our fundraising specialist will contact you on <strong><?= htmlspecialchars($enquiry->phone) ?></strong> within 24-48 hours.</div></div>
          <div class="step-item"><div class="step-num">2</div><div>We will guide you to submit your cause documents and story for verification.</div></div>
          <div class="step-item"><div class="step-num">3</div><div>Once verified, your public fundraiser will go live on the Kanavu Help platform!</div></div>
        </div>

        <div class="mt-3">
          <a href="<?= base_url('') ?>" class="btn-home"><i class="fas fa-home me-2"></i>Go to Home</a>
          <a href="<?= base_url('/contactus') ?>" class="btn-contact"><i class="fas fa-headset me-1"></i>Contact Us</a>
        </div>

      <?php elseif ($status === 'used'): ?>

        <div class="icon-circle used"><i class="fas fa-clock-rotate-left"></i></div>
        <span class="confirm-badge used-badge"><i class="fas fa-circle-info"></i> Already Confirmed</span>
        <h1 style="color:#0284c7;">Already Verified</h1>
        <p class="subtitle"><?= htmlspecialchars($message) ?></p>

        <?php if (!empty($enquiry)): ?>
        <div class="detail-block used-bg">
          <div class="detail-row">
            <span class="detail-label"><i class="fas fa-user me-1"></i> Name</span>
            <span class="detail-value"><?= htmlspecialchars($enquiry->fullname) ?></span>
          </div>
          <div class="detail-row">
            <span class="detail-label"><i class="fas fa-tag me-1"></i> Cause</span>
            <span class="detail-value"><?= htmlspecialchars($enquiry->cause_title ?? 'N/A') ?></span>
          </div>
          <div class="detail-row">
            <span class="detail-label"><i class="fas fa-circle-check me-1 text-success"></i> Status</span>
            <span class="detail-value" style="color:#16a34a;font-weight:700;">Approved &amp; Confirmed</span>
          </div>
        </div>
        <?php endif; ?>

        <p class="text-muted" style="font-size:14px;">If you need further assistance, please contact our support team.</p>
        <div class="mt-2">
          <a href="<?= base_url('') ?>" class="btn-home"><i class="fas fa-home me-2"></i>Go to Home</a>
          <a href="<?= base_url('/contactus') ?>" class="btn-contact"><i class="fas fa-headset me-1"></i>Contact Us</a>
        </div>

      <?php else: ?>

        <div class="icon-circle invalid"><i class="fas fa-triangle-exclamation"></i></div>
        <span class="confirm-badge invalid-badge"><i class="fas fa-circle-xmark"></i> Invalid Link</span>
        <h1 style="color:#ed3136;">Link Not Valid</h1>
        <p class="subtitle"><?= htmlspecialchars($message) ?></p>
        <p class="text-muted" style="font-size:14px;">If you believe this is an error, please contact our support team quoting your name and email address.</p>
        <div class="mt-3">
          <a href="<?= base_url('/fundraiser-enquiry') ?>" class="btn-home"><i class="fas fa-arrow-left me-2"></i>Back to Enquiry Form</a>
          <a href="<?= base_url('/contactus') ?>" class="btn-contact"><i class="fas fa-headset me-1"></i>Contact Us</a>
        </div>

      <?php endif; ?>

    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container text-center">
      <p class="mb-2 fw-semibold">&copy; <?= date('Y'); ?> Kanavu Help (The Kanavu Trust). All rights reserved.</p>
      <div class="d-flex justify-content-center gap-3 mt-2">
        <a href="<?= base_url('/abouts') ?>" class="text-white text-decoration-none">About Us</a>
        <span class="text-white-50">|</span>
        <a href="<?= base_url('/fundraiser-enquiry') ?>" class="text-white text-decoration-none">Fundraiser Enquiry</a>
        <span class="text-white-50">|</span>
        <a href="<?= base_url('/contactus') ?>" class="text-white text-decoration-none">Contact Us</a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <?php if ($status === 'success'): ?>
  <script>
    var wrap = document.getElementById('confettiWrap');
    var colors = ['#16a34a','#ed3136','#f59e0b','#2563eb','#7c3aed','#db2777'];
    for (var i = 0; i < 60; i++) {
      var el = document.createElement('div');
      el.className = 'confetti-piece';
      el.style.left = (Math.random() * 100) + 'vw';
      el.style.top  = '-20px';
      el.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
      el.style.borderRadius = Math.random() > 0.5 ? '50%' : '2px';
      el.style.animationDuration = (2 + Math.random() * 4) + 's';
      el.style.animationDelay   = (Math.random() * 3) + 's';
      el.style.width  = (7 + Math.random() * 8) + 'px';
      el.style.height = (7 + Math.random() * 8) + 'px';
      wrap.appendChild(el);
    }
    setTimeout(function(){ if(wrap) wrap.remove(); }, 7000);
  </script>
  <?php endif; ?>

</body>
</html>