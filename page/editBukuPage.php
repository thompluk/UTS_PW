<?php
include '../component/sidebar.php';
?>


    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 10px
    solid #114ec88d; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);">

        <div class="body d-flex justify-content-between">
            <h4>UBAH BUKU</h4>
        </div>
        <hr>
        <?php
        include( '../db.php');
        $id_buku = $_POST['id_buku'];
        $query_buku = mysqli_query($con, "SELECT * FROM buku WHERE id='$id_buku'") or die(mysqli_error($con));
        $data_buku = mysqli_fetch_assoc($query_buku);
        
        echo'
        <form action="../process/editBukuProcess.php" method="post">          
            <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" id="judul" name="judul" class="form-control inputstyle" value="'.$data_buku['judul'].'">
            <br>

            <label for="penulis" class="form-label">Penulis</label>
                <input type="text" id="penulis" name="penulis" class="form-control inputstyle" value="'.$data_buku['penulis'].'">
            <br>

            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="text" id="tahun_terbit" name="tahun_terbit" class="form-control inputstyle" value="'.$data_buku['tahun_terbit'].'">
            <br>

            <label for="stok" class="form-label">stok</label>
                <input type="text" id="stok" name="stok" class="form-control inputstyle" value="'.$data_buku['stok'].'">
            <br>

            <label for="gambar" class="form-label">Gambar</label>
                <input type="text" id="gambar" name="gambar" class="form-control inputstyle" value="'.$data_buku['gambar'].'">
            <br>
            <input type="hidden" id="id_buku" name="id_buku" value="'.$data_buku['id'].'">                            
            <button type="submit" class="btn btn-success" style="float: right" name="save">CONFIRM</button>
        </form>
              
    </div>';
?> 