<?php
    include '../component/sidebar.php'  
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 10px
        solid #114ec88d; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
        0.19);">

    <div class="body d-flex justify-content-between">
        <h4>KONFIRMASI PENGEMBALIAN</h4>
    </div>

    <?php

        include '../db.php';
        if(isset($_POST['id'])){
            include ('../db.php');
            $id_peminjaman = $_POST['id'];
            $query_peminjaman = mysqli_query($con, "SELECT * FROM peminjaman WHERE id='$id_peminjaman'") or die(mysqli_error($con));
            $data_peminjaman = mysqli_fetch_assoc($query_peminjaman);

            $id_buku = $data_peminjaman['id_buku'];
            $id_user = $data_peminjaman['id_user'];

            $query_buku = mysqli_query($con, "SELECT * FROM buku WHERE id='$id_buku'") or die(mysqli_error($con));
            $query_user = mysqli_query($con, "SELECT * FROM users WHERE id='$id_user'") or die(mysqli_error($con));
            $data_user = mysqli_fetch_assoc($query_user);
            $data_buku = mysqli_fetch_assoc($query_buku);

            echo
            '<hr>
                <form action="../process/pengembalianProcess.php" method="post">          
                    <label for="name" class="form-label">Nama Peminjam</label>
                        <input type="text" id="name" name="name" class="form-control inputstyle" value="'.$data_user['name'].'" readonly>
                    <br>

                    <label for="phone" class="form-label">Email Peminjam</label>
                        <input type="text" id="email" name="email" class="form-control inputstyle" value="'.$data_user['email'].'" readonly>
                    <br>

                    <label for="membership" class="form-label">Judul Buku</label>
                        <input type="text" id="judul" name="judul" class="form-control inputstyle" value="'.$data_buku['judul'].'" readonly>
                    <br>

                    <label for="membership" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" id="tgl_peminjaman" name="tgl_peminjaman" class="form-control inputstyle" value="'.$data_peminjaman['tgl_peminjaman'].'" readonly>
                    <br>

                    <label for="membership" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" id="tgl_pengembalian" name="tgl_pengembalian" class="form-control inputstyle" value="'.$data_peminjaman['tgl_pengembalian'].'" readonly>
                    <br>                    
                        <input type="hidden" id="id_peminjaman" name="id_peminjaman" value="'.$data_peminjaman['id'].'">

                    <button type="submit" class="btn btn-success" style="float: right" name="confirm">KONFIRMASI PENGEMBALIAN</button>
                </form>
                
            </div>                                                                                                                                                      
            </aside>
            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            </body>';
            
        }else {
            echo
            '<script>
            window.history.back()
            </script>';
        }

        
    ?>
