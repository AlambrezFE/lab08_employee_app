<?php
$connectionString = "mysql:host=db-mysql-nyc1-61857-do-user-14089120-0.b.db.ondigitalocean.com;port=25060;dbname=defaultdb;sslmode=REQUIRED";
$usuario = "doadmin";
$contrasena = "AVNS_XtsNKgJwDlH934mJ0-9";

try {
    $bd = new PDO($connectionString, $usuario, $contrasena, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (Exception $e) {
    echo "Problema con la conexión: " . $e->getMessage();
}
?>
