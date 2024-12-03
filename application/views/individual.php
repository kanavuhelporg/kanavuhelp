<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fundraiser</title>
  <link rel="stylesheet" href="style.css" />
  <!-- <link href="bootstrap.min.css" rel="stylesheet" />
  <script src="bootstrap.bundle.min.js"></script> -->
  <!-- Bootrap for the demo page -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--wizard-->
  <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet"
    type="text/css" />
  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>



  <div class="container-fluid box mt-auto py-3">
    <div class="row box1 mt-auto py-3">
      <div class="container-fluid mt-5">
        <div class="row align-items-center w-100">
          <!-- Left Column for Image and Text -->
          <div class="col-md-6 d-flex justify-content-center">
            <div class="text-center">
              <h3 class="mt-4"><strong>START YOUR FUNDRAISER</strong></h3>
              <h6>"We make a living by what we get, but we make a life by what we give"</h6>
              <img src="<?php echo base_url('/assets/img/startyourfund.jpg'); ?>"
                alt="no img"
                class="img-fluid"
                style="max-width: 100%; height: auto; border-radius: 50%;">
            </div>
          </div>
          <!-- Right Column for Form -->
          <div class="col-md-6">
            <div id="multi-step-form-container" class="mt-auto py-3 w-100">
              <!-- Form Steps / Progress Bar -->
              <ul class="form-stepper form-stepper-horizontal text-center mx-auto col-md-10 flex-wrap">
                <li class="form-stepper-active text-center form-stepper-list" step="1">
                  <a class="mx-2">
                    <span class="form-stepper-circle"><span>1</span></span>
                  </a>
                </li>
                <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                  <a class="mx-2">
                    <span class="form-stepper-circle"><span>2</span></span>
                  </a>
                </li>
                <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                  <a class="mx-2">
                    <span class="form-stepper-circle"><span>3</span></span>
                  </a>
                </li>
              </ul>

              <form id="causeStep1" name="causeStep1" method="post" action="<?= base_url('kanavuhelp/insertUser') ?>" enctype="multipart/form-data">
                <!-- Step 1 Content -->
                <section id="step-1" class="form-step col-12">
                  <h2>Basic Details</h2>
                  <div class="row my-3">
                    <label for="category" class="col-md-4 col-form-label">I am raising fund for:<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                      <div class="custom-dropdown-wrapper">
                        <select name="category" id="category" class="form-control custom-dropdown" onchange="copySelection()" required>
                          <option value="">Select</option>
                          <?php foreach ($result as $row) { ?>
                            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                          <?php } ?>
                        </select>
                        <i class="fas fa-chevron-down custom-dropdown-icon"></i>
                      </div>
                      <span id="category-error" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Name of beneficiary:<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" id="name" name="name" class="form-control my-2" placeholder="Name of beneficiary" required>
                      <span id="name-error" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="age" class="col-sm-4 col-form-label">Age of beneficiary:<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="number" id="age" name="age" class="form-control my-2" placeholder="Age of beneficiary" required>
                      <span id="age-error" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="location" class="col-sm-4 col-form-label">Location:<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" id="location" name="location" class="form-control my-2" placeholder="Location" required>
                      <span id="location-error" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Mail Id:<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="email" id="email" name="email" class="form-control my-2" placeholder="Mail Id*" required>
                      <span id="email-error" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="phone" class="col-sm-4 col-form-label">Phone Number:<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="tel" id="phone" name="phone" class="form-control my-2" placeholder="Phone Number*" required>
                      <span id="phone-error" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="text-center mt-3">
                    <button type="submit" id="continueToStep2" class="btn btn-danger no-hover">Continue</button>
                  </div>
                </section>
              </form>

              <!-- <form id="causeStep2" name="causeStep2" method="post" action="<?= base_url('kanavuhelp/updateCauseStep2') ?>" enctype="multipart/form-data">
                <section id="step-2" class="form-step col-12 d-none">
                  <h2>Cause Details</h2>

                  <div class="row my-3">
                    <label for="form_selected_text" class="col-md-4 col-form-label">I am raising fund for: </label>
                    <div class="col-md-8">
                      <input type="text" id="form_selected_text" class="form-control my-2" placeholder="I am raising fund for: <?php echo $this->session->userdata('currentUserId'); ?>, <?php echo $this->session->userdata('currentCauseId'); ?>" readonly>
                    </div>
                  </div>

                  <script>
                    function copySelection() {
                      const selectedCategory = document.getElementById("category").value;
                      const formSelectedText = document.getElementById("form_selected_text");

                      // If a valid category is selected, copy it to the input field
                      if (selectedCategory) {
                        formSelectedText.value = selectedCategory;
                      } else {
                        formSelectedText.value = ""; // Clear the input if no category is selected
                      }
                    }
                  </script>
                  <div class="row my-3">
                    <label for="amount" class="col-md-4 col-form-label">Amount:<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                      <input type="number" id="amount" name="amount" class="form-control my-2" placeholder="Amount*" required>
                      <span id="amount-error" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="row my-3">
                    <label for="end_date" class="col-md-4 col-form-label">End Date:<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                      <input type="date" id="end_date" name="end_date" class="form-control my-2" placeholder="End Date*" required>
                      <span id="end-date-error" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="text-center mt-3">
                    <button type="button" class="btn btn-danger no-hover btn-back" data-step="1">Back</button>
                    <button type="button" id="continueToStep3" class="btn btn-danger no-hover">Continue</button>
                  </div>
                </section>
              </form> -->

              <form id="individualform" name="individualform" method="post" action="<?= base_url('kanavuhelp/individualform_data') ?>" enctype="multipart/form-data">
                <!-- OTP Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="otpModalLabel">OTP Verification</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <label for="otp" class="form-label">Enter OTP</label>
                        <input type="text" id="otp" class="form-control" placeholder="Enter OTP">
                        <div id="otp-error" class="text-danger mt-2"></div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="verifyOtpButton" class="btn btn-danger no-hover">Verify OTP</button>
                      </div>
                    </div>
                  </div>
                </div>

                <section id="step-2" class="form-step col-12 d-none">
                  <h2>Cause Details</h2>

                  <div class="row my-3">
                    <label for="form_selected_text" class="col-md-4 col-form-label">I am raising fund for: </label>
                    <div class="col-md-8">
                      <input type="text" id="form_selected_text" class="form-control my-2" placeholder="I am raising fund for: " readonly>
                    </div>
                  </div>

                  <script>
                    function copySelection() {
                      const selectedCategory = document.getElementById("category").value;
                      const formSelectedText = document.getElementById("form_selected_text");

                      // If a valid category is selected, copy it to the input field
                      if (selectedCategory) {
                        formSelectedText.value = selectedCategory;
                      } else {
                        formSelectedText.value = ""; // Clear the input if no category is selected
                      }
                    }
                  </script>
                  <div class="row my-3">
                    <label for="amount" class="col-md-4 col-form-label">Amount:<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                      <input type="number" id="amount" name="amount" class="form-control my-2" placeholder="Amount*" required>
                      <span id="amount-error" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="row my-3">
                    <label for="end_date" class="col-md-4 col-form-label">End Date:<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                      <input type="date" id="end_date" name="end_date" class="form-control my-2" placeholder="End Date*" required>
                      <span id="end-date-error" class="text-danger"></span>
                    </div>
                  </div>

                  <div class="text-center mt-3">
                    <button type="button" class="btn btn-danger no-hover btn-back" data-step="1">Back</button>
                    <button type="button" id="continueToStep3" class="btn btn-danger no-hover">Continue</button>
                  </div>
                </section>

                <!-- Step 3 Content -->
                <section id="step-3" class="form-step col-12 d-none">
                  <h2>Elaborate Cause Details</h2>

                  <!-- Cover Image Field -->
                  <div class="row my-3">
                    <label for="cover_image" class="col-md-4 col-form-label">Cover Image:<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                      <input type="file" id="cover_image" name="cover_image" accept="image/jpeg, image/png, image/svg+xml" class="form-control my-2" onchange="validateCoverImage()" required>
                      <small class="text-muted">
                        Image dimensions up to 600x400 px, and formats: JPG, JPEG, PNG, SVG.
                      </small>
                      <span id="cover-image-error" class="text-danger"></span>
                    </div>
                  </div>

                  <!-- Cause Title Field -->
                  <div class="row my-3">
                    <label for="cause_heading" class="col-md-4 col-form-label">Cause Title:<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                      <input type="text" id="cause_heading" name="cause_heading" class="form-control my-2" placeholder="Cause Title" required oninput="validateCauseTitle()">
                      <span id="cause-heading-error" class="text-danger"></span>
                    </div>
                  </div>

                  <!-- Cause Description Field -->
                  <div class="row my-3">
                    <label for="cause_description" class="col-md-4 col-form-label">Description:<span class="text-danger">*</span></label>
                    <div class="col-md-8">
                      <textarea id="cause_description" name="cause_description" class="form-control my-2" rows="4" placeholder="Description" required oninput="validateCauseDescription()"></textarea>
                      <span id="cause-description-error" class="text-danger"></span>
                    </div>
                  </div>

                  <div style="color:red">Please wait for Admin verification of the cause. It will happen in 24 hours</div>

                  <div class="text-center mt-3">
                    <button type="button" class="btn btn-danger no-hover btn-back" data-step="2">Back</button>
                    <button type="submit" class="btn btn-success no-hover" id="submitApprovalButton">Submit for Approval</button>
                  </div>
                </section>
              </form>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Message Modal -->
  <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="messageModalLabel">Notification</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Form starts here -->
        <div class="modal-body" id="messageModalBody">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Ok</button>
        </div>
      </div>
    </div>
  </div>

  <?php if ($this->session->flashdata('otp_sent')): ?>
    <script>
      // Automatically trigger the OTP modal when the page loads
      window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
          backdrop: 'static',
          keyboard: false
        });
        myModal.show();
      };
    </script>
  <?php endif; ?>



  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const otpModal = new bootstrap.Modal(document.getElementById("myModal"));
      const messageModal = new bootstrap.Modal(document.getElementById("messageModal"));

      // Function to show popup messages
      function showPopupMessage(message) {
        document.getElementById("messageModalBody").textContent = message;
        messageModal.show();
      }

      // Continue to Step 2
      document.getElementById("continueToStep2").addEventListener("click", () => {
        if (validateStep1()) {
          sendOtp();
          otpModal.show();
        }
      });

      // Verify OTP
      document.getElementById("verifyOtpButton").addEventListener("click", () => {
        const otp = document.getElementById("otp").value.trim();
        const generatedOtp = "<?php echo $this->session->userdata('generated_otp'); ?>";

        console.log("Entered OTP:", otp); // Print the entered OTP
        console.log("Generated OTP:", generatedOtp); // Print the generated OTP
        if (otp === generatedOtp) {
          // Manually hide the modal if the Bootstrap instance is not working
          const myModalElement = document.getElementById('myModal');
          myModalElement.classList.remove('show');
          myModalElement.style.display = 'none';
          document.body.classList.remove('modal-open');
          document.querySelector('.modal-backdrop').remove();

          console.log("OTP verified and modal hidden.");
          showStep(2); // Move to the next step
        } else {
          setError("otp-error", "Invalid OTP. Please try again.");
        }
      });


      // Continue to Step 3
      document.getElementById("continueToStep3").addEventListener("click", () => {
        if (validateStep2()) {
          showStep(3);
        } else {
          showPopupMessage("Please fill in all required fields correctly before continuing.");
        }
      });

      // Submit Approval Button
      document.getElementById("submitApprovalButton").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default form submission
        if (validateStep3()) {
          document.getElementById("individualform").submit(); // Proceed with submission
        } else {
          showPopupMessage("Please fill in all required fields correctly before submitting.");
        }
      });

      // Show specific step
      function showStep(step) {
        document.querySelectorAll(".form-step").forEach(section => section.classList.add("d-none"));
        document.getElementById(`step-${step}`).classList.remove("d-none");
        updateStepper(step);
      }

      // Update stepper status
      function updateStepper(step) {
        const steppers = document.querySelectorAll(".form-stepper-list");
        steppers.forEach((stepper, index) => {
          const stepNum = index + 1;

          if (stepNum < step) {
            stepper.classList.remove("form-stepper-active", "form-stepper-unfinished");
            stepper.classList.add("form-stepper-completed");
          } else if (stepNum === step) {
            stepper.classList.remove("form-stepper-completed", "form-stepper-unfinished");
            stepper.classList.add("form-stepper-active");
          } else {
            stepper.classList.remove("form-stepper-active", "form-stepper-completed");
            stepper.classList.add("form-stepper-unfinished");
          }
        });
      }

      // Utility: Set error message
      function setError(id, message) {
        document.getElementById(id).textContent = message;
      }

      // OTP Sending Simulation
      function sendOtp() {
        const email = document.getElementById("email").value.trim();
        showPopupMessage(`OTP sent to email: ${email}`);
      }

      // Validation Handlers
      const validationHandlers = {
        category: validateCategory,
        name: validateName,
        age: validateAge,
        location: validateLocation,
        email: validateEmail,
        phone: validatePhone,
        amount: validateAmount,
        end_date: validateEndDate,
        cover_image: validateCoverImage,
        cause_heading: validateCauseTitle,
        cause_description: validateCauseDescription,
      };

      Object.keys(validationHandlers).forEach(fieldId => {
        const field = document.getElementById(fieldId);
        if (field) {
          field.addEventListener("input", validationHandlers[fieldId]);
          field.addEventListener("blur", validationHandlers[fieldId]);
        }
      });

      function validateStep1() {
        return validateCategory() & validateName() & validateLocation() & validateAge() & validateEmail() & validatePhone();
      }

      function validateStep2() {
        return validateAmount() & validateEndDate();
      }

      function validateStep3() {
        return validateCoverImage() & validateCauseTitle() & validateCauseDescription();
      }

      // Individual field validation functions
      function validateCategory() {
        const category = document.getElementById("category").value;
        const errorElement = document.getElementById("category-error");
        if (!category) {
          errorElement.textContent = "Please select a category.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateName() {
        const nameInput = document.getElementById("name").value.trim();
        const errorElement = document.getElementById("name-error");
        const nameRegex = /^[A-Za-z][A-Za-z\s'-]{1,49}$/;

        if (!nameInput) {
          errorElement.textContent = "Enter your name.";
          return false;
        } else if (!nameRegex.test(nameInput)) {
          errorElement.textContent = "Name can only contain letters, spaces, and hyphens.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateAge() {
        const age = parseInt(document.getElementById("age").value, 10);
        const errorElement = document.getElementById("age-error");

        if (isNaN(age) || age < 1 || age > 120) {
          errorElement.textContent = "Enter a valid age between 1 and 120.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateLocation() {
        const location = document.getElementById("location").value;
        const errorElement = document.getElementById("location-error");
        if (!location) {
          errorElement.textContent = "Please select a location.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateEmail() {
        const email = document.getElementById("email").value.trim();
        const errorElement = document.getElementById("email-error");
        const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!regex.test(email)) {
          errorElement.textContent = "Enter a valid email address.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validatePhone() {
        const phone = document.getElementById("phone").value.trim();
        const errorElement = document.getElementById("phone-error");
        const regex = /^[0-9]{10}$/;

        if (!regex.test(phone)) {
          errorElement.textContent = "Enter a valid 10-digit phone number.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateAmount() {
        const amount = document.getElementById("amount").value.trim();
        const errorElement = document.getElementById("amount-error");

        if (!amount || isNaN(amount) || parseFloat(amount) <= 10) {
          errorElement.textContent = "Amount must be greater than 10.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateEndDate() {
        const endDate = document.getElementById("end_date").value;
        const errorElement = document.getElementById("end-date-error");

        if (!endDate) {
          errorElement.textContent = "Select an end date.";
          return false;
        }

        const selectedDate = new Date(endDate);
        const today = new Date();
        today.setHours(0, 0, 0, 0);

        if (selectedDate < today) {
          errorElement.textContent = "The date must be today or a future date.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateCoverImage() {
        const file = document.getElementById("cover_image").files[0];
        const errorElement = document.getElementById("cover-image-error");

        if (!file) {
          errorElement.textContent = "Upload a cover image.";
          return false;
        }

        if (!["image/jpeg", "image/png", "image/svg+xml"].includes(file.type)) {
          errorElement.textContent = "Only JPG, PNG, and SVG formats are allowed.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateCauseTitle() {
        const heading = document.getElementById("cause_heading").value.trim();
        const errorElement = document.getElementById("cause-heading-error");

        if (!heading) {
          errorElement.textContent = "Cause title is required.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }

      function validateCauseDescription() {
        const description = document.getElementById("cause_description").value.trim();
        const errorElement = document.getElementById("cause-description-error");

        if (!description) {
          errorElement.textContent = "Cause description is required.";
          return false;
        }
        errorElement.textContent = "";
        return true;
      }
    });
  </script>

</body>

</html>



</body>

</html>