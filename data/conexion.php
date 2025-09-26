<?php
    $server = "localhost";
    $port = "5432"; // Puerto por defecto de postgresql
    $user = "postgres";
    $password = "postgres";
    $dbname = "ElCuatrocarnes";
    
    $conexion = pg_connect("host=$server port=$port dbname=$dbname user=$user password=$password");
?>