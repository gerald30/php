<?php


mysql_connect("localhost","root","")or die("problem with the connection...");
mysql_select_db("testsite");
$result = mysql_query("DELETE FROM users WHERE id='".$_REQUEST['id']."'");

echo "the user was delete";
mysql_close();
include("links.php");

?>