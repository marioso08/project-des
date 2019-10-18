<?php include ('admin/db/connection.php'); 
$db=Db::getConnect();
$filas=$db->query("SELECT * FROM `producto`")->fetchAll(PDO::FETCH_OBJ);
$fila1=$filas[0];
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <title>Pelicuas</title>
  </head>
  <body>
  <!--nav 1-->
<nav class="navbar navbar-expand-lg justify-content-center navbar-light bg-dark fixed-top" id="nav1">
  <a class="navbar-brand text-white" href="#">
    <img src="favicon.ico" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>
  
   <a class="nav-link text-white" href="#">Link</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
  
    <div class="container">
       <!--/img principal-->
        <div class="img1">
            <img src="https://areajugones.sport.es/wp-content/uploads/2019/05/Videoconsolas.jpg.webp" class="img-fluid" id="img1" alt="Responsive image">
    </div>
        <!-- nav 2-->
<nav class="navbar navbar-expand-lg navbar-light bg-dark" id="nav2">
  <a class="navbar-brand text-white" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <a class="nav-link text-white" href="#">Registrarse</a>
   <a class="nav-link text-white" href="#">Login</a>
    </ul>
  </div>
  
</nav>
<!--section-->
 
  <section class="section1">
  <div class="sec1">
  <div class="imgc1">
      <img id="imgc1" src="<?php echo $fila1->imagen1p ?>" alt="">
  </div>
  <div class="ficha">
      <p><b>Ficha</b><br><?php echo $fila1->fichap ?></p>
  </div><br><br>
  </div>      
  <div class="descri">
        <h3><?php echo $fila1->titulop ?></h3>
  <p><?php echo $fila1->resenap ?></p>
  </div><br><br><br><br>
  <div class="imagenes">
     <h2>Imagenes</h2><br>
      <img id="img2" src="<?php echo $fila1->imagen2p ?>" alt="">
  </div><br>
  <center><div class="info">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel accusamus, nesciunt excepturi sequi ratione placeat! Quo, possimus odit iste aperiam iusto, perspiciatis tempore rem earum suscipit eligendi officiis voluptas quisquam.</p><br>
      <div class="enlaces">
          <a href="">descargar</a><br>
          <p>Contraseña: xxx</p>
      </div>
  </div></center>
  <br>

</section>
<section class="section2">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis minus, consequatur officiis iusto eum facere reiciendis consequuntur dolore nihil ipsam saepe voluptate obcaecati unde deserunt pariatur beatae accusantium voluptatem, et.
</section>
<section class="section3">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto numquam, odio iure repellat nostrum? Ipsum facilis quis sed cupiditate exercitationem? Minima delectus animi adipisci quo ipsa necessitatibus quaerat veritatis nam.
</section>
<section class="section4">
    <h2>Dejanos un comentario!</h2>
    <p>Debe estar registrado <a href="#">Inicia sesion aqui!</a> para comentar.</p>
</section>
<!--/section-->
    </div><br>

    <!--footer-->
   <footer class="pie">
    Derechos reservados: Mario Ruiz Rojas
   </footer>

    <!--script-->
    <script type="application/javascript" src="js/card.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>