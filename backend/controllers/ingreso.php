<?php

class Ingreso{
    public function ingresoController ()
    {
        if(isset($_POST["usuarioIngreso"])&& isset($_POST["passwordIngreso"]))//si existen los campos del form
        {
            if( preg_match('/^[a-zA-Z0-9]*$/',$_POST["usuarioIngreso"])&&
                preg_match('/^[a-zA-Z0-9]*$/',$_POST["passwordIngreso"]))//Validacion lado servidor
                {  
                $datosController = array(   "usuario"=>$_POST["usuarioIngreso"],
                                            "pass"=>$_POST["passwordIngreso"]);//datosController primer valor a comparar
                $respuesta = IngresoModels::ingresoModel($datosController,"usuarios");//$respuesta es la conexion a la db, los parametros son el array y la tabla de la db
                var_dump($respuesta);
                $intentos=$respuesta["intentos"];
                $usuarioActual=$_POST["usuarioIngreso"];
                $maxintento=3;
                if($intentos<$maxintento)
                {
                    if( $respuesta["usuario"]==$_POST["usuarioIngreso"] &&
                        $respuesta["pass"]==$_POST["passwordIngreso"])//compara el resultado de la consulta a la db con lo ingresado
                        {
                            $intentos=0;
                            $datosIntentos= array("usuarioActual"=>$usuarioActual,"actIntentos"=>$intentos);
                            $respuestaIntentos = IngresoModels::intentosModel($datosIntentos,"usuarios");//es la conexion a la db, para actualizar los intentos
                            header("location:index.php?action=inicio"); 
                        }
                    else{
                            ++$intentos;
                            $datosIntentos = array("usuarioActual"=>$usuarioActual,"actIntentos"=>$intentos);
                            $respuestaIntentos = IngresoModels::intentosModel($datosIntentos,"usuarios");//es la conexion a la db, para actualizar los intentos
                            echo(' <div class="alert alert-danger" role="alert">
                            Error al Ingresar</div>');
                        }
                }
            }
        }
    }
}   