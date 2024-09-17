
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SMK MA'ARIF </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CUSTOM CSS -->

@include('utama.css');

<style>



</style>

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
            <h2 style="margin-top:-68px">Selamat Datang di Website Penerima Siswa Baru SMK MA'ARIF Jakarta</h2>
         </div>
    </div>
       <div class="contant">
    	<div class="container">
        
        	<div class="row">
         
                <div class="span12">
                	<div class="form-box" style="margin-top:-30px;">
                       

                        <form method="post" action="" enctype="multipart/form-data">
                        
               
                        	<div class="form-body" style="margin-top:-68px">
                          @if(Session::get('nama_calon_siswa'))
                          <fieldset>
                            
                          @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
                                <legend>Lengkapi Pendaftaran</legend>
                                      <div class="row-fluid">
                                	<div class="span6">
                                    
                                      <div class="alert alert-info alert-dismissible">
                                      <a href="/detail_data/{{Session::get('no_pendaftaran')}}"  class="btn-style">Lengkapi Data</a>   
                </div>

                                    </div>
                                 
                                    <div class="span6">
                                    
                                    <div class="alert alert-info alert-dismissible">
                                    <a href="/nilai/{{Session::get('no_pendaftaran')}}"  class="btn-style">Lengkapi Nilai</a>   
              </div>

                                  </div>
                                
                                
                                 <script type="text/javascript" src="ajax_daerah.js"></script>
                                
                                
                                
                                
                            
                                
                     
                            </fieldset>


                            @endif
                            <fieldset>
                            
                            @foreach($pendaftaran as $p)
                                <legend>Jadwal Pendaftaran</legend>
                                      <div class="row-fluid">
                                	<div class="span6">
                                    
                                      <div class="alert alert-info alert-dismissible">
                  <h4><i class="icon fas fa-exclamation-triangle"></i> Dari Tanggal!</h4>

                  <h3>{{ date('d-m-Y', strtotime($p->dari_tgl))}}</3>
                </div>
                                    
                                    	
                                    </div>
                                 
                 
                                          
                                    
                                    <div class="span6">
                                    	               <div class="alert alert-info alert-dismissible">
                  <h4><i class="icon fas fa-exclamation-triangle"></i> Sampai Tanggal!</h4>

                  <h3>{{ date('d-m-Y', strtotime($p->sampai_tgl))}}</3>
                </div>
                                    </div>
                                </div>
                                
                                  @endforeach
                                
                                
                                
                                
                                
                                
                                
                                
                                 <script type="text/javascript" src="ajax_daerah.js"></script>
                                
                                
                                
                                
                            
                                
                     
                            </fieldset>
                            
                            
                            
                            <fieldset>
                            
                            @foreach($pengumuman as $g)
                                <legend>Jadwal Pengumuman</legend>
                                      <div class="row-fluid">
                                	<div class="span6">
                                    
                                      <div class="alert alert-danger alert-dismissible">
                  <h4><i class="icon fas fa-exclamation-triangle"></i> Dari Tanggal!</h4>

                  <h3>{{ date('d-m-Y', strtotime($g->dari_tgl))}}</3>
                </div>
                                    
                                    	
                                    </div>
                                 
                 
                                          
                                    
                                    <div class="span6">
                                    	               <div class="alert alert-danger alert-dismissible">
                  <h4><i class="icon fas fa-exclamation-triangle"></i> Sampai Tanggal!</h4>

                  <h3>{{ date('d-m-Y', strtotime($g->sampai_tgl))}}</3>
                </div>
                                    </div>
                                </div>
                                
                                  @endforeach
                            
                            </fieldset>
                            
                                 
                          
                            <br />
                            
                            
                            
                            </div>
                            </form>
                            
                            <style>


.timeline {
  position: relative;
  width: 100%;
  max-width: 1140px;
  margin: 0 auto;
  padding: 15px 0;
}

.timeline::after {
  content: '';
  position: absolute;
  width: 2px;
  background: #006E51;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -1px;
}

.containerr {
  padding: 15px 30px;
  position: relative;
  background: inherit;
  width: 50%;
}

.containerr.left {
  left: 0;
}

.containerr.right {
  left: 50%;
}

.containerr::after {
  content: '';
  position: absolute;
  width: 16px;
  height: 16px;
  top: calc(50% - 8px);
  right: -8px;
  background: #ffffff;
  border: 2px solid #006E51;
  border-radius: 16px;
  z-index: 1;
}

.containerr.right::after {
  left: -8px;
}

.containerr::before {
  content: '';
  position: absolute;
  width: 50px;
  height: 2px;
  top: calc(50% - 1px);
  right: 8px;
  background: #006E51;
  z-index: 1;
}

.containerr.right::before {
  left: 8px;
}

.containerr .date {
  position: absolute;
  display: inline-block;
  top: calc(50% - 8px);
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  color: #006E51;
  text-transform: uppercase;
  letter-spacing: 1px;
  z-index: 1;
}

.containerr.left .date {
  right: -75px;
}

.containerr.right .date {
  left: -75px;
}

