
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
while($row=mysql_fetch_array($qry))
{
echo "<li><a href=all_sumas.php?cat=".$row['no_surat'].">".$row['no_surat']."</a></li>";
}
?>
</ul>
</div>
<div id="right">

    <?php
if(isset($_GET['id'])=="viewall")
{
$qry=mysql_query("SELECT * FROM surat_masuk ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
echo "<table>";
/* mengambil data dr field "title" */
while($row=mysql_fetch_array($qry))
{
echo "<tr>";
echo "<td><a href=articles.php?id=".$row['no_surat'].">".$row['prihal_surat']."</a></td>";
echo "<td><a href=edit_article.php?id=".$row['no_surat'].">edit</a></td>";
echo "<td><a href=deleting_sumas.php?id=".$row['no_surat'].">delete</a></td>";
echo "</tr>";
}
echo "</table>";
}
?>
  <?php
if(isset($_GET['cat']))
{
$cat=$_GET['cat'];


$qry=mysql_query("SELECT * FROM surat_masuk WHERE no_surat='$cat' ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
echo "<table>";
while($row=mysql_fetch_array($qry))
{
//menampilkan data field;
echo "<tr>";
echo "<td><a href=articles.php?id=".$row['no_surat'].">".$row['prihal_surat']."</a></td>";
echo "<td><a href=edit_article.php?id=".$row['no_surat'].">edit</a></td>";
echo "<td><a href=deleting_sumas.php?id=".$row['no_surat'].">delete</a></td>";
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
