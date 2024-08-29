<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AMS</title>
    <link rel="stylesheet" href="<?= base_url()?>public/assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url() ?>user/">Home</a>
        </li>
      </ul>
      <div class="d-flex align-items-center">
        <img src="<?= base_url() ?>user.jpg" alt="User Image" class="rounded-circle" width="40" height="40">
        <span class="ms-2"><?= strtoupper(session()->get('firstname')) ?></span>

      </div>
    </div>
  </div>
</nav>
    <div class="container d-lg-flex d-xxl-flex justify-content-lg-center justify-content-xxl-center">
        <div>
            <h1 class="mt-3">Add Course</h1>
            <hr>
            <div class="" style="width: 50rem;">
                <div class="card-body">
                    <?= validation_list_errors() ?>
                    <form action="<?= base_url()?>course/course_add" method="POST">
                        <div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group m-3">
                                        <label class="form-label">Coure Code</label>
                                        <input type="text" class="form-control" name="coursecode" value="<?= set_value('coursecode') ?>">
                                        <p class="text-danger"><?= validation_show_error('coursecode')?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group m-3">
                                        <label class="form-label">Course Description</label>
                                        <input type="text" class="form-control" name="coursedesc" value="<?= set_value('coursedesc') ?>">
                                        <p class="text-danger"><?= validation_show_error('coursedesc')?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center align-items-xl-center mt-3">
                            <button class="btn btn-primary text-bg-success m-1" type="submit">Save</button>
                            <a href="<?= base_url('course/courseslist') ?>" class="btn btn-primary text-bg-danger m-1" type="button">Cancel</a>
                        </div>                        
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>