<?php
include '../component/sidebar.php';

$id = $_GET['id'];

$qry = mysqli_query($con,"SELECT * from pegawai where id='$id'"); 

$data = mysqli_fetch_assoc($qry);

$nama = $data["nama"];
$telepon = $data["telepon"];
$_SESSION['roles'] =$data["role"];

?>

<div class="container p-3 m-4 h-100"
  style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <h4>Edit Pegawai</h4>
  <hr>
  <form action="../process/editPegawaiProcess.php?id=<?php echo $id; ?>" method="post">
    
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input class="form-control" id="nama" name="nama" value="<?php echo (isset($nama)) ? $nama: ''?>"
            aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Telepon</label>
      <input class="form-control" id="telepon" name="telepon"
        value=" <?php echo (isset($telepon)) ? $telepon: ''?>" aria-describedby="emailHelp">
    </div>

    <div class="multi_select_box">
      <label for="role" class="form-label">Role</label>
      <div class="mb-3">
        <select name=" role[]" id="role" class="form-control" aria-label="multiple select example" 
                value=
                <?php
                    $array = array("Penjaga", "Admin", "Layanan");
                    session_start();
                    $pilihMeja = $_SESSION['roles'];
                    foreach($array as $value=>$nama)
                    {
                        if($nama == $pilihMeja)
                        {
                             echo "<option selected value='".$nama."'>".$nama."</option>";
                        }
                        else
                        {
                             echo "<option value='".$nama."'>".$nama."</option>";
                        }
                    }
                ?>></select>
      </div>
    </div>

    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-primary" name="edit">Edit Pegawai</button>
    </div>
  </form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>