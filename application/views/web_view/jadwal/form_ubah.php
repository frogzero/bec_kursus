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
                    <?php foreach ($tampil_kelas as $key => $row): ?>
                      
                    <?php endforeach ?>
                    <form class="form-horizontal" method="POST" action="<?=site_url('admin/jadwal/simpan_jadwal_ubah/'.$row->id_jadwal)?>"> 
                      <fieldset>
                        <legend>Form</legend>


                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Nama Siswa</label>
                          <div class="col-lg-10">
                           <select class="form-control" id="demoSelect" name="siswa">
                            <?php foreach ($tampil_siswa as $a): ?>
                               <option value="<?=$a->id_siswa?>"><?=$a->nama?></option> 
                            <?php endforeach ?>
                                                              
                              </select>
                           </div>
                        </div>

                          <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Nama Instruktur</label>
                          <div class="col-lg-10">
                           <select class="form-control" id="demoSelect" name="instruktur">
                            <?php foreach ($tampil_instruktur as $b): ?>
                               <option value="<?=$b->id_instruktur?>"><?=$b->nama_instruktur?></option> 
                            <?php endforeach ?>
                                                              
                              </select>
                           </div>
                        </div>
                        <input type="text" name="id_kelas" placeholder="ex: 20:00" hidden="true" value="<?php echo $row->id_kelas?>" >
                          <!--   <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Nama Paket</label>
                          <div class="col-lg-10">
                          
                           </div>
                        </div>
                        -->
                         <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Jam</label>
                          <div class="col-lg-10">
                           <input class="form-control" name="jam"  type="text" placeholder="ex: 20:00" value="<?php echo $row->jam ?>">
                           </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Hari</label>
                          <div class="col-lg-10">
                         <select class="form-control" name="hari">
                                <option value="Senin">Senin</option>
                                 <option value="Selasa">Selasa</option>
                                 <option value="Rabu">Rabu</option>
                                 <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                 <option value="Senin">Saptu</option>
                                 <option value="Minggu">Minggu</option>
                           </select>
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
