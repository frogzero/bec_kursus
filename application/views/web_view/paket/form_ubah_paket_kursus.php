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
                    <?php foreach ($paket as $key => $row) {?>
                    <form class="form-horizontal" method="POST" action="<?=site_url('admin/program_kursus/ubah_program_kursus/'.$row->id_paket)?>"> 
                      <fieldset>
                        <legend>Form</legend>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Nama Paket</label>
                          <div class="col-lg-10">
                            <input class="form-control" name="nama_program"  type="text" placeholder="Name" value="<?php echo $row->nama_paket ?>">
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

                     <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>