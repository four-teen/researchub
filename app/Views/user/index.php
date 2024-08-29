<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AMS</title>
    <link href="<?= base_url()?>logo.png" rel="icon">
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Manage Accounts</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Management
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Manage Accounts</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <div class="d-flex align-items-center">
        <img src="<?= base_url() ?>user.jpg" alt="User Image" class="rounded-circle" width="40" height="40">
        <span class="ms-2"><?= strtoupper(session()->get('firstname')) ?></span>
        <div class="dropdown ms-3">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-caret-down-fill"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-3 py-3">
            <div class="card h-100">
              <img src="<?= base_url() ?>img1.png" class="card-img-top" alt="..." width="90px;">
              <div class="card-body">
                <h5 class="card-title">Manage Users</h5>
                <p class="card-text">Manage user profiles, and update information.
              </div>
              <div class="card-body">
                <a class="btn btn-success" href="<?= base_url('user/userslist') ?>" class="card-link">Manage</a>
              </div>
            </div>            
        </div>
        <div class="col-lg-3 py-3">
            <div class="card h-100">
              <img src="<?= base_url() ?>img2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Manage Courses</h5>
                <p class="card-text">Manage academic courses and other information related to subjects.
              </div>
              <div class="card-body">
                <a class="btn btn-success" href="<?= base_url('course/courseslist') ?>" class="card-link">Manage</a>
              </div>
            </div>            
        </div>
        <div class="col-lg-3 py-3">
            <div class="card h-100">
              <img src="<?= base_url() ?>img3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Manage Subjects</h5>
                <p class="card-text">Manage academic subjects and other information related to subjects.
              </div>
              <div class="card-body">
                <a class="btn btn-success" href="<?= base_url('subject/subjectslist') ?>" class="card-link">Manage</a>
              </div>
            </div>            
        </div>
        <div class="col-lg-3 py-3">
            <div class="card h-100">
              <img src="<?= base_url() ?>img5.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Manage Prospectus</h5>
                <p class="card-text">Manage students prospectus and other information related to subjects.
              </div>
              <div class="card-body">
                <a class="btn btn-success" href="<?= base_url('prospectus/prospectuslist') ?>" class="card-link">Manage</a>
              </div>
            </div>            
        </div>
        <div class="col-lg-3 py-3">
            <div class="card h-100">
              <img src="<?= base_url() ?>img4.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Manage Students</h5>
                <p class="card-text">Manage students and other information related to subjects.
              </div>
              <div class="card-body">
                <a class="btn btn-success" href="<?= base_url('prospectus/prospectuslist') ?>" class="card-link">Manage</a>
              </div>
            </div>            
        </div>
    </div>
</div>

    <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<script>

        function get_mess(){
            Swal.fire({
            title: "Success!",
            text: "<?= session()->get('success') ?>",
            icon: "success"
            }); 
        }    
</script>
</html>