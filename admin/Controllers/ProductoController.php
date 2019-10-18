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
		require_once('Views/Producto/register.php');
	}

	function save(){
		/*if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}*/
		$producto= new Producto(null,$_POST['idcategoria'],$_POST['titulop'],$_POST['fichap'],$_POST['resenap'],$_POST['imagen1p'],$_POST['imagen2p'],$_POST['imagen3p'],$_POST['imagen4p'],$_POST['videop'],$_POST['enlacep']);

		Producto::save($producto);
		$this->show();
	}

	function show(){
		$listaProductos=Producto::all();

		require_once('Views/Producto/show.php');
	}

	function updateshow(){
		$idproducto=$_GET['idproducto'];
		$producto=Producto::searchById($idproducto);
		require_once('Views/Producto/updateshow.php');
	}

	function update(){
		$producto = new Producto($_POST['idproducto'],$_POST['idcategoria'],$_POST['titulop'],$_POST['fichap'],$_POST['resenap'],$_POST['imagen1p'],$_POST['imagen2p'],$_POST['imagen3p'],$_POST['imagen4p'],$_POST['videop'],$_POST['enlacep']);
		Producto::update($producto);
		$this->show();
	}
	function delete(){
		$idproducto=$_GET['idproducto'];
		Producto::delete($idproducto);
		$this->show();
	}

	function search(){
		if (!empty($_POST['idproducto'])) {
			$idproducto=$_POST['idproducto'];
			$producto=Producto::searchById($idproducto);
			$listaProductos[]=$producto;
			//var_dump($id);
			//die();
			require_once('Views/Producto/show.php');
		} else {
			$listaProductos=Producto::all();

			require_once('Views/Producto/show.php');
		}
		
		
	}

	function error(){
		require_once('Views/Producto/error.php');
	}

}

?>