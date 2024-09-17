
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
                      
                    
                        <form method="post" action="/store_detail_data" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        	<div class="form-body">

                            @foreach($cek_pendaftaran as $g)
                            <fieldset>
                                <legend>Detail Calon Siswa</legend>
                                      
                                <input type="hidden" name="no_pendaftaran" value="{{Session::get('no_pendaftaran')}}"   required class="input-block-level">  
                             
                                
                                <div class="row-fluid">
                                	<div class="span6">
                                    	<label>NISN</label>
                               			<input type="text"  name="nisn" readonly value="{{ $g->nisn }}"  required class="input-block-level">
                                    </div>
                                 
                           
                                    
                                    <div class="span6">
                                    	<label>Nama Calon Siswa</label>
                               			<input type="text" name="nama_calon_siswa" readonly value="{{ $g->nama_calon_siswa }}"   required class="input-block-level">
                                    </div>
                                </div>


                                <div class="row-fluid">
                                	<div class="span6">
                                    	<label>Email</label>
                               			<input type="text"  name="email" readonly value="{{ $g->email }}"  required class="input-block-level">
                                    </div>
                                 
                           
                                    
                                    <div class="span6">
                                    	<label>Jurusan yang Dipilih</label>
                               			<input type="text" name="jurusan" readonly value="{{ $g->jurusan }}"   required class="input-block-level">
                                    </div>
                                </div>

                                <div class="row-fluid">
                                	<div class="span6">
                                    	<label>Tempat Lahir</label>
                               			<input type="text" name="tempat_lahir" value="{{ $g->tempat_lahir }}"  required class="input-block-level">
                                    </div>
                                    <div class="span6">
                                    	<label>Tanggal Lahir</label>
                               			<input type="text" name="tgl_lahir" value="{{ $g->tgl_lahir }}" id="datepicker" required class="input-block-level">
                                    </div>
                                </div>
                                
                                <div class="row-fluid">
                                	<div class="span6">
                                    	<label>Jenis Kelamin</label>
                               			<select class="input-block-level" name="jenis_kelamin">
                                           @if($g->jenis_kelamin  =='Laki-Laki') 
                                        <option value="Laki-Laki" selected>Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        @elseif($g->jenis_kelamin  =='Perempuan') 
                                        <option value="Laki-Laki" >Laki-Laki</option>
                                        <option value="Perempuan" selected>Perempuan</option>
                                        @else
                                        <option value="Laki-Laki" >Laki-Laki</option>
                                        <option value="Perempuan" selected>Perempuan</option>
                                        @endif
                                        </select>
                                    </div>
                                    <div class="span6">
                                    	<label>Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" value="{{ $g->asal_sekolah }}" required class="input-block-level">
                                    </div>
                                </div>
                                
                                <div class="row-fluid">
                                	<div class="span6">
                                    	<label>Nomor STTB</label>
                               			<input type="text" name="no_sttb" value="{{ $g->no_sttb }}"   required class="input-block-level">
                                    </div>
                                    <div class="span6">
                                    	<label>Agama</label>
                               			<select class="input-block-level" name="agama">
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Lain-Lain">Lain-Lain</option>

                                        </select>
                                    </div>
                                </div>
                                
                              
                                                    
                                    
                  
                                
                                <div class="row-fluid">
                                
                                <div class="span6">
                                    	<label>Alamat</label>
                               			 <input type="text" name="alamat" value="{{ $g->alamat }}"   required class="input-block-level">
                                    </div>
                                
                                    <div class="span6">
                                    	<label>Tahun Lulus</label>
                               			<select class="input-block-level" name="tahun_lulus">
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                     

                                        </select>
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                                <div class="row-fluid">
                                
                                <div class="span6">
                                    	<label>Nama Ayah</label>
                               			 <input type="text" name="nama_ayah" value="{{ $g->nama_ayah }}"   required class="input-block-level">
                                    </div>
                                
                                    <div class="span6">
                                    	<label>Nomor WA Ayah</label>
                               			 <input type="text" name="nomor_wa_ayah"  value="{{ $g->nomor_wa_ayah }}"  required class="input-block-level">
                                    </div>
                                    
                                    <input type="hidden" name="status"  value="1"  >
                                    
                                </div>
                                
                                <div class="row-fluid">
                                
                                <div class="span6">
                                    	<label>Pekerjaan Ayah</label>
                               			 <input type="text" name="pekerjaan_ayah" value="{{ $g->pekerjaan_ayah }}"   required class="input-block-level">
                                    </div>
                                
                                    <div class="span6">
                                    	<label>Penghasilan Ayah/Bulan</label>
                               			 <input type="text" name="penghasilan_ayah" value="{{ $g->penghasilan_ayah }}"   required class="input-block-level">
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                                
                                <div class="row-fluid">
                                
                                <div class="span6">
                                    	<label>Nama Ibu</label>
                               			 <input type="text" name="nama_ibu" value="{{ $g->nama_ibu }}"   required class="input-block-level">
                                    </div>
                                
                                    <div class="span6">
                                    	<label>Nomor WA Ibu</label>
                               			 <input type="text" name="nomor_wa_ibu" value="{{ $g->nomor_wa_ibu }}"   required class="input-block-level">
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                                <div class="row-fluid">
                                
                                <div class="span6">
                                    	<label>Pekerjaan Ibu</label>
                               			 <input type="text" name="pekerjaan_ibu" value="{{ $g->pekerjaan_ibu }}"   required class="input-block-level">
                                    </div>
                                
                                    <div class="span6">
                                    	<label>Penghasilan Ibu/Bulan</label>
                               			 <input type="text" name="penghasilan_ibu" value="{{ $g->penghasilan_ibu }}"   required class="input-block-level">
                                    </div>
                                    
                                    
                                    
                                </div>


                                <div class="row-fluid">
                                
                                <div class="span6">
                                    	<label>File Pas Foto</label><a href="{{ url('/data_file/'.$g->foto_calon_siswa) }}">{{ $g->foto_calon_siswa }}</a>
                               		
                                    	<input type="file" name="file_pas_foto"  required class="input-block-level">


                               
                                        
                                    </div>
                                
                                    <div class="span6">
                                    	<label>File Ijazah</label>
                               		
                                        <a href="{{ url('/data_file/'.$g->ijazah) }}">{{ $g->ijazah }}</a>
                                    	<input type="file" name="file_ijazah"  required class="input-block-level">


                                        
                                    </div>
                                    
                                    
                                </div>
                              
                                
                                <div class="row-fluid">
                                
                                <div class="span6">
                                    	<label>File Akte Kelahiran</label>
                                        <a href="{{ url('/data_file/'.$g->akte_kelahiran) }}">{{ $g->akte_kelahiran }}</a>
                                    	<input type="file" name="file_akte_kelahiran"  required class="input-block-level">


                                        
                                        
                                    </div>
                                
                                    <div class="span6">
                                    	<label>File Kartu Keluarga</label>
                                        <a href="{{ url('/data_file/'.$g->kartu_keluarga) }}">{{ $g->kartu_keluarga }}</a>
                                    	<input type="file" name="file_kartu_keluarga"  required class="input-block-level">


                                        
                                        
                                    </div>
                                    

                                       
                                <div class="row-fluid">
                                
                                <div class="span6">
                                    	<label>File SHUN</label>
                                        <a href="{{ url('/data_file/'.$g->shun) }}">{{ $g->shun }}</a>
                                    	<input type="file" name="file_shun"  required class="input-block-level">

                                    </div>
                                
                                    <div class="span6">
                                    	<label>File Raport 1 Tahun Terakhir</label>
                                        <a href="{{ url('/data_file/'.$g->raport) }}">{{ $g->raport }}</a>
                                    	<input type="file" name="file_raport"  required class="input-block-level">

                                    </div>
                                    
                                </div>
                                </div>

                                
                            
                                
                     
                            </fieldset>
                            
                            @endforeach
                            
                             
                            
                       
                            
                            
                            
                            
                            
                            <br />
                            
                            <center>        <input value="Submit" type="submit" class="btn-style">      
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
