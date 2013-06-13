<?php

include "config.php";
include "userheader.php";
include "main.php";
$i=0;
// Let's also make sure the user is logged in at all
// If the PHP $_SESSION[] array is not (!) set
if(!isset($_SESSION['nip'])){
    //Then redirect them to the login page
    header( 'Location: index.php' );
}
$query=mysql_query("select * from surat_keluar");
	echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='blue'>
<td>Id Surat</td>
<td>Nomor Surat</td>
<td>Tanggal Surat</td>
<td>Tujuan Surat </td>
<td>Pengirim Surat</td>
<td>Perihal Surat</td>
<td>Tahun Surat</td>
</tr>";
while ($data = mysql_fetch_array($query)) {  
$i=$i+1;
echo "
<tr>
<td>".$i."</td>
<td>".$data['no_surat']."</td>
<td>".$data['tgl_surat']."</td>
<td>".$data['tujuan_surat']."</td>
<td>".$data['pengirim_surat']."</td>
<td>".$data['prihal_surat']."</td>
<td>".$data['tahun']."</td>

</tr>";
}
echo "</table>";
?>