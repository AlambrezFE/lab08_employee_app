<?php
$contrasena = "AVNS_YgZM4oXLctQx9HroqJW";
$usuario = "doadmin";
$nombre_bd = "defaultdb";
$host = "db-mysql-nyc1-25476-do-user-14089120-0.b.db.ondigitalocean.com";
$port = 25060;

try {
    $bd = new PDO(
        'mysql:host='.$host.';port='.$port.';dbname='.$nombre_bd,   # ';sslmode=REQUIRED",
        $usuario,
        $contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (Exception $e) {
    echo "Problema con la conexión: " . $e->getMessage();
}
?>
