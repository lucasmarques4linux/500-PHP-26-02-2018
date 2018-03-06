<?php require_once 'topo.php' ?>
<?php 

session_start();

echo $_SESSION['user'];

if (!$_SESSION['logado']) {
	header("Location: http://localhost/500/aula06/ex/index.php");
}
 ?>
<h2>
	Sobre
</h2>
<?php //require_once 'rodape.php' ?>