
<?php session_start();

if(isset($_SESSION['usuario'])){
	//require ('Views/User/login.php');
	require_once ('db/connection.php');
 
	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}else{
		$controller='producto';
		$controller='user';
		$action='index';
	}
	require_once('Views/Layouts/layout.php');
	
}else{
	header ('Location: Views/User/index.php');
}
		
 ?>