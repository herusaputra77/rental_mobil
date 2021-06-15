
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Mobil</h1>
          </div>

          <div class="section-body">
            <a href="<?= base_url('admin/data_mobil/tambah/')?>" class="btn btn-sm btn-primary mb-3">Tambah</a><div>
              
            <?= $this->session->flashdata('pesan');?>
            </div>
            <table class="table table-hover table-bordered table-striped">
              <thead>  
              <th>NO</th>
              <th>Gambar</th>
              <th>Kode Type</th>
              <th>Merk</th>
              <th>No Plat</th>
              <th>status</th>
              <th>Aksi</th>
              <tbody> 
                <?php $no=1; 
                foreach($mobil as $mb) :?>
                <tr>
                  <td><?= $no++?></td>
                  <td><img style="width: 80px;" src="<?= base_url().'assets/upload/'. $mb->gambar?>"></td>
                  <td><?= $mb->kode_type?></td>
                  <td><?= $mb->merk?></td>
                  <td><?= $mb->no_plat?></td>
                  <td><?php if($mb->status==0){
                    echo "<span class='badge badge-danger badge-sm'>Tidak Tersedia</span>";
                  }else{echo "<span class='badge badge-success'>Tersedia</span> ";} ?>
                  </td>
                  <td><a href="<?= base_url('admin/data_mobil/update_mobil/').$mb->id_mobil ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="<?= base_url('admin/data_mobil/hapus/').$mb->id_mobil ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    <a href="<?= base_url('admin/data_mobil/edit/').$mb->id_mobil ?>" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>

                  </td>
                </tr>
                <?php endforeach;?>
              </tbody>

              </thead>
             </table>
          </div>
        </section>
      </div>
      