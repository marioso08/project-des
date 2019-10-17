<?php 
/**
* 
*/
class Producto
{
	private $idproducto;
	private $idcategoria;
	private $titulop;
	private $fichap;
	private $resenap;
	private $imagen1p;
	private $imagen2p;
	private $imagen3p;
	private $imagen4p;
	private $videop;
	private $enlacep;

	
	function __construct($idproducto, $idcategoria, $titulop, $fichap, $resenap, $imagen1p, $imagen2p,$imagen3p,$imagen4p,$videop,$enlacep)
	{
		$this->setIdproducto($idproducto);
		$this->setIdcategoria($idcategoria);
		$this->setTitulop($titulop);
		$this->setFichap($fichap);
		$this->setResenap($resenap);
		$this->setImagen1p($imagen1p);
		$this->setImagen2p($imagen2p);
		$this->setImagen3p($imagen3p);
		$this->setImagen4p($imagen4p);
		$this->setVideop($videop);
		$this->setEnlacep($enlacep);		
	}

	public function getIdproducto(){
		return $this->idproducto;
	}

	public function setIdproducto($idproducto){
		$this->idproducto = $idproducto;
	}

	public function getIdcategoria(){
		return $this->idcategoria;
	}

	public function setIdcategoria($idcategoria){
		$this->idcategoria = $idcategoria;
	}

	public function getTitulop(){
		return $this->titulop;
	}

	public function setTitulop($titulop){
		$this->titulop = $titulop;
	}

	public function getFichap(){
		return $this->fichap;
	}

	public function setFichap($fichap){
		$this->fichap = $fichap;
	}

	public function getResenap(){
		return $this->resenap;
	}

	public function setResenap($resenap){
		$this->resenap = $resenap;
	}

	public function getImagen1p(){

		return $this->imagen1p;
	}

	public function setImagen1p($imagen1p){
		
        $this->imagen1p = $imagen1p;
	}

	public function getImagen2p(){

		return $this->imagen2p;
	}

	public function setImagen2p($imagen2p){
		
        $this->imagen2p = $imagen2p;
	}

	public function getImagen3p(){

		return $this->imagen3p;
	}

	public function setImagen3p($imagen3p){
		
        $this->imagen3p = $imagen3p;
	}

	public function getImagen4p(){

		return $this->imagen4p;
	}

	public function setImagen4p($imagen4p){
		
        $this->imagen4p = $imagen4p;
	}

	public function getVideop(){

		return $this->videop;
	}

	public function setVideop($videop){
		
        $this->videop = $videop;
	}

	public function getEnlacep(){
		return $this->enlacep;
	}

	public function setEnlacep($enlacep){
		$this->enlacep = $enlacep;
	}

	public static function save($producto){
		$db=Db::getConnect();
		//var_dump($alumno);
		//die();
		

		$insert=$db->prepare('INSERT INTO producto VALUES (NULL, :idcategoria,:titulop,:fichap,:resenap,:imagen1p,:imagen2p,:imagen3p,:imagen4p,:videop,:enlacep)');
		$insert->bindValue('idcategoria',$producto->getIdcategoria());
		$insert->bindValue('titulop',$producto->getTitulop());
		$insert->bindValue('fichap',$producto->getFichap());
		$insert->bindValue('resenap',$producto->getResenap());
		$insert->bindValue('imagen1p',$producto->getImagen1p());
		$insert->bindValue('imagen2p',$producto->getImagen2p());
		$insert->bindValue('imagen3p',$producto->getImagen3p());
		$insert->bindValue('imagen4p',$producto->getImagen4p());
		$insert->bindValue('videop',$producto->getVideop());
		$insert->bindValue('enlacep',$producto->getEnlacep());
		$insert->execute();
	}

	public static function all(){
		$db=Db::getConnect();
		$listaProductos=[];

		$select=$db->query('SELECT * FROM producto order by idproducto');

		foreach($select->fetchAll() as $producto){
			$listaProductos[]=new Producto($producto['idproducto'],$producto['idcategoria'],$producto['titulop'],$producto['fichap'],$producto['resenap'],$producto['imagen1p'],
			$producto['imagen2p'],$producto['imagen3p'],$producto['imagen4p'],$producto['videop'],$producto['enlacep']);
		}
		return $listaProductos;
	}

	public static function searchById($IDproducto){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM producto WHERE idproducto=:idproducto');
		$select->bindValue('idproducto',$idproducto);
		$select->execute();

		$productoDb=$select->fetch();


		$producto = new Producto ($productoDb['idproducto'],$productoDb['idcategoria'],$productoDb['titulop'],$productoDb['fichap'], $productoDb['resenap'], $productoDb['imagen1p'], 
		$productoDb['imagen2p'],$productoDb['imagen3p'],$productoDb['imagen4p'],$productoDb['videop'],$productoDb['enlacep']);
		//var_dump($alumno);
		//die();
		return $producto;

	}

	public static function update($producto){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE producto SET idcategoria=:idcategoria,titulop=:titulop,fichap=:fichap, resenap=:resenap, imagen1p=:imagen1p,
		 imagen2p=:imagen2p, imagen3p=:imagen3p, imagen4p=:imagen4p, videop=:videop, enlacep=:enlacep WHERE IDproducto=:IDproducto');
		$update->bindValue('idcategoria', $producto->getIdcategoria());
		$update->bindValue('titulop', $producto->getTitulop());
		$update->bindValue('fichap', $producto->getFichap());
		$update->bindValue('resenap',$producto->getResenap());
		$update->bindValue('imagen1p',$producto->getImagen1p());
		$update->bindValue('imagen2p',$producto->getImagen2p());
		$update->bindValue('imagen3p',$producto->getImagen3p());
		$update->bindValue('imagen4p',$producto->getImagen4p());
		$update->bindValue('videop',$producto->getVideop());
		$update->bindValue('enlacep',$producto->getEnlacep());
		$update->bindValue('IDproducto',$producto->getIDproducto());
		$update->execute();
	}

	public static function delete($IDproducto){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM producto WHERE idproducto=:idproducto');
		$delete->bindValue('idproducto',$idproducto);
		$delete->execute();		
	}
}

?>