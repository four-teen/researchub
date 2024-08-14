<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CODEIGNITER 4 TRAINING</title>
    <link rel="stylesheet" href="<?= base_url()?>public/assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-info">
        <div class="container-fluid"><a class="navbar-brand" href="#"><strong>CodeIgniter 4 Training</strong></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container d-lg-flex d-xxl-flex justify-content-lg-center justify-content-xxl-center">
        <div>
            <h1 class="text-center mt-3">Delete User</h1>
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <?= validation_list_errors() ?>
                    <form action="<?= base_url()?>user/delete/<?= set_value('userid') ?>" method="POST">
                        <input type="hidden" name="userid" value="<?= set_value('userid') ?>">
                        <div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group m-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="lastname" value="<?= set_value('lastname') ?>" readonly>
                                        <p class="text-danger"><?= validation_show_error('lastname')?></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group m-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="firstname" value="<?= set_value('firstname') ?>"readonly>
                                        <p class="text-danger"><?= validation_show_error('firstname')?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group m-3">
                                        <label class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" name="middlename" value="<?= set_value('middlename') ?>"readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group m-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>"readonly>
                                        <p class="text-danger"><?= validation_show_error('username')?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center align-items-xl-center mt-3">
                            <p class="text-danger">
                                Do you want to delete this user?
                            </p>
                            <button class="btn btn-danger  m-1" type="submit">Proceed</button>
                            <a href="<?= base_url('user') ?>" class="btn btn-primary text-bg-danger m-1" type="button">Back</a>
                        </div>                        
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>