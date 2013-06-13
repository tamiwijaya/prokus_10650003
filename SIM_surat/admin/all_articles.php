
<?php
session_start();
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
        
               
     <h2>ARTIKEL</h2>
<div id="left">

<b>Artikel</b>
<ul>
<?php
$qry=mysql_query("SELECT * FROM articles ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
/* Fetching data from the field "title" */
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='pink'>
<td>Id</td>
<td>Tanggal Artikel</td>
<td>Judul</td>
<td>Isi</td>

<td colspan='2'>Pilih</td>


</tr>";while($row=mysql_fetch_array($qry))
{	
	
	$i=$i+1;
	
	
echo "
<tr>
<td>".$i."</td>
<td>".$row['tanggal_artikel']."</td>
<td>".$row['title']."</td>
<td>".$row['contents']."</td>
<td><a href=edit_sukel.php?id=".$row['no_surat'].">edit</a></td>
<td><a href=deleting_sukel.php?id=".$row['no_surat']." onClick=\"return confirm('Apakah Anda yakin menghapus file ini  ?')\">hapus</a></td>
</tr>";
//echo "<td><a href=all_sumas.php?cat=".$row['no_surat'].">".$row['prihal_surat']."</a></td>";
echo "</tr>";

}
echo "</table>";
echo "<p><a href=donlod_excel_sukel.php>Download Format Excel</a></p>";
echo "<p><a href=donlod_word_sukel.php>Download Format Word</a></p>";
?>