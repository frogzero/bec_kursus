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
          <a class="btn btn-primary btn-flat" href="<?=site_url('admin/siswa_baru/tambah/')?>"><i class="fa fa-lg fa-plus"></i></a>
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
                      <th>nama</th>
                      <th>ttl</th>
                      <th>agama</th>
                      <th>alamat</th>
                      <th>email</th>
                      <th>jk</th>
                      <th>no_telp</th>
                      <th>tanggal_daftar</th>
                      <th>aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach ($siswa_baru as $num_rows => $row){ $i++; ?>
                    
                    <tr>
                      <td><?=$i?></td>
                      <td><?=$row->nama?></td>
                      <td><?=$row->ttl?></td>
                      <td><?=$row->agama?></td>
                      <td><?=$row->alamat?></td>
                      <td><?=$row->email?></td>
                      <td><?=$row->jk?></td>
                      <td><?=$row->no_telp?></td>
                      <td><?=$row->tanggal_daftar?></td>
               
                      <td>
                       <a class="btn btn-warning btn-flat" href="<?php echo site_url('admin/siswa_aktif/hapus/'.$row->id_siswa) ?>" onclick="return confirm('Yakin Hapus ?')"><i class="fa fa-lg fa-trash"></i></a>  
                      <a class="btn btn-info btn-flat" href="<?php echo site_url('admin/siswa_aktif/form_ubah/'.$row->id_siswa) ?>"><i class="fa fa-lg fa-refresh"></i></a>
                      </td>
                    </tr>

                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>