<?php
    include '../component/sidebar.php';
    include( '../db.php');

    $query_user = mysqli_query($con, "SELECT * FROM users WHERE id = ". $_SESSION['user']['id'])or die(mysqli_error($con));
    $user = mysqli_fetch_assoc($query_user);

    $query_buku = mysqli_query($con, "SELECT * FROM buku") or die(mysqli_error($con));
    $image = base64_encode($user['foto']);


    // $judul = $data['judul'];
    // $penulis = $data['penulis'];
    // $tahun_terbit= $data['tahun_terbit'];
    // $stok= $data['stok'];
    // $gambar= $data['gambar'];

    //$row= mysqli_num_rows($query_buku);

    if($user['name'] == "admin"){
      
        echo'
        <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 10px
        solid #114ec88d; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
        0.19);">
        
            <div class="body d-flex justify-content-between">
                <h4>LIST BUKU</h4>
            </div>
            <hr>
            
                <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Gambar</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                ';    
                   
                    if (mysqli_num_rows($query_buku) == 0) {
                        echo'
                        <tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }else{
                        $no = 1;
                        while($data = mysqli_fetch_assoc($query_buku)){
                        echo'        
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['judul'].'</td>
                            <td>'.$data['penulis'].'</td>
                            <td>'.$data['tahun_terbit'].'</td>
                            <td>'.$data['stok'].'</td>
                            <td><img src="../process/uploads/'.$data['gambar'].'" alt="pic" style="width: 100px; height: 100px;"></td>                            <td>
                            <td>
                                <form action="../page/editBukuPage.php" method="post">
                                    <input type="hidden" id="id_buku" name="id_buku" value="'.$data['id'].'"> 
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </form>
                            </td>
                            <td>
                            <form action="../process/deleteBukuProcess.php" method="post">
                                <input type="hidden" id="id_buku" name="id_buku" value="'.$data['id'].'"> 
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>           
                            </td>
                        </tr>';
                        $no++;
                        }
                    }
                    echo' 
                </tbody>
            </table>
            <form action="../page/createBukuPage.php" method="post">
                <button type="submit" class="btn btn-success" name="create">Tambah Buku</button>
            </form>
        </div>
        </aside>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        </body>
        </html> 
        ';
    } else {
      
        echo'
        <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 10px
        solid #114ec88d; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
        0.19);">
        
            <div class="body d-flex justify-content-between">
                <h4>LIST BUKU</h4>
            </div>
            <hr>
            
                <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Gambar</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                ';    
                   
                    if (mysqli_num_rows($query_buku) == 0) {
                        echo'
                        <tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }else{
                        $no = 1;
                        while($data = mysqli_fetch_assoc($query_buku)){
                        echo'        
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['judul'].'</td>
                            <td>'.$data['penulis'].'</td>
                            <td>'.$data['tahun_terbit'].'</td>
                            <td>'.$data['stok'].'</td>
                            <td><img src="../process/uploads/'.$data['gambar'].'" alt="pic" style="width: 100px; height: 100px;"></td>                            <td>
                            ';
                            if($data['stok'] == 0){
                                echo'                                
                                        <form action="../page/pinjamPage.php" method="post"> 
                                            <input type="hidden" id="id_buku" name="id_buku" value="'.$data['id'].'">
                                            <button type="submit" class="btn btn-primary disabled">PINJAM</button>
                                        </form>
                                    </td>
                                </td>
                                </tr>';
                            }else{
                                echo'
                                        <form action="../page/pinjamPage.php" method="post"> 
                                            <input type="hidden" id="id_buku" name="id_buku" value="'.$data['id'].'">
                                        <button type="submit" class="btn btn-primary">PINJAM</button>
                                    </form>
                                </td>
                            </td>
                            </tr>';
                            }
 
                        $no++;
                        }
                    }
                    echo' 
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
        ';
    }
    
?>

