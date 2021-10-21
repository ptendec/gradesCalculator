<?php
	session_start();
	require_once('query_server.php');

	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING));
	

	$authorizationing = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	$result = $connect->query($authorizationing);


	if($result->num_rows == 1){
		$row = $result->fetch_assoc();
		$_SESSION['user_id'] = $row["user_id"];
		$_SESSION['name'] = $row["name"];
		$_SESSION['surname'] = $row["surname"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['password'] = $row["password"];
		// setcookie("user_id_cookie", $row["user_id"], time() + (86400 * 30), "/");
		// setcookie("name_cookie", $row["name"], time() + (86400 * 30), "/");
		// setcookie("surname_cookie", $row["surname"], time() + (86400 * 30), "/");
		// setcookie("email_cookie", $row["email"], time() + (86400 * 30), "/");
		// setcookie("password_cookie", $row["password"], time() + (86400 * 30), "/");
	} 
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: '.$previousPage);
	exit;
?>

