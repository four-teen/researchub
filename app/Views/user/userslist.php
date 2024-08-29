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
            <h1 class="mt-3">Manage Users</h1>
            <hr>
            <div class="">
                <div class="card-body">
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="card-title mb-0">List of Users</h4>
    <a href="<?= base_url('user/add') ?>" class="btn btn-primary">Add User</a>
</div>

 <?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
 <?php endif; ?>
 <?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
 <?php endif; ?>
                    <div class="table-responsive table table-bordered">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="white-space: nowrap" width="1%">User ID</th>
                                    <th>Last Name</th>
                                    <th>Middle Name</th>
                                    <th>First Name</th>
                                    <th>Username</th>
                                    <th>Date Registered</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
$count = 0;
                                foreach($Users as $user):
                                     $count++;
                                    echo'
                                <tr>
                                    <td width="1%" class="text-end">'.$count.'.</td>
                                    <td width="1%" class="text-center">'.$user-> userid.'</td>
                                    <td>'.strtoupper($user->lastname).'</td>
                                    <td>'.strtoupper($user->middlename).'</td>
                                    <td>'.strtoupper($user->firstname).'</td>
                                    <td>'.strtoupper($user->username).'</td>
                                    <td>'.date('F d, Y h:i', strtotime($user->entrydate)).'</td>
                                    <td style="white-space:nowrap" width="1%">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <a type="button" href="'.base_url().'user/edit/'.md5("edit".$user->userid).'" class="btn btn-danger">Edit</a>
                                        <a type="button" href="'.base_url().'user/delete/'.md5("delete".$user->userid).'" class="btn btn-warning">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            ';
                                endforeach ;?>

                            </tbody>
                        </table>
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