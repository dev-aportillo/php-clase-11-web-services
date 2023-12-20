<?php
    #array a json
    $mi_lista = array("Redes 1", "Redes 2", "Fundamentos de la Programacion", "POO", "Java");

    $mi_json = json_encode($mi_lista);

    echo $mi_json;
?>