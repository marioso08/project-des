<?php
// Archivo de conexion con la base de datos
//require_once '../Conexion.php';
require_once '../../conexion.php';
$sql = 'SELECT * FROM tbl_imagenes';
$sentencia = $pdo->prepare($sql);
$sentencia->execute();
$resultado = $sentencia->fetchAll();


//var_dump($resultado);
$fotosxp = 4;
$totalbd = $sentencia->rowCount();
$paginas = $totalbd/4;
$paginas = ceil($paginas);
// Condicional para validar el borrado de la imagen
if(isset($_GET['delete_id']))
{
	// Selecciona imagen a borrar
	$stmt_select = $pdo->prepare('SELECT Imagen_Img FROM tbl_imagenes WHERE Imagen_ID =:uid');
	$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
	$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
	// Ruta de la imagen
	unlink("imagenes/".$imgRow['Imagen_Img']);
	
	// Consulta para eliminar el registro de la base de datos
	$stmt_delete = $pdo->prepare('DELETE FROM tbl_imagenes WHERE Imagen_ID =:uid');
	$stmt_delete->bindParam(':uid',$_GET['delete_id']);
	$stmt_delete->execute();
	// Redireccioa al inicio
	header("Location: juegos.php"); 
}

?>
<?php 
      if(!$_GET){
        header('Location: juegos.php?pagina=1');
      }
      if($_GET['pagina']>$paginas || $_GET['pagina'] <= 0){
        header('Location: juegos.php?pagina=1');
      }
      $iniciar = ($_GET['pagina']-1)*$fotosxp;
      $sql_art = 'SELECT * FROM tbl_imagenes LIMIT :iniciar,:nafotos';
      $sentencia_art = $pdo->prepare($sql_art);
      $sentencia_art->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
      $sentencia_art->bindParam(':nafotos', $fotosxp, PDO::PARAM_INT);
      $sentencia_art->execute();
      $resul_art = $sentencia_art->fetchAll();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include '../includes/header.php'; ?>
</head>
<body>
<?php include '../includes/nanvar.php'; ?>
<section class="ContentPage full-width">
<?php include '../includes/cabecera.php'; ?>
<!--contenido-->
<div class="container">
<div class="row">
  <div class="col s12">
  <div class="page-header">
    <h1>Mostrar todos</h1>
    <a class="btn btn-default" href="../AgreagarNuevo.php"> Agregar nuevo</a>
  </div>
  <br />
  
	<table id="mitabla" class="striped responsive-table">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Genero</th>
        <th>Portada</th>
        <th>Edictar</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($resul_art as $row): ?>
      <tr>
        <td><?php echo $row['imagen_Marca']; ?></td>
        <td><?php echo $row['imagen_Tipo']; ?></td>
        
        <td><img src="../imagenes/<?php echo $row['imagen_Img']; ?>" class="img-rounded" width="60px" height="30px" /></td>
        <td><a class="waves-effect waves-light btn btn-small" href="EditarImagen.php?edit_id=<?php echo $row['Imagen_ID']; ?>" title="click for edit" onclick="return confirm('Esta seguro de editar el archivo ?')"><i class="material-icons">edit</i></a></td>
        <td><a class="waves-effect waves-light btn btn-small" href="?delete_id=<?php echo $row['Imagen_ID']; ?>" title="click for delete" onclick="return confirm('Esta seguro de eliminar el archivo?')"><i class="material-icons">delete</i></a></td>
      </tr>
      <?php endforeach ?>
      
    </tbody>
    </table>
    <br><br>
    <!--paginacion-->
    <div class="pagination">
               <a href="juegos.php?pagina=<?php echo $_GET['pagina']-1 ?>" 
               class="<?php echo $_GET['pagina']<= 1 ? 'disable' : '' ?>">Anterior</a>
              <?php for($i=0; $i < $paginas; $i++): ?>
               <a href="juegos.php?pagina=<?php echo $i+1 ?>" 
               class="<?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"><?php echo $i+1 ?></a>
              <?php endfor ?>
               <a href="juegos.php?pagina=<?php echo $_GET['pagina']+1 ?>" 
               class="<?php echo $_GET['pagina']>=$paginas ? 'disable' : '' ?>" >Siguente</a>
          </div>
         <!--/paginacion-->
    </div>
  </div>
  <div class="alert alert-success"> <strong>Tutorial Vinculo!</strong> <a href="https://baulcode.com">Ir al Tutorial</a>! </div>

</div>
<?php include '../includes/footer.php'; ?>
    </section>
    <!-- Sweet Alert JS -->
    <script src="../js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
    <script src="../js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
    <script src="../js/main.js"></script>
</body>
</html>