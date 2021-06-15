
      <!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
       <h1>Edit Data Customer</h1>
    </div>

    <div class="section-body">
        <?php foreach($update as $up):?>
    	<form action="<?= base_url('admin/customer/update_aksi')?>" method="post">
    		<div class="form-group">
                <input type="hidden" name="id" value="<?= $up->id_customer?>">
    		<label>Nama</label>	
    		<input type="text" class="form-control" name="nama" value="<?= $up->nama?>">
    		<?= form_error('nama','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>Username</label>	
    		<input type="text" class="form-control" name="username" value="<?= $up->username?>">
    		<?= form_error('username','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>Alamat</label>	
    		<input type="text" class="form-control" name="alamat" value="<?=$up->alamat?>">
    		<?= form_error('alamat','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>Gender</label>
    		<select name="gender" class="form-control">
    			<option value="<?=$up->gender?>"><?= $up->gender?></option>
    				<option value="Laki-laki">Laki-laki</option>
    				<option value="Perempuan">Perempuan</option>
    		</select>	
    		<?= form_error('gender','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>No. Hp</label>	
    		<input type="text" class="form-control" name="no_hp" value="<?= $up->no_hp?>">
    		<?= form_error('no_hp','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>No. KTP</label>	
    		<input type="text" class="form-control" name="no_ktp" value="<?= $up->no_ktp?>">
    		<?= form_error('no_ktp','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>Password</label>	
    		<input type="password" class="form-control" name="password" value="<?= $up->password?>">
    		<?= form_error('no_ktp','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    		<button type="reset" class="btn btn-sm btn-warning">Reset</button>
    	</form>
    <?php endforeach;?>
    </div>
  </section>
</div>
      