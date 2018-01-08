<?php

  include '../controller/aksi_tarif.php';

?>

<div class="panel panel-primary">
  <div class="panel-heading">
    Ubah Tarif
  </div>
    <div class="panel-body">
      <?php

          $id = $_GET['id'] ?? null;
          $where = array("KODE_TARIF"=>$id);
          $row = $obj->select('tarif',$where);
        
      ?>

      <form method="post" action="../controller/aksi_tarif.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" style="width: 300px" value="<?php echo $row["TARIF"]; ?>" />
        <br/>
        <label>Tarif/Jam</label>
        <input type="text" name="harga" id="harga" class="form-control" style="width: 300px" value="<?php echo $row["HARGA"]; ?>"/>
        <br/>
        <input type="submit" name="update" id="update" value="Simpan" class="btn btn-primary" />
      </form>
            
    </div>
</div>