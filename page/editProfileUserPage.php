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
                        <form action="../process/editProfileUserPage.php" method="post">
                          
                        <h4>Edit Profile</h4>
                            <hr>
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                
                                <div class="mt-3">
                                    <h4>(Nama Login)</h4>
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
                                <input class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $user['name']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone Number</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input class="form-control" id="phonenum" name="phonenum" aria-describedby="emailHelp" value="<?php echo $user['phonenum']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $user['email']?>">
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark" name="save">Save
                                <a href="../page/profileUserPage.php"></a>
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