<?php
session_start();

include ('../db.php');
$id_buku = $_POST['id_buku'];
$id_user = $_POST['id_user'];

$current_date = $_POST['tgl_peminjaman'];
$return_date = $_POST['tgl_pengembalian'];
$query = mysqli_query($con,"INSERT INTO peminjaman(id_user, id_buku, tgl_peminjaman, tgl_pengembalian, status)
    VALUES
    ('$id_user', '$id_buku', '$current_date', '$return_date', 1)") or die(mysqli_error($con));
if($query){

    $query_stok = mysqli_query($con, "SELECT stok FROM buku WHERE id = '$id_buku'") or die(mysqli_error($con));
    $stok = mysqli_fetch_assoc($query_stok)['stok'];
    $new_stok = $stok-1;
    $update_stok = mysqli_query($con, "UPDATE buku SET stok = '$new_stok' WHERE id = '$id_buku';") or die(mysqli_error($con));

    echo
    '<script>
        alert("Menambah 1 Peminjaman"); window.location = "../page/listBukuPage.php"
    </script>';
    }else{
    echo
    '<script>
        alert("Peminjaman Gagal"); window.location = "../page/listBukuPage.php"
    </script>';
    }
?>