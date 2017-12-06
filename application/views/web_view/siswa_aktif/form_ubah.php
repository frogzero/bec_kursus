     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> For</h1>
            <p>-</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Forms</li>
              <li><a href="#">Form </a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <div class="well bs-component">
                    <?php foreach ($tampil_siswa_ubah as $key => $a): ?>
                      
   
                    <form action="<?=site_url('admin/siswa_aktif/simpan_ubah/'.$a->id_siswa)?>" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Register</h3>
          <div class="form-group">
            <label class="control-label">Nama Siswa</label>
            <input class="form-control" name="nama_siswa" type="text" placeholder="Nama Siswa" autofocus value="<?php echo $a->nama ?>">
          </div>
          
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo $a->password ?>"> 
          </div>

          <div class="form-group">
            <label class="control-label">Tanggal Lahir</label>
            <input class="form-control" type="date" placeholder="Tanggal Lahir" autofocus name="tanggal_lahir" value="<?php echo $a->ttl ?>">
          </div>
          <div class="form-group">
            <label class="control-label">Agama</label>
           <select class="form-control" name="agama">
             <option value="islam">Islam</option>
             <option value="kristen">kristen</option>
             <option value="katolik">katolik</option>
             <option value="hindu">hindu</option>
             <option value="budha">budha</option>
           </select>
          </div>
          <div class="form-group">
            <label class="control-label">Alamat</label>
            <textarea class="form-control" name="alamat" required=""><?php echo $a->alamat?></textarea>
          </div>
          <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Email" name="email" value="<?php echo $a->email ?>">
          </div>
          <div class="form-group">
            <label class="control-label">Jenis Kelamin</label>
            <select class="form-control" name="jk">
             <option value="laki_laki">Laki-Laki</option>
              <option value="perempuan">perempuan</option>
           </select>
          </div>
          <div class="form-group">
            <label class="control-label">No Telpon</label>
            <input class="form-control" type="text" name="notelp" placeholder="Nomer Telpon" value="<?php echo $a->no_telp ?>">
          </div>
                    <div class="form-group">
            <label class="control-label">status</label>
            <select class="form-control" name="status">
              <option value="aktif">aktif</option>
             <option value="baru">Baru</option>
             
           </select>
          </div>
      

          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">Daftar <i class="fa fa-sign-in fa-lg"></i></button>

          </div>
        </form>
                         <?php endforeach ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>