<?php //session_start(); 

require_once ('connection.php');
$db=Db2::getConnect();
$errores = '';
if (isset($_POST['usuario']) && isset($_POST['password'])) 
{ 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        //$password = hash('sha512', $password);
       //$tipo_usuario = $_POST['tipo_usuario'];
     
        $revisar=$db->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password');
        $revisar->execute([
            ':usuario' => $usuario,
            ':password' => $password
            
        ]);
        $resultado = $revisar->fetch();
    
        if ($resultado !== false) {
            $_SESSION['usuario'] = $usuario;
            header ('Location: ../../');
            //$usuario = iniciarSession('usuarios', $db);
    
        
            /*if ($resultado['tipo_usuario'] == 'admin') {
                header ('Location: ../../');
            }elseif ($resultado['tipo_usuario'] == 'usuario') {
                header ('Location: ../../');
            }else{
                header ('index.php');
            }*/
            //$this->index();
            } else {
            $errores .='<div class="alert alert-danger">
            <a class="alert-link">Usuario o Contraseña incorrecto</a>.
          </div>';
        }
} 

}
?>
