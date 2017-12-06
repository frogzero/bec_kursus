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
                      <th>password</th>
                      <th>ttl</th>
                      <th>alamat</th>
                      <th>agama</th>
                      <th>email</th>
                      <th>JK</th>
                      <th>no_hp</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach ($instruktur as $num_rows => $row){ $i++; ?>
                    
                    <tr>
                      <td><?=$i?></td>
                      <td><?=$row->nama_instruktur?></td>
                      <td><?=$row->password_instruktur?></td>
                      <td><?=$row->ttl_instruktur?></td>
                      <td><?=$row->alamat_instruktur?></td>
                      <td><?=$row->agama_instruktur?></td>
                      <td><?=$row->email_instruktur?></td>
                      <td><?=$row->jenis_kelamin_instruktur?></td>
                      <td><?=$row->no_hp_instruktur?></td>
                    </tr>

                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>