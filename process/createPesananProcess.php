<?php

if (isset($_POST['register'])) {

    include('../db.php');

    $nama = $_POST['nama_pemesan'];
    $tipe_meja = implode(", ", $_POST["tipe_meja"]);
    $tgl_reservasi = $_POST['tgl_reservasi'];
    
    $query = mysqli_query(
        $con,
        "INSERT INTO pemesanan(nama_pemesan, tipe_meja, tgl_reservasi)
 VALUES
 ('$nama', '$tipe_meja', '$tgl_reservasi')"
    )
        or die(mysqli_error($con));

    if ($query) {
        echo
        '<script>
            alert("Meja berhasil direservasi"); window.location = "../page/pesanTempatPage.php"
            </script>';
    } else {
        echo
        '<script>
            alert("Meja gagal direservasi);
            </script>';
    }
} else {
    echo
    '<script>
 window.history.back()
 </script>';
}