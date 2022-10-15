<?php
include '../component/sidebar.php';
include( '../db.php');

$query = mysqli_query($con, "SELECT * FROM users WHERE id = ". $_SESSION['user']['id'])or
die(mysqli_error($con));
$user = mysqli_fetch_assoc($query);
?>

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
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                

                                    <p class="text-secondary mb-1">Admin</p>
                                    <p class="text-muted font-size-sm">ATMA JAYA YOGYAKARTA</p>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input class="form-control bg-transparent" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $user['name']?>" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone Number</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input class="form-control bg-transparent" id="phonenum" name="phonenum" aria-describedby="emailHelp" value="<?php echo $user['phone']?>" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input class="form-control bg-transparent" id="email" name="phonenum" aria-describedby="emailHelp" value="<?php echo $user['email']?>" disabled>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="./editProfileAdminPage.php" role="button">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>