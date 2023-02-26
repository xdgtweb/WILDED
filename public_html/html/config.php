<?php

$dsn = 'mysql:host=PMYSQL166.dns-servicio.com:3306;dbname=9741210_userswilded';
$username = 'wilded';
$password = 'dagarto333';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Error al conectar a la base de datos: ' . $e->getMessage();
    die();
}
?>
