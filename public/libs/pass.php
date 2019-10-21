<?php


class User 
{
    
    /**
     * Obtener una persona con correo Electronico
     * @param string $p_correoElectronico
     */
    public function getUserWithEmail($p_correoElectronico)
    {
        $sql = "SELECT idUsuario, usuario, contrasena, nombreCompleto, correoElectronico, estado, rol, codigo, fechaRecuperacion FROM tblUsuario WHERE correoElectronico = :p_correoElectronico LIMIT 1";
        $parameters = array(':p_correoElectronico' => $p_correoElectronico);

        try {

            $query = $this->db->prepare($sql);
            $query->execute($parameters);
            return ($query->rowcount() ? $query->fetch() : false);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;
        }
    }

    /**
     * Obtener una persona por el código generado para el cambio de contraseña
     * @param string $p_codigo
     */
    public function getUserWithCode($p_codigo)
    {
        $sql = "SELECT idUsuario, usuario, contrasena, nombreCompleto, correoElectronico, estado, rol, codigo, fechaRecuperacion FROM tblUsuario WHERE codigo = :p_codigo LIMIT 1";
        $parameters = array(':p_codigo' => $p_codigo);

        try {

            $query = $this->db->prepare($sql);
            $query->execute($parameters);
            return ($query->rowcount() ? $query->fetch() : false);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;
        }
    }

    /**
     * Cambiar la contraseña y actualizar el campo para verificar al entrar
     * @param string $p_correoElectronico Correo Electrónico
     * @param string $p_codigo Código que se enviara al correo electronico y luego se validara
     * @param string $p_fechaRecuperacion Fecha para validar que el código este valido (24 horas)
     */
    public function recoverPassword($p_correoElectronico, $p_codigo, $p_fechaRecuperacion)
    {
        $sql = "UPDATE tblUsuario SET codigo = :p_codigo, fechaRecuperacion = :p_fechaRecuperacion WHERE correoElectronico = :p_correoElectronico";
        $parameters = array(
            ':p_correoElectronico' => $p_correoElectronico,
            ':p_codigo' => $p_codigo,
            ':p_fechaRecuperacion' => $p_fechaRecuperacion
        );

        try {

            $query = $this->db->prepare($sql);
            return $query->execute($parameters);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;
        }
    }

    /**
     * Cambiar la contraseña desde la recuperación de la cuenta
     * @param string $p_idUsuario Id Usuario
     * @param string $p_contrasena Contraseña
     */
    public function updatePasswordFromRecover($p_idUsuario, $p_contrasena)
    {
        $sql = "UPDATE user SET password = :p_contrasena, token = NULL/*, fechaRecuperacion = NULL*/ WHERE idUsuario = :p_idUsuario";
        $parameters = array(
            ':p_contrasena' => $p_contrasena,
            ':p_idUsuario' => $p_idUsuario
        );

        try {

            $query = $this->db->prepare($sql);
            return $query->execute($parameters);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;
        }
    }

    /**
     * Cambiar la contraseña desde el perfil
     * @param string $p_idUsuario Id Usuario
     * @param string $p_contrasena Contraseña
     */
    public function updatePassword($p_idUsuario, $p_contrasena)
    {
        $sql = "UPDATE tblUsuario SET contrasena = :p_contrasena WHERE idUsuario = :p_idUsuario";
        $parameters = array(
            ':p_contrasena' => $p_contrasena,
            ':p_idUsuario' => $p_idUsuario
        );

        try {

            $query = $this->db->prepare($sql);
            return $query->execute($parameters);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;
        }
    }

    /**
     * Cambiar la contraseña desde el perfil
     * @param string $p_idUsuario Id Usuario
     * @param string $p_rol Rol
     */
    public function updateRole($p_idUsuario, $p_rol)
    {
        $sql = "UPDATE tblUsuario SET rol = :p_rol WHERE idUsuario = :p_idUsuario";
        $parameters = array(
            ':p_idUsuario' => $p_idUsuario,
            ':p_rol' => $p_contrasena
        );

        try {

            $query = $this->db->prepare($sql);
            return $query->execute($parameters);

        } catch (PDOException $e) {

            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;

        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'User', $e->getCode(), $e->getMessage());
            return false;
        }
    }

}
