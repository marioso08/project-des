<?php 

$controllers=array(
	'producto'=>['index','register','save','show','updateshow','update','delete','search','error'],
	'user'=>['index','register','save','show','updateshow','update','delete','search','error']
);

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('producto','error');
		call('user','error');
	}		
}else{
	call('producto','error');
	call('user','error');
}

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'producto':
		require_once('Model/Producto.php');
		$controller= new UsuarioController();
		break;				

		case 'user':
		require_once('Model/User.php');
		$controller= new UsuarioController();
		break;	
		default:
				# code...
		break;
	}
	$controller->{$action}();
}

?>