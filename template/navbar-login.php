<?php 
    session_start(); 
    error_reporting(E_PARSE);
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }

?>

<?php include 'view/login.php'; ?>
<?php include 'view/config.php'; ?>
<?php include 'conexion/n.php'; ?>
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
      <a class="nav-link text-white" href="#"></a>
   <ul class="header-links pull-right">
                        <div class="row ">
                                        <?php
                                            if(!$_SESSION['nombreAdmin']==""){
                                                echo ' 
                                                <div class="contenedor-tr">
                                                  <li><a href="/project-des/admin">Administración</a></li>
                                                    
                                                  <li class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                                      Hola,  '.$_SESSION['nombreAdmin'].'
                                                      <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                      <li><a href="#logoutA" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i>Cerrar sesion</a></li>
                                                    </ul>
                                                  </li>  
                                                  </div>
                                                 ';
                                            }else if(!$_SESSION['emailUser']==""){
                                                echo ' 
                                                <div class="contenedor-tr">
                                                  <li class="dropdown">
                                                    <img src="/project-des/'.$_SESSION['foto'].'" style="max-height:40px; max-width:50px;">
                                                    <a href="" data-toggle="dropdown" class="dropdown-toggle">
                                                      Hola,  '.$_SESSION['nameUser'].'<span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                      <li><a href="#account" data-toggle="modal"><span class="fa fa-user-circle fa-fw"></span>  Mi cuenta</a></li>
                                                      <li class="divider"></li>
                                                      <li><a href="#profile" data-toggle="modal"><span class="fa fa-users fa-fw"></span>  Mi perfil</a></li>
                                                      <li class="divider"></li>
                                                      <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i>Cerrar sesion</a></li>
                                                    </ul>
                                                  </li> 
                                                </div> 
                                                 ';
                                            }else{
                                                echo ' 
                                                <div class="contenedor-tr">
                                                  <ul class="header-links pull-right">
                                                    <li class="dropdown">
                                                      <a style="align-items: center;" href="javascript:void(0)" onclick="openLoginModal();" data-toggle="modal"><span class="fa fa-user-circle fa-fw"></span> Mi Cuenta</a>
                                                    </li>    
                                                  </ul>
                                                  </div>
                                                 '; 
                                            }
                                        ?>
                              </div>
                          </ul>
   
   
    </ul>
  </div>
  
  
</nav>
 <!-- TOP HEADER -->
           
                  
                    
                    
        <!-- /TOP HEADER -->
