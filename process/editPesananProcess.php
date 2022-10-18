<?php
if (isset($_POST['edit'])) {

    include('../db.php');
    $id = $_GET['id'];

    $nama_pemesan = $_POST['nama_pemesan'];
    $tipe_meja = implode(", ", $_POST["tipe_meja"]);
    
    $query = mysqli_query(
        $con,
        "UPDATE pemesanan SET nama_pemesan = '$nama_pemesan', tipe_meja = '$tipe_meja' WHERE id='$id'"
    )
        or die(mysqli_error($con)); 

    if ($query) {
        echo
        '<script>
            alert("Edit Pemesanan Tempat Success"); window.location = "../page/pesanTempatPage.php"
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