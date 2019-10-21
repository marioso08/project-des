<?php
include '../conexion/n.php';
include '../controller/consulSQL.php';

sleep(3);
$nameCliente= $_POST['name'];
$emailCliente= $_POST['email'];
$passCliente= md5($_POST['password']);
$confirPass= md5($_POST['confirm_password']);

if(!$nameCliente=="" && !$emailCliente=="" && !$passCliente=="" && !$confirPass==""){
    if ($passCliente==$confirPass) {
        $verificar=  ejecutarSQL::consultar("select * from user where email='".$emailCliente."'");
    $verificaltotal = mysqli_num_rows($verificar);
    if($verificaltotal<=0){
if (mysqli_query($mysqli,"insert into user (email, password, access) values ('$emailCliente', '$passCliente', '2')")) {

        $userid=mysqli_insert_id($mysqli);
    
            mysqli_query($mysqli,"insert into clientes (user_id, name, password, email, created) values ('$userid', '$nameCliente', '$passCliente', '$emailCliente', CURRENT_TIMESTAMP)");  
            ?>
                <script>
                    window.alert('Cliente Agregado con Éxito!');
                    window.history.back();
                </script>
            <?php
    
    }else{
            ?><script>
                window.alert('Contraseñas no son iguales!Ha ocurrido un error. Por favor intente nuevamente');
                window.history.back();
            </script>
        <?php
        }
    }else{
         ?><script>
                window.alert('El email que ha ingresado ya esta registrado. Por favor ingrese un email diferente');
                window.history.back();
            </script>
        <?php
        }
    }else{
        ?>
        <script>
            window.alert('Contraseñas no son iguales!');
            window.history.back();
        </script>
        <?php
    }
}else {
    ?><script>
                window.alert('Los campos no deben estar vacíos');
                window.history.back();
            </script>
        <?php
}