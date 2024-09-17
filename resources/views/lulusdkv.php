<style type="text/css">

table.hovertable2 {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
}
table.hovertable2 th {
	background-color:#FFF;
	padding: 8px;
}
table.hovertable2 tr {
	background-color:#FFF;
}
table.hovertable2 td {
	padding: 8px;
}

table.hovertable {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
	border-width: 1px;
	border-color:#000;
	border-collapse: collapse;
}
table.hovertable th {
	background-color:#33C;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color:#000;
	color:#FFF;
}
table.hovertable tr {
	background-color:#FFF;
}
table.hovertable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color:#000;
}

.h11 {	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	color:#000;
	font-weight:bold;
}
table { margin:15px 0; border: 1px solid #cdcdcd; border-collapse:collapse; border-spacing:0; font-size:100%; width: 100%;}
th { text-align:center; font-weight:bold; border: 1px solid #cdcdcd;}
th, td { padding:4px 6px; border: 1px solid #cdcdcd;}
tr.table-top {background: #e5e5e5; font-weight: bold;}

.heading{
	border:0;
	
	
}

.hori{
	border:2px solid #000;
}
.h11{
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	color:#000;
	font-weight:bold;
	
}
</style>



 <table width="700" border="0" class="heading">
   <tr class="heading">
     <td width="16%" rowspan="2" class="heading"></td>
     <td width="64%" align="center" class="heading"><h1 class="h11"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 18px">LAPORAN CALON SISWA YANG LULUS JURUSAN DESAIN KOMUNIKASI DAN VISUAL</span></h1>
       <h1 class="h11"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 18px">SMK MA'ARIF</span></h1></td>
     <td width="20%" rowspan="2" align="right" class="heading" >&nbsp;</td>
   </tr>
 </table>

 

 

 
 <table width="700" border="0" class="heading">
   <tr>
     <td height="29" colspan="2" class="heading"><hr class="hori" />
     <hr /></td>
   </tr>
 </table>
 
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