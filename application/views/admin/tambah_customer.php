
      <!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
       <h1>Tambah Customer</h1>
    </div>

    <div class="section-body">
    	<form action="<?= base_url('admin/customer/tambah_aksi')?>" method="post">
    		<div class="form-group">
    		<label>Nama</label>	
    		<input type="text" class="form-control" name="nama">
    		<?= form_error('nama','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>Username</label>	
    		<input type="text" class="form-control" name="username">
    		<?= form_error('username','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>Alamat</label>	
    		<input type="text" class="form-control" name="alamat">
            
    		<?= form_error('alamat','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>Gender</label>
    		<select name="gender" class="form-control">
    			<option value=""><--Pilih Gender--></option>
    				<option value="Laki-laki">Laki-laki</option>
    				<option value="Perempuan">Perempuan</option>
    		</select>	
    		<?= form_error('gender','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>No. Hp</label>	
    		<input type="text" class="form-control" name="no_hp">
    		<?= form_error('no_hp','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>No. KTP</label>	
    		<input type="text" class="form-control" name="no_ktp">
    		<?= form_error('no_ktp','<span class="text-small text-danger">','</span>')?>
    		</div>
    		<div class="form-group">
    		<label>Password</label>	
    		<input type="text" class="form-control" name="password">
    		<?= form_error('no_ktp','<span class="text-small text-danger">','</span>')?>
    		</div>
            <div class="form-group">
                <label>Role ID</label>
                <select class="form-control" class="role_id">
                    <option value=""><--Pilih Role ID--></option>
                        <option value="1">Admin</option>
                        <option value="2">Customer</option>
                </select>
                <?= form_error('role_id','<span class="text-small text-danger">','</span>');?>
            </div>
    		<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    		<button type="reset" class="btn btn-sm btn-warning">Reset</button>
    	</form>
    </div>
  </section>
</div>
      