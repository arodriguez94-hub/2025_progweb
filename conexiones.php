<?php
$dbserver = 'mysql:dbname=basededatos1;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO ($dbserver, $user, $password);

}catch (PDOException $e) {

    echo 'la conexion a fallado: ' . $e->getmessage ();
}
?>