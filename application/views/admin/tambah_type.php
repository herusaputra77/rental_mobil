
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Data Mobil</h1>
          </div>

          <div class="section-body">
            <div class="card"> 
              <div class="card-body">
              	<form action="<?= base_url('admin/data_type/simpan_aksi')?>" method="post">
              		
              	<div class="form-group">
              		<label>Kode Type</label>
              		<input type="text" name="kode_type" class="form-control">
              	</div>
              	<div class="form-group">
              		<label>Nama Type</label>
              		<input type="text" name="nama_type" class="form-control">
              	</div>
              	<button type="submit" class="btn btn-sm btn-primary">Simpan</button>

              	</form>

              </div>
          </div>
      </div>
  </section>
</div>