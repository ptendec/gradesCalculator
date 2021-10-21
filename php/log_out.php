<?php
	session_start();
	session_destroy();
	unset($_COOKIE['user_id']);
	unset($_COOKIE['name']);
	unset($_COOKIE['surname']);
	unset($_COOKIE['email']);
	unset($_COOKIE['password']);
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: '.$previousPage);
	exit;
?>

