<?php 
	include "/../Model/inventory.php";
	$inventory = new Inventory();
?>
<h3>Peminjaman</h3>
<div id="tambah" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><span class="glyphicon glyphicon-user"></span>  Tambah Peminjam</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="Controllers/Inventory/peminjaman.php" >
					<div class="form-group">
						<label>Nama Peminjam</label>
						<input required name="namapeminjam" type="text" class="form-control" placeholder="Nama Peminjam">
					</div>
					<div class="form-group">
						<label>No Tlf</label>
						<input required name="no_tlp" type="text" class="form-control" placeholder="No Tlf">
					</div>
					<div class="form-group">
						<label>Kelas</label><select required name="kelas"  class="form-control">
						
							<option>X TKJ 1</option>
							<option>X TKJ 2</option>
							<option>X TKJ 3</option>
							<option>X RPL 1</option>
							<option>X RPL 2</option>
							<option>X RPL 3</option>
							
							<option>XI TKJ 1</option>
							<option>XI TKJ 2</option>
							<option>XI TKJ 3</option>
							<option>XI RPL 1</option>
							<option>XI RPL 2</option>
							<option>XI RPL 3</option>

							<option>XII TKJ 1</option>
							<option>XII TKJ 2</option>
							<option>XII TKJ 3</option>
							<option>XII RPL 1</option>
							<option>XII RPL 2</option>
							<option>XII RPL 3</option>
						</select>
					</div>
					<div class="form-group">
						<label>Alat yg dipinjam</label>
						<input required name="namabarang" type="text" class="form-control" placeholder="Nama Alat">
					</div>
					<div class="form-group">
						<label>Qty</label>
						<input required name="qty" type="text" class="form-control" placeholder="Qty">
					</div>
					<div class="form-group">
						<label>Peruntukan</label>
						<input required name="peruntukkan" type="text" class="form-control" placeholder="Peruntukan">
					</div>
					<div class="form-group">
						<label>Tgl Pinjam</label>
						<input type="hidden"	 name="tgl_pinjam" value="<?php echo date("Y-m-d") ?>" class="form-control">
						<input readonly	 value="<?php echo $inventory->tgl_otomatis(); ?>" class="form-control">
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

                                <button style="margin-bottom:20px" data-toggle="modal" data-target="#tambah" class="btn btn-success col-md-2"><span class="glyphicon glyphicon-plus"></span> Tambah Peminjam</button>
                                <div class="dataTable_wrapper">
                                	<table class="table table-striped table-bordered table-hover" id="dataTables-example">		
									<tr>
										<th>No</th>
										<th>Nama Peminjam</th>
										<th>No Telf</th>
										<th>Kelas</th>
										<th>Alat yang dipinjam</th>
										<th>Qty</th>
										<th>Peruntukan</th>
										<th>Tgl Pinjam</th>
										<th>Tgl Kembali</th>
										<th>Validasi</th>
										<th>Aksi</th>
									</tr>
									<tbody>
								</div>
							</div>
						</div>
<?php $result = $inventory->getPeminjaman(); 
$i=0;?>
<?php while ($data = $result->Fetch_assoc()): 
$i++;?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $data['namapeminjam'] ?> </td>
					<td><?php echo $data['no_tlp'] ?> </td>
					<td><?php echo $data['kelas'] ?> </td>
					<td><?php echo $data['namabarang'] ?> </td>
					<td><?php echo $data['qty'] ?> </td>
					<td><?php echo $data['peruntukkan'] ?> </td>
					<td><?php echo $data['tgl_pinjam'] ?> </td>
					<td>		
                        <div class="form-group">
                        	<?php 
                        		$tgl_kembali = $data['tgl_kembali'];

                        		if($tgl_kembali == '0000-00-00') {
                        	?>
                        	<form action="Controllers/Inventory/validasi.php" method="post">
                        		<input type="hidden" name="id_peminjam" value="<?php echo $data['id_peminjam'] ?>">
							<input required name="tgl_kembali"type="date" class="form-control" placeholder="Tgl Kembali">
							<?php } else { ?>
							<input type="hidden" name="id_peminjam" value="<?php echo $data['id_peminjam'] ?>">
							<input required name="tgl_kembali" readonly type="date" class="form-control" value="<?php echo $data['tgl_kembali'] ?>" >
							<?php } ?>
						</div>	
                    </td>
                    <td>
						<?php 
                        		$tgl_kembali = $data['tgl_kembali'];

                        		if($tgl_kembali == '0000-00-00') {
                        	?>
                        
                        
						<button class="btn btn-success" >Selesai</button>
						</form>
						<?php } else { ?>
						<button class="btn btn-success" disabled>Sudah Di Kembalikan</button>
						<?php } ?>
					</td>
					<td>
						<form method="post" action="Controllers/Inventory/hapus_peminjaman.php">
							<input type="hidden" name="id_peminjam" value="<?php echo $data['id_peminjam']; ?>">
							<a onclick="return confirm('Apakah anda yakin ingin menghapusnya ?')"><input type="submit" class="btn btn-danger" value="Hapus"></a>
						</form> 
					</td>					

				</tr>
				<?php endwhile ?>