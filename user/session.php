<?php
	session_start();
	
	
	include('../conexion/n.php');

	$sq=mysqli_query($mysqli,"select * from clientes where user_id='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['email'];
?>