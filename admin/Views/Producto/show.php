<div class="container-fluid">
	<h2>Lista Peliculas</h2>
	<form class="form-inline" action="?controller=producto&action=search" method="post">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="id" name="idproducto" type="text" placeholder="Busqueda por ID">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-offset-4">
				<a href="?controller=producto&action=register" class="btn btn-info"><i class="fa fa-shopping-bag"></i> Nuevo Producto</a>
			</div>
		</div>
	</form>
	
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>IDcategoria</th>
					<th>Titulo</th>
					
					<th>Portada</th>
					<th>Imagen2</th>
					<th>Imagen3</th>
					<th>Imagen4</th>
					<th>Video</th>
					<th>Enlaces</th>
					<th>Accion</th>
				</tr>
				<tbody>
					<?php foreach ($listaProductos as$producto) {?>
					
					<tr>
						<td><?php echo $producto->getIdproducto(); ?> </td>
						<td><?php echo $producto->getIdcategoria(); ?> </td>
						<td><?php echo $producto->getTitulop(); ?> </td>
						
						<td><img src="<?php echo $producto->getImagen1p(); ?>" style="width: 50px; height: 50px;" alt=""></td>
						<td><img src="<?php echo $producto->getImagen2p(); ?>" style="width: 50px; height: 50px;" alt=""></td>
						<td><img src="<?php echo $producto->getImagen3p(); ?>" style="width: 50px; height: 50px;" alt=""></td>
						<td><img src="<?php echo $producto->getImagen4p(); ?>" style="width: 50px; height: 50px;" alt=""></td>
						<td><?php echo $producto->getVideop(); ?></td>
						<td><?php echo $producto->getEnlacep(); ?></td>
						<td>
						<a class="waves-effect waves-light btn-small blue lighten-2" href="?controller=producto&&action=updateshow&&idproducto=<?php echo $producto->getIdproducto() ?>">Editar</a>
						<a class=" waves-effect waves-light btn-small red accent-1" 
						onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
						href="?controller=producto&&action=delete&&idproducto=<?php echo $producto->getIdproducto() ?>">Eliminar</a> 
						</td>
					</tr>
					<?php } ?>
				</tbody>

			</thead>
		</table>

	</div>	

</div>
