<?php
    include '../component/sidebar.php';
    
    $user = $_SESSION['user'];
    $image = base64_encode($user['foto']);
    $name = $user['name'];
    $email = $user['email'];
    $password = $user['passwords'];

    if($user['name'] == "admin"){
      
        echo'
        <hr>
            <div class="container p-3 m-4 h-100">
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                <h4>Profile Admin</h4>
                                    <hr>
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="data:image/jpeg;base64,'.$image.'" alt=""" class="rounded-circle p-1 bg-primary" width="200">
                                            <p class="mb-2"></p>
                                            <p class="fw-bold fs-4 mb-2 ">ADMIN</p>
                                            <p class="text-muted font-size-sm">ATMA JAYA YOGYAKARTA</p>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary" href="./editProfileAdminPage.php" role="button">Edit Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
    } else {
      
        echo'
        <hr>
            <div class="container p-3 m-4 h-100">
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                <h4>Profile</h4>
                                    <hr>
                                    <div class="d-flex flex-column align-items-center text-center">
                                    <img src="data:image/jpeg;base64,'.$image.'" alt=""" class="rounded-circle p-1 bg-primary" width="200">
                                        <div class="mt-3">
                                            <h4>'.$user['name'].'</h4>
                                            <p class="text-secondary mb-1">Mahasiswa</p>
                                            <p class="text-muted font-size-sm">ATMA JAYA YOGYAKARTA</p>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                        <input class="form-control bg-transparent" id="name" name="name" aria-describedby="emailHelp" value="'.$user['name'].'" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                        <input class="form-control bg-transparent" id="email" name="phonenum" aria-describedby="emailHelp" value="'.$user['email'].'" disabled>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary" href="./editProfileUserPage.php" role="button">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
        body{
            background: #f7f7ff;
            margin-top:20px;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }
        .me-2 {
            margin-right: .5rem!important;
        }
        </style>
        ';
        
    }
    
?>
