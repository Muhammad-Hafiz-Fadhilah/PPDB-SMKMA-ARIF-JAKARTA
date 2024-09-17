<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('umum/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SMK MA'ARIF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('umum/user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
            <ul class="nav nav-treeview">
              @if(auth()->user()->level=="admin")
              
              <li class="nav-item">
                <a href="/beranda" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('calonsiswa')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calon Siswa</p>
                </a>
              </li>
              
                   <li class="nav-item">
                <a href="{{route('tgl_pendaftaran')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tanggal Pendaftaran</p>
                </a>
              </li>
              
                <li class="nav-item">
                <a href="{{route('jadwal_ujian')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Ujian</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('tgl_pengumuman')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tanggal Pengumuman</p>
                </a>
              </li>
              
             
              <li class="nav-item">
                <a href="/users" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kirim Email Kelulusan</p>
                </a>
              </li>
              
              
              @endif
            
            </ul>
          </li>


          <li class="nav-item">
                <a href="{{route('lulus')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calon Siswa Lulus MPLB</p>
                </a>
              </li>
              
                 <li class="nav-item">
                <a href="{{route('lulusdkv')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calon Siswa Lulus DKV</p>
                </a>
              </li>
              
                <li class="nav-item">
                <a href="{{route('tidaklulus')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calon Siswa Tidak Lulus MPLB</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('tidaklulusdkv')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calon Siswa Tidak Lulus DKV</p>
                </a>
              </li>

          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Logout
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>