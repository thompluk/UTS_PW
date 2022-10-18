<?php
if (isset($_POST['edit'])) {

    include('../db.php');
    $id = $_GET['id'];

    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];


    $query = mysqli_query(
        $con,
        "UPDATE pegawai SET nama = '$nama', telepon = '$telepon' WHERE id='$id'"
    )
        or die(mysqli_error($con)); 

    if ($query) {
        echo
        '<script>
            alert("Edit Series Success"); window.location = "../page/pegawaiPage.php"
            </script>';
    } else {
        echo
        '<script>
            alert("Edit Series Failed");
            </script>';
    }
} else {
    echo
    '<script>
 window.history.back()
 </script>';
}