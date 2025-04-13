<?php

session_start();
ob_start();

include 'lib/db_connect.php';
 

// Define $myusername and $mypassword 
$myusername=$_POST['myusername'];
$mypassword=md5($_POST['mypassword']); 


$query = "SELECT * FROM $tbl_name WHERE username = ? and password = ?";

$stmt = $db->prepare($query);

$stmt->bindParam(1, $myusername);
$stmt->bindParam(2, $mypassword);

$stmt->execute();

$count = $stmt->rowcount();

// If result matched $myusername and $mypassword, table row must be 1 row
if($count>0){

// Register $myusername and redirect to file "login_success.php"
	$_SESSION['username'] = $myusername;
	header("location:login_success.php");
} else {

	header("location:login_fail.php");
}
ob_end_flush();

?>
