
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SMK MA'ARIF </title>
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
        @if( $cek_pembayaran->count() > 0)
            <h2 style="margin-top:-68px">Hasil Bukti Pembayaran Pendaftaran</h2>
           @else
           <h2 style="margin-top:-68px">Upload Bukti Pembayaran Pendaftaran</h2>  
           
              @endif 
         </div>
    </div>
<div class="contant">
    	<div class="container">
        	
        	<div class="row">
            	 
                <div class="span12">
                	<div class="form-box" style="margin-top:-90px;">
                       
                         @if( $cek_pembayaran->count() > 0)
                   
                         
                          @foreach($cek_pembayaran as $g)
                          <center> <img width="350px" src="{{ url('/data_file/'.$g->file) }}"></center>
                          @endforeach
                       
                       
                     @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
           
            
            @endif     
            
              @else   
                 
                        <form method="post" action="/upload_pembayaran" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        	<div class="form-body">
                            <fieldset>
                                <legend>Pembayaran</legend>
                                      <div class="row-fluid">
                                	<div class="span6">
                                    
                                  
                                    
                                    	<label>Nomor Registerasi</label>
                               			<input type="text" name="no_pendaftaran"  readonly="readonly" value="{{Session::get('no_pendaftaran')}}" required class="input-block-level">
                                    </div>
                                 
                      <input type="hidden" name="status"  value="2" required class="input-block-level">
                                          
                                    
                                    <div class="span6">
                                    	<label>Bukti Pembayaran</label>
                               			<input type="file" name="file"  required class="input-block-level">
                                    </div>
                                </div>
                                
                                 
                                 <div class="row-fluid">
                                	<div class="span6">
                                    
                                  
                                    
                                    	<label>Jumlah Pembayaran</label>
                               			<input type="text"   readonly="readonly" value="Rp 200.000,-" required class="input-block-level">
                                    </div>
                                 
                      <input type="hidden" name="status"  value="2" required class="input-block-level">
                                          
                                    
                                    <div class="span6">
                                    	<label>Ke Rekening</label>
                               			<input type="text"   readonly="readonly" value="1021020192012 Bank BRI A/N SMK MA'Arif" required class="input-block-level">
                                    </div>
                                </div>
                               
                                </div>
                            
                                
                     
                            </fieldset>
                         
                            
                            <center>        <input value="Upload" type="submit" class="btn-style">      
                       </center>
                       
                             </form>
                        
                             
                            </div>
                            
                            @endif
                  
       

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
