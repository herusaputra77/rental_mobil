
      <!-- Main Content -->
 <div class="main-content">
    <section class="section">
     <div class="section-header">
            <h1>Type Mobil</h1>
     </div>

    <div class="section-body">
    	<a href="<?= base_url('admin/data_type/tambah')?>" class="btn btn-sm btn-primary mb-3">Tambah</a>
    	<table class="table table-hover table-bordered table-striped">
    		<th>No</th>
    		<th>Kode Type</th>
    		<th>Nama Type</th>
    		<th>Aksi</th>
    			<?php $no=1; foreach($type as $tp):?>
    		<tr>
    				<td><?= $no++?></td>
    				<td><?= $tp->kode_type?></td>
    				<td><?= $tp->nama_type?></td>
    				<td><a href="<?= base_url('admin/data_type/hapus/'. $tp->id_type)?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
    		</tr>
    			<?php endforeach;?>
    	</table>
    </div>
</section>
</div>