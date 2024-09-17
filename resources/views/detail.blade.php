
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
          <div class="col-sm-6">
            <h1 class="m-0">Detail Calon Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Calon Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
       
         <div class="container-fluid">
         
              @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
         
         @foreach($calon_siswa as $p)
        <div class="row">
          <div class="col-md-6">

            <!-- Profile Image -->
            
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Info Umum Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> No.Pendaftaran</strong>

                <p class="text-muted">
                  {{ $p->no_pendaftaran }}
                </p>

                <hr>
                
                    <strong><i class="fas fa-book mr-1"></i> Tanggal Pendaftaran</strong>

                <p class="text-muted">
                  {{ $p->tanggal_pendaftaran }}
                </p>

                <hr>
                
                   <strong><i class="fas fa-book mr-1"></i> Jurusan yang dipilih</strong>

                <p class="text-muted">
                  {{ $p->jurusan }}
                </p>

                <hr>
                
                  <strong><i class="fas fa-book mr-1"></i>Status Pembayaran</strong>
@if($p->status  =='1') 
            <div class="alert alert-danger">
                 Belum Melakukan Pembayaran
                </div>
@elseif($p->status  =='2')                

  <div class="alert alert-danger">
                 Sudah Melakukan Pembayaran dan Belum Dikonfirmasi</div>
       
@elseif($p->status  =='3') 
  <div class="alert alert-success">               

                  Sudah Melakukan Pembayaran dan Sudah Dikonfirmasi
                </div>
@endif                                
                <hr>

               <strong><i class="fas fa-book mr-1"></i> Email</strong>

                <p class="text-muted">
                  {{ $p->email }}
                </p>

                <hr>

                   <strong><i class="fas fa-book mr-1"></i> Asal Sekolah</strong>

                <p class="text-muted">
                  {{ $p->asal_sekolah }}
                </p>

                <hr>

                 <strong><i class="fas fa-book mr-1"></i>Alamat</strong>

                <p class="text-muted">
                  {{ $p->alamat }}
                </p>

                <hr>
                
                  <strong><i class="fas fa-book mr-1"></i>Agama</strong>

                <p class="text-muted">
                  {{ $p->agama }}
                </p>

                <hr>
                
                      <strong><i class="fas fa-book mr-1"></i>Jenis Kelamin</strong>

                <p class="text-muted">
                  {{ $p->jenis_kelamin }}
                </p>

                <hr>
                
                      <strong><i class="fas fa-book mr-1"></i>Tempat/Tanggal Lahir</strong>

                <p class="text-muted">
                 {{ $p->tempat_lahir }} / {{ $p->tgl_lahir }}
                </p>

                <a href="/edit_data/{{ $p->no_pendaftaran}}" class="btn btn-block btn-primary">Edit Data</a>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          
          <div class="col-md-6">

            <!-- Profile Image -->
            
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Info Umum Orang Tua/Wali</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>Nama Ayah</strong>

                <p class="text-muted">
                  {{ $p->nama_ayah }}
                </p>

                <hr>
                
                    <strong><i class="fas fa-book mr-1"></i>Nomor WA Ayah</strong>

                <p class="text-muted">
                  {{ $p->nomor_wa_ayah }}
                </p>

                <hr>
                
                    <strong><i class="fas fa-book mr-1"></i>Pekerjaan Ayah</strong>

                <p class="text-muted">
                  {{ $p->pekerjaan_ayah }}
                </p>

                <hr>

               <strong><i class="fas fa-book mr-1"></i> Penghasilan Ayah</strong>

                <p class="text-muted">
                  {{ $p->penghasilan_ayah }}
                </p>

                <hr>

                   <strong><i class="fas fa-book mr-1"></i>Nama Ibu</strong>

                <p class="text-muted">
                  {{ $p->nama_ibu }}
                </p>

                <hr>

                 <strong><i class="fas fa-book mr-1"></i>Nomor WA Ibu</strong>

                <p class="text-muted">
                  {{ $p->nomor_wa_ibu }}
                </p>

                <hr>
                
                  <strong><i class="fas fa-book mr-1"></i>Pekerjaan Ibu</strong>

                <p class="text-muted">
                  {{ $p->pekerjaan_ibu }}
                </p>

                <hr>
                
                      <strong><i class="fas fa-book mr-1"></i>Penghasilan Ibu</strong>

                <p class="text-muted">
                  {{ $p->penghasilan_ibu }}
                </p>

           
                <a href="/edit_data/{{ $p->no_pendaftaran}}" class="btn btn-block btn-primary">Edit Data</a>
                     
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          
          <div class="col-md-6">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nilai Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>Nilai Bahasa Indonesia</strong>

                <p class="text-muted">
                  {{ $p->nilai_bahasa_indonesia }}
                </p>

                <hr>
                
                    <strong><i class="fas fa-book mr-1"></i>Nilai Matematika</strong>

                <p class="text-muted">
                  {{ $p->nilai_matematika }}
                </p>

                <hr>
                
                    <strong><i class="fas fa-book mr-1"></i>Nilai IPA</strong>

                <p class="text-muted">
                  {{ $p->nilai_ipa }}
                </p>

                <hr>

               <strong><i class="fas fa-book mr-1"></i> Nilai Bahasa Inggris</strong>

                <p class="text-muted">
                  {{ $p->nilai_inggris }}
                </p>


              
                <a href="/edit_nilai/{{ $p->no_pendaftaran}}" class="btn btn-block btn-primary">Edit Nilai</a>

                
                

           
                
                     
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
          
          <div class="col-md-6">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">File Calon Siswa Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i>File Pas Foto</strong>

<p class="text-muted">
<a href="{{ url('/data_file/'.$p->foto_calon_siswa) }}">{{ $p->foto_calon_siswa }}</a>
</p>

<hr>

    <strong><i class="fas fa-book mr-1"></i>File Ijazah</strong>

<p class="text-muted">
<a href="{{ url('/data_file/'.$p->ijazah) }}">{{ $p->ijazah }}</a>
</p>

<hr>


<strong><i class="fas fa-book mr-1"></i>File Akte Kelahiran</strong>

<p class="text-muted">
<a href="{{ url('/data_file/'.$p->akte_kelahiran) }}">{{ $p->akte_kelahiran }}</a>
</p>

<hr>

<strong><i class="fas fa-book mr-1"></i>File Kartu Keluarga</strong>

<p class="text-muted">
<a href="{{ url('/data_file/'.$p->kartu_keluarga) }}">{{ $p->kartu_keluarga }}</a>
</p>

<hr>


<strong><i class="fas fa-book mr-1"></i>File SHUN</strong>

<p class="text-muted">
<a href="{{ url('/data_file/'.$p->shun) }}">{{ $p->shun }}</a>
</p>

 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        @endforeach
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
       
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
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
<!-- jQuery -->

</body>
</html>
