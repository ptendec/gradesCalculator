<?php 
	session_start();
	require_once('query_server.php');
	$user_id_current = $_SESSION['user_id'];
	$delete_row = "DELETE FROM cpp_scores WHERE $user_id_current";
	$query_to_delete = $connect->query($delete_row);
	$delete_row = "DELETE FROM ict_scores WHERE $user_id_current";
	$query_to_delete = $connect->query($delete_row);
	$delete_row = "DELETE FROM calc_scores WHERE $user_id_current";
	$query_to_delete = $connect->query($delete_row);
	$delete_row = "DELETE FROM culturology_scores WHERE $user_id_current";
	$query_to_delete = $connect->query($delete_row);
	$delete_row = "DELETE FROM eap_scores WHERE $user_id_current";
	$query_to_delete = $connect->query($delete_row);
	$delete_row = "DELETE FROM phc_scores WHERE $user_id_current";
	$query_to_delete = $connect->query($delete_row);
	$delete_row = "DELETE FROM practice_scores WHERE $user_id_current";
	$query_to_delete = $connect->query($delete_row);


	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: '.$previousPage);
	exit;
?>

