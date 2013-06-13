
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
        
               
    
<div id="left">
<b>Daftar Nama Anggota Koperasi</b>
<ul>

</ul>
</div>
<div id="right">

    <?php
	echo"<form>";
echo "<table border='1' width='100%' height='100%'>";
	echo "<tr>";
echo"<td size='54'>Nomor</td>";
echo"<td>NIP</td>";
echo"<td>Nama</td>";
echo"<td>Jabatan</td>";
echo"<td>Alamat</td>";

echo"<td>Telepon</td>";
echo"<td>Password</td>";
echo"<td colspan='3'>Ubah</td>";

echo"</tr>";
if(isset($_GET['id'])=="viewall")
{
$qry=mysql_query("SELECT * FROM user ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

/* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{

echo "<tr>";
echo "<td>".$row['nomor']."</a></td>";
echo "<td>".$row['nip']."</a></td>";
echo "<td>".$row['nama']."</a></td>";
echo "<td>".$row['jabatan']."</a></td>";
echo "<td>".$row['alamat']."</a></td>";
echo "<td>".$row['telepon']."</a></td>";
echo "<td>".$row['password']."</a></td>";

echo "<td><a href=edit_user.php?id=".$row['nomor'].">edit</a></td>";
echo "<td><a href=user-removed.php?id=".$row['nomor'].">delete</a></td>";
echo "<td><a href=user.php?id=".$row['nomor'].">lihat</a></td>";

echo "</tr>";
}
echo "</table>";
echo"<form>";

}
?>
  <?php
if(isset($_GET['nam']))
{
$nam=$_GET['nam'];


$qry=mysql_query("SELECT * FROM user WHERE nama='$nam' order by anggota.id DESC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
echo "<table>";
while($row=mysql_fetch_array($qry))
{
//echo $row['title'];
echo "<tr>";
echo "<td><a href=user.php?id=".$row['nomor'].">".$row['nama']."</a></td>";
echo "<td><a href=edit_user.php?id=".$row['nomor'].">edit</a></td>";
echo "<td><a href=deleting_user.php?id=".$row['nomor']." onClick=\"return confirm('Apakah Anda yakin menghapus file ini  ?')\">hapus</a></td>";
echo "</tr>";
}
echo "</table>";
}
?>
</div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>