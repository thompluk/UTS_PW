<?php

if (isset($_POST['register'])) {

    include('../db.php');

    $nama = $_POST['nama_pemesan'];
    $tipe_meja = implode(", ", $_POST["tipe_meja"]);
    
    $query = mysqli_query(
        $con,
        "INSERT INTO pemesanan(nama_pemesan, tipe_meja)
 VALUES
 ('$nama', '$tipe_meja')"
    )
        or die(mysqli_error($con));

    if ($query) {
        echo
        '<script>
            alert("Create Series Success"); window.location = "../page/pesanTempatPage.php"
            </script>';
    } else {
        echo
        '<script>
            alert("Create Series Failed");
            </script>';
    }
} else {
    echo
    '<script>
 window.history.back()
 </script>';
}