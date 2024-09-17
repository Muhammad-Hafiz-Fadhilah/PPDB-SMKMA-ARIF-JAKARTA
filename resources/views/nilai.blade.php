
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
            <h2 style="margin-top:-68px">Nilai Anda</h2>
         </div>
    </div>
<div class="contant">
    	<div class="container">
        	
        	<div class="row">
            	 
                <div class="span12">
                	<div class="form-box" style="margin-top:-90px;">
                                 
                      @foreach($calon_siswa as $p)
                        <form method="post" action="/simpannilai" enctype="multipart/form-data">
                        <input type="hidden"  readonly="readonly" name="no_pendaftaran" value="{{ $p->no_pendaftaran }}" required class="input-block-level">
                        @endforeach

                        
                        {{ csrf_field() }}

                       
                        	<div class="form-body">
                            @foreach($cek_nilai as $n)
                            <fieldset>
                                <legend>Nilai Calon Siswa</legend>
                                      <div class="row-fluid">
                                	<div class="span6">
                                    	<label>Nilai Bahasa Indonesia</label>
                               			<input type="text" name="nilai_bahasa_indonesia" value="{{ $n->nilai_bahasa_indonesia }}"   required class="input-block-level">
                                    </div>
                                 
                      
                           
                                    
                                    <div class="span6">
                                    	<label>Nilai Matematika</label>
                               			<input type="text" name="nilai_matematika" value="{{ $n->nilai_matematika }}"  required class="input-block-level">
                                    </div>
                                </div>
                                
                                <div class="row-fluid">
                                	<div class="span6">
                                    	<label>Nilai Bahasa Inggris</label>
                               			<input type="text" name="nilai_inggris" value="{{ $n->nilai_inggris }}"   required class="input-block-level">
                                    </div>
                                    <div class="span6">
                                    	<label>Nilai IPA</label>
                               			<input type="text" name="nilai_ipa" value="{{ $n->nilai_ipa }}"   required class="input-block-level">
                                    </div>
                                </div>
                                
                                
                                
                                
                                </div>
                            
                                
                     
                            </fieldset>
                            @endforeach
                            
                            
                            <br />
                            
                            <center>        <input value="Isi Nilai" type="submit" class="btn-style">      
                       </center>
                       
                             </form>
                             
                              
                             
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
