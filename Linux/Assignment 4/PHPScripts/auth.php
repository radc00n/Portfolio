<html>
<head>
<title>Login</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body id="body">


<div id="textBody">-------- Welcome login page --------</div>
<div>&nbsp;</div>

<table id="tableBody" width="300" border="2" align="center" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
	<tr>
	<form name="form1" method="POST" action="checklogin.php">
		<td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
	<tr>
		<td colspan="3"><strong>Member Login </strong></td>
	</tr>
	<tr>
		<td width="78">Username</td>
		<td width="6">:</td>
		<td width="294"><input name="myusername" type="text" id="myusername"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input name="mypassword" type="password" id="mypassword"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" name="Submit" value="Login"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><a href='create_account.php'>Create Account!</a></td>
	</tr>
		</table>
		</td>
	</form>
	</tr>
</table>

</body>
</html>