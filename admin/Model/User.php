<?php 
/**
* 
*/
class User
{
	private $id;
	private $usuario;
	private $password;
	private $tipo_usuario;

	
	function __construct($id, $usuario, $password, $tipo_usuario)
	{
		$this->setId($id);
		$this->setUsuario($usuario);
		$this->setPassword($password);
		$this->setTipo_usuario($tipo_usuario);		
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		//$password = hash('sha512', $password);
		$this->password = $password;
	}

	public function getTipo_usuario(){
		return $this->tipo_usuario;
	}

	public function setTipo_usuario($tipo_usuario){
		$this->tipo_usuario = $tipo_usuario;
	}

	public static function save($user){
		$db=Db::getConnect();
		
			$insert=$db->prepare('INSERT INTO usuarios VALUES (NULL, :usuario,:password,:tipo_usuario)');
			$insert->bindValue('usuario',$user->getUsuario());
			$insert->bindValue('password',$user->getPassword());
			$insert->bindValue('tipo_usuario',$user->getTipo_usuario());
			$insert->execute();
		
	}

	public static function all(){
		$db=Db::getConnect();
		$listaUsers=[];

		$select=$db->query('SELECT * FROM usuarios order by id');

		foreach($select->fetchAll() as $user){
			$listaUsers[]=new User($user['id'],$user['usuario'],$user['password'],$user['tipo_usuario']);
		}
		return $listaUsers;
	}

	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM usuarios WHERE id=:id');
		$select->bindValue('id',$id);
		$select->execute();

		$userDb=$select->fetch();


		$user = new User ($userDb['id'],$userDb['usuario'],$userDb['password'], $userDb['tipo_usuario']);
		//var_dump($alumno);
		//die();
		return $user;

	}

	public static function update($user){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE usuarios SET usuario=:usuario,password=:password, tipo_usuario=:tipo_usuario WHERE id=:id');
		$update->bindValue('usuario', $user->getUsuario());
		$update->bindValue('password', $user->getPassword());
		$update->bindValue('tipo_usuario',$user->getTipo_usuario());
		$update->bindValue('id',$user->getId());
		$update->execute();
	}

	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM usuarios WHERE id=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
}

?>