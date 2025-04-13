<?php
//Delete Account
session_start();
$action = isset($_POST['action']) ? $_POST['action'] : "";
	
if($action=='delete_account'){
	include 'lib/db_connect.php';
	$query = "DELETE FROM members WHERE username = ?";
	$stmt = $db->prepare($query);
	$stmt->bindParam(1, $_SESSION['username']);
	
	if($stmt->execute()){
		echo "The account has been deleted.";
		session_destroy();
	}else{
		die('Unable to delete account.');
	}
}
?>

<html>
<head>
<title>Delete Account</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body id="body">
<div id="textDelete">~~~~~ Really Delete the Account? ~~~~~</div>
<div>&nbsp;</div>

<form action='#' method='post' border='2' cellpadding="2">
<table id="tableDelete" width="300" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
            <td>
			<input type='hidden' name='action' value='delete_account' />
            <input type='submit' value='Confirm Account Deletion' />
			</td>
		</tr>
		<tr>
            <td>
                <a href='auth.php'>Back to Login.</a>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
