<?php
require './constantes.php';

$conexion = pg_connect("
     host = localhost
     port = {DB_PORT}
     user = DB_USER
     password = DB_PASS
     dbname = DB_NAME
    ");

if(!$conexion){
    die("No se realizo la conexion con la base de datos".pg_errormessage());
}

$consulta = "SELECT *
             FROM entrenador";

$entrenadores = pg_query($conexion,$consulta);

while ($entrenador = pg_fetch_object($entrenadores)){
    echo "entra!!";
    echo $entrenador->nombre_entrenador."<br>";
}
?>
