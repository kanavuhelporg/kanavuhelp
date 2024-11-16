<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Profile Page</h2>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-6">
                <h3>Welcome, <?= htmlspecialchars($user['name']); ?></h3>
                <p>Email: <?= htmlspecialchars($user['email']); ?></p>
                <!-- Add more user info here -->

                <!-- Edit Profile Button -->
                <a href="<?= base_url('profile/edit') ?>" class="btn btn-warning">Edit Profile</a>
            </div>
        </div>

        <a href="<?= base_url('kanavuhelp/logout'); ?>" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
