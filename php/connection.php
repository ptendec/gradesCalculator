<?php
	
	require_once('query_server.php');

$create_tables_users = "
	CREATE TABLE users (
	user_id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(30) NOT NULL,
	surname VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	password VARCHAR(33) NOT NULL,
	educational_program VARCHAR(50) NOT NULL,
	PRIMARY KEY(user_id))";
	
	if($connect->query($create_tables_users) === TRUE){
		echo "<br>SUCCES";
	}
	else{
		echo "<br>ERROR IN CREATE TABLE USERS TABLE" .$connect->error;
	}


	$create_tables_calc_scores = "
	CREATE TABLE calc_scores (
	calc_scores_id INT NOT NULL AUTO_INCREMENT,
	first_att FLOAT NOT NULL,
	second_att FLOAT NOT NULL,
	final FLOAT NOT NULL,
	total FLOAT NOT NULL,
	total_gpa FLOAT NOT NULL,
	user_id INT NOT NULL,
	PRIMARY KEY(calc_scores_id),
	FOREIGN KEY(user_id) 
	REFERENCES users(user_id))";
	
	if($connect->query($create_tables_calc_scores) === TRUE){
		echo "SUCCES";
	}
	else{
		echo "<br>ERROR IN CREATE TABLE CALCULUS TABLE" .$connect->error;
	}

	$create_tables_cpp_scores = "
	CREATE TABLE cpp_scores (
	cpp_scores_id INT NOT NULL AUTO_INCREMENT,
	first_att FLOAT NOT NULL,
	second_att FLOAT NOT NULL,
	final FLOAT NOT NULL,
	total FLOAT NOT NULL,
	total_gpa FLOAT NOT NULL,
	user_id INT NOT NULL,
	PRIMARY KEY(cpp_scores_id),
	FOREIGN KEY(user_id) 
	REFERENCES users(user_id))";
	
	if($connect->query($create_tables_cpp_scores) === TRUE){
		echo "<br>SUCCES";
	}
	else{
		echo "<br>ERROR IN CREATE TABLE C++ TABLE" .$connect->error;
	}


	$create_tables_phc_scores = "
	CREATE TABLE phc_scores (
	phc_scores_id INT NOT NULL AUTO_INCREMENT ,
	first_att FLOAT NOT NULL,
	second_att FLOAT NOT NULL,
	total FLOAT NOT NULL,
	total_gpa FLOAT NOT NULL,
	user_id INT NOT NULL,
	PRIMARY KEY(phc_scores_id),
	FOREIGN KEY(user_id) 
	REFERENCES users(user_id))";
	
	if($connect->query($create_tables_phc_scores) === TRUE){
		echo "<br>SUCCES";
	}
	else{
		echo "<br>ERROR IN CREATE TABLE PHC TABLE" .$connect->error;
	}

	$create_tables_ict_scores = "
	CREATE TABLE ict_scores (
	ict_scores_id INT NOT NULL AUTO_INCREMENT ,
	first_att FLOAT NOT NULL,
	second_att FLOAT NOT NULL,
	final FLOAT NOT NULL,
	total FLOAT NOT NULL,
	total_gpa FLOAT NOT NULL,
	user_id INT NOT NULL,
	PRIMARY KEY(ict_scores_id),
	FOREIGN KEY(user_id) 
	REFERENCES users(user_id))";
	
	if($connect->query($create_tables_ict_scores) === TRUE){
		echo "<br>SUCCES";
	}
	else{
		echo "<br>ERROR IN CREATE TABLE ICT TABLE" .$connect->error;
	}

	$create_tables_eap_scores = "
	CREATE TABLE eap_scores (
	eap_scores_id INT NOT NULL AUTO_INCREMENT ,
	first_att FLOAT NOT NULL,
	second_att FLOAT NOT NULL,
	final FLOAT NOT NULL,
	total FLOAT NOT NULL,
	total_gpa FLOAT NOT NULL,
	user_id INT NOT NULL,
	PRIMARY KEY(eap_scores_id),
	FOREIGN KEY(user_id) 
	REFERENCES users(user_id))";
	
	if($connect->query($create_tables_eap_scores) === TRUE){
		echo "<br>SUCCES";
	}
	else{
		echo "<br>ERROR IN CREATE TABLE EAP TABLE" .$connect->error;
	}

	$create_tables_culturology_scores = "
	CREATE TABLE culturology_scores (
	culturology_scores_id INT NOT NULL AUTO_INCREMENT ,
	first_att FLOAT NOT NULL,
	second_att FLOAT NOT NULL,
	final FLOAT NOT NULL,
	total FLOAT NOT NULL,
	total_gpa FLOAT NOT NULL,
	user_id INT NOT NULL,
	PRIMARY KEY(culturology_scores_id),
	FOREIGN KEY(user_id) 
	REFERENCES users(user_id))";
	
	if($connect->query($create_tables_culturology_scores) === TRUE){
		echo "<br>SUCCES";
	}
	else{
		echo "<br>ERROR IN CREATE TABLE CULTUROLOGY TABLE" .$connect->error;
	}

	$create_tables_practice_scores = "
	CREATE TABLE practice_scores (
	practice_scores_id INT NOT NULL AUTO_INCREMENT ,
	total FLOAT NOT NULL,
	total_gpa FLOAT NOT NULL,
	user_id INT NOT NULL,
	PRIMARY KEY(practice_scores_id),
	FOREIGN KEY(user_id) 
	REFERENCES users(user_id))";
	
	if($connect->query($create_tables_practice_scores) === TRUE){
		echo "<br>SUCCES";
	}
	else{
		echo "<br>ERROR IN CREATE TABLE PRACTICE TABLE" .$connect->error;
	}


/*	$create_tables_all_scores = "
	CREATE TABLE all_scores (
	all_scores_id INT NOT NULL AUTO_INCREMENT,

	user_id INT NOT NULL,
	FOREIGN KEY(user_id)
	REFERENCES users(user_id),

	calc_scores_id INT NOT NULL,
	FOREIGN KEY(calc_scores_id)
	REFERENCES calc_scores(calc_scores_id),

	cpp_scores_id INT NOT NULL,
	FOREIGN KEY(cpp_scores_id)
	REFERENCES cpp_scores(cpp_scores_id),

	ict_scores_id INT NOT NULL,
	FOREIGN KEY(ict_scores_id)
	REFERENCES ict_scores(ict_scores_id),

	phc_scores_id INT NOT NULL,
	FOREIGN KEY(phc_scores_id)
	REFERENCES phc_scores(phc_scores_id),

	eap_scores_id INT NOT NULL,
	FOREIGN KEY(eap_scores_id)
	REFERENCES eap_scores(eap_scores_id),

	practice_scores_id INT NOT NULL,
	FOREIGN KEY(practice_scores_id)
	REFERENCES practice_scores(practice_scores_id),

	culturology_scores_id INT NOT NULL,
	FOREIGN KEY(culturology_scores_id)
	REFERENCES culturology_scores(culturology_scores_id),
	PRIMARY KEY(all_scores_id))";
	
	if($connect->query($create_tables_all_scores) === TRUE){
		echo "<br>SUCCES";
	}
	else{
		echo "<br>ERROR IN CREATE TABLE ALL_COURSES TABLE" .$connect->error;
	}*/
	$connect->close();
?>