<?php

  include '../controller/aksi_lapangan.php';

?>

<div class="panel panel-primary">
  <div class="panel-heading">
    Ubah Lapangan
  </div>
    <div class="panel-body">
      <?php

          $id = $_GET['id'] ?? null;
          $where = array("KODE_LAPANGAN"=>$id);
          $row = $obj->select('lapangan',$where);
        
      ?>

      <form method="post" action="../controller/aksi_lapangan.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Nama</label>
        <input type="text" name="lapangan" id="lapangan" class="form-control" style="width: 300px" value="<?php echo $row["JUDUL"]; ?>" />
        <br/>
        <label>Jenis Lapangan</label>
        <select name="tipe_lantai" id="tipe_lantai" class="form-control" style="width: 300px">
          <?php
            if($row["TIPE"] == "Vinyl"){
              echo '<option value="Rumput Sintetis">Rumput Sintetis</option>
                    <option value="Vinyl" selected>Vinyl</option>';
            }else{
              echo '<option value="Rumput Sintetis" selected>Rumput Sintetis</option>
                    <option value="Vinyl">Vinyl</option>';
            }
          ?>
        </select>
        <br/>
        <input type="submit" name="update" id="update" value="Simpan" class="btn btn-primary" />
      </form>
            
    </div>
</div>