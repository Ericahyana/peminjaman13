   <?php 
  include "Model/inventory.php";
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

<input type="hidden" class="form-control" name="id_barang" value="<?php echo $data['id_barang'] ?>">
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
              <td><input type="number" class="form-control" name="qty" value="<?php echo $data['qty'] ?>"></td> 
            </tr>
            <tr>
              <td>Nomor Lemari</td>  
              <td>
                <select required name="no_lemari"  class="form-control">
              <option <?php if($data['no_lemari']=='Lemari 1'){echo' selected ';}?>>Lemari 1</option>
              <option <?php if($data['no_lemari']=='Lemari 2'){echo' selected ';}?>>Lemari 2</option>
              <option <?php if($data['no_lemari']=='Lemari 3'){echo' selected ';}?>>Lemari 3</option>
              <option <?php if($data['no_lemari']=='Lemari 4'){echo' selected ';}?>>Lemari 4</option>
            </select></td> 
            </tr>
            <td></td>
            <td><button type="submit" class="btn btn-info"><span class="fa fa-save"></span>  Simpan</td></td>
          </tr>
        </table>
    </form>
  </div>
</div>
   