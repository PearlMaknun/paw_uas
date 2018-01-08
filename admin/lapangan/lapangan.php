<?php
  include '../controller/aksi_lapangan.php';
?>

<div class="panel panel-primary">
  <div class="panel-heading">
    Data Lapangan
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-6">
      <!-- tombol tambah -->
        <a href="?page=lapangan&aksi=tambah" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
      </div>
      <div class="col-md-6">
      <!-- search box-->
      <input type="text" id="txt-cari" class="form-control" placeholder="Cari disini!"/>
      </div>
    </div>
    <br/>
    <div class="table-responsive" id="tabel_lapangan">     
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>NO</th>
            <th class="col-sm-1">ID</th>
            <th class="col-sm-5">Lapangan</th>
            <th class="col-sm-4">Jenis</th>
            <th class="col-sm-2">Action</th>
          </tr>
        </thead>
          <?php

            //$obj = new Lapangan;
            $myrow = $obj->read('lapangan');
            $no = 1;
            foreach ($myrow as $row) {
                            
          ?>

        <tbody>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row["KODE_LAPANGAN"];?></td>
            <td><?php echo $row["JUDUL"];?></td>
            <td><?php echo $row["TIPE"];?></td>
            <td>
            <div class="btn-group">
              <a href="?page=lapangan&aksi=ubah&id=<?php echo $row['KODE_LAPANGAN']; ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" style="color: white;"></span> Ubah</a>
              <a href="../controller/aksi_lapangan.php?delete=1&id=<?php echo $row['KODE_LAPANGAN']; ?>" type="submit" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" name="hapus" style="color: white;"></span> Hapus</a>
            </div> 
            </td>
          </tr>
        </tbody>
          <?php
            }
          ?>                
      </table>
    </div>
  </div>
</div>
