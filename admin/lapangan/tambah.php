<?php
  include '../controller/aksi_lapangan.php';
?>

<div class="panel panel-primary">
  <div class="panel-heading">
    Data Lapangan
  </div>
    <div class="panel-body">
      <form method="post" action="../controller/aksi_lapangan.php">
        <label>Nama</label>
        <input type="text" name="lapangan" id="lapangan" class="form-control" placeholder="Masukan Nama Lapangan" style="width: 300px" />
        <br/>
        <label>Jenis Lapangan</label>
        <select name="tipe_lantai" id="tipe_lantai" class="form-control" style="width: 300px">
          <option value="Rumput Sintetis">Rumput Sintetis</option>
          <option value="Vinyl">Vinyl</option>
        </select>
        <br/>
        <input type="submit" name="tambah" id="tambah" value="Simpan" class="btn btn-primary" />
      </form>
    </div>
</div>