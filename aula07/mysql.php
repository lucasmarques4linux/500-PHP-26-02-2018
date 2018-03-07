<?php 

$host = "localhost";
$user = "lucas";
$pass = "@da4linux";
$db	  = "aula07";

$conexao = mysqli_connect($host,$user,$pass,$db);

mysqli_query($conexao,"INSERT INTO posts (usuario_id,post) VALUES (4,'Escrevendo mais posts');");