<div class="container">
	<div class="card mx-auto" style="margin-top: 180px; width: 80%;">
		<div class="card-header">
			<h3>Form Transaksi</h3>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th>NO</th>
					<th>Nama</th>
					<th>Merk Mobil</th>
					<th>No Plat</th>
					<th>Harga Sewa</th>
					<th>Aksi</th>
				</tr>
				<?php $no=1; foreach($transaksi as $tr):?>
				<tr>
					<td><?= $no++?></td>
					<td><?= $tr->nama?></td>
					<td><?= $tr->merk?></td>
					<td><?= $tr->no_plat?></td>
					<td>Rp. <?= number_format($tr->harga,0,',','.') ?></td>
					<td> <?php if($tr->status_rental == 'Selesai'){?>
						<button class="btn btn-sm btn-danger">Rental Selesai</button>
					<?php }else{ ?>
						<a href=" <?= base_url('transaksi/pembayaran/').$tr->id_rental?>" class="btn btn-sm btn-primary">Cek Pembayaran</a>
					<?php }?>
					</td>

				</tr>
			<?php endforeach;?>
			</table>
			
		</div>
		
	</div>
</div>