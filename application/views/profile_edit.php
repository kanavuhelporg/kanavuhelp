<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .update-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .avatar-preview {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 10px auto 20px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="update-container">
        <h2 class="text-center">Update Profile</h2>

        <!-- Current Avatar -->
        <img src="<?= base_url('uploads/' . $user['avatar']) ?>" alt="Avatar" class="avatar-preview">

        <!-- Update Form -->
        <?= form_open_multipart('user/update_profile'); ?>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= $user['username'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= $user['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">Upload New Avatar</label>
                <input type="file" name="avatar" id="avatar" class="form-control">
                <input type="hidden" name="current_avatar" value="<?= $user['avatar'] ?>">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Save Changes</button>
                <a href="<?= base_url('user/profile') ?>" class="btn btn-secondary">Cancel</a>
            </div>
        <?= form_close(); ?>
    </div>
</body>
</html>
