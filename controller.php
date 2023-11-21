<?php

if (empty($_POST['page'])) {
	include ('view_startpage.php');
	exit;
}

include ('model.php');

$page = $_POST['page'];

if ($page == 'StartPage') {
	$command = $_POST['command'];
	switch ($command) {
		case 'SignIn':
			$result = user_valid($_POST['username'], $_POST['password']);
			if ($result) {
				session_start();
				$_SESSION['signed'] = "YES";
				$_SESSION['username'] = $_POST['username'];
				include("view_mainpage.php");
			}
			else
				include('view_startpage.php');
			break;
		default:
			echo "Unknown Command.";
	}
	exit;
}

?>
