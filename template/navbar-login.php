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
<script src="https://kit.fontawesome.com/81ff6c4bdb.js" crossorigin="anonymous"></script>
<div id="top-header" class="col-md-12">

                    <ul class="header-links pull-left">
                      <li><a href="#"><i class="fas fa-film"></i>Peliculas</a></li>
                      <li><a href="#"><i class="fas fa-gamepad"></i>Juegos</a></li>
                    </ul>
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
                                                      <a style="align-items: center;" href="javascript:void(0)" onclick="openLoginModal();" data-toggle="modal"><span class="fa fa-user-circle fa-fw"></span> Login</a>
                                                    </li>    
                                                  </ul>
                                                  </div>
                                                 '; 
                                            }
                                        ?>
                              </div>
                          </ul>
                          
                      </div>
                 



 <!-- TOP HEADER -->
           
                  
                    
                    
        <!-- /TOP HEADER -->
