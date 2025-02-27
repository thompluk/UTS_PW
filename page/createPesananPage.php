<?php
include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 10px
        solid #114ec88d; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
        0.19);">

    <h4>RESERVASI MEJA</h4>
    <hr>
    <form action="../process/createPesananProcess.php" method="post">

        <div class="mb-3">
            <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
            <input class="form-control" id="nama_pemesan" name="nama_pemesan" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipe Meja</label>
            <select class="form-select" aria-label="multiple select example" name="tipe_meja[]" id="tipe_meja" required>
                
                <option value="Persegi">Persegi</option>
                <option value="Lingkaran">Lingkaran</option>
                <option value="Persegi Panjang">Persegi Panjang</option>
                <option value="Lesehan">Lesehan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tgl_reservasi" class="form-label">Tanggal Reservasi</label>
            <input type="date" class="form-control" id="tgl_reservasi" name="tgl_reservasi" required>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="register">Pesan</button>
        </div>
    </form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>