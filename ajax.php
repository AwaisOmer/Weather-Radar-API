<?php 
	//$wpdb->query('SELECT * FROM `phish`');
	global $wpdb;
	$results = $wpdb->query( "SELECT * FROM phish ");
	echo $results;
?>