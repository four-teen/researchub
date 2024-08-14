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
            <h1 class="text-center mt-3">Edit User</h1>
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group m-3"><label class="form-label">Last Name</label><input type="text" class="form-control"></div>
                            </div>
                            <div class="col">
                                <div class="form-group m-3"><label class="form-label">First Name</label><input type="text" class="form-control"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group m-3"><label class="form-label">Middle Name</label><input type="text" class="form-control"></div>
                            </div>
                            <div class="col">
                                <div class="form-group m-3"><label class="form-label">Username</label><input type="text" class="form-control"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group m-3"><label class="form-label">Password</label><input type="text" class="form-control"></div>
                            </div>
                            <div class="col">
                                <div class="form-group m-3"><label class="form-label">Confirm Password</label><input type="text" class="form-control"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center align-items-xl-center mt-3">
                        <button class="btn btn-primary text-bg-success m-1" type="button">Save</button>
                        <a href="<?= base_url('user') ?>" class="btn btn-primary text-bg-danger m-1" type="button">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>