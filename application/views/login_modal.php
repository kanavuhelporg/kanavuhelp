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

<script>
  // Show the login modal as soon as the page loads
  document.addEventListener("DOMContentLoaded", function() {
    var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
    loginModal.show();

    // Redirect to the login page when "Login" button is clicked
    document.getElementById('loginRedirectBtn').addEventListener('click', function() {
      var currentUrl = window.location.href;
      window.location.href = "<?= base_url('/login') ?>?returnUrl=" + encodeURIComponent(currentUrl);
    });
  });
</script>
