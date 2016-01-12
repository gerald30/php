<html>
<head></head>
<body>
<h3>Edit usder</h3>
<?php echo $_REQUEST['names'];?>
<form method="post" action="change.php">
<table border="0" width="60%">
<tr><td width="30%">Name:</td><td> <input type="text" name="newname" 
value="<?php echo $_REQUEST['names'];?>"> </td></tr><br>

<tr><td width="30%">Email:</td><td> <input type="text" name="newemail" 
value="<?php echo $_REQUEST['emails'];?>"> </td></tr><br>

<tr><td width="30%">password:</td><td> <input type="text" name="newpassword" 
value="<?php echo $_REQUEST['passwords'];?>"> </td></tr><br>
</table>
<input type="submit" value="Save & Update" />
<input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>">


</form>

</body>
</html>