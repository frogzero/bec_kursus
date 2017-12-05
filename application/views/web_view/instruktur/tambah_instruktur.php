     <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Form Componants</h1>
            <p>Bootstrap default form componants</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Forms</li>
              <li><a href="#">Form Componants</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="POST" action="<?=site_url('admin/instruktur/simpan_instruktur')?>"> 
                      <fieldset>
                        <legend>Form</legend>

                         <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Nama Instruktur</label>
                          <div class="col-lg-10">
                           <input class="form-control" name="nama"  type="text" placeholder="Nama Instruktur">
                           </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Password</label>
                          <div class="col-lg-10">
                           <input class="form-control" name="password"  type="Password" placeholder="Password">
                           </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Tanggal Lahir</label>
                          <div class="col-lg-10">
                           <input class="form-control" name="ttl"  type="date" placeholder="Tanggal Lahir">
                           </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Alamat</label>
                          <div class="col-lg-10">
                           <input class="form-control" name="alamat"  type="text" placeholder="Alamat">
                           </div>
                        </div>
                       
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Agama</label>
                          <div class="col-lg-10">
                            <select class="form-control" name="agama">
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="khatolik">Khatolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <option value="dll">Dll</option>
                           </select>
                           </div>
                        </div> 
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Email</label>
                          <div class="col-lg-10">
                            <input class="form-control" name="email"  type="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Jenis Kelamin</label>
                          <div class="col-lg-10">
                            <select class="form-control" name="jenis_kelamin">
                                <option value="laki_laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                           </select>
                           </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">No Handphone</label>
                          <div class="col-lg-10">
                            <input class="form-control" name="no_hp"  type="text" placeholder="No Handphone">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Foto</label>
                          <div class="col-lg-10">
                            <input class="form-control" name="foto"  type="text">
                          </div>
                        </div>
                       
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancel</button>
                            <button class="btn btn-primary" type="submit">Submit</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>