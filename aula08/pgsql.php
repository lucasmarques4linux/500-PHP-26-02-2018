<?php 

$host   = "localhost";
$port   = "5432";
$dbname = "aula08";
$user   = "lucas";
$pass   = "123";

$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

$con = pg_connect($con_string);

$sql = "INSERT INTO usuarios(usuario,senha) VALUES ('lucas','123')";

pg_query($con,$sql);  


$sql = "SELECT * FROM usuarios";

$result = pg_query($con,$sql);
$usuarios = pg_fetch_all($result);

echo "<ul>";
foreach ($usuarios as $usuario) {
	echo "<li> {$usuario['usuario']} </li>";
}
echo "</ul>";