<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Konfirmasi Pembayaran</h1>
			
		</div>
		<center class="card" style="width: 70%;">
			<div class="card-header">
				<h5>Konfirmasi Pembayaran</h5>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('admin/transaksi/cek_pembayaran/')?>" method="post">
					<?php foreach($pembayaran as $pb):?>
						<a href="<?= base_url('admin/transaksi/download/'.$pb->id_rental)?>" style="width: 40%;" class="btn btn-sm btn-success"><i class="fas fa-download"> Download</i></a>
						<div class="custom-control custom-switch ml-3">
							<input type="hidden" name="id_rental" value="<?=$pb->id_rental?>">
							<input type="checkbox" class="custom-control-input" name="status_pembayaran" id="customSwitch1" value="1">
							<label class="custom-control-label" for="customSwitch1"> Konfirmasi Pemayaran</label>
						</div>
						<hr>
						<button class="btn btn-sm btn-primary">Simpan</button>
					<?php endforeach;?>
				</form>
			</div>
		</center>
		
	</section>
</div>