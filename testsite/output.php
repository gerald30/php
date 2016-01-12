<?php
mysql_connect("localhost","root","") or die("problem with connection");
mysql_select_db("testsite");
$result = mysql_query("SELECT * FROM users");
while($rows = mysql_fetch_array($result)){
	echo $rows['id']." ".$rows['name']." ".$rows['email']." ".$rows['password'];
	echo "<br>";

}
mysql_close();
include("links.php"); 
?>
 