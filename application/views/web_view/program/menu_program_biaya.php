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
          <a class="btn btn-primary btn-flat" href="<?=site_url('admin/Program/tambah/')?>"><i class="fa fa-lg fa-plus"></i></a>
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
                     <th>Jenis Program</th>
                      <th>Kategori Program</th>
                      <th>Nama Paket</th>
                      <th>Biaya</th>
                      <th>lama</th>
                      <th>Waktu</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach ($biaya as $num_rows => $row){ $i++; ?>
                    
                    <tr>
                      <td><?=$i?></td>
                      <td><?=$row->jenis?></td>
                      <td><?=$row->kategori?></td>
                      <td><?=$row->nama_paket?></td>
                      <td><?=$row->biaya?></td>
                      <td><?=$row->lama?></td>
                      <td><?=$row->waktu?></td>
                      <td>
                        <a class="btn btn-warning btn-flat" href="<?php echo site_url('admin/program/hapus/'.$row->id_program) ?>" onclick="return confirm('Yakin Hapus ?')"><i class="fa fa-lg fa-trash"></i></a>  
                      <a class="btn btn-info btn-flat" href="<?php echo site_url('admin/program/form_ubah/'.$row->id_program) ?>"><i class="fa fa-lg fa-refresh"></i></a>
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