<?

include 'userheader.php';?>

<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
        
        <br class="clear" />
      </div>
      <div class="column2">
<?php


/*
Selecting the last added articles to display in the secton - "Breaking news" from the table "articles"
*/
$qry=mysql_query("SELECT * FROM articles WHERE category='ebook' order by articles.id DESC LIMIT 0, 6", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

/* Fetching and dispalying the datas to breakign news section from the databse table "articles" */
/*
the php in-built function substr() is used to limit the no of characters displayed in breakign news section to 200 and when "Read more" is clicked article id is transfered through url to articles.php for displaying in full 
*/
while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";

echo "<p>".substr($row['contents'],0,200)."<a href=articles.php?id=".$row['id']." > Read more</a></p>";
}


?>
<h3 align="center" class="para">
</h3>



      </div>
    </div>

<div class="fl_right">
      <h3>Info dan Berita Terbaru</h3>
      <ul>
        
        
        <li class="last">
          <?php
/*
Selecting the last added articles to display in the secton - "Breaking news" from the table "articles"
*/
$qry=mysql_query("SELECT * FROM articles WHERE category='berita' order by articles.id DESC LIMIT 0, 4", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

/* Fetching and dispalying the datas to breakign news section from the databse table "articles" */
/*
the php in-built function substr() is used to limit the no of characters displayed in breakign news section to 200 and when "Read more" is clicked article id is transfered through url to articles.php for displaying in full 
*/
while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";

echo "<p>".substr($row['contents'],0,200)."<a href=articles.php?id=".$row['id']." > Read more</a></p>";
}
?>
        </li>

      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<?include 'footer.php';?>