<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-container {
            max-width: 500px;
            margin: 50px auto;
            text-align: center;
        }
        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h1>User Profile</h1>

        

        <!-- User Details -->
        <h3><?= $user['name'] ?></h3>
        <p>Email: <?= $user['email'] ?></p>
        

        <!-- Buttons -->
        <a href="<?= base_url('profile_edit') ?>" class="btn btn-primary">Update Profile</a>
        <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
