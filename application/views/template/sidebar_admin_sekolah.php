  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu menu_fixed">
              <div class="menu_section">
                <ul class="nav side-menu">
                <li><a href="<?=base_url('admin')?>"><i class="fa fa-home"></i> HOME</a></li>   
                <li><a href="<?=base_url('admin/role')?>"><i class="fa fa-sitemap"></i> ROLE</a></li>          
                <li><a href="<?=base_url('admin/pengguna')?>"><i class="fa fa-user"></i> PENGGUNA</a></li>      
                <li><a href="<?=base_url('info_khusus')?>"><i class="fa fa-info"></i> INFORMASI KHUSUS</a></li>                             
                <li><a href="<?=base_url('wali_kelas')?>"><i class="fa fa-edit"></i> WALI KELAS</a></li>                             
                <li><a href="<?=base_url('mapel')?>"><i class="fa fa-edit"></i> GURU BIDANG STUDI</a></li>                 
           
                  <li><a><i class="fa fa-edit"></i> WAKA KURIKULUM <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Roster</a></li>
                      <li><a href="form_advanced.html">Info Tambahan</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> WAKA KESISWAAN <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">Pelanggaran & Tindakan</a></li>
                    </ul>
                  </li>
                
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="<?=base_url()?>/assets22/img/favicon.png" alt=""><?=$nama_user?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profil</a>
                      <a class="dropdown-item"  href="<?=base_url('admin/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>

                </ul>
            </div>
          </div>
        <!-- /top navigation -->