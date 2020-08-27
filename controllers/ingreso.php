<?php

class Ingreso {
    public $intentos = 0;

	public function ingresoController(){
		if(isset($_POST["usuarioIngreso"])){
            #$encriptar = crypt($_POST["passwordIngreso"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            $datosController = array("usuario"=>$_POST["usuarioIngreso"],
                                    "password"=>$_POST["passwordIngreso"]);

            $respuesta = Datos::ingresoModel($datosController, "usuarios");

            



            $usuarioActual = $_POST["usuarioIngreso"];
            $maximoIntentos = 2;
            
            if($this->intentos < $maximoIntentos){

                if($respuesta["email"] == $_POST["usuarioIngreso"] && password_verify($_POST["passwordIngreso"], $respuesta["password"]) && $respuesta["activo"] === "s"){


                    $this ->intentos = 0;

                    $datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$this->intentos);

                    //$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");

                    session_start();

                    $_SESSION["validar"] = true;
                    $_SESSION["email"] = $respuesta["email"];
                    $_SESSION["nombre"] ="".$respuesta["nombres"]." ".$respuesta["apellidos"]."";
                    $_SESSION["rol"] = $respuesta["rol"];
                    $_SESSION["sistema"] = $respuesta["sistema"];

                    print_r($_SESSION);

                    header("location:views/modules/inicio.php?action=home");

                }

                else{

                    // ++$this->intentos;
                    // No tenemos nada relacionado con los intentos en la tabla. Todavia
                    // $datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

                    // $respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");

                    echo '<div class="alert alert-danger">Verifique Usuario/Password</div>';

                }

            } else {
                    // Nada de intentos en la base de datos 
                    $this->intentos = 0;

                    $datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$this->intentos);

                    $respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "usuarios");

                    echo '<div class="alert alert-danger">Ha fallado 3 veces, demuestre que no es un robot</div>';

            }
		}
	}

}