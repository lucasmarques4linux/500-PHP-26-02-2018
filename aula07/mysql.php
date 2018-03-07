<?php 

$host = "localhost";
$user = "lucas";
$pass = "@da4linux";
$db	  = "aula07";

$conexao = mysqli_connect($host,$user,$pass,$db);

// $query = "INSERT INTO posts (usuario_id,post) VALUES (4,'Escrevendo mais posts');"

// mysqli_query($conexao,$query);

$query = "SELECT * FROM posts WHERE usuario_id = 4";

$result = mysqli_query($conexao,$query);

echo "<pre>";
while ($row = mysqli_fetch_assoc($result)) {
	echo "Post: {$row['id']} <br>";
	echo $row['post'];
	echo "<hr>";
}
