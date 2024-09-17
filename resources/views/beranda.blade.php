
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('template.head');
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1 class="m-0">Halaman Utama</h1>
          </div><!-- /.col -->
          <div class="col-sm-3">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
       
         <div class="container-fluid">
        <div class="row">

        @if(auth()->user()->level=="kepsek")
          <div class="col-12">
            <!-- /.card -->
<div class="card">

  <div class="card-header">
                <h3 class="card-title">Pendaftar Yang Sudah Membayar</h3>
              </div>
  <!-- /.card-header -->
<div class="card-body">
              <p>Jumlah Calon Siswa Yang Mendaftar di Jurusan Manajemen perkantoran dan Layanan Bisnis Sebanyak 
                <strong>{{ $calon_siswa_mlb->count() }}</strong> Calon Siswa</p>

                <p>Jumlah Calon Siswa Yang Mendaftar di Desain Komputer dan Visual
                <strong>{{ $calon_siswa_dkv->count() }}</strong> Calon Siswa</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          @endif

        @if(auth()->user()->level=="admin")
          <div class="col-12">
            <!-- /.card -->
<div class="card">

  <div class="card-header">
                <h3 class="card-title">Pendaftar Yang Sudah Membayar</h3>
              </div>
  <!-- /.card-header -->
<div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor Pendaftaran</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Tempat/Tgl Lahir</th>
                    <th>Tahun Lulus</th>
                    <th>Email</th>
                  <th>Lihat</th>
                  <th>Pembayaran</th>

                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($calon_siswa as $p)
                  <tr>
                    <td>{{ $p->no_pendaftaran }}</td>
                    <td>{{ $p->nama_calon_siswa }}</td>
                    <td>{{ $p->asal_sekolah }}</td>
                    <td>{{ $p->tempat_lahir }} / {{ $p->tgl_lahir }} </td>
                    <td>{{ $p->tahun_lulus }}</td>
                    <td>{{ $p->email }}</td>
 	<td>
		<a href="/detail/{{ $p->no_pendaftaran }}">detail</a>
	

	</td>
          	<td>
	
		<a href="/konfirmasi/{{ $p->no_pendaftaran }}">Konfirmasi</a>

	</td>        </tr>
                  @endforeach
                  
                  </tbody>
             
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          @endif
          
          @if(auth()->user()->level=="admin")
          <div class="col-12">
            <!-- /.card -->
<div class="card">

  <div class="card-header">
                <h3 class="card-title">Pendaftar Yang Belum Membayar</h3>
              </div>
  <!-- /.card-header -->
<div class="card-body">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor Pendaftaran</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Tempat/Tgl Lahir</th>
                    <th>Tahun Lulus</th>
                    <th>Email</th>
                  <th>Lihat</th>

                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($calon_siswa2 as $p)
                  <tr>
                    <td>{{ $p->no_pendaftaran }}</td>
                    <td>{{ $p->nama_calon_siswa }}</td>
                    <td>{{ $p->asal_sekolah }}</td>
                    <td>{{ $p->tempat_lahir }} / {{ $p->tgl_lahir }} </td>
                    <td>{{ $p->tahun_lulus }}</td>
                    <td>{{ $p->email }}</td>
 	<td>
		<a href="/detail/{{ $p->no_pendaftaran }}">detail</a>
	

	</td>
               </tr>
                  @endforeach
                  
                  </tbody>
             
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          @endif
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
       
    </div>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('template.footer');
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- REQUIRED SCRIPTS -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	
	    $("#example3").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	
	
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
