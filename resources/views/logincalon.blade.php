
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
            <h2 style="margin-top:-68px">Login Calon Siswa</h2>
         </div>
    </div>
<div class="contant">
    	<div class="container">
        	
        	<div class="row">
            	 
                <div class="span12">
                	<div class="form-box" style="margin-top:-90px;">
                                  @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif

            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
               
                        <form method="post" action="{{ url('/loginPost') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        	<div class="form-body">
                            <fieldset>
                                <legend>Login Calon Siswa</legend>
                                      <div class="row-fluid">
                                	<div class="span6">
                                    
                                  
                                    
                                    	<label>Email</label>
                               			<input type="text" name="email"   required class="input-block-level">
                                    </div>
                                 
                      
                                          
                                    
                                    <div class="span6">
                                    	<label>Password</label>
                               			<input type="password" name="password"  required class="input-block-level">
                                    </div>
                                </div>
                                
                                 
                               
                                </div>
                            
                                
                     
                            </fieldset>
                         
                            
                            <center>        <input value="Login Calon Siswa" type="submit" class="btn-style">      
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
