
<?php
//conexion nueva de base de datos
$mysql = new mysqli("localhost", "root", "", "Pruebas_de_todo");
if ($mysql->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysql->connect_errno . ") " . $mysql->connect_error;
}
?>
