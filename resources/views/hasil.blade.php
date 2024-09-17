
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
<div class="page-heading">
    @foreach ($calon_siswa as $k => $p)
    	<div class="container">
            <h2 style="margin-top:-68px">Hasil Registerasi No.Pendaftaran {{ $p->no_pendaftaran }} </h2>
         </div>
    </div>
<div class="contant">
    	<div class="container">

        	<div class="row">

                <div class="span12">
                	<div class="form-box" style="margin-top:-90px;">



                        <form method="post" action="/store" enctype="multipart/form-data">
                        {{ csrf_field() }}
                              @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
                        <div class="form-body">
                        <fieldset>
                                <legend>Informasi Calon Siswa Dengan NISN {{ $p->nisn }}</legend>
                                      <div class="row-fluid">
                                	<div class="span6">
                                    	<label>Email</label>
                               			<input type="text"  readonly="readonly" name="no_pendaftaran" value="{{ $p->email }}" required class="input-block-level">
                                    </div>




                                    <div class="span6">
                                    	<label>Nama Calon Siswa</label>
                               			<input type="text" name="nama_calon_siswa" readonly="readonly" value="{{ $p->nama_calon_siswa }}"  required class="input-block-level">
                                    </div>
                                </div>

                                <div class="row-fluid">
                                	<div class="span6">
                                    	<label>Tempat Lahir</label>
                               			<input type="text" name="tempat_lahir" readonly="readonly" value="{{ $p->tempat_lahir }}"   required class="input-block-level">
                                    </div>
                                    <div class="span6">
                                    	<label>Tanggal Lahir</label>
                               			<input type="text" name="tgl_lahir" readonly="readonly" value="{{ $p->tgl_lahir }}" id="datepicker" required class="input-block-level">
                                    </div>
                                </div>

                                <div class="row-fluid">
                                	<div class="span6">
                                    	<label>Jenis Kelamin</label>
                               			<input type="text" name="tgl_lahir" readonly="readonly" value="{{ $p->jenis_kelamin }}" id="datepicker" required class="input-block-level">
                                    </div>
                                    <div class="span6">
                                    	<label>Asal Sekolah</label>
                                       		<input type="text" name="tgl_lahir" readonly="readonly" value="{{ $p->asal_sekolah }}" id="datepicker" required class="input-block-level">
                                    </div>
                                </div>

                                <div class="row-fluid">
                                	<div class="span6">
                                    	<label>Nomor STTB</label>
                               			<input type="text" name="no_sttb" readonly="readonly" value="{{ $p->no_sttb }}"   required class="input-block-level">
                                    </div>
                                    <div class="span6">
                                    	<label>Agama</label>
                               		            			<input type="text" name="no_sttb" readonly="readonly" value="{{ $p->agama }}"   required class="input-block-level">
                                    </div>
                                </div>






                                <div class="row-fluid">

                                <div class="span6">
                                    	<label>Alamat</label>
                               			 <input type="text" name="alamat" readonly="readonly" value="{{ $p->alamat }}"   required class="input-block-level">
                                    </div>

                                    <div class="span6">
                                    	<label>Tahun Lulus</label>
                              <input type="text" name="alamat" readonly="readonly" value="{{ $p->tahun_lulus }}"   required class="input-block-level">
                                    </div>



                                </div>

                                <div class="row-fluid">

                                <div class="span6">
                                    	<label>Nama Ayah</label>
                               			             <input type="text" name="alamat" readonly="readonly" value="{{ $p->nama_ayah }}"   required class="input-block-level">
                                    </div>

                                    <div class="span6">
                                    	<label>Nomor WA Ayah</label>
                               			             <input type="text" name="alamat" readonly="readonly" value="{{ $p->nomor_wa_ayah }}"   required class="input-block-level">
                                    </div>



                                </div>

                                <div class="row-fluid">

                                <div class="span6">
                                    	<label>Pekerjaan Ayah</label>
                               			 	             <input type="text" name="alamat" readonly="readonly" value="{{ $p->pekerjaan_ayah }}"   required class="input-block-level">
                                    </div>

                                    <div class="span6">
                                    	<label>Penghasilan Ayah/Bulan</label>
                               	<input type="text" name="alamat" readonly="readonly" value="{{ $p->penghasilan_ayah }}"   required class="input-block-level">
                                    </div>



                                </div>


                                <div class="row-fluid">

                                <div class="span6">
                                    	<label>Nama Ibu</label>
                               			              	<input type="text" name="alamat" readonly="readonly" value="{{ $p->nama_ibu }}"   required class="input-block-level">
                                    </div>

                                    <div class="span6">
                                    	<label>Nomor WA Ibu</label>
                               			              	<input type="text" name="alamat" readonly="readonly" value="{{ $p->nomor_wa_ibu }}"   required class="input-block-level">
                                    </div>



                                </div>

                                <div class="row-fluid">

                                <div class="span6">
                                    	<label>Pekerjaan Ibu</label>
                     <input type="text" name="alamat" readonly="readonly" value="{{ $p->pekerjaan_ibu }}"   required class="input-block-level">
                                    </div>

                                    <div class="span6">
                                    	<label>Penghasilan Ibu/Bulan</label>
                               			 <input type="text" name="alamat" readonly="readonly" value="{{ $p->penghasilan_ibu }}"   required class="input-block-level">
                                    </div>



                                </div>


                                <div class="row-fluid">

                                <div class="span6">
                                    	<label>Nilai Matematika</label>
                     <input type="text" name="alamat" readonly="readonly" value="{{ $p->nilai_matematika }}"   required class="input-block-level">
                                    </div>

                                    <div class="span6">
                                    	<label>ilai Bahasa Indonesia</label>
                               			 <input type="text" name="alamat" readonly="readonly" value="{{ $p->nilai_bahasa_indonesia }}"   required class="input-block-level">
                                    </div>



                                </div>

                                  <div class="row-fluid">

                                <div class="span6">
                                    	<label>Nilai IPA</label>
                     <input type="text" name="alamat" readonly="readonly" value="{{ $p->nilai_ipa }}"   required class="input-block-level">
                                    </div>

                                    <div class="span6">
                                    	<label>Nilai Bahasa Inggris</label>
                               			 <input type="text" name="alamat" readonly="readonly" value="{{ $p->nilai_inggris }}"   required class="input-block-level">
                                    </div>



                                </div>

                                <div class="row-fluid">




                                    <div class="span6">
                                    	<label>Ijazah</label>
                     <img width="350px" src="{{ url('/data_file/'.$p->file) }}">
                                    </div>

                                           <div class="span6">
                                    	<label>Jurusan yang dipilih</label>
                               			 <input type="text" name="alamat" readonly="readonly" value="{{ $p->jurusan }}"   required class="input-block-level">
                                    </div>

                                </div>

                                </div>



                            </fieldset>


                        </div>

                        </form>
                           @endforeach

                            </div>


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
