   <?php 
  include "/../Model/inventory.php";
  $inventory = new Inventory();
?>    
      <h3>Ubah</h3>
      <?php 

  $data = null;
  if(isset($_GET['id_user'])) {
    $data = $inventory->getUser($_GET['id_user']);
  }
?>

  <div class="panel panel-default">
      <form action="Controllers/inventory/ubahuser.php" method="post">


        <table width="60%" class="table">
          <tr>
            <td>Username</td>
            <td><input class="form-control" name="username" value="<?php echo $data['username'] ?>">
              <input type="hidden" class="form-control" name="id_user" value="<?php echo $data['id_user'] ?>"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="text" class="form-control" name="password" value="<?php echo $data['password'] ?>"></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input type="text" class="form-control" name="namauser" value="<?php echo $data['namauser'] ?>"></td>
          </tr>
         
            <td></td>
            <td><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-save"></span>  Simpan</td></td>
          </tr>
        </table>
    </form>
  </div>
</div>
   