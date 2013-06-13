
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
include 'main.php';


?>
<body>
<div class="right_content">  
 <div class="form">  

<h3>Profil Pengguna SIM SURAT KEMENTERIAN AGAMA PURWOKERTO</h3>
<?php
/*
isset() is used to check wheather arctile id is received through url from "index.php" file and if it is set corresponding arctile is displayted using SELECT statement.
*/

if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT * FROM user WHERE nomor=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{
?>
<dl>
<dt><label for="title"></label></dt>
<dd><?echo "<h3>".$row['gambar']."</h3>";?></dd>
</dl>

<dl>
<dt><label for="title">No Anggota</label></dt>
<dd><?echo "<h3>".$row['nomor']."</h3>";?></dd>
</dl>
<dl>
<dt><label for="title">NIP</label></dt>
<dd><?echo "<h3>".$row['nip']."</h3>";?></dd>
</dl>
<dl>
<dt><label for="title">Nama</label></dt>
<dd><?echo "<h3>".$row['nama']."</h3>";?></dd>
</dl>
<dl>
<dt><label for="title">Jabatan</label></dt>
<dd><?echo "<h3>".$row['jabatan']."</h3>";?></dd>
</dl>
<dl>
<dt><label for="title">Alamat</label></dt>
<dd><?echo "<h3>".$row['alamat']."</h3>";?></dd>
</dl>
<dl>
<dt><label for="title">Telepon</label></dt>
<dd><?echo "<h3>".$row['telepon']."</h3>";?></dd>
</dl>
<dl>
<dt><label for="title">Password</label></dt>
<dd><?echo "<h3>".$row['password']."</h3>";?></dd>
</dl>

<?
}
}


?>



 




</div>

      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>


     