<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="container-fluid">
                            <h2>Registro de Usuarios</h2> 
                            <div class="alert alert-danger">
                              <a href="#" class="alert-link">Usuario Ya Existe!!</a>.
                            </div>
                            <form role="form" action="?controller=user&&action=save" method="POST">

                                <div class="form-group">
                                    <label for="text">Usuario:</label>
                                    <input type="text" class="form-control" id="codigo" placeholder="Usuario"
                                        name="usuario" required>
                                </div>
                                <div class="form-group">
                                    <label for="text">Contraseña:</label>
                                    <input type="password" class="form-control" id="password" placeholder="Contraseña"
                                        name="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Tipo Usuario:</label>
                                    <select class="form-control" name="tipo_usuario">
                                        <option>Admin</option>
                                        <option>Cliente</option>
                                    </select>
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