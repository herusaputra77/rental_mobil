
      <!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
       <h1>Dashboard</h1>
    </div>

    <div class="section-body">
    	<table class="table table-bordered table-hover table-striped">
    		<tr>
    			<th>NO</th>
    			<th>Nama</th>
    			<th>Merk</th>
    			<th>Tanggal Rental</th>
    			<th>Tanggal Kembali</th>
    			<th>Denda</th>
    			<th>Harga</th>
    			<th>Tanggal Pengembalian</th>
    			<th>Status Pengembalian</th>
    			<th>Status Rental</th>
                <th>Cek Pembayaran</th>
    			<th>Aksi</th>
    		</tr>
    		<?php $no=1; foreach($transaksi as $tr):?>
    		<tr>
    			<td><?= $no++?></td>
    			<td><?= $tr->nama?></td>
    			<td><?= $tr->merk?></td>
    			<td><?= date('d-m-Y', strtotime($tr->tgl_rental))?></td>
    			<td><?= date('d-m-Y', strtotime($tr->tgl_kembali))?></td>
    			<td>Rp. <?= number_format($tr->denda,0,',','.') ?></td>
    			<td>Rp. <?= number_format($tr->harga,0,',','.') ?></td>
    			<td><?php if($tr->tgl_pengembalian == '0000-00-00'){
    				echo "Belum dikembalikan";
    			}else{
    				echo date('d-m-Y', strtotime($tr->tgl_pengembalian));}?></td>
    			<td><?php if($tr->status_pengembalian == '1'){
                    echo "Kembali";
                    }else{
                        echo "Belum Kembali";
                    }
                    ?>
                    
                </td>
    			<td><?php if($tr->status_rental == '1'){
                    echo "Kembali";
                    }else{
                        echo "Belum Kembali";
                    }
                    ?>
                    
                </td>
                <td>
                    <center>
                        <?php
                        if(empty($tr->bukti_pembayaran)){?>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                        <?php }else{?>
                            <a class="btn btn-success btn-sm" href="<?= base_url('admin/transaksi/pembayaran/'.$tr->id_rental)?>"><i class="fas fa-check-circle"></i></a>
                        <?php }?>
                    </center>
                </td>
 
    		</tr>
    <?php endforeach;?>
    	</table>
    </div>
  </section>
</div>
      