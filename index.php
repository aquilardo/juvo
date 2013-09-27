<?php
    require './model/conexion.php';
    
    $db = new conexion();
    
    $consulta = "
        SELECT *
        FROM entrenador";
    
    $entrenadores = $db->consultar($consulta);
    
    while($entrenador = pg_fetch_object($entrenadores)){
        echo $entrenador->nombre_entrenador.' '.
             $entrenador->apellidos_entrenador.' '.
             $entrenador->email_entrenador.'<br>';
    }
?>