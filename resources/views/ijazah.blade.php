
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SMK MA'ARIF</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CUSTOM CSS -->

@include('utama.css');



</head>



<body>
<!--WRAPPER START-->
<div class="wrapper">
    <!--HEADER START-->
    @include('utama.header');
    <!--HEADER END-->
 
    <!--CONTANT START-->
    
<div class="page-heading">
    	<div class="container">
            <h2 style="margin-top:-68px">Upload File Kelengkapan Calon Siswa</h2>
         </div>
    </div>
<div class="contant">
    	<div class="container">
        	
        	<div class="row">
            	 
                <div class="span12">
                	<div class="form-box" style="margin-top:-90px;">
                                 
                    @foreach($calon_siswa as $p)
                        <form method="post" action="/proses_upload" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        	<div class="form-body">
                            <fieldset>
                                <legend>Informasi Ijazah Siswa</legend>
                                      <div class="row-fluid">
                                	<div class="span6">
                                    
                                  
                                    
                                    	<label>Nomor Registerasi</label>
                               			<input type="text" name="no_pendaftaran"  readonly="readonly" value="{{ $p->no_pendaftaran }}" required class="input-block-level">
                                    </div>
                                 
                      
                                          
                                    
                                    <div class="span6">
                                    	<label>File Ijazah</label>
                               			<input type="file" name="file"  required class="input-block-level">
                                    </div>
                                </div>
                                
                                <div class="row-fluid">
                                
                                    
                                     
                                    <div class="span6">
                                    	<label>File Pas Foto</label>
                               			<input type="file" name="file_pas_foto"  required class="input-block-level">
                                    </div>
                      
                                          
                                    
                                    <div class="span6">
                                    	<label>File Akte Kelahiran</label>
                               			<input type="file" name="file_akte_kelahiran"  required class="input-block-level">
                                    </div>
                                </div>

                                <div class="row-fluid">
                                
                                    
                                     
                                <div class="span6">
                                    <label>File Kartu Keluarga</label>
                                       <input type="file" name="file_kartu_keluarga"  required class="input-block-level">
                                </div>
                  
                                      
                                
                                <div class="span6">
                                    <label>File SHUN</label>
                                       <input type="file" name="file_shun"  required class="input-block-level">
                                </div>
                            </div>
                                 
                               
                                </div>
                            
                              
                               
                              
                     
                            </fieldset>
                         
                            
                            <center>        <input value="Upload" type="submit" class="btn-style">      
                       </center>
                       
                             </form>
                             @endforeach
                             
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
