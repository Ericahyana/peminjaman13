   <?php 
	include "/../Model/inventory.php";
	$inventory = new Inventory();
?>
<h3>Input Barang</h3>

<div id="tambah" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><span class="glyphicon glyphicon-user"></span> Input Barang</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="Controllers/Inventory/input-barang.php" >
					<div class="form-group">
						<label>Nama Barang</label>
						<input required name="namabarang" type="text" class="form-control" placeholder="Nama Barang">
					</div>
					<div class="form-group">
						<label>Spesifikasi</label>
						<input required name="spec" type="text" class="form-control" placeholder="Spesifikasi">
					</div>
					<div class="form-group">
						<label>Qty</label>
						<input required name="qty" type="text" class="form-control" placeholder="Qty">
					</div>
					
					<div class="form-group">
						<label>No Lemari</label><select required name="no_lemari"  class="form-control">
						
							<option>Lemari 1</option>
							<option>Lemari 2</option>
							<option>Lemari 3</option>
							<option>Lemari 4</option>
						</select>
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
                                <button style="margin-bottom:20px" data-toggle="modal" data-target="#tambah" class="btn btn-success col-md-2"><span class="glyphicon glyphicon-plus"></span> Input Barang</button>
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">								
									<tr>
										<th>No</th>
										<th>Nama Barang</th>
										<th>Spesifikasi</th>
										<th>Qty</th>
										<th>No Lemari</th>
										<th size="20%">Aksi</th>
										
									</tr>
									<tbody>
								</div>
							</div>

						</div>

			<?php $result = $inventory->getBarang();
			$i=0; ?>
			<?php while ($data = $result->Fetch_assoc()): 
			$i++;?>

				<tr>
					<td><?php echo $i; ?> </td>
					<td><?php echo $data['namabarang'] ?> </td>
					<td><?php echo $data['spec'] ?> </td>
					<td><?php echo $data['qty'] ?> </td>
					<td><?php echo $data['no_lemari'] ?> </td>
					
					<td>
						<form method="post" action="Controllers/Inventory/hapus_barang.php">
							<input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
							<a href="aplication.php?page=ubah-barang&id_barang=<?php echo $data['id_barang'] ?>" class="btn btn-warning">Ubah</a>
							<a onclick="return confirm('Apakah anda yakin ingin menghapusnya ?')"><input type="submit" class="btn btn-danger" value="Hapus"></a>
						</form> 
					</td>
				</tr>

				<?php endwhile ?>