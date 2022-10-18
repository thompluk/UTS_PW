<?php
include '../component/sidebar.php';

$id = $_GET['id'];

$qry = mysqli_query($con,"SELECT * from pemesanan where id='$id'");

$data = mysqli_fetch_assoc($qry);

$nama_pemesan = $data['nama_pemesan'];
$tgl_reservasi = $data['tgl_reservasi'];
$_SESSION['tipe_meja_pemesanan'] =$data["tipe_meja"];

?>

<div class="container p-3 m-4 h-100"
  style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <h4>Edit Pesanan</h4>
  <hr>

  <form action="../process/editPesananProcess.php?id=<?php echo $id; ?>" method="post">
    <div class="mb-3">
      <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
      <input class="form-control" id="nama_pemesan" name="nama_pemesan" value="<?php echo (isset($nama_pemesan)) ? $nama_pemesan: ''?>"
        aria-describedby="emailHelp">
    </div>

    <div class="multi_select_box">
      <label for="tipe_meja" class="form-label">Tipe Meja</label>
      <div class="mb-3">
        <select name=" tipe_meja[]" id="tipe_meja" class="form-control" aria-label="multiple select example" 
                value=
                <?php
                    $array = array("Persegi", "Lingkaran", "Persegi Panjang", "Lesehan");
                    session_start();
                    $pilihMeja = $_SESSION['tipe_meja_pemesanan'];
                    foreach($array as $value=>$nama_pemesan)
                    {
                        if($nama_pemesan == $pilihMeja)
                        {
                             echo "<option selected value='".$nama_pemesan."'>".$nama_pemesan."</option>";
                        }
                        else
                        {
                             echo "<option value='".$nama_pemesan."'>".$nama_pemesan."</option>";
                        }
                    }
                ?>></select>
    </div>

    <div class="mb-3">
      <label for="tgl_reservasi" class="form-label">Tanggal Pemesanan</label>
      <input type="date" class="form-control" id="tgl_reservasi" name="tgl_reservasi" value="<?php echo (isset($tgl_reservasi)) ? $tgl_reservasi: ''?>"
        aria-describedby="emailHelp">
    </div>

    <br>
    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-primary" name="edit">Edit Pesanan</button>
    </div>
  </form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>