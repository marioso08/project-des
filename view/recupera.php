<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include '../templates/link.php'; ?>
    <title>Recuperar Contraseña || CompuNorte</title>
    <link rel="Shortcut Icon" type="image/x-icon" href="../public/img/logo.png" />
  </head>
  <body class="">
    <?php include '../templates/navbar-login.php';?>
   <header>
    <?php include '../templates/main-header.php'; ?>
    <?php include '../user/cart_search_field.php'; ?><!--carrito-->
  </header>
  <?php include '../templates/nav.php'; ?>
  <?php include '../controller/enviar_mail.php'; ?>

    <br>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="text-center">
            <h1>Tranquilo!!!</h1>
            <p>Si olvidaste tu contraseña puedes restaurarla aqui.</p>
              <div class="panel-body">
              <fieldset>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                  <div class="form-group">
                    <input class="form-control input-lg" placeholder="E-mail" name="email" type="email">
                  </div>
                    <button id="btn-login" type="submit" class="btn btn-success btn-lg btn-primary btn-block">Enviar</button>
                </form>
              </fieldset>
              </div>
          </div>
        </div>
      </div>

     