<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 10px
        solid #114ec88d; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
        0.19);">

<div class="body d-flex justify-content-between">
    <h4>LIST RESERVASI MEJA</h4>
    <div class="content-menu ">
    </div>
  </div>

  <hr>
  <table class="table ">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Pemesan</th>
        <th scope="col">Tipe Meja</th>
        <th scope="col">Tanggal Reservasi</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
            $query = mysqli_query($con, "SELECT * FROM pemesanan") or
die(mysqli_error($con));

            if (mysqli_num_rows($query) == 0) {
                echo '<tr> <td colspan="8"> Tidak ada data </td> </tr>';
            }else{
                $no = 1;
                while($data = mysqli_fetch_assoc($query)){
                echo'
                <tr>
                    <th scope="row">'.$no.'</th>
                    <td>'.$data['nama_pemesan'].'</td>
                    <td>'.$data['tipe_meja'].'</td>
                    <td>'.$data['tgl_reservasi'].'</td>
                    ';
                   if($_SESSION['user']['name'] == "admin"){
                    echo'
                    <td>
                    <a href="./editPesananPage.php? id=' . $data['id'] . '"><i style="color: black" class="fa fa-edit fa-2x"></i></a>
                        <a href="../process/deletePesananProcess.php?id='.$data['id'].'"
                          onClick="return confirm ( \'Anda yakin ingin menghapus reservasi?\')">                          
                          <i style="color: red" class="fa fa-trash fa-2x"></i>
                        </a>
                    </td>';
                   } 
                    echo'
                </tr>';
            $no++;
            }
        }
        ?>
    </tbody>
  </table>
  <?php
    if($_SESSION['user']['name'] != "admin"){
          echo'
          <form action="../page/createPesananPage.php" method="post">
            <button type="submit" class="btn btn-success" name="create">Reservasi</button>
          </form>';
        }
  ?>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>