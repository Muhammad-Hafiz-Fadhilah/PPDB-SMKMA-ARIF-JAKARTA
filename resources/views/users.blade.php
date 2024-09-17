
    
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
            <h1 class="m-0">Pengumuman Kelulusan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengumuman Kelulusan</li>
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
          <div class="col-12">
            <!-- /.card -->
<div class="card">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

 
  
 
  
    <button class="btn btn-success send-email">Send Email</button>
  
    <table class="table table-bordered data-table">
        <thead>
            <tr>
               
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
               <input type="checkbox" checked style="display: none"  class="user-checkbox" name="users[]" value="{{ $user->no_pendaftaran }}">
                    <td>{{ $user->no_pendaftaran }}</td>
                    <td>{{ $user->nama_calon_siswa }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->jurusan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
  
<script type="text/javascript">
  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      
    $(".send-email").click(function(){

 
  
            var ids = $.map($("input[class='user-checkbox']:checked"), function(c){return c.value; });
  
            $.ajax({
               type:'POST',
               url:"{{ route('ajax.send.email') }}",
               data:{ids:ids},
               success:function(data){
                  alert(data.success);
               }
            });
  
       
    });
  
</script>


  
</body>
</html>