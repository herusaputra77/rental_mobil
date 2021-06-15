
      <!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
       <h1>Data Customer</h1>
    </div>
    <a href="<?= base_url('admin/customer/tambah_customer')?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"> Tambah</i></a>

    <div class="section-body">
    	<?= $this->session->flashdata('pesan');?>
    	<table class="table table-hover table-striped table-bordered">
    		<th>No</th>
    		<th>Nama</th>
    		<th>Username</th>
    		<th>Alamat</th>
    		<th>Gender</th>
    		<th>No HP</th>
    		<th>No KTP</th>
            <th>Role ID</th>
    		<th>Aksi</th>
    		<?php $no=1; foreach($customer as $cs):?>
    			<tr>
    				<td><?= $no++?></td>
    				<td><?=$cs->nama?></td>
    				<td><?=$cs->username?></td>
    				<td><?=$cs->alamat?></td>
    				<td><?=$cs->gender?></td>
    				<td><?=$cs->no_hp?></td>
    				<td><?=$cs->no_ktp?></td>
                    <td><?php if($cs->role_id > '1'){ echo "Customer";}
                    else{echo "Admin";}?></td>
    				<td><a href="<?= base_url('admin/customer/update/').$cs->id_customer?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
    					<a href="<?= base_url('admin/customer/hapus/').$cs->id_customer?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
    					<a href="" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
    				</td>
    			</tr>
    		<?php endforeach;?>

    	</table>
    </div>
  </section>
</div>
      