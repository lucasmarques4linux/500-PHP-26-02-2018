<?php require_once 'topo.php' ?>
<h2>
	Inicio
</h2>

<form action="#" method="POST">
	<input type="text" name="login">
 	<input type="submit" value="OK">
</form>
<?php require_once 'rodape.php';

session_start();

$_SESSION['user'] = $_REQUEST['login'];
$_SESSION['logado'] = true; 
?>