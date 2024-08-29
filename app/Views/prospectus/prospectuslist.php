<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AMS</title>
    <link href="<?= base_url()?>logo.png" rel="icon">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/bootstrap/css/bootstrap.min.css">
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
    <div class="container">
        <div>
            <h1 class="mt-3">Manage Prospectus</h1>
            <hr>
            <div class="">
                <div class="card-body">
<div class="d-flex justify-content-between align-items-center mb-3">

    <a href="<?= base_url('course/course_add') ?>" class="btn btn-primary">Add Subjects</a>
</div>

                    <div class="table-responsive table table-bordered">
                        <label for="course">Select Course</label>
<?php 
echo '<select name="course" id="course" class="form-control">';
foreach ($Courses as $course) {
    echo '<option value="'. $course->courseid .'">'. strtoupper($course->coursecode) .' - '. strtoupper($course->coursedesc) .'</option>';
}
echo '</select>';
?>
                    </div>
                    <div class="d-lg-flex d-xl-flex justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center">                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
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