<?php

$conn = mysqli_connect('localhost', 'f3rkapdi', 'f3rkapdi136', 'C354_f3rkapdi');

function user_valid($u, $p){
	global $conn;
	$sql = "SELECT * FROM Users_project WHERE Username='$u' AND Password='$p'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
		return true;
	else
		return false;
}

function user_exists($u){
	global $conn;
	$sql = "SELECT * FROM Users_project WHERE Username='$u'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
		return true;
	else
		return false;
}

function signup_user($u, $p, $e){
	global $conn;
	if (user_exists($u))
		return false;

	$d = date('Ymd');
	$sql = "INSERT INTO Users_project (NULL, '$u', '$p', '$e', $d)";
	$result = mysqli_query($conn, $sql);
	return $result;
}
?>
