<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 10px
        solid #114ec88d; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
        0.19);">

<div class="body d-flex justify-content-between">
    <h4>LIST PEGAWAI</h4>
    <div class="content-menu ">
      <a href="./createPegawaiPage.php" style="color:#114ec88d" class="fa fa-plus-square"></a>
    </div>
  </div>

  <hr>
  <table class="table ">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Telepon</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
            $query = mysqli_query($con, "SELECT * FROM pegawai") or
die(mysqli_error($con));

            if (mysqli_num_rows($query) == 0) {
                echo '<tr> <td colspan="8"> Tidak ada data </td> </tr>';
            }else{
                $no = 1;
                while($data = mysqli_fetch_assoc($query)){
                echo'
                <tr>
                    <th scope="row">'.$no.'</th>
                    <td>'.$data['nama'].'</td>
                    <td>'.$data['telepon'].'</td>
                    <td>
                    <a href="./editPegawaiPage.php? id=' . $data['id'] . '"><i style="color: black" class="fa fa-edit fa-2x"></i></a>
                        <a href="../process/deletePegawaiProcess.php?id='.$data['id'].'"
                          onClick="return confirm ( \'Are you sure want to delete this data?\')">                          
                          <i style="color: red" class="fa fa-trash fa-2x"></i>
                        </a>
                    </td>
                </tr>';
            $no++;
            }
        }
        ?>
    </tbody>
  </table>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>