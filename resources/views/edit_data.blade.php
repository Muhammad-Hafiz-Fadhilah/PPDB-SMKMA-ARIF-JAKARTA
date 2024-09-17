
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
          
      
            <h1 class="m-0">Edit Calon Siswa</h1>
          
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Jadwal Ujian</li>
            
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
          <!-- left column -->
        
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Jadwal Ujian </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
          
          
                @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
           
            
            @endif
            
            	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
    @foreach($lihat_calon_siswa as $g)
                 <script>
 $(document).ready(function(){
    $(function() {
        $( '#datepicker' ).datepicker({
            dateFormat:'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
			yearRange: '1950:' + new Date().getFullYear().toString()
        });
		
		  $( '#datepicker2' ).datepicker({
            dateFormat:'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
			yearRange: '1950:' + new Date().getFullYear().toString()
        });
		
    });
});
</script> 


                        <form method="post" action="/prosesedit_calon_siswa" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              
                          
                              
                <div class="card-body">
                

               
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Pendaftaran</label>
                    <input type="text" class="form-control" readonly  name="no_pendaftaran" value="{{ $g->no_pendaftaran }}"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Jurusan yang Dipilih</label>
                    <input type="text" class="form-control" readonly   value="{{ $g->jurusan }}"  required>
                  </div>
                  
                     <div class="form-group">
                    <label for="exampleInputPassword1">NISN</label>
                    <input type="text" class="form-control"  name="nisn" value="{{ $g->nisn }}"  required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control"  name="email" value="{{ $g->email }}"  required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Lahir</label>
                    <input type="text" class="form-control"  name="tempat_lahir" value="{{ $g->tempat_lahir }}"  required>
                  </div>
                     <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="datepicker2" value="{{ $g->tgl_lahir }}" name="tgl_lahir"  required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">


@if($g->jenis_kelamin  =='Laki-Laki') 
<option value="Laki-Laki" selected>Laki-Laki</option>
<option value="Perempuan">Perempuan</option>
@elseif($g->jenis_kelamin  =='Perempuan') 

<option value="Laki-Laki">Laki-Laki</option>
<option value="Perempuan" selected>Perempuan</option>
@else

<option value="Laki-Laki">Laki-Laki</option>
<option value="Perempuan" selected>Perempuan</option>

@endif
</select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Asal Sekolah</label>
                    <input type="text" class="form-control" value="{{ $g->asal_sekolah }}" name="asal_sekolah"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor STTB</label>
                    <input type="text" class="form-control" value="{{ $g->no_sttb }}" name="no_sttb"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Agama</label>
                    <select class="form-control" name="agama">
                    @if($g->agama  =='Budha') 
                                        <option value="Budha" selected>Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Lain-Lain">Lain-Lain</option>
                                        @elseif($g->agama  =='Hindu') 
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu" selected>Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Lain-Lain">Lain-Lain</option>   
                                        @elseif($g->agama  =='Islam') 
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam" selected>Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Lain-Lain">Lain-Lain</option> 
                                        @elseif($g->agama  =='Katolik') 
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik" selected>Katolik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Lain-Lain">Lain-Lain</option> 
                                        @elseif($g->agama  =='Protestan') 
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Protestan" selected>Protestan</option>
                                        <option value="Lain-Lain">Lain-Lain</option> 
                                        @elseif($g->agama  =='Lain-Lain') 
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Lain-Lain" selected>Lain-Lain</option> 
                                        @endif
                                        </select>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" value="{{ $g->alamat }}" name="alamat"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahun Lulus</label>
                    <input type="text" class="form-control" value="{{ $g->tahun_lulus }}" name="tahun_lulus"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor STTB</label>
                    <input type="text" class="form-control" value="{{ $g->no_sttb }}" name="no_sttb"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Ayah</label>
                    <input type="text" class="form-control" value="{{ $g->nama_ayah }}" name="nama_ayah"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor WA Ayah</label>
                    <input type="text" class="form-control" value="{{ $g->nomor_wa_ayah }}" name="nomor_wa_ayah"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Pekerjaan Ayah</label>
                    <input type="text" class="form-control" value="{{ $g->pekerjaan_ayah }}" name="pekerjaan_ayah"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Penghasilan Ayah</label>
                    <input type="text" class="form-control" value="{{ $g->penghasilan_ayah }}" name="penghasilan_ayah"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Ibu</label>
                    <input type="text" class="form-control" value="{{ $g->nama_ibu }}" name="nama_ibu"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor WA Ibu</label>
                    <input type="text" class="form-control" value="{{ $g->nomor_wa_ibu }}" name="nomor_wa_ibu"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Pekerjaan Ibu</label>
                    <input type="text" class="form-control" value="{{ $g->pekerjaan_ibu }}" name="pekerjaan_ibu"  required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Penghasilan Ibu</label>
                    <input type="text" class="form-control" value="{{ $g->penghasilan_ibu }}" name="penghasilan_ibu"  required>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
               @endforeach
                  
            </div>
            <!-- /.card -->

            <!-- general form elements -->
            
            <!-- /.card -->

            <!-- Input addon -->
            
            <!-- /.card -->
            <!-- Horizontal Form -->
            
            <!-- /.card -->

          </div>
          
        
          
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
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


<!-- Bootstrap 4 -->

<!-- Bootstrap 4 -->

<!-- jQuery -->

</body>
</html>
