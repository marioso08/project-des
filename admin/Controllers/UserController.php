<?php 
/**
* 
*/
class UsuarioController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('Views/Layouts/inicio.php');
	}

	function register(){
		require_once('Views/User/register.php');
	}

	function registererror(){
		require_once('Views/User/registererror.php');
	}

	function save(){
		/*if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}*/
		$db=Db::getConnect();
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$usuario = $_POST['usuario'];
			$password = $_POST['password'];
			//$password = hash('sha512', $password);
			$tipo_usuario = $_POST['tipo_usuario'];

			$errores = '';

			$revisar=$db->prepare('SELECT * FROM usuarios WHERE usuario = :usuario limit 1');
			$revisar->execute([
				':usuario' => $usuario
			]);
			$resultado = $revisar->fetch();

			if ($resultado != false) {
				$errores .= '<li>Este usuario ya existe!!</li>';
				$this->registererror();
			} else {
		$user= new User(null,$_POST['usuario'],$_POST['password'],$_POST['tipo_usuario']);

		User::save($user);
		$this->show();
			}
		}
	}

	function show(){
		
		$listaUsers=User::all();

		require_once('Views/User/show.php');
	}

	function updateshow(){
		$id=$_GET['id'];
		$user=User::searchById($id);
		require_once('Views/User/updateshow.php');
	}

	function update(){
		$user = new User($_POST['id'],$_POST['usuario'],$_POST['password'],$_POST['tipo_usuario']);
		User::update($user);
		$this->show();
	}
	function delete(){
		$id=$_GET['id'];
		User::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$user=User::searchById($id);
			$listaUsers[]=$user;
			//var_dump($id);
			//die();
			require_once('Views/User/show.php');
		} else {
			$listaUsers=User::all();

			require_once('Views/User/show.php');
		}
		
		
	}

	function error(){
		require_once('Views/User/error.php');
	}
	
}

?>