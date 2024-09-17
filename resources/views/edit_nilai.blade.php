
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
              <li class="breadcrumb-item active">Edit Nilai</li>
            
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
                <h3 class="card-title">Ubah Nilai Calon Siswa</h3>
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
  
    @foreach($lihat_nilai as $g)
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


                        <form method="post" action="/prosesedit_nilai" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              
                          
                              
                <div class="card-body">
                

               
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Pendaftaran</label>
                    <input type="text" class="form-control" readonly  name="no_pendaftaran" value="{{ $g->no_pendaftaran }}"  required>
                  </div>

                 
                  
                     <div class="form-group">
                    <label for="exampleInputPassword1">Nilai Bahasa Indonesia</label>
                    <input type="text" class="form-control"  name="nilai_bahasa_indonesia" value="{{ $g->nilai_bahasa_indonesia }}"  required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nilai Matematika</label>
                    <input type="text" class="form-control"  name="nilai_matematika" value="{{ $g->nilai_matematika }}"  required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nilai IPA</label>
                    <input type="text" class="form-control"  name="nilai_ipa" value="{{ $g->nilai_ipa }}"  required>
                  </div>
                    
                   

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nilai Bahasa Inggris</label>
                    <input type="text" class="form-control" value="{{ $g->nilai_inggris }}" name="nilai_inggris"  required>
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
