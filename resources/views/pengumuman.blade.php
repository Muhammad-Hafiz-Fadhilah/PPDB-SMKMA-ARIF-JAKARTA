
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
            <h2 style="margin-top:-68px">Pengumuman Yang Lulus Jurusan {{Session::get('jurusan')}}</h2>
         </div>
    </div>
<div class="contant">
    	<div class="container">
        	
        	<div class="row">
            	 
                <div class="span12">
                	<div class="form-box" style="margin-top:-90px;">
                          @if( $cek_pengumuman->count() > 0)
                         <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>Peringkat</th>
                     <th>Nomor Pendaftaran</th>
                     <th>Nama Calon Siswa</th>
                     <th>Nilai Matematika</th>
                     <th>Nilai Bahasa Indonesia</th>
                     <th>Nilai IPA</th>
                     <th>Nilai IPS</th>
                     <th>Nilai Wawancara</th>
                     <th>Nilai Ujian Tertulis</th>

                    <th>Rata-Rata</th>
                

                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($pengumuman as $p)
                  <tr>
                  
                  <td>{{$loop->iteration}}</td>

                  <td>{{ $p->no_pendaftaran }}</td>
                  <td>{{ $p->nama_calon_siswa }}</td>

                  <td>{{ $p->nilai_matematika }}</td>
                  <td>{{ $p->nilai_bahasa_indonesia }}</td>
                  <td>{{ $p->nilai_ipa }}</td>
                  <td>{{ $p->nilai_inggris }}</td>
                  <td>{{ $p->nilai_ujian_wawancara }}</td>
                  <td>{{ $p->nilai_ujian_tertulis }}</td>
              
                    <td>{{ $p->amount }}</td>
       </tr>
                  @endforeach
                  
                  </tbody>
             
                </table>
                
                     @foreach($pengumuman as $l)
                     
                     @if( $l->no_pendaftaran  == Session::get('no_pendaftaran') ) 
                     
                     <h2 align="center"> Selamat, Anda Lulus</h2>
                      @break
                  @endif
                         @endforeach
                         
                                  @foreach($pengumumancek as $r)
                     
                     @if( $r->no_pendaftaran  == Session::get('no_pendaftaran') ) 
                     
                     <h2 align="center"> Tidak Lulus</h2>
                      @break
                  @endif
                         @endforeach
                         
                               
                         
                     
                           @else
                           <center>
                           
                           <h1>Belum Ada Pengumuman</h1>
                           
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
