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