<?php
    session_start();
    if(isset($_POST['save'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $passwords = password_hash($_POST['passwords'], PASSWORD_DEFAULT);

        $query = mysqli_query($con,"UPDATE users SET passwords='$passwords' WHERE id = ". $_SESSION['user']['id']);

        if($query){
            echo
                '<script>
                alert("Edit Success"); 
                window.location = "../page/profileAdminPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("EditFailed");
                </script>';
        }
        
        }else{
        echo
            '<script>
            window.location = "../page/editProfileAdminPage.php"
            </script>';
    }
?>