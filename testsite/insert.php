<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if($name && $email && $password){
	mysql_connect("localhost", "root", "") or die("We could connect");
	mysql_select_db("testsite");
	
$username = mysql_query("SELECT name FROM users WHERE name='$name'");
$count = mysql_num_rows($username);

if($count!=0){
	die("Username already input");
	
}	
	
	
	mysql_query("INSERT INTO users(name,email,password) VALUES ('$name', '$email', '$password');");
	$registered = mysql_affected_rows();
	
	echo "$registered was inserted";
	
	mysql_close();
} else {
	
	echo "you have to complete the form";
}


include("links.php");
?>