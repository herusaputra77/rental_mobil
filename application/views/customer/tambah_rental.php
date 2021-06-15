<div class="container">
	<div class="card" style="margin-top: 200px; margin-bottom: 50px;">
		<div class="card-header">
			<h3>Form Rental Mobil</h3>
		</div>
		<div class="card-body">
			<?php foreach($rental as $rt):?>
				<form method="post" action="<?= base_url('rental/tambah_rental_aksi/')?>">
					<div class="form-group">
						<input type="hidden" name="id_mobil" value="<?=$rt->id_mobil?>">
				
						<input type="hidden" name="id_customer" value="<?php $this->session->userdata('nama')?> ">
						<label>Harga sewa/hari</label>
						<input type="text" name="harga" class=" form-control" value="<?= $rt->harga?>" readonly>
					</div>
					<div class="form-group">
						<label>Denda</label>
						<input type="text" name="denda" class=" form-control" value="<?= $rt->denda?>" readonly>
					</div>
					<div class="form-group">
						<label>Tanggal Rental</label>
						<input type="date" name="tgl_rental" class=" form-control" >
						 <?= form_error('tgl_kembali','<div class="text-small text-danger">','</div>')?></div>
					
					<div class="form-group">
						<label>Tanggal Kembali</label>
						<input type="date" name="tgl_kembali" class=" form-control" >
						 <?= form_error('tgl_pengembalian','<div class="text-small text-danger">','</div>')?>
						</div>
					<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
					
					
				</form>
			<?php endforeach;?>
		</div>
	</div>
	
</div>