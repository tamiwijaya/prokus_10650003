

<?php
/* connecting to MySql */
$host="localhost";
$user="root";
$password="";
$con = mysql_connect($host,$user,$password);
if(!$con)
{
die("connection to database failed".mysql_error());
}

/* selecting the database "complete_cms" */
$dataselect = mysql_select_db("suratku",$con);
if(!$dataselect)
{
die("Database namelist not selected".mysql_error());
}
?>