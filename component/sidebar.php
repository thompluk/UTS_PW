<?php
session_start();
if (!$_SESSION['isLogin']) {
    header("location: ../page/loginPage.php");
}else {
    include('../db.php');
}

$id = $_SESSION['user']['id'];
$query = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'") or die(mysqli_error($con));
$user_login = mysqli_fetch_assoc($query);
$image = base64_encode($user_login['foto']);


echo '
<!Doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet" integrity="sha384-
            EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap"
            rel="stylesheet">
        <title>UTS</title>

        <style>
                *{
                    font-family: "Poppins"
                }

                .side-bar {
                    width: 260px;
                    background-color: #3a47ff;
                    min-height: 100vh;
                    box-shadow: -25px 0px 50px black;
                }

                a {
                    padding-left: 10px;
                    font-size: 13px;
                    text-decoration: none;
                    color: white;
                }
                .menu i {
                    padding-left: 20px;
                }

                .menu .content-menu {
                    padding: 9px 7px;
                }

                .isActive {
                    background-color: #557aff !important;
                    border-left: 8px solid #002685;
                }

                i{
                    color:white;
                }

                hr{
                    border-top: 5px rgb(255, 255, 255);
                }

                div.content {
                    margin-left: 260px;
                    padding: 1px 16px;
                    height: 1000px;
                }

        </style>
    </head>

    <body>
        <aside>
            <div class="d-flex">
                <div class="side-bar">
                    <h2 class="text-light text-center pt-3">
                        <div class="fa fa-book-atlas"></div> E-LIBRARY</h2>
                        <hr>
                            <div class="menu" id="sideBar">
                                <div class="content-menu" >
                                    <i class="fa fa-book"></i>
                                    <a href="./listbukuPage.php" style="font-weight:500"
                                    >List Buku</a>
                                </div>
                                <div class="content-menu" >
                                    <i class="fa fa-sticky-note"></i>
                                    <a href="./peminjamanPage.php" style="font-weight:500">Peminjaman</a>
                                </div>';
                                if($user_login['name'] == "admin"){
                                    echo'
                                    <div class="content-menu" >
                                        <i class="fa fa-person"></i>
                                        <a href="./pegawaiPage.php" style="font-weight:500">Pegawai</a>
                                    </div>';
                                }
                                echo'
                                <div class="content-menu" >
                                    <i class="fa fa-table"></i>
                                        <a href="./pesanTempatPage.php" style="font-weight:500">Reservasi Meja</a>
                                </div>
                                <div class="content-menu" >
                                    <i class="fa fa-user"></i>
                                        <a href="./profileUsersPage.php" style="font-weight:500">Profile</a>
                                </div>
                                <div class="content-menu" >
                                    <i class="fa fa-arrow-right-from-bracket"></i>
                                    <a href="../process/logoutProcess.php" style="font-weight:500">Logout</a>
                                </div>
                            </div>                      
                        <hr>
                            <h5  class="text-left text-light m-3"><img src="data:image/jpeg;base64,'.$image.'" alt=""" class="rounded-circle" style="width: 50px; height: 50px;">
                            '.$user_login['name'].'</h5>                            
                        <hr>
                </div>
                '
                ?>
