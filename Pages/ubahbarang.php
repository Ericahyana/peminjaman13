   <?php 
  include "/../Model/inventory.php";
  $inventory = new Inventory();
?>    
      <h3>Ubah</h3>
      <?php 

  $data = null;
  if(isset($_GET['id_barang'])) {
    $data = $inventory->getIsibarang($_GET['id_barang']);
  }
?>

  <div class="panel panel-default">
      <form action="Controllers/inventory/ubahbarang.php" method="post">


        <table width="60%" class="table">
            <tr>
              <td>Nama Barang</td>  
              <td><input type="text" class="form-control" name="namabarang" value="<?php echo $data['namabarang'] ?>"></td> 
            </tr>
            <tr>
              <td>Spesifikasi</td>  
              <td><input type="text" class="form-control" name="spec" value="<?php echo $data['spec'] ?>"></td> 
            </tr>
            <tr>
              <td>Qty</td>  
              <td><input type="text" class="form-control" name="qty" value="<?php echo $data['qty'] ?>"></td> 
            </tr>
            <tr>
              <td>Nomor Lemari</td>  
              <td><input type="text" class="form-control" name="no_lemari" value="<?php echo $data['no_lemari'] ?>"></td> 
            </tr>
            <td></td>
            <td><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-save"></span>  Simpan</td></td>
          </tr>
        </table>
    </form>
  </div>
</div>
   