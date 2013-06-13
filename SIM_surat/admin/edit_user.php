

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

    
    <div class="right_content">            
        
               
     <h2>Edit User</h2>
 
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT * FROM user WHERE nomor=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);
$row['nomor'];
 $row['nip'];
 $row['nama'];
 $row['jabatan'];
 $row['alamat'];
  $row['telepon'];
   $row['password'];
   
}

?>
 <div class="form">
<form action="user_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>
   <dl>
<dt><label for="cat">Nomor</label></dt>
<dd><input type="text" name="nomor" id="nomor" value="<?php echo $row['nomor']; ?>" /></dd>
</dl>
<dl>
<dt><label for="title">NIP</label></dt>
<dd><input type="number" name="nip" id="nip" value="<?php echo $row['nip']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Nama</label></dt>
<dd><input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Jabatan</label></dt>
<dd><input type="text" name="jabatan" id="jabatan" value="<?php echo $row['jabatan']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Alamat</label></dt>
<dd><input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Telepon</label></dt>
<dd><input type="text" name="telepon" id="telepon" value="<?php echo $row['telepon']; ?>" /></dd>
</dl>
<dl>
<dt><label for="title">Password</label></dt>
<dd><input type="text" name="password" id="password" value="<?php echo $row['password']; ?>" /></dd>
</dl>


<dt><p align="center"></dt>
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /><dd>
</dl>
</dl>
</p>
</form>
       
		 </div>
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>
</div>
</body>
</html>
<?include 'footer.php';?>