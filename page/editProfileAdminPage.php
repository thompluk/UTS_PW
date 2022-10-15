<?php
include '../component/sidebar.php';
include( '../db.php');

$query = mysqli_query($con, "SELECT * FROM users WHERE id = ". $_SESSION['user']['id']);
$user = mysqli_fetch_assoc($query);
?>

<hr>
    <div class="container p-3 m-4 h-100">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                        <form action="../process/editAdminProcess.php" method="post">
                          
                        <h4>Edit Profile</h4>
                            <hr>
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                
                                <p class="mb-2"></p>
                                    <p class="fw-bold fs-4 mb-2 ">ADMIN</p>
                                    <p class="text-muted font-size-sm">ATMA JAYA YOGYAKARTA</p>
                            </div>
                            <hr class="my-4">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Password</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input class="form-control" id="passwords" name="passwords" aria-describedby="emailHelp"?>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark" name="save">Save
                                <a href="../page/profileAdminPage.php"></a>
                            </button>
                            </div>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>