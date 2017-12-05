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
                      <th>Nama Kelas</th>
                      <th>Nama Instruktur</th>
                      <th>Jam</th>
                      <th>Hari</th>
                      <th>Nama Paket</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach ($tampil_kelas as $num_rows => $row){ $i++; 
                    $nama_kelas =$row->nama_kelas ?>
  
                    <tr>
                      <td><?=$i?></td>
                      <td><?=$row->nama_kelas?></td>
                      <td><?=$row->nama_instruktur?></td>
                      <td><?=$row->jam?></td>
                      <td><?=$row->hari?></td>
                      <td><?=$row->nama_paket?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
