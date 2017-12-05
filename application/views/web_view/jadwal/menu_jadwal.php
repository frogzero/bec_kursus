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
          <a class="btn btn-primary btn-flat" href="<?=site_url('admin/jadwal/tambah_kelas/')?>"><i class="fa fa-lg fa-plus"></i></a>
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
                      <th>Detail Kelas</th>
                      <th>Nama Paket</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach ($tampil_kelas as $num_rows => $row){ $i++; 
                    $nama_kelas =$row->nama_kelas ?>
  
                    <tr>
                      <td><?=$i?></td>
                      <td><?=$row->nama_kelas?></td>
                      <td>
                      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#<?=$row->id_kelas?>">Open Detail Kelas</button></td>
                       <td><?=$row->nama_paket?></td>
                      <td>

                      <a class="btn btn-primary btn-flat" href="<?=site_url('admin/jadwal/tambah/'.$row->id_kelas.'/'.$row->id_program)?>"><i class="fa fa-lg fa-plus"></i></a>
                      <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>   <a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

 <?php $i=0; foreach ($jadwal as $num_rows => $row){ $i++; 
                    $nama_kelas =$row->nama_kelas ?>

  <!-- Modal -->
  <div class="modal fade" id="<?=$row->id_kelas?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
           <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Nama Instruktur</th>
        <th>Jam</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=0;
      $id_kelas=$row->id_kelas;
      $sql="SELECT * from jadwal
      join instruktur
      on instruktur.id_instruktur = jadwal.id_instruktur
      join siswa
      on jadwal.id_siswa = siswa.id_siswa
      WHERE jadwal.id_kelas='$id_kelas'";
      $query = $this->db->query($sql);      
      foreach ($query->result() as $data){
      $i++; ?>
      <tr>
        <td><?=$i?></td>
        <td><?=$data->nama?></td>
        <td><?=$data->nama_instruktur?></td>
        <td><?=$data->jam?></td>
         <td><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>   <a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<?php } ?>