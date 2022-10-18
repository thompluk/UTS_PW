<?php

if (isset($_POST['register'])) {

    include('../db.php');
    
    $name = $_POST['nama'];
    $telepon = $_POST['telepon'];
    
    $query = mysqli_query(
        $con,
        "INSERT INTO pegawai(nama, telepon)
 VALUES
 ('$name','$telepon')"
    )
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

    if ($query) {
        echo
        '<script>
            alert("Create Pegawai Success"); window.location = "../page/pegawaiPage.php"
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