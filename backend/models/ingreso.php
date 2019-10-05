<?php
require_once "conexion.php";
class IngresoModels{
    public function ingresoModel($datosModel,$tabla)
    {
        $sql="select intentos,pass,usuario  FROM `{$tabla}` WHERE `usuario` = :usuario and `pass` = :pass";
        $stmt= Conexion::conectar()->prepare($sql);//primero se conecta, y despues consulta con el prepare y lo guarda en stmt
        $stmt-> bindParam(":usuario",$datosModel["usuario"],PDO::PARAM_STR);//bindea los valores
        $stmt-> bindParam(":pass",$datosModel["pass"],PDO::PARAM_STR);
        $stmt->execute();
        $respuesta = $stmt->fetch(PDO::FETCH_ASSOC);//guarda en respuesta un array asociado

        $conexion = Conexion::conectar();
        $gsent = $conexion->prepare($sql);
        $gsent->bindParam(':usuario', $datosModel['usuario'], PDO::PARAM_INT);
        $gsent->bindParam(':pass', $datosModel['pass'], PDO::PARAM_STR, 12);
        $gsent->execute();

        $result = $stmt->fetchAll();








        return $respuesta;
        $stmt->close();//cierra conexion
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
