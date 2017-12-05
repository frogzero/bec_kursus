  <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
            <div class="pull-left info">
              <p><?=$this->session->userdata('email_student');?></p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>>
            <li><a href="<?=site_url('student/home_student/profil_student/')?>"><i class="fa fa-pie-chart"></i><span>Profil</span></a></li>    
            <li><a href="<?=site_url('student/home_student/jadwal/')?>"><i class="fa fa-pie-chart"></i><span>Jadwal</span></a></li>     
            <li><a href="<?=site_url('student/home_student/beli_paket/')?>"><i class="fa fa-pie-chart"></i><span>Beli Paket</span></a></li>
                </li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>