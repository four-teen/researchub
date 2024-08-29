<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AMS</title>
    <link href="<?= base_url()?>logo.png" rel="icon">
    <link rel="stylesheet" href="<?= base_url()?>public/assets/bootstrap/css/bootstrap.min.css">
</head>

<body>

<div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
    <div class="py-5" style="width: 30rem;">
        <div class="card-body text-center">
            <h1 class="mb-4">AMS</h1>
            <?= validation_list_errors() ?>
            <form action="<?= base_url() ?>login" method="POST">
                <div class="form-group mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" autofocus>
                    <p class="text-danger"><?= validation_show_error('username') ?></p>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="<?= set_value('password') ?>">
                    <p class="text-danger"><?= validation_show_error('password') ?></p>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
    <footer class="mt-5 text-center">
        <p>&copy; <?= date('Y') ?> Academic Management System. All Rights Reserved.</p>
    </footer>
</div>

    <script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>