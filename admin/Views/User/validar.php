<?php 
require ('../../db/connection.php');
$db=Db::getConnect();
//require ('functions.php'); 



function limpiarDatos($datos){
    $datos = htmlspecialchars($datos);
    $datos = trim($datos);
    $datos = filter_var($datos, FILTER_SANITIZE_STRING);
    return $datos;
}
/*
function iniciarSession($table, $db){
    $statement = $db->prepare("SELECT * FROM $table");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}
//require_once('');*/
?>