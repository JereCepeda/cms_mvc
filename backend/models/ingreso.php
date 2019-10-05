<?php
require_once "conexion.php";
class IngresoModels{
    public function ingresoModel($datosModel,$tabla)
    {
        $connexion = Conexion::conectar();
        $sql="select intentos,pass,usuario  FROM `{$tabla}` WHERE `usuario` = :usuario and `pass` = :pass";
        $stmt = $connexion->prepare($sql);
        foreach ($datosModel as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        if($stmt->execute()){
            $respuesta = $stmt->fetch(PDO::FETCH_ASSOC);//guarda en respuesta un array asociado
        }else{
            $respuesta = new Exception('error de inicio de sesion');
        }
        return $respuesta;

    }
    public function intentosModel($datosModel,$tabla)
    {
        $update="UPDATE $tabla SET intentos=:intentos WHERE usuario=:usuario";//consulta a hacer
        $stmt= Conexion::conectar()->prepare($update);//primero se conecta, y despues consulta con el prepare y lo guarda en stmt
        $stmt-> bindParam(":usuario",$datosModel["usuarioActual"],PDO::PARAM_STR);//bindea los valores
        $stmt-> bindParam(":intentos",$datosModel["actIntentos"],PDO::PARAM_INT);
        if($stmt->execute())
            {
            return "ok";
            }
        else{
            return "error";
            }
        $respuesta = $stmt->fetch();//guarda en respuesta un array asociado 
        return $respuesta;
        $stmt->close();//cierra conexion
    }
}
?>
