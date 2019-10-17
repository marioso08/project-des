
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">SystemConta</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                         <?php 
                         if(isset($_SESSION['usuario'])){
                            echo '<i class="fa fa-user fa-fw"></i> '.$_SESSION["usuario"].' <b class="caret"></b>';
                         }else{
                            echo '<i class="fa fa-user fa-fw"></i> username <b class="caret"></b>';
                         } 
                         ?>    
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="?controller=user&&action=updateshow&&id=4"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuracion</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="Views/User/close.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                            <li>
                                <a href="/contable"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-archive fa-fw"></i> Inventario<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?controller=producto&action=register">Ingresar Producto</a>
                                    </li>
                                    <li>
                                        <a href="?controller=producto&action=show">Ver Proucto</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Contabilidad<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?controller=ingreso&action=register">Ingresos</a>
                                    </li>
                                    <li>
                                        <a href="?controller=gasto&action=register">Gastos</a>
                                    </li>
                                    <!--<li>
                                        <a href="?controller=producto&action=register">Categoria Ingresos</a>
                                    </li>
                                    <li>
                                        <a href="?controller=producto&action=register">Categoria Gastos</a>
                                    </li>-->
                                    <li>
                                        <a href="?controller=ingreso&&action=show">Ver Ingresos</a>
                                    </li>
                                    <li>
                                        <a href="?controller=gasto&&action=show">Ver Gasto</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="?controller=user&action=register"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
