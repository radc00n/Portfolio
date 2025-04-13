<?php
session_start();
if(!$_SESSION['username']){
header("location:auth.php");
}
?>

<html>
<head>
<title>Success!</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body id="body">

<div id="textSuccess">~~~~~ Login Successful! ~~~~~</div>
<div>&nbsp;</div>

<table id="tableSuccess" width="300" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
		<td align="center">
		<input type="submit" value="Change Password" 
    onclick="window.location='change_password.php';" />
		</td>
	</tr>
	<tr>
		<td align="center">
		<input type="submit" value="Delete Account" 
    onclick="window.location='delete_account.php';" />
		</td>
	</tr>
	<tr>
		<td align="center">
		<input type="submit" value="Logout" 
    onclick="window.location='logout.php';" />
		</td>
	</tr>
</table>

<img id="cupcake" src="images/cupcake.jpg" alt="" border="2" cellpadding="2"/>
</body>
</html>