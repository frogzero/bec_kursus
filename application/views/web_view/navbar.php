  <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="<?php echo base_url('assets/web/images/usera.png')?>" alt="User Image"></div>
            <div class="pull-left info">
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>>
            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Program Kursus</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=site_url('admin/program_kursus/')?>"><i class="fa fa-circle-o"></i> Program Paket</a></li>
                <li><a href="<?=site_url('admin/Program/')?>"><i class="fa fa-circle-o"></i> Program Kursus</a>
                </li>
              </ul>
            </li>
            <li><a href="<?=site_url('admin/siswa_baru/')?>"><i class="fa fa-pie-chart"></i><span>Siswa Baru</span></a></li>
            <li><a href="<?=site_url('admin/siswa_aktif/')?>"><i class="fa fa-pie-chart"></i><span>Siswa</span></a></li>
             <li><a href="<?=site_url('admin/instruktur/')?>"><i class="fa fa-pie-chart"></i><span>Instruktur</span></a></li>
              <li><a href="<?=site_url('admin/jadwal/')?>"><i class="fa fa-pie-chart"></i><span>Jadwal</span></a></li>
               <li><a href="<?=site_url('admin/paket_siswa/')?>"><i class="fa fa-pie-chart"></i><span>Paket siswa</span></a></li>                  
                </li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>