.containerr .icon {
  position: absolute;
  display: inline-block;
  width: 40px;
  height: 40px;
  padding: 9px 0;
  top: calc(50% - 20px);
  background: #F6D155;
  border: 2px solid #006E51;
  border-radius: 40px;
  text-align: center;
  font-size: 18px;
  color: #006E51;
  z-index: 1;
}

.containerr.left .icon {
  right: 56px;
}

.containerr.right .icon {
  left: 56px;
}

.containerr .content {
  padding: 30px 90px 30px 30px;
  background: #F6D155;
  position: relative;
  border-radius: 0 500px 500px 0;
}

.containerr.right .content {
  padding: 30px 30px 30px 90px;
  border-radius: 500px 0 0 500px;
}

.containerr .content h2 {
  margin: 0 0 10px 0;
  font-size: 18px;
  font-weight: normal;
  color: #006E51;
}

.containerr .content p {
  margin: 0;
  font-size: 16px;
  line-height: 22px;
  color: #000000;
}


</style>            


 <h2 align="center">Proses Pendaftaran</h2>
                                     
<div class="timeline">
  <div class="containerr left">
    <div class="date">Step 1</div>
    <i class="icon fa fa-home"></i>
    <div class="content">
    <h2>Kunjungi Website</h2>
      <p>
        Kunjungi Website Penerima Siswa Baru SMA MA'ARIF
      </p>
    </div>
  </div>
  <div class="containerr right">
    <div class="date">Step 2</div>
    <i class="icon fa fa-gift"></i>
    <div class="content">
    <h2>Register Calon Siswa</h2>
      <p>
        Pilih menu register calon siswa dan masukkan data diri calon siswa
      </p>
    </div>
  </div>
  <div class="containerr left">
    <div class="date">Step 3</div>
    <i class="icon fa fa-user"></i>
    <div class="content">
      <h2>Upload Ijazah</h2>
      <p>
       Setelah berhasil memasukkan data diri, calon siswa harus mengupload ijazah  
      </p>
    </div>
  </div>
  <div class="containerr right">
    <div class="date">Step 4</div>
    <i class="icon fa fa-running"></i>
    <div class="content">
      <h2>Pengisian Nilai</h2>
      <p>
        Setelah berhasil mengupload data ijazah, calon siswa harus mengisi data nilai
      </p>
    </div>
  </div>
  <div class="containerr left">
    <div class="date">Step 5</div>
    <i class="icon fa fa-cog"></i>
    <div class="content">
      <h2>Login Calon Siswa</h2>
      <p>
        Setelah berhasil menguisi nilai, pilih menu login dan masukkkan username dan password
      </p>
    </div>
  </div>
  <div class="containerr right">
    <div class="date">Step 6</div>
    <i class="icon fa fa-certificate"></i>
    <div class="content">
      <h2>Masukkan Data Pembayaran</h2>
      <p>
        Setelah berhasil login, pilih menu pembayaran untuk mengupload bukti pembayaran untuk dikonfirmasi oleh admin dalam 1x24 jam
        paling terlambat. Untuk biaya pendaftaran sebesar Rp 200.000,- Ke Nomor Rekening 1021020192012 Bank BRI A/N SMK MA'Arif
      </p>
    </div>
  </div>
  
  
  <div class="containerr left">
    <div class="date">Step 7</div>
    <i class="icon fa fa-certificate"></i>
    <div class="content">
      <h2>Konfirmasi Pembayaran</h2>
      <p>
        Bukti pembayaran yang sudah diupload oleh calon siswa akan diperiksa oleh admin, apabila sudah valid admin mengkonfirmasi
        pembayaran
      </p>
    </div>
  </div>
  
  
   <div class="containerr right">
    <div class="date">Step 8</div>
    <i class="icon fa fa-certificate"></i>
    <div class="content">
      <h2>Cetak Kartu Ujian</h2>
      <p>
        Calon siswa kembali login di website untuk mencetk kartu ujian. Setelah berhasil login, calon pilih menu 
        cetak kartu ujian untuk mencetak kartu ujian. Apabila belum ada cetak kartu ujian, dapat menghubungi admin
        lewat aplikasi Whatsapp di nomor 085267766450
      </p>
    </div>
  </div>
  
     <div class="containerr left">
    <div class="date">Step 9</div>
    <i class="icon fa fa-certificate"></i>
    <div class="content">
      <h2>Ujian</h2>
      <p>
        Calon Siswa membawa kartu ujian yang sudah dicetak pada tanggal yang sudah ditetapkan
      </p>
    </div>
  </div>
  
  <div class="containerr right">
    <div class="date">Step 10</div>
    <i class="icon fa fa-certificate"></i>
    <div class="content">
      <h2>Hasil Ujian</h2>
      <p>
        Untuk melihat hasil ujian, calon siswa login lewat aplikasi dan pilih menu pengumuman untuk melihat hasil pengumuman
      </p>
    </div>
  </div>
  
</div>
                            
                            </div>
                            
                            
                            
                            
                            </div>
                            
                            
                            
                            </div></div></div>
                            
                            

        <!--CONTANT end-->
         
              @include('utama.footer');
 
    <!--FOOTER END-->
   
  
 

@include('utama.js');


</body>
</html>
