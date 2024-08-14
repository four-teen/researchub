<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CODEIGNITER 4 TRAINING</title>
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
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
    <div class="container">
        <div>
            <h1 class="text-center mt-3">CRUD OPERATION</h1>
            <h4>Welcome <?= session() -> get('firstname') ?></h4>
            <a href="<?= base_url('logout') ?>">Logout</a>

                <?php 
                    $x = session()->get('success');

                    if($x){
                        echo 
                        ''?>
                            <div class="alert alert-success">
                                <?= $x ?>
                            </div>
                        <?php echo'';
                    }


// if ($x) { // Check if there is a success message
//     echo "<script>
//         document.addEventListener('DOMContentLoaded', function() {
//             get_mess('{$x}');
//         });
//     </script>";
// }
                 ?>



            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">List of Users</h4>
                    <div class="table-responsive table table-bordered">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Last Name</th>
                                    <th>Middle Name</th>
                                    <th>First Name</th>
                                    <th>Username</th>
                                    <th>Date Registered</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($Users as $user):
                                    echo'
                                <tr>
                                    <td width="1%" class="text-end">'.$user-> userid.'.</td>
                                    <td>'.strtoupper($user->lastname).'</td>
                                    <td>'.strtoupper($user->middlename).'</td>
                                    <td>'.strtoupper($user->firstname).'</td>
                                    <td>'.strtoupper($user->username).'</td>
                                    <td>'.date('F d, Y h:i', strtotime($user->entrydate)).'</td>
                                    <td style="white-space:nowrap" width="1%">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <a type="button" href="'.base_url().'user/edit/'.$user->userid.'" class="btn btn-danger">Edit</a>
                                        <a type="button" href="'.base_url().'user/delete/'.$user->userid.'" class="btn btn-warning">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            ';
                                endforeach ;?>

                            </tbody>
                        </table>
                    </div>
                    <div class="d-lg-flex d-xl-flex justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center">
                    <a href="<?= base_url('user/add') ?>" class="btn btn-primary">Add User</a>                        
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