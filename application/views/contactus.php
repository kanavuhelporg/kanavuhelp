<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Contact Us - Kanavu Help</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <style>
    :root {
      --primary-red: #EB2D32;
      --dark-red: #c82333;
    }
    
    body {
      font-family: 'Sen', sans-serif;
      overflow-x: hidden;
      width: 100%;
      margin: 0;
      padding: 0;
      padding-top: 80px; /* Space for fixed navbar */
    }

    /* Ensure all elements use border-box */
    * {
      box-sizing: border-box;
    }

    img, iframe, video {
      max-width: 100%;
      height: auto;
    }

    /* Fixed header with proper spacing */
    
    .contact-hero {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                  url('<?= base_url('assets/img/Contact_1.jpg') ?>');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
      width: 100%;
      margin: 0;
      padding: 0;
    }

    .contact-hero h1 {
      font-weight: 700;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .contact-info-card {
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      height: 100%;
      padding: 20px 15px;
      text-align: center;
      margin-bottom: 15px;
      border: 1px solid #e9ecef;
    }

    .contact-info-card:hover {
      transform: translateY(-3px);
    }

    .contact-icon {
      font-size: 2rem;
      color: var(--primary-red);
      margin-bottom: 15px;
    }

    .contact-form-container {
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 25px 20px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      margin: 0 auto;
    }

    .form-control, .form-select {
      border-radius: 8px;
      padding: 12px 15px;
      border: 1px solid #ddd;
      width: 100%;
      font-size: 16px;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--primary-red);
      box-shadow: 0 0 0 0.2rem rgba(235, 45, 50, 0.25);
    }

    .btn-primary {
      background-color: var(--primary-red);
      border: none;
      border-radius: 25px;
      padding: 15px 30px;
      font-weight: 600;
      transition: all 0.3s ease;
      width: 100%;
    }

    .btn-primary:hover {
      background-color: var(--dark-red);
      transform: translateY(-2px);
    }

    .section-title {
      position: relative;
      margin-bottom: 30px;
      text-align: center;
      font-size: 1.5rem;
      padding: 0 10px;
    }

    .section-title:after {
      content: '';
      position: absolute;
      bottom: -12px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 3px;
      background-color: var(--primary-red);
    }

    .error-message {
      color: #dc3545;
      font-size: 0.8rem;
      margin-top: 5px;
      display: block;
    }

    .contact-map {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      height: 300px;
    }

    .contact-map iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    /* Contact info text sizing */
    .contact-info-card h4 {
      font-size: 1.1rem;
      margin-bottom: 10px;
      color: #333;
    }

    .contact-info-card p {
      font-size: 0.9rem;
      color: #666;
      line-height: 1.4;
      margin: 0;
      word-wrap: break-word;
    }

    /* Form label styling */
    .form-label {
      font-weight: 600;
      color: #333;
      margin-bottom: 8px;
      font-size: 0.95rem;
    }

    /* Character counter */
    #message-counter {
      font-size: 0.8rem;
    }


    /* Tablet styles */
    @media (min-width: 768px) {
      .contact-hero {
        height: 200px;
      }
      
      .contact-form-container {
        padding: 30px;
      }
      
      .contact-info-card {
        padding: 25px 20px;
        margin-bottom: 0;
      }
      
      .btn-primary {
        width: auto;
      }
      
      .section-title {
        font-size: 1.75rem;
      }
      
      .contact-info-card h4 {
        font-size: 1.2rem;
      }
      
      .contact-info-card p {
        font-size: 1rem;
      }
    }

    /* Desktop styles */
    @media (min-width: 992px) {
      .contact-hero {
        height: 300px;
      }
      
      .contact-form-container {
        padding: 40px;
      }
      
      .contact-info-card {
        padding: 30px 20px;
      }
    }

    /* Mobile-specific fixes */
    @media (max-width: 576px) {
      .container, .container-fluid {
        padding-left: 15px;
        padding-right: 15px;
      }
      
      /* Fix form row spacing */
      .row {
        margin-left: -8px;
        margin-right: -8px;
      }
      
      .col-12, .col-md-6, .col-md-4, .col-lg-8 {
        padding-left: 8px;
        padding-right: 8px;
      }
      
      /* Ensure text doesn't overflow */
      .contact-info-card p {
        word-break: break-word;
        overflow-wrap: break-word;
      }
      
      /* Form field spacing */
      .mb-4 {
        margin-bottom: 1rem !important;
      }
      
      /* Button styling */
      .btn-lg {
        padding: 12px 24px;
        font-size: 1rem;
      }
    }

    /* Extra small devices */
    @media (max-width: 375px) {
      body {
        padding-top: 70px;
      }
      
      .contact-hero {
        height: 200px;
      }
      
      .contact-form-container {
        padding: 20px 15px;
      }
      
      .contact-info-card {
        padding: 15px 10px;
      }
      
      .contact-icon {
        font-size: 1.75rem;
        margin-bottom: 10px;
      }
      
      .contact-info-card h4 {
        font-size: 1rem;
      }
      
      .contact-info-card p {
        font-size: 0.85rem;
      }
      
      .section-title {
        font-size: 1.3rem;
        margin-bottom: 25px;
      }
    }

    /* Prevent horizontal scrolling */
    html, body {
      max-width: 100%;
      overflow-x: hidden;
    }
    
    .container {
      max-width: 100%;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav id="header" class="navbar navbar-expand-lg bg-white py-3 fixed-top"></nav>


  <!-- Hero Section -->
  <div class="contact-hero mt-5">
    <div class="container">
      <h1 class="display-4 fw-bold">Contact Us</h1>
      <p class="lead">We're here to help and answer any questions you might have</p>
    </div>
  </div>

  <!-- Contact Information Section -->
  <section class="py-4">
    <div class="container">
      <div class="row g-3">
        <!-- Address -->
        <div class="col-12 col-md-4">
          <div class="contact-info-card">
            <i class="fas fa-map-marker-alt contact-icon"></i>
            <h4>Our Location</h4>
            <p>Kanavu Startup Village<br>Annamalaikottai, Sivagiri</p>
          </div>
        </div>
        
        <!-- Phone -->
        <div class="col-12 col-md-4">
          <div class="contact-info-card">
            <i class="fas fa-phone contact-icon"></i>
            <h4>Phone Number</h4>
            <p>+91 93792 48387</p>
          </div>
        </div>
        
        <!-- Email -->
        <div class="col-12 col-md-4">
          <div class="contact-info-card">
            <i class="fas fa-envelope contact-icon"></i>
            <h4>Email Address</h4>
            <p>karthi.easwaramoorthy@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form Section -->
  <section class="py-4 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
          <div class="contact-form-container">
            <h2 class="section-title">Get In Touch With Us</h2>
            
            <form name="contactus" id="myForm" method="post" action="<?= base_url('kanavuhelp/contact_us') ?>">
              <div class="row">
                <!-- Name Field -->
                <div class="col-12 col-md-6 mb-3">
                  <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                  <div id="name-error" class="error-message"></div>
                </div>

                <!-- Email Field -->
                <div class="col-12 col-md-6 mb-3">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                  <div id="email-error" class="error-message"></div>
                </div>
              </div>

              <!-- Phone Field -->
              <div class="mb-3">
                <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" maxlength="10" required>
                <div id="phone-error" class="error-message"></div>
              </div>

              <!-- Message Field -->
              <div class="mb-4">
                <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                <textarea class="form-control" name="message" id="message" rows="4" placeholder="Enter your message" required maxlength="500"></textarea>
                <div id="message-counter" class="form-text text-end text-muted small">0 / 500 characters</div>
                <div id="message-error" class="error-message"></div>
              </div>

              <!-- Submit Button -->
              <div class="text-center">
                <button type="submit" id="submitButton" class="btn btn-danger btn-lg">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="py-4">
    <div class="container">
      <h2 class="section-title">Find Us</h2>
      <div class="contact-map">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.320830284834!2d78.48623331479436!3d10.32233369264215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0005b3a5e9c46f%3A0x5a5e5a5e5a5e5a5e!2sAnnamalaikottai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1633084800000!5m2!1sen!2sin" 
          allowfullscreen="" 
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <div id="footer">
  </div>

  <!-- Success/Error Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <div id="submitresponse"></div>
          <button type="button" class="btn btn-danger mt-3" data-bs-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Mobile viewport fix
    document.addEventListener('DOMContentLoaded', function() {
      // Prevent horizontal scrolling
      document.body.style.overflowX = 'hidden';
      
      // Form validation event listeners
      document.getElementById("name").addEventListener("input", validateName);
      document.getElementById("email").addEventListener("input", validateEmail);
      document.getElementById("phone").addEventListener("input", validatePhone);
      document.getElementById("message").addEventListener("input", validateMessage);

      // Form submission
      document.getElementById("submitButton").addEventListener("click", function (e) {
        e.preventDefault();
        if (validateForm()) {
          document.getElementById("myForm").submit();
        }
      });

      // Character counter
      document.getElementById("message").addEventListener("input", function () {
        const maxLength = 500;
        const currentLength = this.value.length;
        const counter = document.getElementById("message-counter");
        counter.textContent = `${currentLength} / ${maxLength} characters`;
        counter.className = currentLength >= maxLength ? 
          "form-text text-end text-danger small" : 
          "form-text text-end text-muted small";
      });
    });

    // Validation functions
    function validateName() {
      const name = document.getElementById("name").value.trim();
      const errorElement = document.getElementById("name-error");
      const regex = /^[a-zA-Z\s]{3,}$/;

      if (!name) {
        errorElement.textContent = "Please enter your name.";
        return false;
      } else if (!regex.test(name)) {
        errorElement.textContent = "Name must be at least 3 characters and contain only letters.";
        return false;
      }

      errorElement.textContent = "";
      return true;
    }

    function validateEmail() {
      const email = document.getElementById("email").value.trim();
      const errorElement = document.getElementById("email-error");
      const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

      if (!email) {
        errorElement.textContent = "Please enter your email.";
        return false;
      } else if (!regex.test(email)) {
        errorElement.textContent = "Please enter a valid email address.";
        return false;
      }

      errorElement.textContent = "";
      return true;
    }

    function validatePhone() {
      const phone = document.getElementById("phone").value.trim();
      const errorElement = document.getElementById("phone-error");
      const regex = /^[0-9]{10}$/;

      if (!phone) {
        errorElement.textContent = "Please enter your phone number.";
        return false;
      } else if (!regex.test(phone)) {
        errorElement.textContent = "Phone number must be 10 digits.";
        return false;
      }

      errorElement.textContent = "";
      return true;
    }

    function validateMessage() {
      const message = document.getElementById("message").value.trim();
      const errorElement = document.getElementById("message-error");

      if (!message) {
        errorElement.textContent = "Message is required.";
        return false;
      } else if (message.length < 10) {
        errorElement.textContent = "Message must be at least 10 characters long.";
        return false;
      }

      errorElement.textContent = "";
      return true;
    }

    function validateForm() {
      return validateName() && validateEmail() && validatePhone() && validateMessage();
    }

    // Load header and footer via AJAX
    $.ajax({
      type: "get",
      url: "kanavuhelp/getHeader",
      success: (result) => {
        document.getElementById("header").innerHTML = result;
        // Add active class to current page
        const contactLink = document.querySelector('[href*="contact"]');
        if (contactLink) {
          contactLink.classList.add("active", "text-danger");
        }
      },
      error: (error) => {
        console.error("Header loading error:", error);
      }
    });

    $.ajax({
      type: "get",
      url: "kanavuhelp/getFooter",
      success: (result) => {
        document.getElementById("footer").innerHTML = result;
      },
      error: (error) => {
        console.error("Footer loading error:", error);
      }
    });

    // Modal display for success/error messages
    <?php if ($this->session->flashdata('submitsuccessstatus')): ?>
      window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {});
        document.getElementById('contactModalLabel').innerHTML = "<span class='text-success'>Success!</span>";
        document.getElementById('submitresponse').innerHTML = "<p class='fs-5'>Thanks for contacting us. We'll get back to you soon!</p>";
        myModal.show();
      };
    <?php endif; ?>

    <?php if ($this->session->flashdata('submiterrorstatus')): ?>
      window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {});
        document.getElementById('contactModalLabel').innerHTML = "Error";
        document.getElementById('submitresponse').innerHTML = "<p class='fs-5'>Unexpected error occurred. Please try again.</p>";
        myModal.show();
      };
    <?php endif; ?>
  </script>
</body>
</html>