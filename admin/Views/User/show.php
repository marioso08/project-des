<div class="container">
	<h2>Lista Usuarios</h2>
	<form class="form-inline" action="?controller=user&action=search" method="post">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="id" name="id" type="text" placeholder="Busqueda por ID">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>Buscar</button>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-4 .col-md-offset-4" style="float:right;">
				<a href="?controller=user&action=register" class="btn btn-info"><i class="fa fa-shopping-bag"></i> Nuevo Usuario</a>
			</div>
		</div>
	</form>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Usuario</th>
					<th>Tipo</th>
					<th>Accion</th>
				</tr>
				<tbody>
					<?php foreach ($listaUsers as$user) {?>

					
					<tr>
						<td><?php echo $user->getId(); ?> </td>
						<td><?php echo $user->getUsuario(); ?> </td>
						<td><?php echo $user->getTipo_usuario(); ?></td>
						
						<td>
						<a class="waves-effect waves-light btn-small blue lighten-2" href="?controller=user&&action=updateshow&&id=<?php echo $user->getId() ?>">Editar</a>
						<a class=" waves-effect waves-light btn-small red accent-1" 
						onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
						href="?controller=user&&action=delete&&id=<?php echo $user->getId() ?>">Eliminar</a> 
						</td>
					</tr>
					<?php } ?>
				</tbody>

			</thead>
		</table>

	</div>	

</div>
<script>
	function Alerta(){
		
	}
</script>