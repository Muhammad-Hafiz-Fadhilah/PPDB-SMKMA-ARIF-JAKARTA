
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SMK MA'ARIF  </title>
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
            <h2 style="margin-top:-68px">Cetak Kartu Ujian</h2>
         </div>
    </div>
       <div class="contant">
    	<div class="container">
        	
        	<div class="row">
            	 
                <div class="span12">
                	<div class="form-box" style="margin-top:-30px;">
                       
                        <form method="post" action="" enctype="multipart/form-data">
                        
                        	<div class="form-body" style="margin-top:-68px">
                            <fieldset>
                            
                            @foreach($calon_siswa as $p)
                                <legend>Keterangan</legend>
                                      <div class="row-fluid">
                                	<div class="span12">
                                    
                                      <div class="alert alert-info alert-dismissible">
                  <h4><i class="icon fas fa-exclamation-triangle"></i> Status</h4>
@if($p->status  =='1') 
<h3>Belum Melakukan Pembayaran</3>
@elseif($p->status  =='2')   
<h3>Sudah Melakukan Pembayaran dan Belum Dikonfirmasi</3> 
@elseif($p->status  =='3')                
<h3>Sudah Melakukan Pembayaran dan Sudah Dikonfirmasi, Cetak Kartu Ujian</3> 
<a href="/cetak_pdf/{{Session::get('no_pendaftaran')}}" class="btn btn-primary">Disini</a>

@endif  

                </div>
                                    
                                    	
                                    </div>
                                 
                 
                                          
                                    
                                    
                                </div>
                                
                                  @endforeach
                                
                   
                                
                                
                                
                            
                                
                     
                            </fieldset>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <br />
                            
                            
                            
                            </div>
                            </form></div></div></div></div></div>
                            
                            

        <!--CONTANT end-->
         
              @include('utama.footer');
 
    <!--FOOTER END-->
   
  
 

@include('utama.js');


</body>
</html>
