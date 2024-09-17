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
     <td width="64%" align="center" class="heading"><h1 class="h11"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 18px">KARTU UJIAN SELEKSI SISWA BARU</span></h1>
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
 
  @foreach($calon_siswa as $p)
 <table width="1046" align="center" class="hovertable" border="1">
						            
                               <tr class="gradeX">

                       
                                       
<td width="20%">Nomor Pendaftaran </td>
<td width="5%">:</td>
<td width="75%">{{ $p->no_pendaftaran }} </td>
</tr>

                               <tr class="gradeX">
                                 <td>Nama Siswa</td>
                                 <td>:</td>
                                <td width="75%">{{ $p->nama_calon_siswa }} </td>>
                                </tr>
   <tr class="gradeX">
                                 <td>NISN</td>
                                 <td>:</td>
                                 <td width="75%">{{ $p->nisn }} </td>
                                 
                                 </tr>
                                 
                                    <tr class="gradeX">
                                 <td>Tempat Ujian</td>
                                 <td>:</td>
                                 <td width="75%">{{ $p->ruang }} </td>
                                 
                                 </tr>
                                 
                                     <tr class="gradeX">
                                 <td>Jam Ujian Tertulis</td>
                                 <td>:</td>
                                 <td width="75%">{{ $p->jam_ujian_tertulis }} </td>
                                 
                                 </tr>
                                 
                                     <tr class="gradeX">
                                 <td>Jam Ujian Wawancara</td>
                                 <td>:</td>
                                 <td width="75%">{{ $p->jam_ujian_wawancara }} </td>
                                 
                                 </tr>
                                 
                                   <tr class="gradeX">
                                 <td>Tanggal Ujian</td>
                                 <td>:</td>
                                 <td width="75%">{{ date('d-m-Y', strtotime($p->tgl_ujian))}} </td>
                                 
                                 </tr>
   </table>
              @endforeach