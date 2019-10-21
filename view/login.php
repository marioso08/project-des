


<div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       
                    </div>
                    <center><h4 class="modal-title">Inicia Sesión</h4></center>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                       
                           


 
<!-- Show the user profile details -->
<div class="userContent" style="display: none;"></div>
                                </div>
                                <div class="division">
                                    
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="/project-des/controller/login.php" accept-charset="UTF-8">
                                    <input  class="form-control" type="text" placeholder="Email" name="email-login">
                                    <input  class="form-control" type="password" placeholder="Password" name="clave-login">
                                    <input class="btn btn-default btn-login" type="submit" value="Login">
                                    </form>
                                    
                                </div>
                             </div>
                        </div>

                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" action="/project-des/model/regclien.php" accept-charset="UTF-8">
                                	<input  class="form-control" type="text" placeholder="Nombres" name="name">
                                	<input  class="form-control" type="text" placeholder="Email" name="email">
                                	<input  class="form-control" type="password" placeholder="Password" name="password">
                                <input  class="form-control" type="password" placeholder="Confirmar Password" name="confirm_password">
                                <input class="btn btn-default btn-login" type="submit" value="Crear cuenta">
                                </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Aún no formas parte de los nuestros!! 
                                 <a href="javascript: showRegisterForm();">Registrate</a>
                            </span><br>
                            <a href="/project-des/view/recupera.php">Olvidaste tu Contraseña?</a>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Ya tienes una cuenta?</span>
                             <a href="javascript: showLoginForm();">Login</a><br>
                             <a href="/project-des/view/recupera.php">Olvidaste tu Contraseña?</a>
                        </div>
                    </div>        
    		      </div>
		      </div>
		  </div>
 <!-- /modal login -->