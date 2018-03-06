<?php 

echo "<pre>";
// header('Location: http://www.4linux.com.br');

// header('Content-type: application/xml');

// print_r($_SERVER);

// array_push($_ENV,['bd' => 'localhost']);
// print_r($_ENV);

// print_r($_GET);

// $_POST['nome'] = 'Lucas';


// print_r($_POST);
// 

// <form action="#" method="POST">
// 	<input type="text" name="idade">
// 	<input type="submit" value="OK">
// </form>

// session_start();

// $_SESSION['logado'] = true;

// if (!$_SESSION['logado']) {
// 	header("Location: http://localhost");
// }

// $_SESSION['MeuCarro'] = 'Fuscão Preto';
// echo  $_SESSION['MeuCarro'];

// setcookie("MeuCarro","Fusca");
// print_r($_COOKIE);
// echo $_COOKIE["MeuCarro"];

// print_r($_REQUEST);

// print_r($_POST);
// print_r($_FILES);

// 
// <form action="#" enctype="multipart/form-data" method="POST">
// 	<input type="file" name="arquivo">
// 	<input type="submit" value="OK">
// </form>

$GLOBALS['MeuCarro'] = "Fusca";

print_r($GLOBALS);