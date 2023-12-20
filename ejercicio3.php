<?php
    header("Content-Type:application/json");

    $peso = 75;
    $estatura = 1.80;

    //validamos las variables
    if(!empty($peso) && !empty($estatura)) {
       

        //entregamos una respuesta
        $imc = $peso / ($estatura * $estatura);
        $imc = round($imc, 2);
        respuesta(200, "Tu IMC es de $imc", $imc);
    }else {
        respuesta(200,"Datos no válidos", null);
    }

    //función que crea la respuesta
    function respuesta($estado, $mensaje_estado, $datos) {
        header("HTTP/1.1 $estado $mensaje_estado");
        $respuesta['estado'] = $estado;
        $respuesta['mensaje_estado'] = $mensaje_estado;
        $respuesta['datos'] = $datos;

        $respuesta_json = json_encode($respuesta);

        echo $respuesta_json;
    }
?>