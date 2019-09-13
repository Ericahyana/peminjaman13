   <?php 
	include "Model/inventory.php";
	$inventory = new Inventory();
?>
<h3>Daftar User</h3>
<div id="tambah" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><span class="glyphicon glyphicon-user"></span>  Tambah User</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="Controllers/Inventory/prosesuser.php" >
					<div class="form-group">
						<label>Username</label>
						<input required name="username" type="text" class="form-control" placeholder="username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input required name="password" type="text" class="form-control" placeholder="password">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input required name="namauser" type="text" class="form-control" placeholder="namauser">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
					<input type="reset" class="btn btn-warning" value="Reset">	
					<input type="submit" class="btn btn-success" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>		
					    <div class="panel panel-default">					 
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                <button style="margin-bottom:20px" data-toggle="modal" data-target="#tambah" class="btn btn-success col-md-2"><span class="glyphicon glyphicon-plus"></span> Tambah User</button>
								<table class="table table-striped table-bordered table-hover" id="example" >								
									<tr>
										<th>No</th>
										<th>Nama Lengkap</th>
										<th>Username</th>
										<th>Aksi</th>
										
									</tr>
									<tbody>
								</div>
							</div>
						</div>

			<?php $result = $inventory->getLogin(); 
			$i=0;?>
			
			<?php while ($data = $result->Fetch_assoc()): 
			$i++ ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $data['namauser'] ?> </td>
					<td><?php echo $data['username'] ?> </td>
					<td>
						<form method="post" action="Controllers/Inventory/hapus_user.php">
							<input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
							<a href="aplication.php?page=ubah-user&id_user=<?php echo $data['id_user'] ?>" class="btn btn-warning">Ubah</a>
							<a onclick="return confirm('Apakah anda yakin ingin menghapusnya ?')"><input type="submit" class="btn btn-danger" value="Hapus"></a>
						</form> 
					</td>
				</tr>
				<?php endwhile ?>