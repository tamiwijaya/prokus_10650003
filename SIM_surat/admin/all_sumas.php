
<?php
session_start();
$i=0;
if(isset($_SESSION['name']))
{
if(!$_SESSION['name']=='admin')
{
header("Location:login.php?id=You are not authorised to access this page unless you are administrator of this website");
}
}
else
{
header("Location:login.php?id=You are not authorised to access this page unless you are administrator of this website");
}
?>
<?php
include 'config.php';
include 'header.php';
include"main.php";
?>
<div class="right_content">            
        
               
     <h2>SURAT MASUK</h2>
<div id="left">

<b>Surat Masuk</b>
<ul>
<?php
$qry=mysql_query("SELECT * FROM surat_masuk ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
/* Fetching data from the field "title" */
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='blue'>
<td>Id Surat</td>
<td>Nomor Surat</td>
<td>Tanggal Surat</td>
<td>Tanggal Surat Diterima </td>
<td>Pengirim Surat</td>
<td>Perihal Surat</td>
<td>Disposisi</td>
<td>Tahun Surat</td>
<td colspan='2'>Pilih</td>

</tr>";while($row=mysql_fetch_array($qry))
{
$i=$i+1;
echo "
<tr>
<td>".$i."</td>
<td>".$row['no_surat']."</td>
<td>".$row['tgl_surat']."</td>
<td>".$row['tgl_surat_diterima']."</td>
<td>".$row['pengirim']."</td>
<td>".$row['prihal_surat']."</td>
<td>".$row['disposisi']."</td>
<td>".$row['tahun']."</td>
<td><a href=edit_sumas.php?id=".$row['no_surat'].">edit</a></td>
<td><a href=deleting_sumas.php?id=".$row['no_surat']." onClick=\"return confirm('Apakah Anda yakin menghapus file ini  ?')\">hapus</a></td>

</tr>";
//echo "<td><a href=all_sumas.php?cat=".$row['no_surat'].">".$row['prihal_surat']."</a></td>";
echo "</tr>";

}
echo "</table>";
echo "<p><a href=donlod_excel_sumas.php>Download Format Excel</a></p>";
echo "<p><a href=donlod_word_sumas.php>Download Format Word</a></p>";
?>

