<header  style="background:url(aa.jpg); background-repeat: no-repeat; 
background-size: cover; 
background-position: center; ">
    	<!--TOP STRIP START-->
        <div class="top-strip">
        	<div class="container">
            	<!--LANGUAGE SECTION START-->
            	
                <!--LANGUAGE SECTION END-->
                <!--ACCOUNT SECTION START-->
                
				<style type="text/css">

	.menu-malasngoding{
		background-color: #3141ff;
	}

	.menu-malasngoding ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}

	.menu-malasngoding > ul > li {
		float: left;
	}

	
	.menu-malasngoding li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.menu-malasngoding li a:hover{
		background-color: #2525ff;
	}

	li.dropdown {
		display: inline-block;
	}

	.dropdown:hover .isi-dropdown {
		display: block;
	}

	.isi-dropdown a:hover {
		color: #fff !important;
	}

	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color: #f9f9f9;
	}

	.isi-dropdown a {
		color: #3c3c3c !important;
	}

	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}
</style>
                <div class="menu-malasngoding">

		<ul>
			<li><a href="/">Home</a></li>
          
            
            	
    @if(Session::get('nama_calon_siswa'))
            <li><a href="#">Hallo, {{Session::get('nama_calon_siswa')}}. Apakabar?</a></li>
		<li><a href="/logoutcalon">Logout</a></li>
       

        <li><a href="/pengumuman/{{Session::get('jurusan')}}">Pengumuman</a></li>	
     
<li><a href="/pembayaran/{{Session::get('no_pendaftaran')}}"> Pembayaran</a></li>
<li><a href="/cetak/{{Session::get('no_pendaftaran')}}"> Cetak Kartu Ujian</a></li>


        
        
          
           @else
          
  <li><a href="/pendaftaran">Register Calon Siswa</a></li>
				
				<li><a href="/logincalon">Login Calon Siswa</a></li>
                
                @endif
		</ul>

	</div>
                
                
                
                <!--ACCOUNT SECTION START-->
            </div>
        </div>
 
            <div class="navigation-bar">
        	<div class="container">
            		<div class="logo" style="margin-top:-20px">
                    <img src="{{asset('umum/header3.jpg')}}">
                </div>
             
                
            </div>
        </div>
        
        <!--TOP STRIP END-->
        <!--NAVIGATION START-->
  
        <!--NAVIGATION END-->
    </header>