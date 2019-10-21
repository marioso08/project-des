<?php
/* Clase para ejecutar las consultas a la Base de Datos*/
class ejecutarSQL {
    public static function consultar($query) {
       include '../conexion/n.php';
        if (!$consul = mysqli_query($mysqli,$query )) {
            die(mysqli_error($mysqli).'Error en la consulta SQL ejecutada');
        }
        return $consul;
    }

}
/* Clase para hacer las consultas Insertar, Eliminar y Actualizar */
class consultasSQL{

    public static function InsertSQL($tabla, $campos, $valores) {
        if (!$consul = ejecutarSQL::consultar("insert into $tabla ($campos) VALUES($valores)")) {
            die("Ha ocurrido un error al insertar los datos en la tabla $tabla");
        }
        //$ultimo_id=$consul->insert_id;
        return $consul;
        //$ultimo_id = mysqli_insert_id($mysqli); 
        //return $ultimo_id;
        
    }
    public static function DeleteSQL($tabla, $condicion) {
        if (!$consul = ejecutarSQL::consultar("delete from $tabla where $condicion")) {
            die("Ha ocurrido un error al eliminar los registros en la tabla $tabla");
        }
        return $consul;
    }
    public static function UpdateSQL($tabla, $campos, $condicion) {
        if (!$consul = ejecutarSQL::consultar("update $tabla set $campos where $condicion")) {
            die("Ha ocurrido un error al actualizar los datos en la tabla $tabla");
        }
        return $consul;
    }
}