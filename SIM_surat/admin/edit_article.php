

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
        
               
     <h2>edit Post</h2>
 
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT * FROM articles WHERE id=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);

 $row['id'];
 $row['category'];
 $row['title'];
 $row['contents'];

}

?>
 <div class="form">
<form action="article_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>
<dl>
<dt><label for="cat">id</label></dt>
<dd><input type="text" name="id" id="idd" value="<?php echo $row['id']; ?>" /></dd>
</dl>
<dl>
<dt><label for="cat">Category </label></dt>
<dd><input type="text" name="category" id="category" value="<?php echo $row['category']; ?>" /></dd>
</dl>
<dl>
<dt><label for="tit">Judul</label></dt>
<dd><input type="text" name="title" id="title" value="<?php echo $row['title']; ?>" /></dd>
</dl>
<dl>
<dt><label for="tgl">Tanggal Artikel</label></dt>
<dd><input type="text" name="tgl" id="inputField" /></dd>
</dl>
<dl>
<label for="cont">Contents </label>
<textarea name="contents" id="contents" cols="70" rows="25" ><?php echo $row['contents']; ?></textarea>
</p>
<p align="center">
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /></dd>
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