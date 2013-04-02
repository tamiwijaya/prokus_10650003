
<?php
include 'config.php';
include 'header.php';
?>

<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
        
        <br class="clear" />
      </div>
      <div class="column2">
	  

</div>

<div id="l_space">

<?php
/*
isset() is used to check wheather arctile id is received through url from "index.php" file and if it is set corresponding arctile is displayted using SELECT statement.
*/

if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT * FROM articles WHERE id=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";

echo "<p>".$row['contents']."</p>";
}
}

/*
based on the category name received from index.php file the last added article is displayed
*/
if(isset($_GET['cat']))
{
//echo $_GET['cat'];
$cat=$_GET['cat'];
$qry=mysql_query("SELECT * FROM articles WHERE category='$cat' order by articles.id DESC LIMIT 0, 5", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* madakke data soko field tittle */
while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";

echo "<p>".$row['contents']."</p>";
}
}

?>

</div>

 

  <div id="r_space">

<?php
/*
based on the id received from index.php through url, the category of the particular article is determined
*/
if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT category FROM articles WHERE id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
/* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);
$cat=$row['category'];
}
?>

<h3 align="center" class="para">
</h3>



      </div>
    </div>

<div class="fl_right">
      <h2>Posting Terakhir</h2>
      <ul>
        
        
        <li class="last">
          <?php
/*
menampilkan data terakhir dari field "articles"
*/
$qry=mysql_query("SELECT * FROM articles WHERE category='berita' order by articles.id DESC LIMIT 0, 4", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

/* mengambil dan menampilkan databse table "articles" */
/*
 substr() digunakan untuk membatasi artikel yang ditamoilkan misalnya 200 kata ketika readmore di klik makan akan muncul artikel full 
*/
while($row=mysql_fetch_array($qry))
{
echo "<h1>".$row['title']."</h1>";

echo "<p>".substr($row['contents'],0,100)."<a href=articles.php?id=".$row['id']." > Read more</a></p>";
}
?>
        </li>

      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<?include 'footer.php';?>
