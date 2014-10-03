<?php 
	include 'synch.php';

	$control = new Synch();

	$sql_connString = $control->get_tables("u192884961_ptt");

	print_r($sql_connString);

?>