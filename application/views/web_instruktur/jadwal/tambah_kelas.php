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
                    <form class="form-horizontal" method="POST" action="<?=site_url('admin/jadwal/simpan_kelas')?>"> 
                      <fieldset>
                        <legend>Form</legend>


                       <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Nama Kelas</label>
                          <div class="col-lg-10">
                           <input class="form-control" name="kelas"  type="text" placeholder="Nama Kelas">
                           </div>
                        </div>


                          <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Nama Program</label>
                          <div class="col-lg-10">
                           <select class="form-control" id="demoSelect" name="paket">
                            <?php foreach ($tampil_program as $row): ?>
                               <option value="<?=$row->id_paket?>"><?=$row->nama_paket?></option> 
                            <?php endforeach ?>
                                                              
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
