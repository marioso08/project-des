<div class="row">
<div class="col-lg-6">
<div class="container-fluid">
	<h2>Actualizar Usuario</h2>
	<form action="?controller=user&&action=update" method="POST">
	<input type="hidden" name="id" value="<?php echo $user->getId() ?>" >
		<div class="form-group">
			<label for="text">Usuario</label>
			<input type="text" name="usuario" id="codigo" class="form-control" value="<?php echo $user->getUsuario() ?>">
		</div>
		<div class="form-group">
			<label for="text">Password</label>
			<input type="text" name="password" id="nombres" class="form-control" value="<?php echo $user->getPassword() ?>">
		</div>
		<div class="form-group">
			<label for="text">Tipo usuario</label>
			<input type="text" name="tipo_usuario" id="talla" class="form-control" value="<?php echo $user->getTipo_usuario(); ?>">
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>
</div>
</div>
</div>