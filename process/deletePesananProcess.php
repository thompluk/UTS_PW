<?php
session_start();
if(isset($_GET['id'])){
    include ('../db.php');
    $id = $_GET['id'];
    $queryDelete = mysqli_query($con, "DELETE FROM pemesanan WHERE id='$id'") or die(mysqli_error($con));
     if($queryDelete){
        echo
        '<script>
    alert("Berhasil menghapus reservasi"); window.location = "../page/pesanTempatPage.php"
</script>';
    }else{
        echo
        '<script>
    alert("Gagal menghapus reservasi"); window.location = "../page/pesanTempatPage.php"
</script>';
    }
}else {
    echo
    '<script>
window.history.back()
</script>';
}
?>