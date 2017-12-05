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
                      <th>Nama Paket</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
    <?php $i=0; foreach ($tampil_paket_siswa as $num_rows => $rows){ $i++; 
                    ?> 
  
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $rows->jenis ?></td>
                      <td><?php echo $rows->nama_paket ?></td>
                      <td><?php echo $rows->status_paket ?></td>
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
                    <form action="<?=site_url('student/home_student/simpan_paket_siswa')?>" method="POST">
          <h3 class="login-head">Beli Paket</h3>

    
          <div class="form-group">
            <label class="control-label">Pilih Program</label>
           <select class="form-control" name="program">
           <?php foreach ($tampil_program as $key => $row): ?>
              <option value="<?=$row->id_program?>"><?=$row->nama_paket?> / <?=$row->lama?> <?=$row->waktu?> </option>
           <?php endforeach ?>
            
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
