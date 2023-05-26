<?php
$contrasena = "AVNS_XtsNKgJwDlH934mJ0-9";
$usuario = "doadmin";
$nombre_bd = "defaultdb";
$host = "db-mysql-nyc1-61857-do-user-14089120-0.b.db.ondigitalocean.com";
$port = 25060;

try {
    $bd = new PDO(
        "mysql:host=$host;port=$port;dbname=$nombre_bd;sslmode=REQUIRED",
        $usuario,
        $contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (Exception $e) {
    echo "Problema con la conexión: " . $e->getMessage();
}
?>
