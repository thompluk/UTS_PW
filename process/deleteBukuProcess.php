<?php
    if(isset($_POST['id_buku'])){
        include ('../db.php');
        session_start();
        $id_buku = $_POST['id_buku'];

        $query_check = mysqli_query($con, "SELECT * FROM peminjaman WHERE id_buku='$id_buku'") or
        die(mysqli_error($con));

        if(mysqli_num_rows($query_check) == 0){
            $queryDelete = mysqli_query($con, "DELETE FROM buku WHERE id='$id_buku'") or
            die(mysqli_error($con));
            
            if($queryDelete){
                echo
                '<script>
                alert("Hapus Sukses!"); 
                window.location = "../page/listBukuPage.php"
                </script>';
            }else{
                echo
                '<script>
                alert("Gagal Hapus"); window.location = "../page/listBukuPage.php"
                </script>';
            }
        }else{
            echo
            '<script>
            alert("Gagal Hapus\nNote: Buku masih dipinjam"); window.location = "../page/peminjamanPage.php"
            </script>';
        }

    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
