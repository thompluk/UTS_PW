<?php
if(isset($_POST['save'])){
        include('../db.php');
        session_start();

        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $stok = $_POST['stok'];
        $gambar = addslashes(@file_get_contents($_FILES['gambar']['tmp_name']));

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