<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 10px
solid #114ec88d; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">

    <div class="body d-flex justify-content-between">
        <h4>PEMINJAMAN</h4>
    </div>
    <hr>
        <table class="table ">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama User</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Tanggal Peminjaman</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $query = mysqli_query($con, "SELECT * FROM peminjaman") or die(mysqli_error($con));
              
            if (mysqli_num_rows($query) == 0) {
                echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
            }else{
                $no = 1;
                while($data = mysqli_fetch_assoc($query)){
                    $id_user = $data['id_user'];
                    $id_buku = $data['id_buku'];
                    $query_user = mysqli_query($con, "SELECT * FROM users WHERE id = '$id_user'") or die(mysqli_error($con));
                    $query_buku = mysqli_query($con, "SELECT * FROM buku WHERE id = '$id_buku'") or die(mysqli_error($con));
                    $data_user = mysqli_fetch_assoc($query_user);
                    $data_buku = mysqli_fetch_assoc($query_buku);

                    echo'
                    <tr>
                    <th scope="row">'.$no.'</th>
                    <td>'.$data_user['name'].'</td>
                    <td>'.$data_buku['judul'].'</td>
                    <td>'.$data['tgl_peminjaman'].'</td>
                    <td>'.$data['tgl_pengembalian'].'</td>
                    ';
                    if($data['status'] == 1){
                        echo'
                            <td>Belum dikembalikan</td>
                        </tr>';    
                    }else{
                        echo'
                            <td>Sudah dikembalikan</td>
                        </tr>';                         
                    }
                    
                    $no++;
                }
            }
        ?>
        </tbody>
    </table>
</div>
</aside>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>
</html>
<!-- testtest -->