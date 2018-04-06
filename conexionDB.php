
<?php
//conexion nueva de base de datos
$mysql = new mysqli("localhost", "root", "", "mydb");
if ($mysql->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysql->connect_errno . ") " . $mysql->connect_error;
}
?>
