     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Data Table</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="#">Paket</a></li>
            </ul>
          </div>
          <div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Program</th>
                      <th>Nama siswa</th>
                      <th>Nama Paket</th>
                      <th>Status</th>
                      <th>Ubah</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
    <?php $i=0; foreach ($tampil_paket_siswa as $num_rows => $rows){ $i++; 
                    ?> 
  
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $rows->jenis ?></td>
                       <td><?php echo $rows->nama ?></td>
                      <td><?php echo $rows->nama_paket ?></td>
                      <td><?php echo $rows->status_paket ?></td>
                    <td>
                      <a class="btn btn-succes btn-flat" href="<?php echo site_url()?>/admin/paket_siswa/ubah_pending/<?php echo $rows->id_paket_siswa ?>"><i class="fa fa-lg fa-circle" data-toggle="tooltip" title="ubah Menjadi Pending !!!"></i></a>
                    <a class="btn btn-succes btn-flat" href="<?php echo site_url()?>/admin/paket_siswa/ubah_gagal/<?php echo $rows->id_paket_siswa ?>"><i class="fa fa-lg fa-trash" data-toggle="tooltip" title="ubah Menjadi GAGAL !!!"></i></a>  
                    <a class="btn btn-succes btn-flat" href="<?php echo site_url()?>/admin/paket_siswa/ubah_aktif/<?php echo $rows->id_paket_siswa ?>" data-toggle="tooltip" title="ubah Menjadi Aktif !!!"><i class="fa fa-lg fa-check"></i></a></td>
                    <td>
                       <a class="btn btn-succes btn-flat" href="<?php echo site_url()?>/admin/paket_siswa/hapus_paket_siswa/<?php echo $rows->id_paket_siswa ?>" data-toggle="tooltip" title="hapus Paket Siswa !!!"><i class="fa fa-lg fa-remove"></i></a>
                    </td>
                    </tr>
              <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <div class="well bs-component">
                    <form action="<?=site_url('admin/paket_siswa/simpan_paket_siswa')?>" method="POST">
          <h3 class="login-head">Beli Paket</h3>

    
          <div class="form-group">
            <label class="control-label">Pilih Program</label>
           <select class="form-control" name="program">
           <?php foreach ($tampil_program as $key => $row): ?>
              <option value="<?=$row->id_program?>"><?=$row->nama_paket?> / <?=$row->lama?> <?=$row->waktu?> </option>
           <?php endforeach ?>
            
           </select>
          </div>


          <div class="form-group">
            <label class="control-label">Pilih siswa</label>
           <select class="form-control" name="siswa">
           <?php foreach ($tampil_siswa as $key => $row): ?>
              <option value="<?=$row->id_siswa?>"><?=$row->nama?> </option>
           <?php endforeach ?>
            
           </select>
          </div>


          <div class="form-group">
            <label class="control-label">status</label>
           <select class="form-control" name="status">
              <option value="" selected="">Pilih Status</option>
              <option value="pending">pending</option>
              <option value="gagal">gagal</option>
              <option value="aktif">aktif</option>

            
           </select>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">Beli <i class="fa fa-sign-in fa-lg"></i></button>

          </div>
        </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
