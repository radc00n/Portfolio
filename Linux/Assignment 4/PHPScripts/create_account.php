<?php
//Create Account
$action = isset($_POST['action']) ? $_POST['action'] : "";
	
if($action=='create_account'){
	include 'lib/db_connect.php';
	$query = "INSERT INTO members SET username = ?, password= ?";
	$stmt = $db->prepare($query);
	$stmt->bindParam(1, $_POST['myusername']);	
	$hashed_password = md5($_POST['mypassword']);
	$stmt->bindParam(2, $hashed_password);
	
	if($stmt->execute()){
		echo "The account has been created.";
	}else{
		die('Unable to create account.');
	}
}
?>

<html>
<head>
<title>Create Account</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body id="body">
<div id="textCreate">~~~~~ Create Account ~~~~~</div>
<div>&nbsp;</div>

<form action='#' method='post' border='2' cellpadding="2">
   <table id="tableCreate" width="300" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF">
	<tr>
		<td colspan="3"><strong>Create Account</strong></td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input name="myusername" type="text" id="myusername"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input name="mypassword" type="password" id="mypassword"></td>
	</tr>
	<tr>
		<td colspan="3">
		<input type='hidden' name='action' value='create_account' />
		<input type="submit" name="Submit" value="Create">
		</td>
	</tr>
	<tr>
		<td colspan="3">
		<a href='auth.php'>Back to Login.</a>
		</td>
	</tr>
		</table>
</form>
</body>
</html>
