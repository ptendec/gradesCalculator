<?php
	session_start();
	require_once('query_server.php');

	$name = filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING);
	$surname = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING));


	$registring = "INSERT INTO users (name, surname, email, password, educational_program)
	VALUES ('$name', '$surname', '$email', '$password', '$educational_program')";
	if($connect->query($registring)){
		$authorizationing = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
		$result = $connect->query($authorizationing);
		if($result->num_rows == 1){
		$row = $result->fetch_assoc();
		$_SESSION['user_id'] = $row["user_id"];
		$_SESSION['name'] = $row["name"];
		$_SESSION['surname'] = $row["surname"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['password'] = $row["password"];
	} 

		// setcookie("user_id", $row["user_id"], time() + (86400 * 30), "/");
		// setcookie("name", $row["name"], time() + (86400 * 30), "/");
		// setcookie("surname", $row["surname"], time() + (86400 * 30), "/");
		// setcookie("email", $row["email"], time() + (86400 * 30), "/");
		// setcookie("password", $row["password"], time() + (86400 * 30), "/");
		}
	else{

	}
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: '.$previousPage);
	exit;


	$connect->close();
	
?>