
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SMK MA'ARIF </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CUSTOM CSS -->

@include('utama.css');



</head>

 	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<body>
<!--WRAPPER START-->
<div class="wrapper">
    <!--HEADER START-->
    @include('utama.header');
    <!--HEADER END-->
 
    <!--CONTANT START-->
    
                                     
               <script>
 $(document).ready(function(){
    $(function() {
        $( '#datepicker' ).datepicker({
            dateFormat:'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
			yearRange: '1950:' + new Date().getFullYear().toString()
        });
    });
});
</script>    
    
<div class="page-heading">
    	<div class="container">
            <h2 style="margin-top:-68px">Pendaftaran Siswa Baru</h2>
         </div>
    </div>
<div class="contant">
    	<div class="container">
        	
        	<div class="row">
            	 
                <div class="span12">
                	<div class="form-box" style="margin-top:-90px;">
                          @if( $cek_pendaftaran->count() > 0)
                    
                        <form method="post" action="/store" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        	<div class="form-body">
                            <fieldset>
                                <legend>Informasi Calon Siswa</legend>
                                      <div class="row-fluid">
                                	<div class="span6">
                                    	<label>NISN</label>
                               			<input type="text"  name="nisn"  required class="input-block-level">
                                    </div>
                                 
                         <input type="hidden"  readonly="readonly" name="no_pendaftaran" value="{{ $kd }}" required class="input-block-level">     
                           
                                    
                                    <div class="span6">
                                    	<label>Nama Calon Siswa</label>
                               			<input type="text" name="nama_calon_siswa"  required class="input-block-level">
                                    </div>
                                </div>
                                
                                <div class="row-fluid">
                                	<div class="span6">
                                    	<label>Email</label>
                               			<input type="email"  name="email" required class="input-block-level">

                                           @error('email')

                                           <div class="alert alert-danger">

         {{$message}}

  </div>

@enderror
                                    </div>
                                 
                      
                                    <input type="hidden" name="status" value="1"  >
                                    
                                    <div class="span6">
                                    	<label>Password</label>
                               			<input type="password" name="password"  required class="input-block-level">
                                    </div>
                                </div>
                              
                               
                                
                                
                              
                                                    
                             
                                
                                <div class="row-fluid">
                                
                                <div class="span12">
                                    	<label>Jurusan yang dipilih</label>
                               			 <select name="jurusan" class="input-block-level">
                                         <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                         <option value="Manajemen perkantoran dan Layanan Bisnis">Manajemen perkantoran dan Layanan Bisnis</option>

                                         </select>
                                    </div>
                                
                                 
                                    
                                    
                                    
                                </div>
                                
                                </div>
                            
                                
                     
                            </fieldset>
                            
                            
                            
                             
                            
                       
                            
                            
                            
                            
                            
                            <br />
                            
                            <center>        <input value="Daftar Calon Siswa" type="submit" class="btn-style">      
                       </center>
                       
                             </form>
                             
                              @else
                           <center>
                           
                           <h1>Belum Masa Pendaftaran</h1>
                           
                         </center>
                           @endif 
                             
                            </div>
                            
                            
                  
       

        <!--CONTANT end-->
         
        @include('utama.footer');
    </footer>
    <!--FOOTER END-->
</div>
<!--WRAPPER END-->
<!-- Jquery Lib -->
<!-- Bootstrap -->

@include('utama.js');


</body>
</html>
