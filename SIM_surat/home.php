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
$qry=mysql_query("SELECT * FROM articles WHERE category='Berita' order by articles.id DESC LIMIT 0, 6", $con);
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

echo "<p>".substr($row['contents'],0,300)."<a href=articles.php?id=".$row['id']." > Read more</a></p>";
}
?>



      </div>
    </div>
    <div class="fl_right">
      
		<h2 align="center">Login  User</h2>


<form name="loginform" action="otentikasi.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
</td>
  </tr>
  <tr>
    <td width="116"><div align="right">Username</div></td>
    <td width="177"><input name="no" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right">Password</div></td>
    <td><input name="pass" type="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /></td>
  </tr>
</table>
</form>
</form>
<br\>


</h3>
 

         
        </li>

      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
