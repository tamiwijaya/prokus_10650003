<?php
//Buat header untuk perintah tampilkan dalam format excel
//header("Content-type: application/vnd.ms-excel");
header("Content-Type: application/msexcel; name='excel'");

header("Content-disposition:  attachment; filename=Surat Masuk.xls");
//Buat fungsi buat koneksi database
function Conn() {
	$koneksi=mysql_connect("localhost","root","");
	mysql_select_db("suratku");
	return $koneksi;
}
//Buat variabel buat simpan hasil fungsi Conn
$konek = Conn();
//Buat query buat ambil data siswa
$qrysiswa = mysql_query("select * from surat_masuk ",$konek);
?>
<table width="75%" border="0" cellpadding="1" cellspacing="1" bgcolor="#333333">
  <tr>
    <td bgcolor="#CCCCCC"><strong>Id Surat</strong></td>
    <td bgcolor="#CCCCCC"><strong>Nomor Surat</strong></td>
    <td bgcolor="#CCCCCC"><strong>Tanggal Surat</strong></td>
    <td bgcolor="#CCCCCC"><strong>Tanggal Surat Diterima</strong></td>
    <td bgcolor="#CCCCCC"><strong>Pegirim Surat</strong></td>
	  <td bgcolor="#CCCCCC"><strong>Perihal Surat</strong></td>
	   <td bgcolor="#CCCCCC"><strong>Disposisi</strong></td>
    <td bgcolor="#CCCCCC"><strong>Tahun Surat</strong></td>
  </tr>
<?php
//Ambil Data lalu buat perulangan untuk tampilkan per baris tabel
while($isi_siswa = mysql_fetch_array($qrysiswa)){
?>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $isi_siswa["id_surat"];?></td>
    <td bgcolor="#FFFFFF"><?php echo $isi_siswa["no_surat"];?></td>
    <td bgcolor="#FFFFFF"><?php echo $isi_siswa["tgl_surat"];?></td>
    <td bgcolor="#FFFFFF"><?php echo $isi_siswa["tgl_surat_diterima"];?></td>
    <td bgcolor="#FFFFFF"><?php echo $isi_siswa["pengirim"];?></td>
    <td bgcolor="#FFFFFF"><?php echo $isi_siswa["prihal_surat"];?></td>
	<td bgcolor="#FFFFFF"><?php echo $isi_siswa["disposisi"];?></td>
	<td bgcolor="#FFFFFF"><?php echo $isi_siswa["tahun"];?></td>
  </tr>
<?php
} 
?>
</table>
<p>&nbsp;</p>
