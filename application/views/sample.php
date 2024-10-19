<div id="multi-step-form-container mt-auto py-3">
        <!-- Form Steps / Progress Bar -->

        <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0 col-md-10 flex-wrap  ">
          <!-- Step 1 -->
          <li class="form-stepper-active text-center form-stepper-list" step="1">
            <a class="mx-2 ">
              <span class="form-stepper-circle">
                <span>1</span>
              </span>
            </a>
          </li>
          <!-- Step 2 -->
          <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
            <a class="mx-2">
              <span class="form-stepper-circle text-muted">
                <span>2</span>
              </span>
            </a>
          </li>
          <!-- Step 3 -->
          <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
            <a class="mx-2">
              <span class="form-stepper-circle text-muted">
                <span>3</span>
              </span>
            </a>
          </li>
          <li class="form-stepper-unfinished text-center form-stepper-list" step="4">
            <a class="mx-2">
              <span class="form-stepper-circle text-muted">
                <span>4</span>
              </span>
            </a>
          </li>
        </ul>
        <!-- Step Wise Form Content -->
        <form id="individualForm" name="individualForm" onsubmit="return individual()"
          action="<?= base_url('kanavuhelp/individualform_data') ?>" enctype="multipart/form-data" method="POST"
          class="row row-cols-1 ms-5 me-5">
          <!-- Step 1 Content -->
          <section id="step-1" class="form-step " style="height:450px;border:none;">
            <h2>Basic Details</h2>

            <!-- Step 1 input fields -->
            <div class=" col-md-12 my-3">
              <label for="form-select">I am raising fund for:</label>
              <select name="form_select" id="form_select">
                <option value="" selected>--Select--</option>
                <option value="Medical">Medical</option>
                <option value="Crisis">Crisis</option>
                <option value="Education">Education</option>
                <option value="Emergency">Emergency</option>
                <option value="Events">Events</option>
                <?php foreach ($result as $row) { ?>
                <option value="<?php echo $row['id']; ?>" <?php echo set_select('form_select', $row['id'], False); ?>>
                  <?php echo $row['raising_fund_for']; ?>
                </option>
              <?php } ?>
            </select>



              <label for="name"></label>
              <input type="text" id="name" name="name" placeholder="Name" required>

              <label for="email"> </label>
              <input type="email" id="email" name="email" placeholder="Mail Id*" required>

              <label for="phone"></label>
              <input type="phone" id="phone" name="phone" placeholder="Phone Number* " required>
            </div>
            <div class="container">
              <div class="row">
               <div class="col-12 text-center mt-3">
                  <button id="openModalBtn1" class="button btn-navigate-form-step" type="button" step_number="1">
                    Continue
                  </button>
                  </div>
                </div>
              </div>
          </section>
          <div id="myModal1" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4" style="width:736px;height:530px;">
                  <div class="card bg-white mb-5 mt-5 border-0" style="box-shadow: 0 12px 15px rgba(0, 0, 0, 0.02);">
                    <div class="card-body p-5 text-center">
                      <h4><b>Enter OTP to verify your account</b></h4>
                      <p style="font-size:16px;"><b>Enter OTP to verify your account</b></p>
                      <img src="<?php echo base_url('/assets/img/Group 55.png'); ?>" alt="No Image"
                        class="h-auto inline-block" style="width:50px;height:50px;">
                      <p style="font-size:16px;"><b>We have sent OTP to your email, demo@gmail.com</b></p>
                      <div class="otp-field mb-4">
                        <input type="number" />
                        <input type="number" disabled />
                        <input type="number" disabled />
                        <input type="number" disabled />
                        <input type="number" disabled />
                        <input type="number" disabled />
                      </div>

                      <button id="verifyButton" class="button btn-navigate-form-step" step_number="2">
                        Continue
                      </button><br><br>
                      <p class="resend text-muted mb-0" style="font-size:17px;">
                        <b>Didn’t receive the OTP? </b><br>In case you do not receive the OTP on your email id, please
                        check your spam/junk folders.<br> <a href=""><b>Resend</b></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              </section>
            </div>
          </div>
          <!-- Step 2 Content, default hidden on page load. -->
          <section id="step-2" class="form-step d-none" style="border:none;">
            <h2>Beneficiary Details</h2> <!-- Step 2 input fields -->
            <div class="col-md-12 my-3">
              <label for="name"></label>
              <input type="text" id="beneficiary_name" name="beneficiary_name" placeholder="Name" required>

              <label for="age"></label>
              <input type="age" id="beneficiary_age" name="beneficiary_age" placeholder="Age" required>

              <label for="location"></label>
              <input type="txt" id="location" name="location" placeholder="Location" required>

              <label for="phone"></label>
              <input type="phone" id="beneficiary_phone" name="beneficiary_phone" maxlength="10"
                placeholder="Phone Number* " required>
            </div>
            <div class="col-12 text-center mt-3">
              <button class="button btn-navigate-form-step" type="button" step_number="1"
                style="width:100px;">Back</button>
              <button class="button btn-navigate-form-step" type="button" step_number="3">continue</button>
            </div>
          </section>
          <!-- Step 3 Content, default hidden on page load. -->
          <section id="step-3" class="form-step d-none" style="border:none;">
            <h2>Cause Details</h2>
            <!-- Step 3 input fields -->
            <div class="col-md-12 my-3">
              <label for="form-option">I am raising fund for:</label>
              <select name="form_select" id="form_select">
                <option value="" selected>--Select--</option>
                <option value="Medical">Medical</option>
                <option value="Crisis">Crisis</option>
                <option value="Education">Education</option>
                <option value="Emergency">Emergency</option>
                <option value="Events">Events</option>
                <?php foreach ($result as $row) { ?>
                <option value="<?php echo $row['id']; ?>" <?php echo set_select('form_select', $row['id'], False); ?>>
                  <?php echo $row['raising_fund_for']; ?>
                </option>
              <?php } ?>
            </select>
              <label for="amount"></label>
              <input type="number" id="amount" name="amount" placeholder="Amount*" required>

              <label for="end_date"></label>
              <input type="date" id="end_date" name="end_date" placeholder="End Date* " required>
            </div>
            <div class="col-12 text-center mt-3">
              <button class="button btn-navigate-form-step" type="button" step_number="2"
                style="width:100px;">Back</button>
              <button class="button btn-navigate-form-step" type="button" step_number="4">continue</button>
            </div>
          </section>
          <section id="step-4" class="form-step d-none" style="border:none;">
            <h2>Elaborate Cause Details</h2>
            <div class="container">
  <div class="row">
    <div class="col-12 my-3">
      <!-- File Upload Input Field -->
      <div class="file-upload-container mt-auto py-3">
        <label for="cover_image" class="form-label">Upload Cover Photo</label>
        <input type="file" id="cover_image" name="cover_image" class="form-control w-100" accept="image/*" required>
      </div>
      <br>

      <!-- Heading input field -->
      <div class="form-group">
        <label for="cause-heading" class="form-label">Heading</label>
        <input type="text" id="cause-heading" name="cause-heading" class="form-control" placeholder="Heading" required>
      </div>
      <br>

      <!-- Description input field -->
      <div class="form-group">
        <label for="cause-description" class="form-label">Description</label>
        <textarea id="cause-description" name="cause-description" class="form-control" rows="4" placeholder="Description" required></textarea>
      </div>
    </div>
  </div>
</div>


            <div class="col-12 text-center mt-3">
              <button class="button btn-navigate-form-step" type="button" step_number="3"
                style="width:100px;">Back</button>
              <button class="button submit-btn" type="submit">Submit for Approval</button>
            </div>
          </section>
        </form>
      </div>
    </div>
  </div>