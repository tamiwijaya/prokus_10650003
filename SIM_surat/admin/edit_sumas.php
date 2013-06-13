

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
        
               
     <h2>Edit Surat Masuk</h2>
 
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT * FROM surat_masuk WHERE no_surat='$id'",$con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);

 $row['id_surat'];
 $row['no_surat'];
 $row['tgl_surat'];
 $row['tgl_surat_diterima'];
 $row['pengirim'];
 $row['prihal_surat'];
 $row['disposisi'];
 $row['tahun'];
 $row['file_surat'];

}

?>
 <div class="form">
<form action="sumas_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

<dl>
<dt><label for="title">Id surat</label></dt>
<dd><input type="text" name="id" id="id" value="<?php echo $row['id_surat']; ?>"  /></dd>
</dl>

<dl>
<dt><label for="title">Nomor surat</label></dt>
<dd><input type="text" name="nosur" id="nosur" value="<?php echo $row['no_surat']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Tanggal Surat</label></dt>
<dd><input type="text" name="tgl" id="tgl" value="<?php echo $row['tgl_surat']; ?>" /></dd>
</dl>


<dl>
<dt><label for="title">Tanggal Surat Diterima</label></dt>
<dd><input type="text" name="tglsur" id="tglsur" value="<?php echo $row['tgl_surat_diterima']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Pengirim</label></dt>
<dd><input type="text" name="pgrm" id="pgrm" value="<?php echo $row['pengirim']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Perihal Surat</label></dt>
<dd><input type="text" name="persur" id="persur" value="<?php echo $row['prihal_surat']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Disposisi</label></dt>
<dd><input type="text" name="dis" id="dis" value="<?php echo $row['disposisi']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Tahun</label></dt>
<dd><input type="text" name="thn" id="thn" value="<?php echo $row['tahun']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">File Surat</label></dt>
<dd><input type="file" name="file" id="file" value="<?php echo $row['file_surat']; ?>" /></dd>
</dl>

<dt><p align="center"></dt>
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /><dd>
</dl>
</dl>
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