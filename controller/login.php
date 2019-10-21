<?php
session_start();
    include '../conexion/n.php';
    include '../controller/consulSQL.php';
    sleep(2);
    $email=$_POST['email-login'];
    $clave=md5($_POST['clave-login']);

    $Usuario=ejecutarSQL::consultar("select * from user where email = '$email' and password = '$clave' ");

    if ($Usuario) {
        $row=mysqli_fetch_array($Usuario);
        $access=$row['access'];
        $_SESSION['id']=$row['userid'];
        $id=$row['userid'];
    }else{?>
        <script>
            window.alert('Error campo vacio intente de nuevo');
            window.location.href='../index.php';
        </script><?php 
    }

    if($access=="1"){
        $verAdmin=ejecutarSQL::consultar("select * from administrador where nombre='$email' and Clave='$clave'");
        $AdminC=mysqli_num_rows($verAdmin);
        if($AdminC>0){
            $_SESSION['nombreAdmin']=$email;//se le da la variable email...pero ingresa con username
            $_SESSION['claveAdmin']=$clave;
            header('location: ../index.php');
        }
    }elseif($access=="2"){
        $verUser=ejecutarSQL::consultar("select * from clientes where user_id='$id'");
        $UserC=mysqli_num_rows($verUser);
        $name=mysqli_fetch_array($verUser);
        if($UserC>0){
            $_SESSION['emailUser']=$email;
            $_SESSION['claveUser']=$clave;
            $_SESSION['nameUser']=$name['name'];
            $_SESSION['foto']=$name['foto'];
            header('location: ../index.php');
            ?><script>
            Push.create("Bienvenido a Compunorte",{
                body: "estimado cliente",
                icon: "../public/img/logo.png",
                timeout: 5000,
                onClick: function () {
                    window.location="../index.php";
                    this.close();
                }
            });
        </script><?php
        }  
    }else{?>
        <script>
            window.alert('Nombre o Contraseña invalidos');
            window.location.href='../index.php';
        </script><?php
    }