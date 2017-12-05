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
                      <th>Nama Siswa</th>
                      <th>Tanggal Lahir</th>
                      <th>Agama</th>
                      <th>Alamat</th>
                      <th>Email</th>
                      <th>Jenis Kelamin</th>
                      <th>No Telpon</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach ($tampil_profil as $num_rows => $row){ $i++; 
                     ?>
  
                    <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $row->nama ?></td>
                     <td><?php echo $row->ttl ?></td>
                     <td><?php echo $row->agama ?></td>
                     <td><?php echo $row->alamat ?></td>
                     <td><?php echo $row->email ?></td>
                     <td><?php echo $row->jk ?></td>
                     <td><?php echo $row->no_telp ?></td>
                     <td></td>
                   </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
