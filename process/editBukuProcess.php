<?php
    if(isset($_POST['save'])){
        include('../db.php');
        session_start();
        $id = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $stok = $_POST['stok'];
        
        $gambar = $_FILES['gambar']['name'];
        $location_temp = $_FILES['gambar']['tmp_name'];
        $uploads_dir = 'uploads/'.$gambar;

        move_uploaded_file($location_temp,$uploads_dir);

        $query = mysqli_query($con, "UPDATE buku SET judul = '$judul', penulis = '$penulis', tahun_terbit = '$tahun_terbit', stok = '$stok', gambar = '$gambar'
            WHERE id = '$id';") or die(mysqli_error($con));

        if($query){
            echo
            '<script>
            alert("Edit Success");
            window.location = "../page/listBukuPage.php"
            </script>';
        }else{
            echo
            '<script>
            alert("Edit Failed");
            window.location = "../page/listBukuPage.php"
            </script>';
        }
    }else{
        echo
        '<script>
        window.history.back()
        </script>';
    }

?>