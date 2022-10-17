<?php
session_start();

include ('../db.php');
$id_peminjaman = $_POST['id_peminjaman'];
$query_peminjaman = mysqli_query($con, "SELECT * FROM peminjaman WHERE id='$id_peminjaman'") 
                    or die(mysqli_error($con));
$query_update = mysqli_query($con, "UPDATE peminjaman SET status='0' WHERE id='$id_peminjaman'") 
                    or die(mysqli_error($con));
$data_peminjaman = mysqli_fetch_assoc($query_peminjaman); 
// $id_buku = $_POST['id_buku'];
// $id_user = $_POST['id_user'];

// $current_date = $_POST['tgl_peminjaman'];
// $return_date = $_POST['tgl_pengembalian'];
// $query = mysqli_query($con,"INSERT INTO peminjaman(id_user, id_buku, tgl_peminjaman, tgl_pengembalian, status)
//     VALUES
//     ('$id_user', '$id_buku', '$current_date', '$return_date', 1)") or die(mysqli_error($con));
if($query_update){
    
    $id_buku = $data_peminjaman['id_buku'];
    $query_stok = mysqli_query($con, "SELECT stok FROM buku WHERE id = '$id_buku'") or die(mysqli_error($con));
    $stok = mysqli_fetch_assoc($query_stok)['stok'];
    $new_stok = $stok+1;
    $update_stok = mysqli_query($con, "UPDATE buku SET stok = '$new_stok' WHERE id = '$id_buku';") or die(mysqli_error($con));

    echo
    '<script>
        alert("Pengembalian Berhasil"); window.location = "../page/peminjamanPage.php"
    </script>';
    }else{
    echo
    '<script>
        alert("Pengembalian Gagal"); window.location = "../page/listBukuPage.php"
    </script>';
    }
?>