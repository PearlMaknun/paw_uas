<?php
  include '../controller/aksi_tarif.php';
?>

<div class="panel panel-primary">
  <div class="panel-heading">
    Data Tarif
  </div>
    <div class="panel-body">
      <form method="post" action="../controller/aksi_tarif.php">
        <label>Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Tarif" style="width: 300px" />
        <br/>
        <label>Tarif/Jam</label>
        <input type="text" name="harga" id="harga" class="form-control" placeholder="Jumlah Tarif/Jam" style="width: 300px" />
        <br/>
        <br/>
        <input type="submit" name="tambah" id="tambah" value="Simpan" class="btn btn-primary" />
      </form>
    </div>
</div>