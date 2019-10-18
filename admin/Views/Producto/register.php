<?php 
$db=Db::getConnect();
$filas=$db->prepare("SELECT idcategoria,nombre FROM `categoria`");
$filas->execute();
?>

<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">
<div class="row">
<div class="col-lg-6">
<div class="container-fluid">
  <h2>Registro de Productos</h2>
  <form role="form" action="?controller=producto&&action=save" method="POST">

    <div class="form-group">
 
      <label for="text">Categoria:</label>
      <select class="form-control" name="idcategoria">
      <?php foreach($filas as $r1){
       echo "<option value=".$r1[0].">" .$r1[1]."</option>";
      }?>
      </select>
     
    </div>
    <div class="form-group">
      <label for="text">Titulo:</label>
      <input type="text" class="form-control" id="titulo" placeholder="Ingrese Titulo" name="titulop">
    </div>
    <div class="form-group">
      <label for="text">Ficha:</label>
      <textarea id="summernote1" class="form-control" type="text" name="fichap"></textarea>
    </div>
    <div class="form-group">
      <label for="text">Reseña:</label>
      <textarea id="summernote2" class="form-control" type="text" name="resenap"></textarea>
    </div>
    <div class="form-group">
      <label for="text">Portada:</label>
      <input type="text" name="imagen1p" class="form-control" placeholder="Ingrese Imagen1">
    </div>
    <div class="form-group">
      <label for="text">Imagen 2:</label>
      <input type="text" name="imagen2p" class="form-control" placeholder="Ingrese Imagen2">
    </div>
    <div class="form-group">
      <label for="text">Imagen 3:</label>
      <input type="text" name="imagen3p" class="form-control" placeholder="Ingrese Imagen3">
    </div>
    <div class="form-group">
      <label for="text">Imagen 4:</label>
      <input type="text" name="imagen4p" class="form-control" placeholder="Ingrese Imagen4">
    </div>
    <div class="form-group">
      <label for="text">Video:</label>
      <input type="text" name="videop" class="form-control" placeholder="Ingrese video">
    </div>
    <div class="form-group">
      <label for="text">Enlace:</label>
      <textarea id="summernote3" class="form-control" type="text" name="enlacep"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
