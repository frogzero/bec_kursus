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
                    <?php foreach ($paket_ubah as $key => $a): ?>
                      
                    <form class="form-horizontal" method="POST" action="<?=site_url('admin/program/simpan_ubah/'.$a->id_program)?>"> 
                      <fieldset>
                        <legend>Form</legend>

                         <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Nama Paket</label>
                          <div class="col-lg-10">
                             <select class="form-control" name="id_paket" id="select">
                             <?php foreach ($paket as $key => $row): ?>
                               <option value="<?=$row->id_paket?>"><?=$row->nama_paket?></option>
                             <?php endforeach ?>
                                 
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Jenis Program</label>
                          <div class="col-lg-10">
                             <select class="form-control" name="jenis" id="select">
                                 <option value="bimbel">Bimbel</option>
                                 <option value="kursus">Kursus</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Kategori Program</label>
                          <div class="col-lg-10">
                             <select class="form-control" name="kategori" id="select">
                                 <option value="private">private</option>
                                 <option value="reguler">reguler</option>
                                 <option value="umum">umum</option>
                            </select>
                          </div>
                        </div>
                         <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Waktu</label>
                          <div class="col-lg-10">
                           <select class="form-control" name="waktu">
                                 <option value="bulan">Bulan</option>
                                 <option value="pertemuan">Pertemuan</option>
                           </select>
                          </div>
                        </div>
                       
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Lama</label>
                          <div class="col-lg-10">
                            <select class="form-control" name="lama">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option> 
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option> 
                                <option value="11">11</option>
                                <option value="12">12</option>
                           </select>
                           </div>
                        </div> 
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Biaya</label>
                          <div class="col-lg-10">
                            <input class="form-control" name="biaya_program"  type="number" placeholder="biaya" value="<?php echo $a->biaya?>">
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
                  <?php endforeach ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>