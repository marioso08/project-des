<!-- Modal logout -->
<?php include '/project-des/controller/login.php'; ?>
    <div class="modal fade modal-logout" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;" id="logout">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Cerrar Sesión</h4></center>
            </div>
            <br>
            <p class="text-center">¿Quieres cerrar la sesión?</p>
            <h5><center>Usuario: <strong><?php echo $_SESSION['nameUser'] ?></strong></center></h5>
            <p class="text-center"><i class="fa fa-exclamation-triangle fa-5x"></i></p>
            <p class="text-center">
                <a href="/project-des/model/logout.php" class="btn btn-primary btn-sm">Cerrar la sesión</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
            </p>
          </div>
      </div>
    </div>
    <!-- Fin Modal logout -->
    <!-- Modal logout admin-->
<?php include '/project-des/controller/login.php'; ?>
    <div class="modal fade modal-logout" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;" id="logoutA">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Cerrar Sesión</h4></center>
            </div>
            <br>
            <p class="text-center">¿Quieres cerrar la sesión?</p>
            <h5><center>Usuario: <strong><?php echo $_SESSION['nombreAdmin'] ?></strong></center></h5>
            <p class="text-center"><i class="fa fa-exclamation-triangle fa-5x"></i></p>
            <p class="text-center">
                <a href="/project-des/model/logout.php" class="btn btn-primary btn-sm">Cerrar la sesión</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
            </p>
          </div>
      </div>
    </div>
    <!-- Fin Modal logout -->

<!-- My Account -->
    <div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Login</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="/project-des/user/update_account.php">
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Email:</span>
                            <input type="text" style="width:350px;" value="<?php echo  $_SESSION['emailUser']?>" class="form-control" name="email">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Password:</span>
                            <input type="password" style="width:350px;" value="<?php echo  $_SESSION['claveUser']; ?>" class="form-control" name="password">
                        </div><hr>
                        <p>Cambiar Contraseña:</p>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Password:</span>
                            <input type="password" style="width:350px;" class="form-control" name="cpass" required>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Confirmar Password:</span>
                            <input type="password" style="width:350px;" class="form-control" name="repass" required>
                        </div>                      
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Cambiar</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Edit Profile -->
    <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <?php
        $cq=mysqli_query($mysqli,"select * from clientes left join user on user.userid=clientes.user_id where clientes.user_id='".$_SESSION['id']."'");
        $crow=mysqli_fetch_array($cq);
    ?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Perfil</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form role="form" method="POST" action="/project-des/user/save_profile.php<?php echo '?id='.$_SESSION['id']; ?>" enctype="multipart/form-data">
                        <div class="container-fluid">
                        <div style="height:15px;"></div>
                        <div class="form-group input-group">
                            <span style="width:150px;" class="input-group-addon">Nombres:</span>
                            <input type="text" style="width:330px; text-transform:capitalize;" class="form-control" name="cname" value="<?php echo ucwords($_SESSION['nameUser']); ?>">
                        </div>
                        <div class="form-group input-group">
                            <span style="width:150px;" class="input-group-addon">Dirección:</span>
                            <input type="text" style="width:330px; text-transform:capitalize;" class="form-control" name="direccion" value="<?php echo ucwords($name['direccion']); ?>">
                        </div>
                        <div class="form-group input-group">
                            <span style="width:150px;" class="input-group-addon">Telefono:</span>
                            <input type="text" style="width:330px;" class="form-control" name="telefono" value="<?php echo $name['telefono']; ?>">
                        </div>
                        <div style="height:10px;"></div>                    
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Foto:</span>
                            <input type="file" style="width:400px;" class="form-control" name="image">
                        </div>
                        </div>
                </div>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Cambiar</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->