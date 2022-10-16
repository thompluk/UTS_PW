<?php
    if(isset($_POST['id_buku'])){
        include ('../db.php');
        session_start();
        $id_buku = $_POST['id_buku'];
        
        $queryDelete = mysqli_query($con, "DELETE FROM buku WHERE id='$id_buku'") or
        die(mysqli_error($con));
        
        if($queryDelete){
            echo
            '<script>
            alert("Delete Success"); 
            window.location = "../page/listBukuPage.php"
            </script>';
        }else{
            echo
            '<script>
            alert("Delete Failed"); window.location = "../page/listBukuPage.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
