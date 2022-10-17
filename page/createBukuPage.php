<?php
include '../component/sidebar.php';
include( '../db.php');

?>


    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 10px
    solid #114ec88d; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);">

        <div class="body d-flex justify-content-between">
            <h4>TAMBAH BUKU</h4>
        </div>
        <hr>
        <form action="../process/saveBukuProcess.php" method="post">          
            <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" id="judul" name="judul" class="form-control inputstyle" >
            <br>

            <label for="penulis" class="form-label">Penulis</label>
                <input type="text" id="penulis" name="penulis" class="form-control inputstyle">
            <br>

            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="text" id="tahun_terbit" name="tahun_terbit" class="form-control inputstyle">
            <br>

            <label for="stok" class="form-label">stok</label>
                <input type="text" id="stok" name="stok" class="form-control inputstyle">
            <br>

            <label for="gambar" class="form-label">Gambar</label>
                <input type="text" id="gambar" name="gambar" class="form-control inputstyle">
            <br>                           
            <button type="submit" class="btn btn-success" style="float: right" name="save">CONFIRM</button>
        </form>        
    </div>