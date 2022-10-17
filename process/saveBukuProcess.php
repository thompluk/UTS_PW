<?php
if(isset($_POST['save'])){
        include('../db.php');
        session_start();

        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $stok = $_POST['stok'];
        
        $gambar = $_FILES['gambar']['name'];
        $location_temp = $_FILES['gambar']['tmp_name'];
        $uploads_dir = 'uploads/'.$gambar;

        move_uploaded_file($location_temp,$uploads_dir);
        // $gambar = file_get_contents($_POST['gambar']);

        $query = mysqli_query($con,
            "INSERT INTO buku(judul, penulis, tahun_terbit, stok, gambar) 
                VALUES
            ('$judul', '$penulis', '$tahun_terbit', '$stok', '$gambar')")
                or die(mysqli_error($con));

        if($query){
            echo
            '<script>
            alert("Create Buku Success");
            window.location = "../page/listBukuPage.php"
            </script>';
        }else{
            echo
            '<script>
            alert("Create Buku Failed");
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