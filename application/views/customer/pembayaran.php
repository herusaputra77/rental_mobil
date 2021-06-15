<div class="container">
	<div class="row">
		<div class="col md-8">
	<div class="card" style="margin-top: 150px;">
		<div class="card-header alert alert-success">
			<h5>Invoice Pembayaran Anda</h3>
		</div>
		<div class="card-body">
			<table class="table table-hover table-bordered table-striped">
				<?php foreach($transaksi as $tr):?>
				<tr>
					<th>Merk Mobil</th>
					<td>:</td>
					<td><?= $tr->merk?></td>
				</tr>
				<tr>
					<th>Harga Sewa/hari</th>
					<td>:</td>
					<td>Rp. <?= number_format($tr->harga,0,',','.')?></td>
				</tr>
				<tr>
					<th>Tanggal Rental</th>
					<td>:</td>
					<td><?= date('d-m-Y', strtotime($tr->tgl_rental))?></td>
				</tr>
				<tr>
					<th>Tanggal Kembali</th>
					<td>:</td>
					<td><?= date('d-m-Y', strtotime($tr->tgl_kembali))?></td>
				</tr>
				<tr>
					<?php 
					$hr = strtotime($tr->tgl_rental);
					$hk = strtotime($tr->tgl_kembali);
					$jml_hari = abs(($hk-$hr)/(60*60*24)+1);					?>
					<th>Jumlah Hari</th>
					<td>:</td>
					<td><?= $jml_hari?> Hari</td>
				</tr>
				<tr>
					<th>Jumlah Pembayaran</th>
					<td>:</td>
					<td> <button class="btn btn-sm btn-success">Rp. <?= number_format($tr->harga*$jml_hari,0,',','.')?></button></td>
				</tr>
				<tr>
					<th></th>
					<td></td>
					<td><a href="" class="btn btn-sm btn-secondary">Print Invoice</a></td>
				</tr>

			<?php endforeach;?>
			</table>
		</div>
		
	</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="margin-top: 150px;" >
			<div class="card-header" >
				<h5>Informasi Pembayaran</h5>
			</div>
			<div class="card-body">
				<p>Silahkan Melakukan Pembayaran dengan menggunakan nomor Rekening di bawah ini!!</p>
				<?php
				if(empty($tr->bukti_pembayaran)){?>
					<button type="button" style="width: 100%;" class="btn btn-sm mt-3 btn-danger" data-toggle="modal" data-target="#exampleModal">
  					Upload Bukti Pembayaran
					</button>
					<?php }elseif($tr->status_pembayaran == '0'){?>
					<button style="width: 100%;" class="btn btn-sm btn-warning mt-3"><i class="fa fa-clock-o"> Menunggu Konfirmasi</i></button>
				<?php } elseif($tr->status_pembayaran == '1'){?>
					<button style="width: 100%;" class="btn btn-sm btn-success mt-3"><i class="fa fa-check"> Pembayaran Selesai</i></button>
				<?php }?>
			</div>
			
		</div>
		
	</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">From Upload Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('transaksi/pembayaran_aksi/')?>" enctype="multipart/form-data" >
        	<div class="form-group">
        		<label>Uplod Bukti Pembayaran</label>
        		<input type="hidden" name="id_rental" class="form-control" value="<?= $tr->id_rental?>">
        		<input type="file" name="bukti_pembayaran" class="form-control">
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
        </form>
    </div>
  </div>
</div>