     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Data Table</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="#">Data Table</a></li>
            </ul>
          </div>
          <div>
          <a class="btn btn-primary btn-flat" href="<?=site_url('admin/program_kursus/tambah_program_paket/')?>"><i class="fa fa-lg fa-plus"></i></a>
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
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach ($program as $num_rows => $row){ $i++; ?>
                    
                    <tr>
                      <td><?=$i?></td>
                      <td><?=$row->nama_paket?></td>
                      <td>
                      <a class="btn btn-warning btn-flat" href="<?php echo site_url('admin/program_kursus/hapus/'.$row->id_paket) ?>" onclick="return confirm('Yakin Hapus ?')"><i class="fa fa-lg fa-trash"></i></a>  
                      <a class="btn btn-info btn-flat" href="<?php echo site_url('admin/program_kursus/form_ubah/'.$row->id_paket) ?>"><i class="fa fa-lg fa-refresh"></i></a></td>
                    </tr>

                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>