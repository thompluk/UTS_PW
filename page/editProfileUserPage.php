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
                        <form action="../process/editUserProcess.php" method="post">
                          
                        <h4>Edit Profile</h4>
                            <hr>
                            <div class="d-flex flex-column align-items-center text-center">
                                
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
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $user['email']?>">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark" name="save">Save
                                <a href="../page/profileUserPage.php"></a>
                            </button>
                            
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>