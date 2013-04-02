<?php

include "config.php";
include "userheader.php";
include "main.php";
// Let's also make sure the user is logged in at all
// If the PHP $_SESSION[] array is not (!) set
if(!isset($_SESSION['nip'])){
    //Then redirect them to the login page
    header( 'Location: index.php' );
}
$query=mysql_query("select * from surat_masuk");
	echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>Nomor Surat</td>
<td>Tanggal Surat</td>
<td>Tanggal Surat Diterima</td>
<td>Pengirim</td>
<td>Perihal Surat</td>
<td>Disposisi</td>
<td>Tahun Surat</td>
</tr>";
while ($data = mysql_fetch_array($query)) {  
echo "
<tr>
<td>".$data['no_surat']."</td>
<td>".$data['tgl_surat']."</td>
<td>".$data['tgl_surat_diterima']."</td>
<td>".$data['pengirim']."</td>
<td>".$data['prihal_surat']."</td>
<td>".$data['disposisi']."</td>
<td>".$data['tahun']."</td>

</tr>";
}
echo "</table>";
?>