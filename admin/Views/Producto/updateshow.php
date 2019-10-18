<?php 
$db=Db::getConnect();
$filas=$db->prepare("SELECT idcategoria,nombre FROM `categoria`");
$filas->execute();
?>
<div class="row">
<div class="col-lg-6">
<div class="container-fluid">
	<h2>Actualizar Producto</h2>
	<form action="?controller=producto&&action=update" method="POST">
		<input type="hidden" name="idproducto" value="<?php echo $producto->getIdproducto(); ?>" >
		<div class="form-group">
			<label for="text">Categoria</label>
		<select class="form-control" name="idcategoria">
        <?php foreach($filas as $r1){
          echo "<option>" .$producto->getIdcategoria()."</option>";
        }?>
        </select>
		</div>
		<div class="form-group">
			<label for="text">Titulo</label>
			<input type="text" name="titulop" id="nombres" class="form-control" value="<?php echo $producto->getTitulop(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Ficha</label>
			<textarea id="summernote1" class="form-control" type="text" name="fichap"><?php echo $producto->getFichap(); ?></textarea>
		</div>
		<div class="form-group">
			<label for="text">Reseña</label>
			<textarea id="summernote2" class="form-control" type="text" name="resenap"><?php echo $producto->getResenap(); ?></textarea>
		</div>
		<div class="form-group">
			<label for="text">Imagen1</label>
			<input type="text" name="imagen1p" id="talla" class="form-control" value="<?php echo $producto->getImagen1p(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Imagen2</label>
			<input type="text" name="imagen2p" id="talla" class="form-control" value="<?php echo $producto->getImagen2p(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Imagen3</label>
			<input type="text" name="imagen3p" id="talla" class="form-control" value="<?php echo $producto->getImagen3p(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Imagen4</label>
			<input type="text" name="imagen4p" id="talla" class="form-control" value="<?php echo $producto->getImagen4p(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Video</label>
			<input type="text" name="videop" id="talla" class="form-control" value="<?php echo $producto->getVideop(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Enlaces</label>
			<textarea id="summernote3" class="form-control" type="text" name="enlacep"><?php echo $producto->getEnlacep(); ?></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button><a style="float: right;" class="btn btn-warning" href="?controller=producto&&action=show">Volver</a>

	</form>
</div>
</div>
</div>