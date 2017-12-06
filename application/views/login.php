<div class="tes" style="background-color: blue;"> 
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Bec Kursus</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="<?=site_url('home/cek_user')?>" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Email" autofocus name="email">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" name="password" type="password" placeholder="Password">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">Masuk <i class="fa fa-sign-in fa-lg"></i></button>
            </form> 
            <br>
      <input type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal" name="" value="Daftar"></a>
      

          </div> 

          <!-- Modal -->
 

        
      </div>

      

</div>




 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="row">
        <div class="col-md-12">
        <div class="col-md-12">
        <form action="<?=site_url('home/register/')?>" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Register</h3>
          <div class="form-group">
            <label class="control-label">Nama Siswa</label>
            <input class="form-control" name="nama_siswa" type="text" placeholder="Nama Siswa" autofocus>
          </div>
          
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="password"> 
          </div>
          <div class="form-group">
            <label class="control-label">Tanggal Lahir</label>
            <input class="form-control" type="date" placeholder="Tanggal Lahir" autofocus name="tanggal_lahir">
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
            <textarea class="form-control" name="alamat" required=""></textarea>
          </div>
          <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Email" name="email">
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
            <input class="form-control" type="text" name="notelp" placeholder="Nomer Telpon">
          </div>

          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">Daftar <i class="fa fa-sign-in fa-lg"></i></button>

          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
      </div>
      </div>
      
    </div>
  </div>
