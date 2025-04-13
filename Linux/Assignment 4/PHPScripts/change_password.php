<?php
//Change Password
session_start();
$action = isset($_POST['action']) ? $_POST['action'] : "";
	
if($action=='change_password'){
	include 'lib/db_connect.php';
	$query = "UPDATE members SET password = ? WHERE username = ?";
	$stmt = $db->prepare($query);
	$hashed_password = md5($_POST['new_password']);
	$stmt->bindParam(1, $hashed_password);
	$stmt->bindParam(2, $_SESSION['username']);
	
	if($stmt->execute()){
		echo "The password has been updated.";
	}else{
		die('Unable to update password.');
	}
}
?>

<html>
<head>
<title>Change Password</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body id="body">
<div id="textSuccess">~~~~~ Change Password? ~~~~~</div>
<div>&nbsp;</div>

<form action='#' method='post' border='2' cellpadding="2">
<table id="tableChange" width="300" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
            <td>Password</td>
			<td>:</td>
            <td><input type='password' name='new_password' id="new_password" /></td>
		</tr>
        <tr>
            <td colspan="3">
			<input type='hidden' name='action' value='change_password' />
			<input type='submit' value='Change' /></td>
		</tr>
		<tr>
            <td colspan="3">
                <a href='login_success.php'>Back to index</a>
            </td>
        </tr>
    </table>
</form>
 
</body>
</html>
