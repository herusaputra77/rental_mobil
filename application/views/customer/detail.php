<div class="container">
	 <?php foreach($detail as $dt):?>
        <div class="card" style="margin-top: 200px;">
          <div class="card-body">
            <div class="row">
              <div class="col-md-5">
                <img style="width: 400px;" src="<?= base_url().'assets/upload/'.$dt->gambar?>">
               </div>
               <div class="col-md-1">  </div>
               <div class="col-md-6">
                 <table class="table table-hover table-striped">
                  <tr>
                    <td>Type Mobil</td>
                    <td><?= $dt->kode_type?></td>
                  </tr>
                  <tr>
                    <td>Merk</td>
                    <td><?= $dt->merk?></td>
                  </tr>
                  <tr>
                    <td>No Plat</td>
                    <td><?= $dt->no_plat?></td>
                  </tr>
                  <tr>
                    <td>Warna</td>
                    <td><?= $dt->warna?></td>
                  </tr>
                  <tr>
                    <td>Tahun</td>
                    <td><?= $dt->tahun?></td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td><?php if($dt->status > "0") {
                      echo "<span class='badge badge-success'>Tersedia</span>";}
                      else{  echo "<span class='badge badge-danger'>Tidak Tersedia</span>";}?></td>
                  </tr> 
                  </table>
                    <a href="<?= base_url('dashboard/data_mobil')?>" class="btn btn-sm btn-success ">Kembali</a>
                    <?php if($dt->status == "1"){ echo anchor('rental/tambah_rental/'.$dt->id_mobil,'<button class="btn btn-sm btn-danger">Rental</button>');}?>
                    
               </div>
             </div>
           </div>
         </div>
      <?php endforeach;?>
</div>