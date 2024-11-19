<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanavu Help - Login Required</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Login Required Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>You need to log in to view this page.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="loginRedirectBtn">Login</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Define baseUrl using PHP (ensure it's available) -->
  <script>
    // Make sure this baseUrl points to the correct login URL
    var baseUrl = "<?= base_url('login') ?>"; // Ensure this line is correct if using PHP
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Initialize and show the modal when the page loads
      var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
      loginModal.show();

      // Redirect to the login page when "Login" button is clicked
      document.getElementById('loginRedirectBtn').addEventListener('click', function () {
        var currentUrl = "<?= base_url('myhelps') ?>";

        // Check if baseUrl is properly defined
        if (baseUrl) {
          // Redirect to the login page with the returnUrl parameter
          window.location.href = `${baseUrl}?returnUrl=${encodeURIComponent(currentUrl)}`;
        } else {
          console.error('baseUrl is not defined.');
        }
      });
    });
  </script>

  <!-- Form-based redirection (as a backup method) -->
  <form id="redirectToLoginForm" method="POST" action="<?= base_url('login') ?>">
    <input type="hidden" name="returnUrl" id="returnUrl" value="">
  </form>

  <script>
    function redirectToLogin() {
      // Get the current URL
      var currentUrl =  "<?= base_url('myhelps') ?>";

      // Encode the current URL
      var encodedUrl = encodeURIComponent(currentUrl);

      // Set the hidden input value to the encoded current URL
      document.getElementById('returnUrl').value = encodedUrl;

      // Submit the form to the login page
      document.getElementById('redirectToLoginForm').submit();
    }
  </script>
</body>
</html>
